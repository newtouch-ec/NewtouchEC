<?php exit(); ?>a:3:{s:5:"value";a:9:{s:7:"columns";a:38:{s:8:"order_id";a:11:{s:4:"type";s:16:"table:orders@b2c";s:7:"default";i:0;s:8:"required";b:1;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"order";s:1:"3";s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:5:"label";s:9:"订单号";s:8:"realtype";s:19:"bigint(20) unsigned";}s:9:"member_id";a:9:{s:4:"type";s:17:"table:members@b2c";s:7:"default";s:1:"0";s:8:"required";b:1;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"order";s:1:"4";s:5:"label";s:9:"申请人";s:8:"realtype";s:21:"mediumint(8) unsigned";}s:9:"return_id";a:11:{s:4:"type";s:10:"bigint(20)";s:8:"required";b:1;s:4:"pkey";b:1;s:8:"editable";b:0;s:7:"in_list";b:1;s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:15:"default_in_list";b:1;s:5:"label";s:21:"退货记录流水号";s:5:"order";s:1:"5";s:8:"realtype";s:10:"bigint(20)";}s:13:"old_return_id";a:9:{s:4:"type";s:10:"bigint(20)";s:8:"editable";b:0;s:7:"in_list";b:1;s:10:"searchtype";s:3:"has";s:10:"filtertype";s:3:"yes";s:15:"default_in_list";b:1;s:5:"label";s:24:"原退货记录流水号";s:5:"order";s:1:"6";s:8:"realtype";s:10:"bigint(20)";}s:9:"return_bn";a:9:{s:4:"type";s:11:"varchar(32)";s:8:"required";b:0;s:5:"label";s:27:"退货记录流水号标识";s:7:"comment";s:27:"退货记录流水号标识";s:8:"editable";b:0;s:7:"in_list";b:0;s:15:"default_in_list";b:0;s:8:"is_title";b:1;s:8:"realtype";s:11:"varchar(32)";}s:7:"content";a:4:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:5:"label";s:12:"退货内容";s:8:"realtype";s:8:"longtext";}s:6:"status";a:10:{s:4:"type";a:16:{i:1;s:30:"退款协议等待卖家确认";i:2;s:9:"审核中";i:3;s:12:"同意退款";i:4;s:6:"完成";i:5;s:6:"拒绝";i:6;s:9:"已收货";i:7;s:9:"已质检";i:8;s:9:"补差价";i:9;s:15:"已拒绝退款";i:10;s:9:"已取消";i:11;s:42:"卖家不同意协议，等待买家修改";i:12;s:42:"买家已退货，等待卖家确认收货";i:13;s:9:"已修改";i:14;s:33:"卖家收到退货，拒绝退款";i:15;s:48:"卖家同意退款，等待卖家打款至平台";i:16;s:36:"卖家已退款，等待系统结算";}s:7:"default";s:1:"1";s:8:"required";b:1;s:7:"comment";s:18:"退货记录状态";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:18:"售后服务状态";s:5:"order";s:1:"6";s:8:"realtype";s:76:"enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16')";}s:10:"image_file";a:7:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:6:"附件";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:12:"varchar(255)";}s:11:"image_file1";a:7:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:7:"附件1";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:12:"varchar(255)";}s:11:"image_file2";a:7:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:7:"附件2";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:12:"varchar(255)";}s:15:"intereven_image";a:7:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:12:"卖家举证";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:12:"varchar(255)";}s:17:"intereven_comment";a:4:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:5:"label";s:18:"卖家留言举证";s:8:"realtype";s:8:"longtext";}s:12:"product_data";a:4:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:5:"label";s:18:"退货货品记录";s:8:"realtype";s:8:"longtext";}s:7:"comment";a:4:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:5:"label";s:15:"管理员备注";s:8:"realtype";s:8:"longtext";}s:8:"add_time";a:9:{s:4:"type";s:4:"time";s:10:"depend_col";s:19:"marketable:true:now";s:5:"label";s:18:"售后处理时间";s:5:"width";i:110;s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"order";s:1:"7";s:8:"realtype";s:16:"int(10) unsigned";}s:6:"amount";a:6:{s:4:"type";s:5:"money";s:8:"required";b:0;s:5:"label";s:12:"退款金额";s:5:"width";i:110;s:8:"editable";b:0;s:8:"realtype";s:13:"decimal(20,3)";}s:13:"seller_amount";a:6:{s:4:"type";s:5:"money";s:8:"required";b:0;s:5:"label";s:18:"商家承担金额";s:5:"width";i:110;s:8:"editable";b:0;s:8:"realtype";s:13:"decimal(20,3)";}s:15:"shipping_amount";a:6:{s:4:"type";s:5:"money";s:8:"required";b:0;s:5:"label";s:18:"运费退款金额";s:5:"width";i:110;s:8:"editable";b:0;s:8:"realtype";s:13:"decimal(20,3)";}s:10:"close_time";a:6:{s:4:"type";s:4:"time";s:8:"required";b:0;s:5:"label";s:12:"关闭时间";s:5:"width";i:110;s:8:"editable";b:0;s:8:"realtype";s:16:"int(10) unsigned";}s:8:"store_id";a:9:{s:4:"type";s:26:"table:storemanger@business";s:8:"required";b:1;s:5:"label";s:6:"店铺";s:5:"width";i:110;s:8:"editable";b:0;s:7:"default";s:1:"0";s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:19:"bigint(20) unsigned";}s:11:"refund_type";a:10:{s:4:"type";a:4:{i:1;s:12:"取消订单";i:2;s:12:"需要退货";i:3;s:24:"已收到，无需退货";i:4;s:12:"未收到货";}s:7:"default";s:1:"1";s:8:"required";b:1;s:7:"comment";s:12:"退款类型";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:18:"售后服务类型";s:5:"order";s:1:"8";s:8:"realtype";s:21:"enum('1','2','3','4')";}s:12:"is_intervene";a:10:{s:4:"type";a:4:{i:1;s:15:"平台未介入";i:2;s:18:"等待卖家举证";i:3;s:15:"平台已介入";i:4;s:15:"平台已处理";}s:7:"default";s:1:"1";s:8:"required";b:1;s:7:"comment";s:18:"平台介入状态";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:18:"平台介入状态";s:5:"order";s:1:"9";s:8:"realtype";s:21:"enum('1','2','3','4')";}s:16:"intervene_reason";a:8:{s:4:"type";a:6:{i:1;s:18:"空包裹，少货";i:2;s:12:"快递问题";i:3;s:15:"卖家发错货";i:4;s:12:"虚假发货";i:5;s:27:"多拍，搓牌，不想要";i:6;s:6:"其他";}s:7:"comment";s:18:"平台介入原因";s:8:"editable";b:0;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:5:"label";s:18:"平台介入原因";s:5:"order";s:1:"9";s:8:"realtype";s:29:"enum('1','2','3','4','5','6')";}s:15:"intervene_phone";a:9:{s:4:"type";s:11:"varchar(30)";s:5:"label";s:18:"平台介入手机";s:5:"width";i:110;s:8:"editable";b:1;s:10:"filtertype";s:6:"normal";s:13:"filterdefault";s:4:"true";s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:11:"varchar(30)";}s:14:"intervene_mail";a:8:{s:4:"type";s:11:"varchar(20)";s:5:"label";s:18:"平台介入邮箱";s:5:"width";i:110;s:8:"editable";b:1;s:10:"filtertype";s:6:"normal";s:7:"in_list";b:1;s:15:"default_in_list";b:0;s:8:"realtype";s:11:"varchar(20)";}s:9:"ship_cost";a:6:{s:4:"type";s:5:"money";s:8:"required";b:0;s:5:"label";s:12:"退邮金额";s:5:"width";i:110;s:8:"editable";b:0;s:8:"realtype";s:13:"decimal(20,3)";}s:13:"amount_seller";a:6:{s:4:"type";s:5:"money";s:8:"required";b:0;s:5:"label";s:18:"商品剩余金额";s:5:"width";i:110;s:8:"editable";b:0;s:8:"realtype";s:13:"decimal(20,3)";}s:13:"seller_reason";a:4:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:5:"label";s:18:"卖家拒绝原因";s:8:"realtype";s:8:"longtext";}s:14:"seller_comment";a:4:{s:4:"type";s:8:"longtext";s:8:"editable";b:0;s:5:"label";s:12:"卖家留言";s:8:"realtype";s:8:"longtext";}s:12:"is_safeguard";a:6:{s:4:"type";a:2:{i:1;s:6:"售前";i:2;s:6:"售后";}s:7:"comment";s:12:"售后类型";s:8:"editable";b:0;s:7:"default";s:1:"1";s:8:"required";b:1;s:8:"realtype";s:13:"enum('1','2')";}s:14:"safeguard_type";a:6:{s:4:"type";a:5:{i:1;s:12:"商品问题";i:2;s:24:"七天无理由退换货";i:3;s:12:"发票无效";i:4;s:21:"退回多付的运费";i:5;s:12:"未收到货";}s:7:"comment";s:12:"售后要求";s:8:"editable";b:0;s:7:"default";s:1:"1";s:8:"required";b:1;s:8:"realtype";s:25:"enum('1','2','3','4','5')";}s:17:"safeguard_require";a:6:{s:4:"type";a:6:{i:1;s:21:"不退货部分退款";i:2;s:18:"需要退货退款";i:3;s:12:"要求换货";i:4;s:12:"要求维修";i:5;s:27:"已经退货，要求退款";i:6;s:12:"要求退款";}s:7:"comment";s:12:"服务类型";s:8:"editable";b:0;s:7:"default";s:1:"1";s:8:"required";b:1;s:8:"realtype";s:29:"enum('1','2','3','4','5','6')";}s:14:"refund_address";a:5:{s:4:"type";s:25:"table:dlyaddress@business";s:8:"editable";b:0;s:7:"in_list";b:0;s:5:"label";s:12:"退货地址";s:8:"realtype";s:7:"int(10)";}s:12:"return_score";a:5:{s:4:"type";s:5:"money";s:7:"default";s:1:"0";s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:13:"decimal(20,3)";}s:12:"image_upload";a:7:{s:4:"type";s:12:"varchar(255)";s:5:"label";s:12:"付款证明";s:5:"width";i:75;s:6:"hidden";b:1;s:8:"editable";b:0;s:7:"in_list";b:0;s:8:"realtype";s:12:"varchar(255)";}s:15:"is_return_money";a:6:{s:4:"type";a:2:{i:1;s:9:"未打款";i:2;s:9:"已打款";}s:7:"comment";s:18:"卖家是否对款";s:8:"editable";b:0;s:7:"default";s:1:"1";s:8:"required";b:1;s:8:"realtype";s:13:"enum('1','2')";}s:15:"return_money_id";a:10:{s:4:"type";s:11:"varchar(50)";s:5:"label";s:12:"流水单号";s:5:"width";i:110;s:10:"searchtype";s:6:"tequal";s:8:"editable";b:0;s:10:"filtertype";s:6:"normal";s:13:"filterdefault";b:1;s:7:"in_list";b:1;s:15:"default_in_list";b:1;s:8:"realtype";s:11:"varchar(50)";}s:8:"disabled";a:5:{s:4:"type";s:4:"bool";s:7:"default";s:5:"false";s:8:"required";b:1;s:8:"editable";b:0;s:8:"realtype";s:20:"enum('true','false')";}}s:6:"engine";s:6:"innodb";s:7:"version";s:13:"$Rev: 40912 $";s:7:"in_list";a:13:{i:0;s:8:"order_id";i:1;s:9:"member_id";i:2;s:9:"return_id";i:3;s:13:"old_return_id";i:4;s:6:"status";i:5;s:8:"add_time";i:6;s:8:"store_id";i:7;s:11:"refund_type";i:8;s:12:"is_intervene";i:9;s:16:"intervene_reason";i:10;s:15:"intervene_phone";i:11;s:14:"intervene_mail";i:12;s:15:"return_money_id";}s:15:"default_in_list";a:12:{i:0;s:8:"order_id";i:1;s:9:"member_id";i:2;s:9:"return_id";i:3;s:13:"old_return_id";i:4;s:6:"status";i:5;s:8:"add_time";i:6;s:8:"store_id";i:7;s:11:"refund_type";i:8;s:12:"is_intervene";i:9;s:16:"intervene_reason";i:10;s:15:"intervene_phone";i:11;s:15:"return_money_id";}s:5:"index";a:4:{s:14:"idx_c_order_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"order_id";}}s:15:"idx_c_member_id";a:1:{s:7:"columns";a:1:{i:0;s:9:"member_id";}}s:14:"idx_c_store_id";a:1:{s:7:"columns";a:1:{i:0;s:8:"store_id";}}s:20:"idx_c_refund_address";a:1:{s:7:"columns";a:1:{i:0;s:14:"refund_address";}}}s:8:"idColumn";s:9:"return_id";s:5:"pkeys";a:1:{s:9:"return_id";s:9:"return_id";}s:10:"textColumn";s:9:"return_bn";}s:3:"ttl";i:0;s:8:"dateline";i:1528801586;}