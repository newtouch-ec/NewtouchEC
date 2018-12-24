
<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
class  cellphone_base_homepage_brand extends cellphone_cellphone{
	var $picSize = 'cs';
	
    public function __construct($app){
        parent::__construct();
        $this->app = $app;
    }
    
	//  获得热门品牌列表
   function getlist(){
        $params = $this->params;
        $must_params = array(
        );
        
        $this->check_params($must_params);
        $mdl_brand = app::get('cellphone')->model('brand');
        $sSql = "SELECT
                     c.brand_id,c.image_id,b.brand_name,b.brand_logo
                 FROM  sdb_cellphone_brand AS c
                 LEFT JOIN  sdb_b2c_brand AS b    ON c.brand_id = b.brand_id
        		 ORDER BY c.d_order";

        $aData = $mdl_brand->db->select($sSql);

		if($aData){
			foreach($aData as $key=>&$val)
			{
		 		$val['image_id'] = $this->get_img_url($val['image_id'],$picSize);
		 		$val['brand_logo'] = $this->get_img_url($val['brand_logo'],$picSize);
		 	}
			
			$this->send(true, $aData, app::get('b2c')->_('success'));
        }else{
        	$this->send(false,$aData, app::get('b2c')->_('failed'));
        }

   }

   
}