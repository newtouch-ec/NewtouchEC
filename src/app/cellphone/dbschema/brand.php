<?php
$db['brand']=
    array (
       'columns' =>
       array (
          'id' =>
          array (
             'type' => 'number',
             'required' => true,
             'extra' => 'auto_increment',
             'pkey' => true,
             'label'=>'序号',
             'filtertype'=>true,
              'searchtype'=>true,
             ),
    	  'brand_id'=>
	      array (
	       'type' => 'table:brand@b2c',
	       'label' => app::get('b2c')->_('品牌'),
	       'width' => 110,
		   'editable' => true,
	      'filtertype' => 'yes',
	      'filterdefault' => true,
	      'in_list' => true,
	       ),

          'image_id' =>
          array (
             'type' => 'varchar(100)',
             'in_list'=>false,
             'default_in_list'=>false,
             'label'=>app::get('b2c')->_('图片'),
             ),
          
	      'd_order' =>
	       array (
	      'type' => 'number',
	      'default' => 1,
	      'required' => true,
	      'label' => app::get('b2c')->_('排序'),
	      'width' => 50,
	      'editable' => true,
	      'in_list' => true,
	      'default_in_list' => false,
	        ),


          ),
       );


?>