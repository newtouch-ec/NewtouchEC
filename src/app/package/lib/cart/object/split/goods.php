<?php

 
class package_cart_object_split_goods
{
    public function __construct(&$app) {
         $this->app=$app;
    }
    public function get_dlytype(&$aResult){
        if(empty($aResult['object']['package']))return;
        $store_goods_id=array();
        foreach($aResult['object']['package'] as $trkey => $trval){
            $store_goods_id[$trval['params']['id']]=$trval['store_id'];
        }
        $mdl_goods_dly = app::get('b2c')->model('goods_dly');
        $goods_dly=$mdl_goods_dly->getList('*',array('goods'=>array_keys($store_goods_id),'manual'=>'package'));
        $temp_goods_dly=array();
        $temp_store_id=array();
        foreach($goods_dly as $key=>$tpl){
            //删除存在快递模板的商品所对应的店铺
            if(array_key_exists($tpl['goods_id'],$store_goods_id)){
                unset($store_goods_id[$tpl['goods_id']]);
            }
            $temp_goods_dly[$tpl['goods_id']][]=$tpl['dly_id'];
        }
        //取出所有未设定快递模版的商品所对应的店铺的快递模板。
        $store_default_dly=array();
        if(!empty($store_goods_id)){
            $temp_store_id=array_values($store_goods_id);
            $mdl_dlytype = app::get('b2c')->model('dlytype');
            $store_dly_list=$mdl_dlytype->getList('dt_id,store_id',array('store_id'=>$temp_store_id,'dt_status'=>'1'));
            foreach($store_dly_list as $key=>$store_dly){
                $store_default_dly[$store_dly['store_id']][]=$store_dly['dt_id'];
            }
        }
        $dlytype_id=array();
        foreach ($aResult['object']['package'] as $key => &$value) {
            //取的商品对应的模板信息
            if($temp_goods_dly[$value['params']['id']]){//商品设定了配送模板
               $value['dly_template']=$temp_goods_dly[$value['params']['id']];
            }else{//未设定取店铺全部。
               $value['dly_template']=$store_default_dly[$value['store_id']];
            }
            $dlytype_id=array_merge($dlytype_id,$value['dly_template']);
        }
        
        return $dlytype_id;
    }
    
    public function split_cart_object(&$sdf_cart,&$split_dly,$valite_dt_id=array(),&$index){
        if(empty($sdf_cart['object']['package'])) return;
        foreach ((array)$sdf_cart['object']['package'] as $key =>$value) {
            //如果某商品的配送方式为空。则该商品不支持该地区配送。
            $tmp_index=0;
            $t_dly=array();
            foreach($value['dly_template'] as $dkey=>$id){
                //如果不支持该地区配送，则删除该配送方式
                if(!in_array($id,$valite_dt_id)){
                    unset($sdf_cart['object']['package'][$key]['dly_template'][$dkey]);
                    unset($value['dly_template'][$dkey]);
                }
            }
            if(!empty($value['dly_template'])){
                if(empty($split_dly[$value['store_id']]['slips'][$index])){
                    $t_dly=$value['dly_template'];
                }else{
                   $has_uintersect=false;
                   foreach($split_dly[$value['store_id']]['slips'] as $i=>$v){
                       if($i!==0){
                           $t_dly=array_uintersect($v['dly_type'], $value['dly_template'], "strcasecmp");
                           if($t_dly){
                               $has_uintersect=true;
                               $index=$i;
                               break;
                           }
                       }
                    }
                    if($has_uintersect==false){
                        $index--;
                        $t_dly=$value['dly_template'];
                    }
                }
                $tmp_index=$index;
            }
            $slip=$split_dly[$value['store_id']]['slips'][$tmp_index];
            $slip['object']['package']['index'][]=$key;
            $slip['object']['package']['obj_ident'][$key]=$value['obj_ident'];
            $slip['dly_type']=$t_dly;

            $slip['subtotal_consume_score']+=$value['subtotal_consume_score'];
            $slip['subtotal_gain_score']+=$value['subtotal_gain_score'];
            $slip['subtotal']+=$value['subtotal'];
            $slip['subtotal_prefilter_after']+=$value['subtotal_prefilter_after'];
            $slip['subtotal_price']+=$value['subtotal_price'];
            
            //如果不是卖家包邮
            $slip['subtotal_weight']+=$value['package']['freight_bear']=='business'?0:$value['subtotal_weight'];
            //订单折扣优惠。
            //$slip['discount_amount_order']+=$value['discount_amount_order'];
            $slip['discount_amount']+=$value['discount_amount'];
            $slip['discount_amount_prefilter']+=$value['discount_amount_prefilter'];
            //商家是否免运费。
            $slip['store_free_shipping']+=$value['package']['freight_bear']=='business'?0:1;             
            $split_dly[$value['store_id']]['slips'][$tmp_index]=$slip;
        }
    }
}
