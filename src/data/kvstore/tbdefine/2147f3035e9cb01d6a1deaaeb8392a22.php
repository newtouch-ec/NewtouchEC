<?php exit(); ?>a:3:{s:5:"value";a:7:{s:7:"columns";a:7:{s:2:"id";a:6:{s:4:"type";s:12:"mediumint(8)";s:5:"extra";s:14:"auto_increment";s:4:"pkey";s:4:"true";s:5:"label";s:6:"序号";s:7:"in_list";b:1;s:8:"realtype";s:12:"mediumint(8)";}s:3:"gid";a:8:{s:4:"type";s:15:"table:goods@b2c";s:8:"required";b:1;s:5:"label";s:18:"活动商品名称";s:8:"editable";b:0;s:6:"locked";i:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:3:"aid";a:8:{s:4:"type";s:23:"table:activity@groupbuy";s:8:"required";b:1;s:5:"label";s:12:"所属活动";s:8:"editable";b:0;s:6:"locked";i:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:12:"mediumint(8)";}s:9:"member_id";a:8:{s:4:"type";s:17:"table:account@pam";s:8:"required";b:1;s:5:"label";s:6:"买家";s:8:"editable";b:0;s:6:"locked";i:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:4:"nums";a:8:{s:4:"type";s:12:"mediumint(8)";s:5:"label";s:12:"购买数量";s:7:"default";s:1:"0";s:8:"editable";b:0;s:10:"filtertype";s:6:"number";s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:12:"mediumint(8)";}s:8:"order_id";a:7:{s:4:"type";s:11:"varchar(50)";s:8:"required";b:1;s:5:"label";s:12:"所属订单";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:11:"varchar(50)";}s:9:"effective";a:5:{s:4:"type";s:4:"bool";s:5:"label";s:12:"是否有效";s:7:"default";s:4:"true";s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}}s:8:"idColumn";s:2:"id";s:7:"in_list";a:6:{i:0;s:2:"id";i:1;s:3:"gid";i:2;s:3:"aid";i:3;s:9:"member_id";i:4;s:4:"nums";i:5;s:8:"order_id";}s:5:"pkeys";a:1:{s:2:"id";s:2:"id";}s:15:"default_in_list";a:5:{i:0;s:3:"gid";i:1;s:3:"aid";i:2;s:9:"member_id";i:3;s:4:"nums";i:4;s:8:"order_id";}s:5:"index";a:3:{s:9:"idx_c_gid";a:1:{s:7:"columns";a:1:{i:0;s:3:"gid";}}s:9:"idx_c_aid";a:1:{s:7:"columns";a:1:{i:0;s:3:"aid";}}s:15:"idx_c_member_id";a:1:{s:7:"columns";a:1:{i:0;s:9:"member_id";}}}s:10:"textColumn";s:3:"gid";}s:3:"ttl";i:0;s:8:"dateline";i:1528801592;}