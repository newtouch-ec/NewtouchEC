<?php

 
class desktop_finder_builder_packet extends desktop_finder_builder_prototype{

    function main(){

        $this->controller->pagedata['data'] = $this->get_views();
        /** �ж��Ƿ�Ҫ��ʾ������ͼ **/
        $is_display_packet = 'false';
        foreach ($this->controller->pagedata['data'] as $arr){
            if ($arr['addon'])
            {
                $is_display_packet = 'true';
                break;
            }
            else
            {
                $is_display_packet = 'false';
            }
        }
        $this->controller->pagedata['haspacket'] = ($is_display_packet=='true') ? true : false;
        $this->controller->display('finder/view/packet.html','desktop');
            
    }

}
