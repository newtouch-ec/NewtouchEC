<?php exit(); ?>a:3:{s:5:"value";s:8979:"<a name="floor_<?php echo $this->_vars['widgets_id']; ?>" class="js_floor_icon" img_src="<?php echo $this->_vars['data']['floor_icon']; ?>"></a>
<div class="todaymain fl">
  <h2>
    <ins>每日精彩汇</ins>
    <!-- 自定义关键词链接 开始 -->
    <?php if( $this->_vars['data']['tj_link'] ){  if($this->_vars['data']['tj_link'])foreach ((array)$this->_vars['data']['tj_link'] as $this->_vars['link_key'] => $this->_vars['link_item']){ ?>
        <a href="<?php echo $this->_vars['link_item']['linkaddr']; ?>" title="<?php echo $this->_vars['link_item']['linktitle']; ?>" target="_blank"><?php echo $this->_vars['link_item']['linktitle']; ?></a>
      <?php }  } ?>
    <!-- 自定义关键词链接 结束 -->
  </h2>

  <!-- 推荐品牌 开始 -->
  <?php if( $this->_vars['data']['brands'] ){ ?>
    <ul class="todayshoper clb">
      <?php if($this->_vars['data']['brands'])foreach ((array)$this->_vars['data']['brands'] as $this->_vars['brand_key'] => $this->_vars['brand_item']){ ?>
        <li>
          <a href="<?php echo $this->_vars['brand_item']['linktarget']; ?>" title="<?php echo $this->_vars['brand_item']['linkinfo']; ?>" target="_blank">
            <img src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['brand_item']['link']); ?>" class="img-lazyload" />
          </a>
        </li>
      <?php } ?>
    </ul>
  <?php } ?>
  <!-- 推荐品牌 结束 -->

  <!-- 精彩汇图片展示 开始 -->
  <?php if( $this->_vars['data']['wonderful'] ){ ?>
    <ul class="todaycp clb">
      <?php if($this->_vars['data']['wonderful'])foreach ((array)$this->_vars['data']['wonderful'] as $this->_vars['wdf_key'] => $this->_vars['wdf_item']){ ?>
        <li>
          <a href="<?php echo $this->_vars['wdf_item']['linktarget']; ?>" title="<?php echo $this->_vars['wdf_item']['linkinfo']; ?>" target="_blank">
            <img src="images/transparent.gif" lazyload="<?php echo $this->_vars['wdf_item']['link']; ?>" class="img-lazyload" />
          </a>
        </li>
      <?php } ?>
    </ul>
  <?php } ?>
  <!-- 精彩汇图片展示 结束 -->
</div>

<!-- 团购活动 开始 -->
<div class="todayhd fl">
  <input class="js_start_time" type="hidden" name="timedbuy['start_time']" value="<?php echo $this->_vars['data']['group_activity']['start_time']; ?>">
  <input class="js_end_time" type="hidden" name="timedbuy['end_time']" value="<?php echo $this->_vars['data']['group_activity']['end_time']; ?>">
  <input class="js_now_time" type="hidden" name="timedbuy['now_time']" value="<?php echo $this->_vars['data']['group_activity']['now_time']; ?>">

  <div class="todayhd-time js_gotime">
    <p>距离团购结束仅剩：</p>
    <i class="js_hour">22</i>时<i class="js_minute">22</i>分<i class="js_second">22</i>秒
  </div>

  <div class="todayhd-pic">
    <a href="<?php echo $this->_vars['data']['group_show']['url']; ?>" title="<?php echo $this->_vars['data']['group_show']['info']; ?>" target="_blank">
      <img src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['data']['group_show']['pic']); ?>" class="img-lazyload" />
    </a>
  </div>
</div>
<!-- 团购活动 结束 -->

<!-- 新闻公告 开始 -->
<div class="todaynewsbox fr">
  <div class="todaynews">
    <h2><?php if( $this->_vars['data']['news']['show_more'] == '1' ){ ?><a href="<?php echo $this->_vars['data']['news']['node_url']; ?>">更多></a><?php }  echo $this->_vars['data']['news']['node_name']; ?></h2>
    <?php if( $this->_vars['data']['news']['article_list'] ){ ?>
      <ul>
        <?php if($this->_vars['data']['news']['article_list'])foreach ((array)$this->_vars['data']['news']['article_list'] as $this->_vars['art_key'] => $this->_vars['art_item']){ ?>
          <li><a href="<?php echo $this->_vars['art_item']['article_url']; ?>" title="<?php echo $this->_vars['art_item']['title']; ?>"><?php echo $this->_vars['art_item']['title']; ?></a></li>
        <?php } ?>
      </ul>
    <?php } ?>
  </div>
  <div class="todaynews-pic">
    <a href="<?php echo $this->_vars['data']['jp_show']['url']; ?>" title="<?php echo $this->_vars['data']['jp_show']['info']; ?>" target="_blank">
      <img src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['data']['jp_show']['pic']); ?>" class="img-lazyload" />
    </a>
  </div>
</div>
<!-- 新闻公告 结束 -->

<script>
    /************** 倒计时 begin *************/
    (function(){
        var timestamp_statues = (new Date()).valueOf();
        var timeCount = timestamp_statues;
        var timeCount = this.timeCount = {
            init:function(nowtime,endtime,dom){
                var diff = Math.abs((nowtime.getTime() - endtime.getTime())/1000);
                var secondDiff = diff % 60;
                var minuteDiff = ((diff - secondDiff)/60) % 60;
                /* 此处将倒计时的天数去掉 modified by zlj 2014-2-27 17:28:15
                var hourDiff = ((diff - secondDiff  - minuteDiff*60)/3600) % 24;
                var dayDiff = (diff - secondDiff  - minuteDiff*60 - hourDiff*3600) / 86400;
                var timeDiff = [dayDiff,hourDiff,minuteDiff,secondDiff];
                */
                var hourDiff = (diff - secondDiff - minuteDiff*60)/3600;
                var timeDiff = [hourDiff,minuteDiff,secondDiff];
                this.s = (function(){this.calcTime.periodical(1000,this,{
                        time:timeDiff,
                        dom:dom
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
            judgeTime : function(timeDiff){
                if(timeDiff[2]< 0  && timeDiff[1]>0){
                    timeDiff[2] = 59;
                    timeDiff[1]--;
                    return timeDiff;
                }else if(timeDiff[2] <0 && timeDiff[1]==0 && timeDiff[0]>0){
                    timeDiff[2] = 59
                    timeDiff[1] = 59;
                    timeDiff[0]--;
                    return timeDiff;
                }else if(timeDiff[2] <0 && timeDiff[1]==0 && timeDiff[0]==0){
                    timeDiff[2] = 59
                    timeDiff[1] = 59;
//                    timeDiff[1] = 23;//modified by zlj 2014-2-27 17:29:02 去掉天数
                    timeDiff[0]--;
                    return timeDiff;
                }else if(timeDiff[2]==0 && timeDiff[1]==0 && timeDiff[0]==0){
                    $clear(this.s);
                    return;
                }
            },
            calcTime : function (obj){
                if(!obj.dom) return;
                var _timeDiff = obj.time;
                this.addZero(_timeDiff);
                this.formatToInt(_timeDiff);
                _timeDiff[2]--;//modified by zlj 2014-3-3 13:57:17
                this.judgeTime(_timeDiff);
                this.addZero(_timeDiff);
                var dom = obj.dom;
                dom.second.innerHTML = _timeDiff[2];
                dom.minute.innerHTML = _timeDiff[1];
                dom.hour.innerHTML = _timeDiff[0];
//                dom.day.innerHTML = _timeDiff[0];//modified by zlj 2014-2-27 17:29:40 去掉天数
            }
        };
    })();

    (function(){
        $$('div.js_gotime').each(function(el){
            var nowtime = el.getPrevious('input.js_now_time').get('value');
            var timeNow=new Date(nowtime * 1000);

            var endtime = el.getPrevious('input.js_end_time').get('value');
            var timeEnd= new Date(endtime * 1000);

            var starttime = el.getPrevious('input.js_start_time').get('value');
            var timeStart= new Date(starttime * 1000);

            var dom = {
                second:el.getElement('.js_second'),
                minute:el.getElement('.js_minute'),
                hour:el.getElement('.js_hour')
//                    day:el.getElement('.js_day')//modified by zlj 2014-2-27 17:30:12 去掉天数
            };

            if(timeStart > timeNow){
                timeCount.init(timeStart,timeNow,dom);
            }else if(timeNow >= timeStart && timeNow <timeEnd){
                timeCount.init(timeNow,timeEnd,dom);
            }
        });
    })();
    /************** 倒计时 end *************/
</script>";s:8:"dateline";s:10:"1409816991";s:3:"ttl";s:1:"0";}