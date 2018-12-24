<?php
$setting['author']='Jxwinter';
$setting['name']='★New carousel advertising★(Only for foreground store)';
$setting['version']='v1.0.0';
$setting['order']=20;
$setting['stime']='2012-04-10';
$setting['catalog']='Advertising widget';
$setting['description'] = 'JS version picture carousel effect';
$setting['userinfo']='Set picture carousel';
$setting['usual']    = '0';
$setting['vary'] = '*';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('default'),
                            'default_LR.html'=>'Left and right arrow model template',
                            'default_square.html'=>'carousel list model template'
                        );
?>
