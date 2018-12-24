<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 

class business_mdl_settlement extends dbeav_model{
	 
	 var $defaultOrder = 'create_time desc';

     function __construct($app){
        parent::__construct($app);
     }
     
     //创建新的结算单号
     public function GetBillNo(){
	    $i = rand(0,999);
        do{
            if(999==$i){
                $i=0;
            }
            $i++;
            $bill_id = date('ymdHis').str_pad($i,3,'0',STR_PAD_LEFT);
            $row = $this->db->selectrow('SELECT settlement_no from sdb_business_settlement where settlement_no ='.$bill_id);
        }while($row);
        return $bill_id;
     }

	 function get_batch_id(){
		$i = rand(0,99999);
        do{
            if(99999==$i){
                $i=0;
            }
            $i++;
            $batch_id = date('ymdH').str_pad($i,5,'0',STR_PAD_LEFT);
            $row = $this->db->selectrow('SELECT settlement_no from sdb_business_settlement where batch_id ='.$batch_id);
        }while($row);
        return $batch_id;
	}
}
