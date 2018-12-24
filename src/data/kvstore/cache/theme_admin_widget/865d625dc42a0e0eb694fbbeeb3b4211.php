<?php exit(); ?>a:3:{s:5:"value";s:11036:"<div style="border-bottom:2px solid #ca1927;height:38px;"><h3>精品推荐区</h3></div>

<div class="grounp_hotbox">
  <ul class="grounp_hotlist" id="group_products">
	<?php if($this->_vars['data'])foreach ((array)$this->_vars['data'] as $this->_vars['item']){ ?>
    <li>
      <?php $this->_vars["cimage"]=kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['item']['image_codeid']) && ''!==$this->_vars['item']['image_codeid'])?$this->_vars['item']['image_codeid']:$this->_vars['item']['image']),'m');  $this->_vars["gimage"]=kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['cimage']) && ''!==$this->_vars['cimage'])?$this->_vars['cimage']:$this->_vars['item']['defaultImage']),'m'); ?>
      
      <div class="grounp_indexr fr">
            <a target="_blank" class="group_img" href="<?php echo kernel::router()->gen_url(array('app' => groupbuy,'ctl' => site_product,'act' => index,'args' => $this->_vars['item']['args'])); ?>"><img src="<?php echo $this->_vars['gimage']; ?>"></a>
            
            <div class="group_btnr">
		  <!--<?php if( $this->_vars['item']['now'] >= $this->_vars['item']['start_time'] && $this->_vars['item']['now'] <= $this->_vars['item']['end_time'] ){  if( $this->_vars['item']['remainnums'] != '' && $this->_vars['item']['remainnums'] <= 0 ){ ?>
				  <a class="btn_b">已售完</a>
			  <?php }else{ ?>
				  <a href="<?php echo kernel::router()->gen_url(array('app' => groupbuy,'ctl' => site_product,'act' => index,'args' => $this->_vars['item']['args'])); ?>" target="_blank" class="btn_a">我要团</a>
			  <?php }  }elseif( $this->_vars['item']['now'] < $this->_vars['item']['start_time'] ){ ?>
			  <a class="btn_c">未开始</a>
		  <?php }elseif( $this->_vars['item']['now'] > $this->_vars['item']['end_time'] ){ ?>
			  <a class="btn_b">已结束</a>
		  <?php } ?>-->
          
          <?php if( $this->_vars['item']['now'] >= $this->_vars['item']['start_time'] && $this->_vars['item']['now'] <= $this->_vars['item']['end_time'] ){  if( $this->_vars['item']['remainnums'] != '' && $this->_vars['item']['remainnums'] <= 0 ){ ?>
				  <a class="btn_b"><!--已售完--></a>
			  <?php }else{ ?>
				  <a href="<?php echo kernel::router()->gen_url(array('app' => groupbuy,'ctl' => site_product,'act' => index,'args' => $this->_vars['item']['args'])); ?>" target="_blank" class="btn_a"><!--我要团--></a>
			  <?php }  }elseif( $this->_vars['item']['now'] < $this->_vars['item']['start_time'] ){ ?>
			  <a class="btn_c">未开始</a>
		  <?php }elseif( $this->_vars['item']['now'] > $this->_vars['item']['end_time'] ){ ?>
			  <a class="btn_b"><!--已结束--></a>
		  <?php } ?>
          
          <!--
          <a class="btn_b">已售完</a>
          <a class="btn_c">未开始</a>
          <a class="btn_b">已结束</a>
        -->
        </div>
            
      </div>
      
      <div class="grounp_indexl fl">
      <a target="_blank" class="group_name" href="<?php echo kernel::router()->gen_url(array('app' => groupbuy,'ctl' => site_product,'act' => index,'args' => $this->_vars['item']['args'])); ?>"><?php echo $this->_vars['item']['goods_name']; ?></a>
      <div class="group_people">已有<i><?php echo $this->_vars['item']['nums'] - $this->_vars['item']['remainnums']; ?></i>人已购买</div>
      <div class="group_price">
        <div class="group_pricel fl">
          <div class="group_buy"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['item']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></div>
          <div class="group_sprice">
            <div class="group_namor"><del><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['item']['mktprice'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></del></div>
            <div class="group_sall">节省：<?php echo $this->_vars['item']['mktprice']-$this->_vars['item']['price']; ?></div>
          </div>
        </div>
        
      </div>
      <div class="group_time_people">
        <div class="fl group_time" starttime="<?php echo $this->_vars['item']['start_time']; ?>" endtime="<?php echo $this->_vars['item']['end_time']; ?>" gid="<?php echo $this->_vars['item']['gid']; ?>">
           <b></b>
          <span class="day">0</span><span>天</span>
          <span class="hour">0</span><span>小时</span>
          <span class="minute">0</span><span>分</span>
          <span class="second">0</span><span>秒</span>
        </div>
        
      </div>
         
      </div>
      
      
      
      
      
      
    </li>
    <?php } ?>
  </ul>
</div>
<script>
(function() {
    var timestamp_statues = (new Date()).valueOf();
    var timeCount=timestamp_statues;
    var timeCount = this.timeCount = {
        init:function(nowtime,endtime,dom,item){
            var diff = Math.abs((nowtime - endtime)/1000);
            var secondDiff = diff % 60;
            var minuteDiff = ((diff - secondDiff)/60) % 60;
            var hourDiff = ((diff - secondDiff  - minuteDiff*60)/3600) % 24;
            var dayDiff = (diff - secondDiff  - minuteDiff*60 - hourDiff*3600) / 86400;
            var timeDiff = [dayDiff,hourDiff,minuteDiff,secondDiff];
            this.s = (function(){this.calcTime.periodical(1000,this,{
                    time:timeDiff,
                    dom:dom,
                    item:item
                })}).delay(100,this);
        },
        addZero:function(timeDiff){
            for(var i=0;i<timeDiff.length;i++){
                if(timeDiff[i].toString().length<2){
                    timeDiff[i] = "0" + timeDiff[i].toString();
                    return timeDiff;
                }
            }
        },
        formatToInt : function(timeDiff){
            for(var i=0;i<timeDiff.length;i++){
                parseInt(timeDiff[i]);
            };
            return timeDiff;
        },
        judgeTime : function(timeDiff,item){
            if(timeDiff[3]< 0  && timeDiff[2]>0){
                timeDiff[3] = 59;
                timeDiff[2]--;
                return timeDiff;
            }else if(timeDiff[3] <0 && timeDiff[2]==0 && timeDiff[1]>0){
                timeDiff[3] = 59
                timeDiff[2] = 59;
                timeDiff[1]--;
                return timeDiff;
            }else if(timeDiff[3] <0 && timeDiff[2]==0 && timeDiff[1]==0 && timeDiff[0]>0){
                timeDiff[3] = 59
                timeDiff[2] = 59;
                timeDiff[1] = 23;
                timeDiff[0]--;
                return timeDiff;
            }else if(timeDiff[3]==0 && timeDiff[2]==0 && timeDiff[1]==0 && timeDiff[0]==0){
                item.empty();
                reloadTime(item);
                return;
            }
        },
        calcTime : function (obj){
            if(!obj.dom) return;
            var _timeDiff = obj.time;
            //this.addZero(_timeDiff);
            this.formatToInt(_timeDiff);
            _timeDiff[3]--;
            this.judgeTime(_timeDiff,obj.item);
            //this.addZero(_timeDiff);
            var dom = obj.dom;
            dom.second.innerHTML = _timeDiff[3];
            dom.minute.innerHTML = _timeDiff[2];
            dom.hour.innerHTML = _timeDiff[1];
            dom.day.innerHTML = _timeDiff[0];
        }
    }
})();


(function(){
    // var timeNow = "<?php echo $this->_vars['data']['nowtime']; ?>"*1000;
    var random = parseInt(10000000000*Math.random());
    var timeNow;
    new Request({
      url: '<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => getCurrentTime)); ?>', 
      method: 'post',
      async:false,
      onSuccess:function(re){
        timeNow = new Date(re*1000);;
      }
    }).send('random='+random);
    
    $ES('.group_time').each(function(item){
        var timeEnd= item.get('endtime') * 1000;
        var timeStart = item.get('starttime') * 1000;
        var dom = {
            second: item.getElement('.second'),
            minute:item.getElement('.minute'),
            hour:item.getElement('.hour'),
            day:item.getElement('.day')
        };
        if(timeStart > timeNow){
            timeCount.init(timeStart,timeNow,dom,item);
        }else if(timeNow >= timeStart && timeNow <timeEnd){
            timeCount.init(timeNow,timeEnd,dom,item);
        }
    });
})();

function reloadTime(item){
    new Element('span',{'html':0,'class':'day'}).inject(item,'bottom');
    new Element('span',{'html':'天'}).inject(item,'bottom');
    new Element('span',{'html':0,'class':'hour'}).inject(item,'bottom');
    new Element('span',{'html':'小时'}).inject(item,'bottom');
    new Element('span',{'html':0,'class':'minute'}).inject(item,'bottom');
    new Element('span',{'html':'分'}).inject(item,'bottom');
    new Element('span',{'html':0,'class':'second'}).inject(item,'bottom');
    new Element('span',{'html':'秒'}).inject(item,'bottom');
    // var timeNow = Date.parse(new Date());

    var random = parseInt(10000000000*Math.random());
    var timeNow;
    new Request({
      url: '<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => getCurrentTime)); ?>', 
      method: 'post',
      async:false,
      onSuccess:function(re){
        timeNow = new Date(re*1000);;
      }
    }).send('random='+random);

    var timeEnd= item.get('endtime') * 1000;
    var timeStart = item.get('starttime') * 1000;
    var dom = {
        second: item.getElement('.second'),
        minute:item.getElement('.minute'),
        hour:item.getElement('.hour'),
        day:item.getElement('.day')
    };

    var btn = item.getParent('li').getElement('.groupBtn');
    var gid = item.get('gid');
    if(timeStart > timeNow){
        btn.removeClass('group_pro_buy');
        btn.addClass('group_pro_buy_01');
        btn.getElement('a').removeProperty('href');
        btn.getElement('a').innerHTML = '未开始';
        timeCount.init(timeStart,timeNow,dom,item);
    }else if(timeNow >= timeStart && timeNow <timeEnd){
        btn.removeClass('group_pro_buy_01');
        btn.addClass('group_pro_buy');
        btn.getElement('a').set('href',"<?php echo kernel::router()->gen_url(array('app' => groupbuy,'ctl' => site_product,'act' => index,'arg0' => '"+gid+"')); ?>");
        btn.getElement('a').innerHTML = '我要团';
        timeCount.init(timeNow,timeEnd,dom,item);
    }else if(timeNow >= timeEnd) {
        btn.removeClass('group_pro_buy');
        btn.addClass('group_pro_buy_01');
        btn.getElement('a').removeProperty('href');
        btn.getElement('a').innerHTML = '已结束';

    }
}
</script>
";s:8:"dateline";s:10:"1433294469";s:3:"ttl";s:1:"0";}