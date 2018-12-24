<?php


class groupbuy_ctl_site_grouplist extends b2c_frontpage{

    function __construct($app){
        parent::__construct($app);
        $shopname = app::get('b2c')->getConf('system.shopname');
        if(isset($shopname)){
            $this->title = app::get('groupbuy')->_('超划算').'_'.$shopname;
            $this->keywords = app::get('groupbuy')->_('超划算').'_'.$shopname;
            $this->description = app::get('groupbuy')->_('超划算').'_'.$shopname;
        }
    }
	 function pagination($current,$totalPage,$act,$arg='',$app_id='b2c',$ctl='site_member'){ //本控制器公共分页函数
        if (!$arg)
            $this->pagedata['pager'] = array(
                'current'=>$current,
                'total'=>$totalPage,
                'link' =>$this->gen_url(array('app'=>$app_id, 'ctl'=>$ctl,'act'=>$act,'args'=>array(($tmp = time())))),
                'token'=>$tmp,
                );
        else
        {
            $arg = array_merge($arg, array(($tmp = time())));
            $this->pagedata['pager'] = array(
                'current'=>$current,
                'total'=>$totalPage,
                'link' =>$this->gen_url(array('app'=>$app_id, 'ctl'=>$ctl,'act'=>$act,'args'=>$arg)),
                'token'=>$tmp,
                );
        }
    }


    public function index($cat_id='',$price='all',$scontent=null,$nPage=1){
        $obj_groupbuy=kernel::single('groupbuy_base');
        $filter=array('cat_id'=>$cat_id,'price'=>$price);
        if(empty($scontent) && $_GET['scontent']){
            $scontent = utils::filter_input($_GET['scontent']);
        }
        if($scontent){
            $filter = array_merge($filter, array('scontent' => $scontent));
        }else{
			$filter = array_merge($filter, array('scontent' => ''));
		}

        $aData=$obj_groupbuy->get_list($filter,$nPage); 
        $result=$obj_groupbuy->getInfo($filter);
        $this->pagedata['activity']=$aData['data'];
        foreach($result as $k=>$v){
             $cat_arr[$result[$k]['cat_id']][] = array('name'=>$v['cat_name'],'gid'=>$v['gid']);
         }
          $cat = array();
          foreach($cat_arr as $k=>$v){
             $cat[$k]['name'] = $v[0]['name'];
          }
         $this->pagedata['cat']=$cat;
         $this->pagedata['catNum']=count($cat);
         $arr_args = array_values($filter);
         $this->pagination($nPage,$aData['pager']['total'],'index',$arr_args,'groupbuy',$ctl='site_grouplist');
         $imageDefault = app::get('image')->getConf('image.set');
         $this->pagedata['defaultImage']=$imageDefault['M']['default_image'];
         $this->pagedata['args']=$arr_args;
         $this->pagedata['price']=$price;
         $this->pagedata['now']=time();
         $this->set_tmpl('grouplist');
         $this->page('site/grouplist.html');
   }
}
