<?php

 
/**
 * 用于获取汇率
 * 
 * @version 0.1
 * @package ectools.lib
 */
class ectools_rate{
    
    function getrate(){
        $url = "http://www.xe.com/ucc/convert.cgi?Amount=1&From=JPY&To=CNY";
        $content = file_get_contents($url);
        $regex = "/1&nbsp;JPY&nbsp;=&nbsp;(.+?)&nbsp;CNY/"; //正则表达式.
        $rate['cur_rate'] = 0;
        if(preg_match_all($regex, $content, $matches)) {
            $rate['cur_rate'] = $matches[1][0];
        }
        //$currency = $this->app->model('currency');
         $currency = app::get('ectools')->model('currency');
        $curdata = $currency->dump(array('cur_code'=>'CNY'),'*');
        $currency->update($rate,array('cur_id'=>$curdata['cur_id'])); //使用save组织post的数据
    }
}

?>
