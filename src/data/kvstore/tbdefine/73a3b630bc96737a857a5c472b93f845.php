<?php exit(); ?>a:3:{s:5:"value";a:8:{s:7:"columns";a:16:{s:2:"id";a:11:{s:4:"type";s:15:"bigint unsigned";s:8:"required";b:1;s:4:"pkey";b:1;s:5:"extra";s:14:"auto_increment";s:5:"label";s:2:"ID";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:0;s:6:"hidden";b:1;s:15:"default_in_list";b:0;s:8:"realtype";s:19:"bigint(20) unsigned";}s:13:"settlement_no";a:9:{s:4:"type";s:11:"varchar(15)";s:8:"required";b:1;s:5:"label";s:12:"结算单号";s:5:"width";i:140;s:8:"editable";b:0;s:10:"searchtype";s:3:"has";s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:11:"varchar(15)";}s:8:"order_id";a:6:{s:4:"type";s:11:"varchar(20)";s:5:"label";s:9:"单据号";s:5:"width";i:200;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:11:"varchar(20)";}s:7:"account";a:11:{s:4:"type";s:5:"money";s:5:"label";s:12:"结算金额";s:7:"default";s:1:"0";s:8:"required";b:1;s:10:"filtertype";s:6:"number";s:13:"filterdefault";b:1;s:5:"width";i:130;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:11:"order_money";a:8:{s:4:"type";s:5:"money";s:5:"label";s:12:"订单金额";s:7:"default";s:1:"0";s:8:"required";b:1;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:9:"order_cut";a:9:{s:4:"type";s:5:"money";s:5:"label";s:12:"订单抽成";s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"width";i:130;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:11:"order_recut";a:9:{s:4:"type";s:5:"money";s:5:"label";s:30:"平台承担售后退款金额";s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"width";i:130;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:9:"score_use";a:9:{s:4:"type";s:5:"money";s:5:"label";s:24:"使用积分折算金额";s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"width";i:130;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:10:"score_give";a:9:{s:4:"type";s:5:"money";s:5:"label";s:24:"赠送积分折算金额";s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"width";i:130;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:9:"is_refund";a:8:{s:4:"type";a:2:{i:0;s:15:"未发生退款";i:1;s:12:"发生退款";}s:5:"label";s:12:"是否退款";s:5:"width";i:110;s:7:"default";s:1:"0";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"enum('0','1')";}s:6:"re_cut";a:9:{s:4:"type";s:5:"money";s:5:"label";s:24:"店铺售后退款金额";s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"width";i:130;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:11:"total_recut";a:9:{s:4:"type";s:5:"money";s:5:"label";s:21:"售后退款总金额";s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"width";i:130;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:6:"refund";a:9:{s:4:"type";s:5:"money";s:5:"label";s:18:"售前退款金额";s:7:"default";s:1:"0";s:8:"required";b:1;s:5:"width";i:130;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:13:"decimal(20,3)";}s:9:"refund_id";a:6:{s:4:"type";s:12:"varchar(300)";s:5:"label";s:15:"售后退款单";s:5:"width";i:200;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:12:"varchar(300)";}s:9:"item_type";a:8:{s:4:"type";a:2:{s:5:"order";s:18:"订单结算明细";s:6:"refund";s:24:"往期售后结算明细";}s:5:"label";s:12:"明细类型";s:5:"width";i:110;s:7:"default";s:5:"order";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:22:"enum('order','refund')";}s:8:"disabled";a:4:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}}s:7:"comment";s:12:"结算明细";s:7:"version";s:13:"$Rev: 41329 $";s:8:"idColumn";s:2:"id";s:5:"pkeys";a:1:{s:2:"id";s:2:"id";}s:7:"in_list";a:12:{i:0;s:13:"settlement_no";i:1;s:7:"account";i:2;s:11:"order_money";i:3;s:9:"order_cut";i:4;s:11:"order_recut";i:5;s:9:"score_use";i:6;s:10:"score_give";i:7;s:9:"is_refund";i:8;s:6:"re_cut";i:9;s:11:"total_recut";i:10;s:6:"refund";i:11;s:9:"item_type";}s:15:"default_in_list";a:12:{i:0;s:13:"settlement_no";i:1;s:7:"account";i:2;s:11:"order_money";i:3;s:9:"order_cut";i:4;s:11:"order_recut";i:5;s:9:"score_use";i:6;s:10:"score_give";i:7;s:9:"is_refund";i:8;s:6:"re_cut";i:9;s:11:"total_recut";i:10;s:6:"refund";i:11;s:9:"item_type";}s:10:"textColumn";s:13:"settlement_no";}s:8:"dateline";s:10:"1430116938";s:3:"ttl";s:1:"0";}