<?php
$db['channeltype']=
    array (
       'columns' =>
       array (
          'type_id' =>
          array (
             'type' => 'number',
             'required' => true,
             'extra' => 'auto_increment',
             'pkey' => true,
             'label'=>'序号',
             'filtertype'=>true,
              'searchtype'=>true,
             ),
          'type_name' =>
          array (
             'type' => 'varchar(100)',
             'in_list'=>true,
             'is_title'=>true,
             'default_in_list'=>true,
             'label'=>'频道名称',
             'filtertype'=>true,
             'is_title'=>true,
             'searchtype'=>true,
             'searchtype' => 'has',
             'required' => true,
             ),
           'cate_id'=>
		    array (
		       'type' => 'table:category@cellphone',
		       'label' => app::get('b2c')->_('分类名'),
		       'width' => 110,
			   'editable' => true,
		      'filtertype' => 'yes',
		      'filterdefault' => true,
		      'in_list' => true,
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