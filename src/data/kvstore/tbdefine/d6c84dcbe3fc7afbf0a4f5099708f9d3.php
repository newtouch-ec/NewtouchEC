<?php exit(); ?>a:3:{s:5:"value";a:8:{s:7:"columns";a:15:{s:12:"violation_id";a:10:{s:4:"type";s:15:"bigint unsigned";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"label";s:2:"ID";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:6:"cat_id";a:11:{s:4:"type";s:27:"table:violationcat@business";s:5:"label";s:12:"违规类型";s:8:"required";b:1;s:7:"default";i:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"editable";b:0;s:10:"searchtype";s:3:"has";s:10:"filtertype";s:6:"normal";s:13:"filterdefault";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:11:"score_value";a:10:{s:4:"type";s:12:"int unsigned";s:5:"label";s:12:"扣分节点";s:7:"default";i:0;s:8:"required";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"editable";b:0;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:10:"goods_days";a:10:{s:4:"type";s:12:"int unsigned";s:5:"label";s:24:"限制发布商品天数";s:7:"default";i:0;s:8:"required";b:1;s:7:"in_list";b:1;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:15:"default_in_list";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:14:"goodsdown_days";a:10:{s:4:"type";s:12:"int unsigned";s:5:"label";s:33:"下架店铺内所有商品天数";s:7:"default";i:0;s:8:"required";b:1;s:7:"in_list";b:1;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:15:"default_in_list";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:9:"news_days";a:10:{s:4:"type";s:12:"int unsigned";s:5:"label";s:18:"商品降权天数";s:7:"default";i:0;s:8:"required";b:1;s:7:"in_list";b:1;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:15:"default_in_list";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:15:"news_days_value";a:10:{s:4:"type";s:12:"int unsigned";s:5:"label";s:15:"商品降权值";s:7:"default";i:100;s:8:"required";b:1;s:7:"in_list";b:1;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:15:"default_in_list";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:10:"store_days";a:10:{s:4:"type";s:12:"int unsigned";s:5:"label";s:18:"店铺屏蔽天数";s:7:"default";i:0;s:8:"required";b:1;s:7:"in_list";b:1;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:15:"default_in_list";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:14:"storedown_days";a:10:{s:4:"type";s:12:"int unsigned";s:5:"label";s:18:"关闭店铺天数";s:7:"default";i:0;s:8:"required";b:1;s:7:"in_list";b:1;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:15:"default_in_list";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:10:"sales_days";a:10:{s:4:"type";s:12:"int unsigned";s:5:"label";s:30:"限制参加营销活动天数";s:7:"default";i:0;s:8:"required";b:1;s:7:"in_list";b:1;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:15:"default_in_list";b:1;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:13:"earnest_money";a:11:{s:4:"type";s:5:"money";s:7:"default";s:1:"0";s:8:"required";b:0;s:5:"label";s:15:"支付违约金";s:5:"width";i:75;s:8:"editable";b:0;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:7:"orderby";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:8:"disabled";a:4:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}s:11:"last_modify";a:7:{s:4:"type";s:11:"last_modify";s:5:"label";s:12:"更新时间";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:7:"d_order";a:9:{s:4:"type";s:6:"number";s:7:"default";i:30;s:8:"required";b:1;s:5:"label";s:6:"排序";s:5:"width";i:30;s:8:"editable";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:6:"remark";a:6:{s:5:"label";s:6:"备注";s:4:"type";s:4:"text";s:5:"width";i:75;s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:8:"realtype";s:4:"text";}}s:7:"version";s:13:"$Rev: 40654 $";s:8:"idColumn";s:12:"violation_id";s:5:"pkeys";a:1:{s:12:"violation_id";s:12:"violation_id";}s:7:"in_list";a:13:{i:0;s:6:"cat_id";i:1;s:11:"score_value";i:2;s:10:"goods_days";i:3;s:14:"goodsdown_days";i:4;s:9:"news_days";i:5;s:15:"news_days_value";i:6;s:10:"store_days";i:7;s:14:"storedown_days";i:8;s:10:"sales_days";i:9;s:13:"earnest_money";i:10;s:11:"last_modify";i:11;s:7:"d_order";i:12;s:6:"remark";}s:15:"default_in_list";a:9:{i:0;s:6:"cat_id";i:1;s:11:"score_value";i:2;s:10:"goods_days";i:3;s:14:"goodsdown_days";i:4;s:9:"news_days";i:5;s:15:"news_days_value";i:6;s:10:"store_days";i:7;s:14:"storedown_days";i:8;s:10:"sales_days";}s:5:"index";a:1:{s:12:"idx_c_cat_id";a:1:{s:7:"columns";a:1:{i:0;s:6:"cat_id";}}}s:10:"textColumn";s:6:"cat_id";}s:8:"dateline";s:10:"1430116937";s:3:"ttl";s:1:"0";}