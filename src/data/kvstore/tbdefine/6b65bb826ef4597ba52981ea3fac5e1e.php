<?php exit(); ?>a:3:{s:5:"value";a:8:{s:7:"columns";a:7:{s:2:"id";a:11:{s:4:"type";s:6:"number";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"label";s:2:"id";s:5:"width";i:150;s:7:"comment";s:2:"id";s:8:"editable";b:0;s:7:"in_list";b:0;s:15:"default_in_list";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:8:"act_type";a:8:{s:4:"type";s:11:"varchar(50)";s:5:"label";s:12:"活动类型";s:5:"width";i:150;s:7:"comment";s:12:"活动类型";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:11:"varchar(50)";}s:8:"order_id";a:4:{s:4:"type";s:16:"table:orders@b2c";s:8:"required";b:0;s:8:"editable";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:8:"store_id";a:8:{s:4:"type";s:17:"table:storemanger";s:5:"label";s:8:"店铺id";s:5:"width";i:150;s:7:"comment";s:8:"店铺id";s:8:"editable";b:0;s:7:"in_list";b:0;s:15:"default_in_list";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:10:"start_time";a:9:{s:4:"type";s:4:"time";s:5:"label";s:12:"开始时间";s:5:"width";i:150;s:8:"required";b:1;s:7:"default";i:0;s:8:"editable";b:0;s:7:"in_list";b:0;s:15:"default_in_list";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:8:"end_time";a:9:{s:4:"type";s:4:"time";s:5:"label";s:12:"终止时间";s:5:"width";i:150;s:8:"required";b:1;s:7:"default";i:0;s:8:"editable";b:0;s:7:"in_list";b:0;s:15:"default_in_list";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:4:"desc";a:5:{s:4:"type";s:8:"longtext";s:7:"comment";s:6:"说明";s:8:"editable";b:0;s:5:"label";s:6:"说明";s:8:"realtype";s:8:"longtext";}}s:7:"comment";s:21:"商家禁止活动表";s:8:"idColumn";s:2:"id";s:5:"pkeys";a:1:{s:2:"id";s:2:"id";}s:7:"in_list";a:1:{i:0;s:8:"act_type";}s:15:"default_in_list";a:1:{i:0;s:8:"act_type";}s:5:"index";a:2:{s:14:"idx_c_order_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"order_id";}}s:14:"idx_c_store_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"store_id";}}}s:10:"textColumn";s:8:"act_type";}s:8:"dateline";s:10:"1430116938";s:3:"ttl";s:1:"0";}