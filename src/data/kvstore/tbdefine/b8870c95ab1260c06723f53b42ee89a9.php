<?php exit(); ?>a:3:{s:5:"value";a:7:{s:7:"columns";a:5:{s:2:"id";a:6:{s:4:"type";s:7:"int(10)";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:8:"editable";b:0;s:8:"realtype";s:7:"int(10)";}s:9:"member_id";a:5:{s:4:"type";s:13:"table:members";s:7:"default";i:0;s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:21:"mediumint(8) unsigned";}s:5:"email";a:4:{s:4:"type";s:12:"varchar(100)";s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:12:"varchar(100)";}s:6:"status";a:5:{s:4:"type";a:2:{s:1:"n";s:9:"未验证";s:1:"y";s:9:"已验证";}s:7:"default";s:1:"n";s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:13:"enum('n','y')";}s:5:"token";a:4:{s:4:"type";s:11:"varchar(32)";s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:11:"varchar(32)";}}s:5:"index";a:3:{s:9:"ind_token";a:1:{s:7:"columns";a:1:{i:0;s:5:"token";}}s:13:"ind_member_id";a:1:{s:7:"columns";a:1:{i:0;s:9:"member_id";}}s:15:"idx_c_member_id";a:1:{s:7:"columns";a:1:{i:0;s:9:"member_id";}}}s:6:"engine";s:6:"innodb";s:7:"version";s:13:"$Rev: 42752 $";s:8:"idColumn";s:2:"id";s:5:"pkeys";a:1:{s:2:"id";s:2:"id";}s:10:"textColumn";s:9:"member_id";}s:8:"dateline";s:10:"1438832829";s:3:"ttl";s:1:"0";}