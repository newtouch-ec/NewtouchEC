<?php exit(); ?>a:3:{s:5:"value";a:9:{s:7:"columns";a:11:{s:8:"items_id";a:10:{s:4:"type";s:15:"bigint unsigned";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"label";s:2:"ID";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:8:"goods_id";a:8:{s:4:"type";s:11:"table:goods";s:7:"default";i:0;s:8:"required";b:1;s:5:"label";s:8:"商品ID";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:10:"product_id";a:9:{s:4:"type";s:14:"table:products";s:7:"default";i:0;s:8:"required";b:1;s:5:"label";s:12:"货品编号";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:7:"card_id";a:9:{s:4:"type";s:11:"varchar(20)";s:7:"default";i:0;s:8:"required";b:1;s:5:"label";s:6:"卡号";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(20)";}s:8:"card_psw";a:9:{s:4:"type";s:11:"varchar(20)";s:7:"default";i:0;s:8:"required";b:1;s:5:"label";s:6:"密码";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(20)";}s:8:"store_id";a:8:{s:4:"type";s:26:"table:storemanger@business";s:8:"required";b:0;s:5:"label";s:12:"店铺名称";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:8:"order_id";a:8:{s:4:"type";s:12:"table:orders";s:8:"required";b:0;s:5:"label";s:15:"使用订单号";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:7:"is_used";a:9:{s:4:"type";a:2:{i:1;s:9:"未售出";i:2;s:9:"已售出";}s:7:"default";s:1:"1";s:8:"required";b:1;s:7:"comment";s:12:"是否发放";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:12:"是否发放";s:8:"realtype";s:13:"enum('1','2')";}s:6:"random";a:5:{s:4:"type";s:11:"varchar(20)";s:5:"width";i:110;s:7:"comment";s:24:"卡号密码生成的key";s:8:"editable";b:0;s:8:"realtype";s:11:"varchar(20)";}s:9:"send_time";a:6:{s:4:"type";s:4:"time";s:8:"required";b:0;s:5:"label";s:12:"发放时间";s:5:"width";i:110;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:3:"key";a:5:{s:4:"type";s:11:"varchar(20)";s:5:"width";i:110;s:7:"comment";s:24:"卡号密码生成的key";s:8:"editable";b:0;s:8:"realtype";s:11:"varchar(20)";}}s:6:"engine";s:6:"innodb";s:7:"version";s:13:"$Rev: 46974 $";s:8:"idColumn";s:8:"items_id";s:5:"pkeys";a:1:{s:8:"items_id";s:8:"items_id";}s:7:"in_list";a:4:{i:0;s:8:"goods_id";i:1;s:8:"store_id";i:2;s:8:"order_id";i:3;s:7:"is_used";}s:5:"index";a:4:{s:14:"idx_c_goods_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"goods_id";}}s:16:"idx_c_product_id";a:1:{s:7:"columns";a:1:{i:0;s:10:"product_id";}}s:14:"idx_c_store_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"store_id";}}s:14:"idx_c_order_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"order_id";}}}s:15:"default_in_list";a:3:{i:0;s:8:"store_id";i:1;s:8:"order_id";i:2;s:7:"is_used";}s:10:"textColumn";s:8:"goods_id";}s:8:"dateline";s:10:"1430116935";s:3:"ttl";s:1:"0";}