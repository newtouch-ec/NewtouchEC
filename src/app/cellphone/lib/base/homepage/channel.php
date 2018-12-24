
<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
class  cellphone_base_homepage_channel extends cellphone_cellphone{
    public function __construct($app){
        parent::__construct();
        $this->app = $app;
    }
//  获取首页频道及相关分类，频道轮播图,品牌，商品 列表
   function getlist(){
        $params = $this->params;
        $must_params = array(
        );
        $this->check_params($must_params);
		$returndata=array();
        $channeltype = app::get('cellphone')->model('channeltype');
	    $type = $channeltype->getList('type_id,type_name,cate_id,d_order');

		foreach($type as $key=>&$val){
			//频道轮播图
			$returndata[$key]['channel_id'] = $val['type_id'];
			$returndata[$key]['channel_name'] = $val['type_name'];
			$returndata[$key]['cate_id'] = $val['cate_id'];
			$returndata[$key]['d_order'] = $val['d_order'];

			//echo('<pre>');print_r($returndata);exit();
			$channelpic = $this->app->model('channelpic');
			$data_pic = $channelpic->getList('image_id',array('type_id'=>$val['type_id']));
			
			foreach($data_pic as $data_key=>&$data_val){
				$data_pic[$data_key]['image_id'] = $this->get_img_url($data_val['image_id'],$picSize);
			}
			$returndata[$key]['pic'] = $data_pic;

			//品牌
			$mdl_brand = app::get('cellphone')->model('channelbrand');
			$sSql = "SELECT
						 a.brand_id,a.image_id,b.brand_logo,b.brand_name
					 FROM
						 sdb_cellphone_channelbrand AS a
					 LEFT JOIN sdb_b2c_brand AS b ON a.brand_id = b.brand_id
					 WHERE
						 a.type_id = ".$val['type_id']." ORDER BY a.d_order";

			$brandData = $mdl_brand->db->select($sSql);
			foreach($brandData as $data_key=>&$data_val){
				$brandData[$data_key]['image_id'] = $this->get_img_url($data_val['image_id'],$picSize);
				$brandData[$data_key]['brand_logo'] = $this->get_img_url($data_val['brand_logo'],$picSize);
			}

			$returndata[$key]['brand'] = $brandData;

			//商品
			$mdl_goods = app::get('cellphone')->model('channelgoods');
			$sSql = "SELECT
						 a.goods_id,b.name as goods_name,b.image_default_id as image_id
					 FROM
						 sdb_cellphone_channelgoods AS a
					 LEFT JOIN sdb_b2c_goods AS b ON a.goods_id = b.goods_id
					 WHERE
						 a.type_id = ".$val['type_id']." ORDER BY a.d_order";

			$goodsData = $mdl_goods->db->select($sSql);
			foreach($goodsData as $data_key=>&$data_val){
				$goodsData[$data_key]['image_id'] = $this->get_img_url($data_val['image_id'],$picSize);
			}
			$returndata[$key]['goods'] = $goodsData;
		}

		//echo('<pre>');print_r($returndata);exit();

        if(!$returndata){
            $this->send(true,null,app::get('cellphone')->_('没有数据'));
        }else{
            $this->send(true,$returndata,app::get('cellphone')->_('频道数据'));
        }
   }
   
}