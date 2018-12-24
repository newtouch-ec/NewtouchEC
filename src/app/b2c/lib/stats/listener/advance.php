<?php

 

class b2c_stats_listener_advance
{
    public function __construct($app)
    {
        $this->app = $app;
    }
    
    /**
     * ������ԱԤ���仯�ӿ�
     * @param array ������Ҫ�Ĳ���
     * @return null
     */
    public function listener_advance(&$arr_params)
    {
        $obj_member_advance = $this->app->model('member_advance');
        
        $arr_update = array(
            'member_id' => $arr_params['member_id'],
			'doadd'=>($arr_params['modify_advance'] > 0) ? true : false,
            'is_frontend' => $arr_params['is_frontend'],
        );
        $obj_member_advance->fireEvent('changeadvance', $arr_update, $arr_params['member_id']);
    }
}