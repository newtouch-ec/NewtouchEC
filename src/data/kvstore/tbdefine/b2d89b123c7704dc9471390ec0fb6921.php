<?php exit(); ?>a:3:{s:5:"value";a:9:{s:7:"columns";a:13:{s:11:"comments_id";a:10:{s:4:"type";s:15:"bigint unsigned";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"label";s:2:"ID";s:5:"width";i:110;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:11:"complain_id";a:9:{s:4:"type";s:14:"table:complain";s:5:"label";s:12:"投诉编号";s:5:"width";i:75;s:8:"editable";b:0;s:10:"filtertype";s:3:"yes";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:6:"source";a:9:{s:4:"type";a:3:{s:5:"buyer";s:6:"买家";s:6:"seller";s:6:"卖家";s:8:"platform";s:6:"平台";}s:7:"default";s:5:"buyer";s:8:"required";b:1;s:5:"label";s:9:"留言方";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:1;s:8:"realtype";s:33:"enum('buyer','seller','platform')";}s:9:"author_id";a:6:{s:4:"type";s:12:"mediumint(8)";s:7:"in_list";b:0;s:5:"label";s:8:"发表ID";s:7:"default";i:0;s:15:"default_in_list";b:0;s:8:"realtype";s:12:"mediumint(8)";}s:6:"author";a:7:{s:4:"type";s:12:"varchar(100)";s:5:"label";s:9:"发表人";s:10:"searchtype";s:3:"has";s:10:"filtertype";s:6:"normal";s:13:"filterdefault";s:4:"true";s:7:"in_list";b:1;s:8:"realtype";s:12:"varchar(100)";}s:7:"comment";a:8:{s:4:"type";s:8:"longtext";s:5:"label";s:6:"内容";s:7:"in_list";b:1;s:10:"searchtype";s:3:"has";s:10:"filtertype";s:6:"normal";s:13:"filterdefault";s:4:"true";s:15:"default_in_list";b:1;s:8:"realtype";s:8:"longtext";}s:7:"image_0";a:7:{s:4:"type";s:11:"varchar(32)";s:5:"label";s:7:"图片0";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(32)";}s:7:"image_1";a:7:{s:4:"type";s:11:"varchar(32)";s:5:"label";s:7:"图片1";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(32)";}s:7:"image_2";a:7:{s:4:"type";s:11:"varchar(32)";s:5:"label";s:7:"图片2";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(32)";}s:7:"image_3";a:7:{s:4:"type";s:11:"varchar(32)";s:5:"label";s:7:"图片3";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(32)";}s:7:"image_4";a:7:{s:4:"type";s:11:"varchar(32)";s:5:"label";s:7:"图片4";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(32)";}s:13:"last_modified";a:7:{s:5:"label";s:12:"更新时间";s:4:"type";s:11:"last_modify";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:16:"int(10) unsigned";}s:8:"disabled";a:4:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}}s:6:"engine";s:6:"innodb";s:7:"version";s:13:"$Rev: 42376 $";s:8:"idColumn";s:11:"comments_id";s:5:"pkeys";a:1:{s:11:"comments_id";s:11:"comments_id";}s:7:"in_list";a:5:{i:0;s:11:"complain_id";i:1;s:6:"source";i:2;s:6:"author";i:3;s:7:"comment";i:4;s:13:"last_modified";}s:15:"default_in_list";a:3:{i:0;s:11:"complain_id";i:1;s:7:"comment";i:2;s:13:"last_modified";}s:5:"index";a:1:{s:17:"idx_c_complain_id";a:1:{s:7:"columns";a:1:{i:0;s:11:"complain_id";}}}s:10:"textColumn";s:11:"complain_id";}s:3:"ttl";i:0;s:8:"dateline";i:1528801590;}