<?php exit(); ?>a:3:{s:5:"value";a:9:{s:7:"columns";a:13:{s:5:"da_id";a:7:{s:4:"type";s:7:"int(10)";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:7:"int(10)";}s:7:"address";a:7:{s:4:"type";s:12:"varchar(200)";s:8:"required";b:1;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:6:"地址";s:8:"realtype";s:12:"varchar(200)";}s:6:"region";a:6:{s:4:"type";s:6:"region";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:6:"地区";s:8:"realtype";s:12:"varchar(255)";}s:3:"zip";a:6:{s:4:"type";s:11:"varchar(20)";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:5:"label";s:6:"邮编";s:8:"realtype";s:11:"varchar(20)";}s:5:"phone";a:6:{s:4:"type";s:12:"varchar(100)";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:6:"电话";s:8:"realtype";s:12:"varchar(100)";}s:5:"uname";a:6:{s:4:"type";s:12:"varchar(100)";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:9:"联系人";s:8:"realtype";s:12:"varchar(100)";}s:6:"mobile";a:6:{s:4:"type";s:12:"varchar(100)";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:6:"手机";s:8:"realtype";s:12:"varchar(100)";}s:7:"company";a:4:{s:4:"type";s:12:"varchar(100)";s:8:"editable";b:0;s:5:"label";s:9:"公司名";s:8:"realtype";s:12:"varchar(100)";}s:4:"memo";a:4:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:5:"label";s:6:"备注";s:8:"realtype";s:8:"longtext";}s:7:"consign";a:6:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"required";b:1;s:8:"editable";b:0;s:5:"label";s:12:"发货地址";s:8:"realtype";s:20:"enum('true','false')";}s:6:"refund";a:6:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"required";b:1;s:8:"editable";b:0;s:5:"label";s:12:"退货地址";s:8:"realtype";s:20:"enum('true','false')";}s:8:"store_id";a:6:{s:4:"type";s:26:"table:storemanger@business";s:8:"required";b:1;s:5:"label";s:6:"店铺";s:5:"width";i:110;s:8:"editable";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:8:"disabled";a:5:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}}s:6:"engine";s:6:"innodb";s:7:"version";s:13:"$Rev: 50831 $";s:8:"idColumn";s:5:"da_id";s:5:"pkeys";a:1:{s:5:"da_id";s:5:"da_id";}s:7:"in_list";a:6:{i:0;s:7:"address";i:1;s:6:"region";i:2;s:3:"zip";i:3;s:5:"phone";i:4;s:5:"uname";i:5;s:6:"mobile";}s:15:"default_in_list";a:5:{i:0;s:7:"address";i:1;s:6:"region";i:2;s:5:"phone";i:3;s:5:"uname";i:4;s:6:"mobile";}s:5:"index";a:1:{s:14:"idx_c_store_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"store_id";}}}s:10:"textColumn";s:7:"address";}s:3:"ttl";i:0;s:8:"dateline";i:1528801586;}