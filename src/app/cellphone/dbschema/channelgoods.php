<?php
//频道页商品
$db['channelgoods'] = array(
'columns' =>
  array (
   'id' =>     
   array (
      'type' => 'number',
      'required' => true,
      'pkey' => true,
      'extra' => 'auto_increment',
      'label' => app::get('cellphone')->_('序号'),
      'comment' => app::get('cellphone')->_('序号'),
      'editable' => false,
      'in_list' => false,
      'default_in_list' => false,
    ),
  'goods_id'=>
     array (
       'type' => 'table:goods@b2c',
       'label' => app::get('b2c')->_('商品名'),
       'width' => 220,
	   'editable' => true,
      'filtertype' => 'yes',
      'filterdefault' => true,
      'in_list' => true,
  ),
  /*'image_id' =>
          array (
             'type' => 'varchar(100)',
             'in_list'=>false,
             'default_in_list'=>false,
             'label'=>'图片',
			 
			 ),*/
 'd_order' =>
    array (
      'type' => 'number',
      'default' => 1,
      'required' => true,
      'label' => app::get('b2c')->_('排序'),
      'width' => 50,
      'editable' => true,
      'in_list' => true,
      'default_in_list' => true,
    ),
    'type_id' =>
    array (
      'type' =>'table:channeltype',
      'label' => '频道',
      'width' => 100,
	  'required' => true,
      'filtertype' => 'yes',
      'in_list' => true,
      'default_in_list' => true,

    ),
  
  ),

);


