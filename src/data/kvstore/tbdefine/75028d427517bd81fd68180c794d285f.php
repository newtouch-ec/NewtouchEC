<?php exit(); ?>a:3:{s:5:"value";a:7:{s:7:"columns";a:14:{s:9:"poster_id";a:5:{s:4:"type";s:6:"number";s:8:"required";b:1;s:5:"extra";s:14:"auto_increment";s:4:"pkey";b:1;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:15:"poster_position";a:6:{s:4:"type";s:14:"table:position";s:8:"required";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:12:"所属版位";s:8:"realtype";s:21:"mediumint(8) unsigned";}s:11:"poster_type";a:7:{s:4:"type";a:3:{i:0;s:12:"单张图片";i:1;s:18:"单张图片轮播";i:2;s:18:"多张图片轮播";}s:8:"required";b:0;s:7:"default";i:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:18:"广告显示类型";s:8:"realtype";s:17:"enum('0','1','2')";}s:19:"poster_switcheffect";a:5:{s:4:"type";s:11:"varchar(50)";s:7:"default";s:0:"";s:8:"required";b:1;s:5:"label";s:12:"切换效果";s:8:"realtype";s:11:"varchar(50)";}s:15:"poster_autoplay";a:5:{s:4:"type";s:11:"varchar(50)";s:7:"default";s:0:"";s:8:"required";b:1;s:5:"label";s:12:"自动播放";s:8:"realtype";s:11:"varchar(50)";}s:14:"poster_isblank";a:4:{s:4:"type";a:2:{i:0;s:15:"本网页打开";i:1;s:15:"弹出新窗口";}s:8:"required";b:1;s:7:"default";i:0;s:8:"realtype";s:13:"enum('0','1')";}s:13:"poster_imgurl";a:6:{s:4:"type";s:9:"serialize";s:8:"required";b:0;s:7:"in_list";b:0;s:15:"default_in_list";b:0;s:5:"label";s:12:"图片上传";s:8:"realtype";s:8:"longtext";}s:16:"poster_starttime";a:6:{s:4:"type";s:4:"time";s:8:"required";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:12:"上线时间";s:8:"realtype";s:16:"int(10) unsigned";}s:14:"poster_endtime";a:6:{s:4:"type";s:4:"time";s:8:"required";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:12:"下线时间";s:8:"realtype";s:16:"int(10) unsigned";}s:13:"poster_author";a:6:{s:4:"type";s:11:"varchar(50)";s:8:"required";b:0;s:7:"in_list";b:0;s:15:"default_in_list";b:0;s:5:"label";s:12:"维护人员";s:8:"realtype";s:11:"varchar(50)";}s:17:"poster_createtime";a:6:{s:4:"type";s:4:"time";s:8:"required";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:5:"label";s:12:"创建日期";s:8:"realtype";s:16:"int(10) unsigned";}s:17:"poster_updatetime";a:6:{s:4:"type";s:4:"time";s:8:"required";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:5:"label";s:12:"更新日期";s:8:"realtype";s:16:"int(10) unsigned";}s:17:"poster_clickcount";a:5:{s:4:"type";s:6:"number";s:8:"required";b:0;s:7:"default";i:0;s:5:"label";s:12:"点击次数";s:8:"realtype";s:21:"mediumint(8) unsigned";}s:8:"disabled";a:4:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}}s:8:"idColumn";s:9:"poster_id";s:5:"pkeys";a:1:{s:9:"poster_id";s:9:"poster_id";}s:7:"in_list";a:6:{i:0;s:15:"poster_position";i:1;s:11:"poster_type";i:2;s:16:"poster_starttime";i:3;s:14:"poster_endtime";i:4;s:17:"poster_createtime";i:5;s:17:"poster_updatetime";}s:15:"default_in_list";a:4:{i:0;s:15:"poster_position";i:1;s:11:"poster_type";i:2;s:16:"poster_starttime";i:3;s:14:"poster_endtime";}s:5:"index";a:1:{s:21:"idx_c_poster_position";a:1:{s:7:"columns";a:1:{i:0;s:15:"poster_position";}}}s:10:"textColumn";s:15:"poster_position";}s:8:"dateline";s:10:"1394445806";s:3:"ttl";s:1:"0";}