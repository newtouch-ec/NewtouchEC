<?php
class b2c_service_vcode{
    
    function __construct($app){
        $this->app = $app;
    }
    
    function status(){
        if(app::get('b2c')->getConf('site.login_valide') == 'false'){
            if($_SESSION['error_count'][$this->app->app_id] >= 3) return true;
        }
        return app::get('b2c')->getConf('site.login_valide') == 'true' ? true : false;
    }

	public function set_error_count(){
      if(isset($_SESSION['error_count']['b2c']['time']) && (time() - $_SESSION['error_count']['b2c']['time']<3600) ){
          $_SESSION['error_count']['b2c']['count'] += 1;
      }else{
          $_SESSION['error_count']['b2c']['time'] = time();
          $_SESSION['error_count']['b2c']['count'] = 1;
      }
    }
}
?>