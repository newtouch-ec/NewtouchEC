<?php
class b2c_goods_description_selllog{
    function __construct( &$app ) {
        $this->app = $app;
    }

    function show( $gid, &$aGoods=null, $custom_view=""){
        $render = $this->app->render();
        if( !$aGoods ){
            $objProduct = $this->app->model('products');
            $sellLogList = $objProduct->getGoodsSellLogList($gid,0,$this->app->getConf('selllog.display.listnum'));
            $sellLogSetting['display'] = array(
                'switch'=>$this->app->getConf('selllog.display.switch') ,
                'limit'=>$this->app->getConf('selllog.display.limit') ,
                'listnum'=>$this->app->getConf('selllog.display.listnum')
            );
            $render->pagedata['sellLog'] = $sellLogSetting;
            $render->pagedata['sellLogList'] = $sellLogList;
        }
        $aGoods['goods_id'] = $gid;
        
        for($i=0;$i<$sellLogList['page'];$i++){
            $render->pagedata['sellLog']['page'][] = $i;
        }
        $oSellLog = $this->app->model('sell_logs');

        $sum = $oSellLog->db->selectrow('select sum(number) as _sum from sdb_b2c_sell_logs where goods_id='.$gid);

        $render->pagedata['sellLog']['all'] = $sum['_sum'];
        $aData = kernel::single('b2c_frontpage')->get_current_member();
        if(!$aData['member_id']){
            $render->pagedata['login'] = 'nologin';
        }
        

        $render->pagedata['goods'] = $aGoods;
		$file = $custom_view?$custom_view:"site/product/description/sellloglist.html";
		if($custom_view){
			return $render->fetch($file,'',true);
        }
        return $render->fetch($file);
    }

}

