<?php exit(); ?>a:3:{s:5:"value";a:10:{s:7:"columns";a:28:{s:10:"comment_id";a:9:{s:4:"type";s:6:"number";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"label";s:2:"ID";s:5:"width";i:110;s:8:"editable";b:0;s:15:"default_in_list";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:14:"for_comment_id";a:4:{s:4:"type";s:13:"mediumint(8) ";s:5:"label";s:13:"对m的回复";s:7:"default";i:0;s:8:"realtype";s:13:"mediumint(8) ";}s:7:"type_id";a:5:{s:4:"type";s:11:"table:goods";s:5:"label";s:6:"名称";s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:8:"order_id";a:5:{s:4:"type";s:12:"table:orders";s:5:"label";s:12:"订单编号";s:7:"in_list";b:0;s:15:"default_in_list";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:11:"object_type";a:5:{s:4:"type";s:56:"enum('ask', 'discuss', 'buy', 'message', 'msg', 'order')";s:5:"label";s:6:"类型";s:7:"default";s:3:"ask";s:8:"required";b:1;s:8:"realtype";s:56:"enum('ask', 'discuss', 'buy', 'message', 'msg', 'order')";}s:9:"author_id";a:6:{s:4:"type";s:12:"mediumint(8)";s:7:"in_list";b:0;s:5:"label";s:8:"作者ID";s:7:"default";i:0;s:15:"default_in_list";b:0;s:8:"realtype";s:12:"mediumint(8)";}s:6:"author";a:7:{s:4:"type";s:12:"varchar(100)";s:5:"label";s:9:"发表人";s:10:"searchtype";s:3:"has";s:10:"filtertype";s:6:"normal";s:13:"filterdefault";s:4:"true";s:7:"in_list";b:1;s:8:"realtype";s:12:"varchar(100)";}s:7:"contact";a:7:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:12:"联系方式";s:5:"width";i:110;s:10:"filtertype";s:6:"normal";s:13:"filterdefault";s:4:"true";s:7:"in_list";b:1;s:8:"realtype";s:12:"varchar(255)";}s:15:"mem_read_status";a:4:{s:4:"type";s:21:"enum('false', 'true')";s:5:"label";s:18:"会员阅读标识";s:7:"default";s:5:"false";s:8:"realtype";s:21:"enum('false', 'true')";}s:15:"adm_read_status";a:4:{s:4:"type";s:21:"enum('false', 'true')";s:5:"label";s:21:"管理员阅读标识";s:7:"default";s:5:"false";s:8:"realtype";s:21:"enum('false', 'true')";}s:4:"time";a:6:{s:4:"type";s:4:"time";s:7:"in_list";b:1;s:10:"filtertype";s:6:"normal";s:13:"filterdefault";s:4:"true";s:5:"label";s:6:"时间";s:8:"realtype";s:16:"int(10) unsigned";}s:9:"lastreply";a:3:{s:4:"type";s:4:"time";s:5:"label";s:18:"最后回复时间";s:8:"realtype";s:16:"int(10) unsigned";}s:10:"reply_name";a:5:{s:4:"type";s:12:"varchar(100)";s:7:"in_list";b:1;s:5:"label";s:15:"最后回复人";s:15:"default_in_list";b:1;s:8:"realtype";s:12:"varchar(100)";}s:5:"inbox";a:4:{s:4:"type";s:4:"bool";s:5:"label";s:9:"收件箱";s:7:"default";s:4:"true";s:8:"realtype";s:20:"enum('true','false')";}s:5:"track";a:4:{s:4:"type";s:4:"bool";s:5:"label";s:9:"发件箱";s:7:"default";s:4:"true";s:8:"realtype";s:20:"enum('true','false')";}s:8:"has_sent";a:4:{s:4:"type";s:4:"bool";s:5:"label";s:12:"是否发送";s:7:"default";s:4:"true";s:8:"realtype";s:20:"enum('true','false')";}s:5:"to_id";a:4:{s:4:"type";s:13:"table:members";s:7:"default";i:0;s:8:"required";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:8:"to_uname";a:3:{s:4:"type";s:12:"varchar(100)";s:15:"default_in_list";b:1;s:8:"realtype";s:12:"varchar(100)";}s:5:"title";a:9:{s:4:"type";s:12:"varchar(255)";s:7:"in_list";b:1;s:5:"label";s:6:"标题";s:8:"is_title";b:1;s:10:"searchtype";s:3:"has";s:10:"filtertype";s:6:"normal";s:13:"filterdefault";s:4:"true";s:15:"default_in_list";b:1;s:8:"realtype";s:12:"varchar(255)";}s:7:"comment";a:8:{s:4:"type";s:8:"longtext";s:5:"label";s:6:"内容";s:7:"in_list";b:1;s:10:"searchtype";s:3:"has";s:10:"filtertype";s:6:"normal";s:13:"filterdefault";s:4:"true";s:15:"default_in_list";b:1;s:8:"realtype";s:8:"longtext";}s:2:"ip";a:5:{s:4:"type";s:11:"varchar(15)";s:7:"in_list";b:1;s:5:"label";s:2:"IP";s:15:"default_in_list";b:1;s:8:"realtype";s:11:"varchar(15)";}s:7:"display";a:7:{s:4:"type";s:4:"bool";s:7:"in_list";b:1;s:5:"label";s:18:"前台是否显示";s:10:"filtertype";s:4:"bool";s:7:"default";s:4:"true";s:15:"default_in_list";b:1;s:8:"realtype";s:20:"enum('true','false')";}s:9:"gask_type";a:4:{s:4:"type";s:11:"varchar(50)";s:7:"default";s:0:"";s:8:"editable";b:0;s:8:"realtype";s:11:"varchar(50)";}s:5:"addon";a:3:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:8:"realtype";s:8:"longtext";}s:7:"p_index";a:4:{s:4:"type";s:10:"tinyint(2)";s:5:"label";s:7:"p_index";s:15:"default_in_list";b:1;s:8:"realtype";s:10:"tinyint(2)";}s:8:"disabled";a:4:{s:4:"type";s:21:"enum('false', 'true')";s:7:"default";s:5:"false";s:15:"default_in_list";b:1;s:8:"realtype";s:21:"enum('false', 'true')";}s:13:"comments_type";a:6:{s:4:"type";a:4:{i:0;s:6:"解释";i:1;s:6:"评论";i:2;s:6:"回复";i:3;s:6:"追加";}s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"label";s:12:"评论类型";s:8:"editable";b:0;s:8:"realtype";s:21:"enum('0','1','2','3')";}s:8:"store_id";a:8:{s:4:"type";s:26:"table:storemanger@business";s:8:"required";b:0;s:5:"label";s:12:"店铺名称";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}}s:7:"comment";s:33:"咨询,评论,留言,短消息表";s:6:"engine";s:6:"innodb";s:7:"version";s:5:"$Rev$";s:8:"idColumn";s:10:"comment_id";s:5:"pkeys";a:1:{s:10:"comment_id";s:10:"comment_id";}s:7:"in_list";a:10:{i:0;s:7:"type_id";i:1;s:6:"author";i:2;s:7:"contact";i:3;s:4:"time";i:4;s:10:"reply_name";i:5;s:5:"title";i:6;s:7:"comment";i:7;s:2:"ip";i:8;s:7:"display";i:9;s:8:"store_id";}s:15:"default_in_list";a:7:{i:0;s:7:"type_id";i:1;s:10:"reply_name";i:2;s:5:"title";i:3;s:7:"comment";i:4;s:2:"ip";i:5;s:7:"display";i:6;s:8:"store_id";}s:5:"index";a:4:{s:13:"idx_c_type_id";a:1:{s:7:"columns";a:1:{i:0;s:7:"type_id";}}s:14:"idx_c_order_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"order_id";}}s:11:"idx_c_to_id";a:1:{s:7:"columns";a:1:{i:0;s:5:"to_id";}}s:14:"idx_c_store_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"store_id";}}}s:10:"textColumn";s:5:"title";}s:8:"dateline";s:10:"1439962932";s:3:"ttl";s:1:"0";}