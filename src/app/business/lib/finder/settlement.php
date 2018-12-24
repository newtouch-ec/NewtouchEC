<?php

/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */

class business_finder_settlement
{
    var $detail_item;
    var $detail_settlement;
    var $detail_refund;
    var $pagelimit = 10;

    public function __construct($app)
    {
        $this->app = $app;
        $this->controller = app::get('business')->controller('admin_settlement');
        $this->detail_item = app::get('business')->_('当期结算明细');
        $this->detail_settlement = app::get('business')->_('往期负结算单据');
        $this->detail_refund = app::get('business')->_('往期未结算售后');
    }

    function detail_item($bill_no = null)
    {
        if (!$bill_no)
            return null;
        $nPage = $_GET['detail_item'] ? $_GET['detail_item'] : 1;
        $app = app::get('business');
        $item = $app->model('settlement_item');
        $data = $item->getList('*', array('settlement_no' => $bill_no,'item_type'=>"order"), $this->
            pagelimit * ($nPage - 1), $this->pagelimit);
        $account_info = $item->getList('sum(account) as account_all,sum(order_cut) as order_cut_all', array('settlement_no' => $bill_no,'item_type'=>"order"));
        if ($bill_no)
        {
            $row = $item->getList('id', array('settlement_no' => $bill_no,'item_type'=>"order"));
            $count = sizeof($row);
        }
        $render = $app->render();
        $render->pagedata['items'] = $data;
        $render->pagedata['account_info'] = $account_info;
        if ($_GET['page'])
            unset($_GET['page']);
        $_GET['page'] = 'detail_item';
        $this->controller->pagination($nPage, $count, $_GET);
        return $render->fetch('admin/settlement/page_item.html');
    }

    function detail_settlement($bill_no = null)
    {
        if (!$bill_no)
            return null;
        $nPage = $_GET['detail_settlement'] ? $_GET['detail_settlement'] : 1;
        $app = app::get('business');
        $item = $app->model('settlement');
        $data = $item->dump(array('settlement_no' => $bill_no),'pre_settlement,pre_settlement_cut');
        if($data){
            $settlement_nos = explode(',',$data['pre_settlement']);
            $datas = $item->getList('*', array('settlement_no|in' => $settlement_nos), $this->
            pagelimit * ($nPage - 1), $this->pagelimit);
            if ($settlement_nos)
            {
                $count = sizeof($settlement_nos);
            }

            $render = $app->render();
            $render->pagedata['items'] = $datas;
            $render->pagedata['data'] = $data;
            if ($_GET['page'])
                unset($_GET['page']);
            $_GET['page'] = 'detail_settlement';
            $this->controller->pagination($nPage, $count, $_GET);
            return $render->fetch('admin/settlement/detail_settlement.html');
        }else{
            return null;
        }
        
    }

    function detail_refund($bill_no = null)
    {
        if (!$bill_no)
            return null;
        $nPage = $_GET['detail_refund'] ? $_GET['detail_refund'] : 1;
        $app = app::get('business');
        $item = $app->model('settlement_item');
        $obj = $app->model('settlement');
        $pre_refund_recut = $obj->dump(array('settlement_no' => $bill_no),'pre_refund_recut,b_pre_refund_recut,p_pre_refund_recut');
        $data = $item->getList('*', array('settlement_no' => $bill_no,'item_type'=>'refund'), $this->
            pagelimit * ($nPage - 1), $this->pagelimit);
        if ($bill_no)
        {
            $row = $item->getList('id', array('settlement_no' => $bill_no,'item_type'=>'refund'));
            $count = sizeof($row);
        }

        $render = $app->render();
        $render->pagedata['items'] = $data;
        $render->pagedata['pre_refund_recut'] = $pre_refund_recut;
        if ($_GET['page'])
            unset($_GET['page']);
        $_GET['page'] = 'detail_refund';
        $this->controller->pagination($nPage, $count, $_GET);
        return $render->fetch('admin/settlement/detail_refund.html');
    }


    var $column_control = '操作';
    var $column_control_width = 100;

 	function column_control($row){
		$settlement = app::get('business')->model('settlement');
        $settlement_data = $settlement->dump($row['settlement_no'],'*');

		$url = explode('=',$_SERVER['QUERY_STRING']);
		$string = $url[3];
		
        $res = '';
		if($settlement_data['is_balance'] == '2' || $settlement_data['is_balance'] == '4'){
			$res = $res.'<a href="index.php?app=business&ctl=admin_settlement&act=settlement_balance&settlement_no='.$row['settlement_no'].'"  >'.app::get('business')->_('结算').'</a>';
		}

        return $res;
    }

}
