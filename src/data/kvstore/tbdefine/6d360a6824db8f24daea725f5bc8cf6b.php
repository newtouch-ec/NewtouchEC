<?php exit(); ?>a:3:{s:5:"value";a:8:{s:7:"columns";a:9:{s:2:"id";a:10:{s:4:"type";s:15:"bigint unsigned";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"label";s:2:"ID";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:8:"order_id";a:10:{s:4:"type";s:16:"table:orders@b2c";s:8:"required";b:1;s:7:"default";i:0;s:5:"label";s:15:"应用订单号";s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:7:"cpns_id";a:9:{s:4:"type";s:6:"number";s:8:"required";b:1;s:7:"default";i:0;s:5:"label";s:17:"优惠券方案ID";s:8:"editable";b:0;s:7:"in_list";b:1;s:10:"searchtype";s:6:"tequal";s:10:"filtertype";s:3:"yes";s:8:"realtype";s:21:"mediumint(8) unsigned";}s:9:"cpns_name";a:8:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:21:"优惠券方案名称";s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:12:"varchar(255)";}s:7:"usetime";a:9:{s:4:"type";s:4:"time";s:5:"label";s:12:"使用时间";s:5:"width";i:110;s:8:"editable";b:0;s:10:"filtertype";s:4:"time";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:12:"total_amount";a:8:{s:4:"type";s:5:"money";s:7:"default";s:1:"0";s:8:"required";b:1;s:8:"editable";b:0;s:5:"label";s:12:"订单金额";s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:9:"member_id";a:10:{s:4:"type";s:17:"table:account@pam";s:5:"label";s:9:"使用者";s:5:"width";i:110;s:10:"searchtype";s:3:"has";s:10:"filtertype";b:0;s:13:"filterdefault";s:4:"true";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:9:"memc_code";a:8:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:24:"使用的优惠券号码";s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:12:"varchar(255)";}s:9:"cpns_type";a:5:{s:4:"type";a:3:{i:0;i:0;i:1;i:1;i:2;i:2;}s:5:"label";s:15:"优惠券类型";s:7:"comment";s:47:"优惠券类型0全局 1用户 2外部优惠券";s:8:"editable";b:0;s:8:"realtype";s:17:"enum('0','1','2')";}}s:7:"comment";s:21:"优惠券使用记录";s:5:"index";a:5:{s:10:"ind_cpnsid";a:1:{s:7:"columns";a:1:{i:0;s:7:"cpns_id";}}s:12:"ind_cpnscode";a:1:{s:7:"columns";a:1:{i:0;s:9:"memc_code";}}s:12:"ind_cpnsname";a:1:{s:7:"columns";a:1:{i:0;s:9:"cpns_name";}}s:14:"idx_c_order_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"order_id";}}s:15:"idx_c_member_id";a:1:{s:7:"columns";a:1:{i:0;s:9:"member_id";}}}s:8:"idColumn";s:2:"id";s:5:"pkeys";a:1:{s:2:"id";s:2:"id";}s:7:"in_list";a:7:{i:0;s:8:"order_id";i:1;s:7:"cpns_id";i:2;s:9:"cpns_name";i:3;s:7:"usetime";i:4;s:12:"total_amount";i:5;s:9:"member_id";i:6;s:9:"memc_code";}s:15:"default_in_list";a:6:{i:0;s:8:"order_id";i:1;s:9:"cpns_name";i:2;s:7:"usetime";i:3;s:12:"total_amount";i:4;s:9:"member_id";i:5;s:9:"memc_code";}s:10:"textColumn";s:8:"order_id";}s:3:"ttl";i:0;s:8:"dateline";i:1528801590;}