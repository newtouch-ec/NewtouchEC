<?php exit(); ?>a:3:{s:5:"value";a:9:{s:7:"columns";a:13:{s:10:"reports_id";a:13:{s:4:"type";s:15:"bigint unsigned";s:8:"required";b:1;s:7:"default";i:0;s:4:"pkey";b:1;s:5:"label";s:12:"举报编号";s:8:"is_title";b:1;s:5:"width";i:120;s:10:"searchtype";s:3:"has";s:8:"editable";b:0;s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:6:"cat_id";a:11:{s:4:"type";s:17:"table:reports_cat";s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"label";s:12:"举报类型";s:5:"width";i:75;s:8:"editable";b:0;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:8:"goods_id";a:9:{s:4:"type";s:15:"table:goods@b2c";s:5:"label";s:8:"商品ID";s:5:"width";i:120;s:8:"editable";b:0;s:10:"filtertype";s:6:"custom";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:9:"member_id";a:9:{s:4:"type";s:17:"table:members@b2c";s:5:"label";s:9:"投诉方";s:5:"width";i:75;s:8:"editable";b:0;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:6:"mobile";a:10:{s:4:"type";s:11:"varchar(50)";s:5:"label";s:6:"手机";s:5:"width";i:75;s:10:"searchtype";s:4:"head";s:8:"editable";b:1;s:10:"filtertype";s:6:"normal";s:13:"filterdefault";s:4:"true";s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:8:"realtype";s:11:"varchar(50)";}s:15:"store_member_id";a:9:{s:4:"type";s:17:"table:members@b2c";s:5:"label";s:12:"被投诉方";s:5:"width";i:75;s:8:"editable";b:0;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:11:"store_uname";a:7:{s:4:"type";s:12:"varchar(100)";s:5:"label";s:9:"店主名";s:10:"searchtype";s:3:"has";s:10:"filtertype";s:6:"normal";s:13:"filterdefault";s:4:"true";s:7:"in_list";b:1;s:8:"realtype";s:12:"varchar(100)";}s:8:"store_id";a:6:{s:4:"type";s:26:"table:storemanger@business";s:5:"width";i:75;s:8:"editable";b:0;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:6:"status";a:10:{s:4:"type";a:6:{s:9:"intervene";s:12:"平台介入";s:7:"voucher";s:9:"取证中";s:7:"success";s:12:"举报成立";s:5:"error";s:15:"举报不成立";s:6:"cancel";s:12:"举报撤销";s:6:"finish";s:6:"完成";}s:7:"default";s:9:"intervene";s:8:"required";b:1;s:5:"label";s:12:"举报状态";s:5:"width";i:75;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:8:"editable";b:0;s:7:"in_list";b:1;s:8:"realtype";s:63:"enum('intervene','voucher','success','error','cancel','finish')";}s:4:"memo";a:3:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:8:"realtype";s:8:"longtext";}s:10:"createtime";a:10:{s:4:"type";s:4:"time";s:5:"label";s:12:"申请时间";s:5:"width";i:110;s:8:"editable";b:0;s:10:"filtertype";s:4:"time";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:7:"orderby";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:13:"last_modified";a:7:{s:5:"label";s:12:"更新时间";s:4:"type";s:11:"last_modify";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:8:"disabled";a:4:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}}s:5:"index";a:11:{s:19:"ind_store_member_id";a:1:{s:7:"columns";a:1:{i:0;s:15:"store_member_id";}}s:20:"ind_report_member_id";a:1:{s:7:"columns";a:1:{i:0;s:9:"member_id";}}s:20:"idx__report_store_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"store_id";}}s:12:"ind_disabled";a:1:{s:7:"columns";a:1:{i:0;s:8:"disabled";}}s:17:"ind_last_modified";a:1:{s:7:"columns";a:1:{i:0;s:13:"last_modified";}}s:14:"ind_createtime";a:1:{s:7:"columns";a:1:{i:0;s:10:"createtime";}}s:12:"idx_c_cat_id";a:1:{s:7:"columns";a:1:{i:0;s:6:"cat_id";}}s:14:"idx_c_goods_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"goods_id";}}s:15:"idx_c_member_id";a:1:{s:7:"columns";a:1:{i:0;s:9:"member_id";}}s:21:"idx_c_store_member_id";a:1:{s:7:"columns";a:1:{i:0;s:15:"store_member_id";}}s:14:"idx_c_store_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"store_id";}}}s:6:"engine";s:6:"innodb";s:7:"version";s:13:"$Rev: 42376 $";s:8:"idColumn";s:10:"reports_id";s:10:"textColumn";s:10:"reports_id";s:7:"in_list";a:10:{i:0;s:10:"reports_id";i:1;s:6:"cat_id";i:2;s:8:"goods_id";i:3;s:9:"member_id";i:4;s:6:"mobile";i:5;s:15:"store_member_id";i:6;s:11:"store_uname";i:7;s:6:"status";i:8;s:10:"createtime";i:9;s:13:"last_modified";}s:15:"default_in_list";a:7:{i:0;s:10:"reports_id";i:1;s:6:"cat_id";i:2;s:8:"goods_id";i:3;s:9:"member_id";i:4;s:15:"store_member_id";i:5;s:10:"createtime";i:6;s:13:"last_modified";}s:5:"pkeys";a:1:{s:10:"reports_id";s:10:"reports_id";}}s:3:"ttl";i:0;s:8:"dateline";i:1528801590;}