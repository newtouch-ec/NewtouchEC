<?php exit(); ?>a:3:{s:5:"value";s:17354:"


<?php if( $this->_vars['setting']['show_cat_lv2'] or $this->_vars['setting']['show_cat_lv3'] or $this->_vars['setting']['show_cat_sale'] or $this->_vars['setting']['show_cat_brand'] ){  $this->_vars[isbox]=1;  } ?>


<div id="cat_ex_vertical_<?php echo $this->_vars['widgets_id']; ?>" >
  <ul class="cat-ex-vertical">
  <?php $this->_env_vars['foreach'][cat_lv1_name]=array('total'=>count($this->_vars['data']['lv1']),'iteration'=>0);foreach ((array)$this->_vars['data']['lv1'] as $this->_vars['cat_lv1_key'] => $this->_vars['cat_lv1']){
                        $this->_env_vars['foreach'][cat_lv1_name]['first'] = ($this->_env_vars['foreach'][cat_lv1_name]['iteration']==0);
                        $this->_env_vars['foreach'][cat_lv1_name]['iteration']++;
                        $this->_env_vars['foreach'][cat_lv1_name]['last'] = ($this->_env_vars['foreach'][cat_lv1_name]['iteration']==$this->_env_vars['foreach'][cat_lv1_name]['total']);
?>
    <li class="cat-item lv1 <?php if( $this->_env_vars['foreach']['cat_lv1_name']['first'] ){ ?>first<?php }elseif( $this->_env_vars['foreach']['cat_lv1_name']['last'] ){ ?>last<?php } ?>"
      data-catid="<?php echo $this->_vars['cat_lv1']['cat_id']; ?>"
      data-typeid="<?php echo $this->_vars['cat_lv1']['type']; ?>"
      data-typename="<?php echo $this->_vars['cat_lv1']['type_name']; ?>">
      <div class="cat-root-box">
        <a href="<?php echo $this->_vars['cat_lv1']['url']; ?>" <?php if( $this->_vars['setting']['target_blank'] ){ ?>target="_blank"<?php } ?>>
          <span><?php echo $this->_vars['cat_lv1']['cat_name']; ?></span>
        </a>
        <?php if( $this->_vars['setting']['redundancy_catlv2'] ){ ?>
        <div class="cat-lv2-redundancy">
        </div>
        <?php } ?>

      </div>
      <?php if( $this->_vars['isbox'] ){ ?>
      <div class="cat-children-box">
        <?php if( $this->_vars['setting']['show_cat_sale'] or $this->_vars['setting']['show_cat_brand'] ){ ?>
        <div class="cat-link">
          <?php if( $this->_vars['setting']['show_cat_sale'] && count($this->_vars['cat_lv1']['sales'])>0 ){ ?>
          <dl class="cat-link-sales">
            <dt><span><?php echo $this->_vars['setting']['sales_title']; ?></span></dt>
            <dd>
            <?php $this->_env_vars['foreach'][sales_name]=array('total'=>count($this->_vars['cat_lv1']['sales']),'iteration'=>0);foreach ((array)$this->_vars['cat_lv1']['sales'] as $this->_vars['sale']){
                        $this->_env_vars['foreach'][sales_name]['first'] = ($this->_env_vars['foreach'][sales_name]['iteration']==0);
                        $this->_env_vars['foreach'][sales_name]['iteration']++;
                        $this->_env_vars['foreach'][sales_name]['last'] = ($this->_env_vars['foreach'][sales_name]['iteration']==$this->_env_vars['foreach'][sales_name]['total']);
?>
              <div class="cat-link-sale-item" data-endtime="<?php echo $this->_vars['sale']['to_time']; ?>">
                  <?php echo $this->_vars['sale']['name']; ?>
                  <p><?php echo $this->_vars['sale']['description']; ?></p>
              </div>
            <?php } unset($this->_env_vars['foreach'][sales_name]); ?>
            </dd>
          </dl>
          <?php }  if( $this->_vars['setting']['show_cat_brand'] && count($this->_vars['cat_lv1']['brand'])>0 ){ ?>
          <dl class="cat-link-brand">
            <dt><span><?php echo $this->_vars['setting']['brand_title']; ?></span></dt>
            <dd>
                        <?php if($this->_vars['cat_lv1']['brand'])foreach ((array)$this->_vars['cat_lv1']['brand'] as $this->_vars['bid']){  $this->_vars[brand]=$this->_vars['data']['brand_list']{$this->_vars['bid']};  if( $this->_vars['brand'] ){ ?>
                        <div class="cat-link-brand-item" >
                            <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_brand,'act' => index,'arg0' => $this->_vars['bid'])); ?>" class="img-link" <?php if( $this->_vars['setting']['target_blank'] ){ ?>target="_blank"<?php } ?>>
                                <img src="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['brand']['brand_logo']); ?>" />
                            </a>
                            <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_brand,'act' => index,'arg0' => $this->_vars['bid'])); ?>" <?php if( $this->_vars['setting']['target_blank'] ){ ?>target="_blank"<?php } ?>>
                                <span><?php echo $this->_vars['brand']['brand_name']; ?></span>
                            </a>
                        </div>
                        <?php }  } ?>
            </dd>
          </dl>
          <?php } ?>
                  </div>
                  <?php } ?>
      </div>
        <?php if( $this->_vars['setting']['box_flex'] ){ ?>
        <div class="cat-children-box-flex">&nbsp;</div>
        <?php }  } ?>
    </li>
  <?php } unset($this->_env_vars['foreach'][cat_lv1_name]); ?>
  </ul>

  <div style="display:none;">
    <?php if( $this->_vars['setting']['show_cat_lv2'] ){  $this->_env_vars['foreach'][cat_lv2_name]=array('total'=>count($this->_vars['data']['lv2']),'iteration'=>0);foreach ((array)$this->_vars['data']['lv2'] as $this->_vars['cat_lv2_key'] => $this->_vars['cat_lv2']){
                        $this->_env_vars['foreach'][cat_lv2_name]['first'] = ($this->_env_vars['foreach'][cat_lv2_name]['iteration']==0);
                        $this->_env_vars['foreach'][cat_lv2_name]['iteration']++;
                        $this->_env_vars['foreach'][cat_lv2_name]['last'] = ($this->_env_vars['foreach'][cat_lv2_name]['iteration']==$this->_env_vars['foreach'][cat_lv2_name]['total']);
?>
        <dl class="cat-item lv2"
                  data-catpid="<?php echo $this->_vars['cat_lv2']['pid']; ?>"
                  data-catid="<?php echo $this->_vars['cat_lv2']['cat_id']; ?>"
                  data-typeid="<?php echo $this->_vars['cat_lv2']['type']; ?>"
                  data-typename="<?php echo $this->_vars['cat_lv2']['type_name']; ?>">
          <dt>
            <a href="<?php echo $this->_vars['cat_lv2']['url']; ?>" <?php if( $this->_vars['setting']['target_blank'] ){ ?>target="_blank"<?php } ?>><span><?php echo $this->_vars['cat_lv2']['cat_name']; ?></span></a>
          </dt>
          <?php if( $this->_vars['setting']['show_cat_lv3'] ){ ?>
          <dd>
          </dd>
          <?php } ?>
        </dl>
      <?php } unset($this->_env_vars['foreach'][cat_lv2_name]);  }  if( $this->_vars['setting']['show_cat_lv3'] ){  $this->_env_vars['foreach'][cat_lv3_name]=array('total'=>count($this->_vars['data']['lv3']),'iteration'=>0);foreach ((array)$this->_vars['data']['lv3'] as $this->_vars['cat_lv3_key'] => $this->_vars['cat_lv3']){
                        $this->_env_vars['foreach'][cat_lv3_name]['first'] = ($this->_env_vars['foreach'][cat_lv3_name]['iteration']==0);
                        $this->_env_vars['foreach'][cat_lv3_name]['iteration']++;
                        $this->_env_vars['foreach'][cat_lv3_name]['last'] = ($this->_env_vars['foreach'][cat_lv3_name]['iteration']==$this->_env_vars['foreach'][cat_lv3_name]['total']);
?>
                <a href="<?php echo $this->_vars['cat_lv3']['url']; ?>" class="cat-item lv3"
                  data-catpid="<?php echo $this->_vars['cat_lv3']['pid']; ?>"
                  data-catid="<?php echo $this->_vars['cat_lv3']['cat_id']; ?>"
                  data-typeid="<?php echo $this->_vars['cat_lv3']['type']; ?>"
                  data-typename="<?php echo $this->_vars['cat_lv3']['type_name']; ?>" <?php if( $this->_vars['setting']['target_blank'] ){ ?>target="_blank"<?php } ?>><span><?php echo $this->_vars['cat_lv3']['cat_name']; ?></span></a>
      <?php } unset($this->_env_vars['foreach'][cat_lv3_name]);  } ?>
  </div>
</div>


<script type="text/javascript">

  addEvent('domready',function(){
    //var _t = $time();

    var container = $('cat_ex_vertical_<?php echo $this->_vars['widgets_id']; ?>');

    <?php if( $this->_vars['isbox'] ){ ?>
    var containerParentNode = container.parentNode;
          while(containerParentNode!=document.body){

            $(containerParentNode).setStyle('overflow','visible');


            containerParentNode = containerParentNode.parentNode;
          }
    var containerPos = container.getPosition([window]);
    var mousEenterTimer = 0,mouseLeaveTimer = 0;
    <?php } ?>

    container.getElements('li.lv1').each(function(item){

      <?php if( $this->_vars['isbox'] ){ ?>
      var ccbEl = item.getElement('div.cat-children-box');
      <?php }  if( $this->_vars['setting']['show_cat_lv2'] ){ ?>
      var catLv1ID =item.get('data-catid');
      var dls = container.getElements('dl[data-catpid='+catLv1ID+']');
      var ccEl  = new Element('div.cat-children').inject(ccbEl,'top').adopt(dls);
      var dls_length = dls.length;
      if(dls&&dls_length>1){
        dls[0].addClass('first');
        dls[dls_length-1].addClass('last');
      }

        <?php if( $this->_vars['setting']['redundancy_catlv2'] ){ ?>
          var tmpInject = [];
          dls.getElement('a').each(function(a){
            tmpInject.push(new Element('a',{href:a.get('href'),text:a.get('text')}));
          });
          item.getElement('.cat-lv2-redundancy').adopt(tmpInject);
        <?php }  }  if( $this->_vars['isbox'] ){ ?>
      item.addEvents({
        'mouseenter':function(){
          clearTimeout(mousEenterTimer);
          clearTimeout(this.retrieve('mouseLeaveTimer'));
          mousEenterTimer =(function(){
            this.addClass('mouseenter-cat');

            <?php if( $this->_vars['setting']['show_cat_brand'] ){ ?>

                            var imgMaxH = 0;
              var brandMaxH =  item.retrieve('brandMaxH');
              var brandItems = item.getElements('.cat-link-brand-item');
                            var imgBox = item.getElements('.img-link');
                            var brandImg = item.getElements('img');
              if(!brandMaxH){
                brandItems.each(function(brand){
                  brandMaxH = Math.max(brandMaxH,brand.getSize().y);
                });
                                brandImg.each(function(item){
                                    imgMaxH = Math.max(imgMaxH,item.getSize().y);
                                });
              }
              if(brandItems&&brandItems.length)
              brandItems.setStyles({height:brandMaxH,overflow:'hidden'});
              imgBox.setStyles({display:'block',height:imgMaxH,overflow:'hidden'});


            <?php } ?>


            var _pos1 = window.getScrollTop() - containerPos.y;
            var _pos2 =this.retrieve('_pos2');
            if(!_pos2)_pos2 =  this.getPosition().y+this.getSize().y;
            ccbEl.setStyle('top',_pos1>0?_pos1:0);
            var _pos3 = ccbEl.getPosition().y+ccbEl.getSize().y;
            var _limit = _pos3 - _pos2;
            var flexDeviate = 4;
            if(_limit<0){
              ccbEl.setStyle('top',ccbEl.getStyle('top').toInt()+Math.abs(_limit));
              flexDeviate = (-flexDeviate);
            }
            <?php if( $this->_vars['setting']['box_flex'] ){ ?>
            var ccbElCIS = ccbEl.getCoordinates(container);
                  delete(ccbElCIS['right']);delete(ccbElCIS['bottom']);
            this.getElement('.cat-children-box-flex').setStyles(Object.append(ccbElCIS,{
              top:ccbElCIS.top+flexDeviate,
              left:ccbElCIS.left+(<?php if( $this->_vars['setting']['box_left'] ){ ?>-<?php } ?>Math.abs(flexDeviate))
            }));
            <?php } ?>




          }).delay(200,this);
        },
        'mouseleave':function(){
          clearTimeout(mousEenterTimer);
          this.store('mouseLeaveTimer',
            mouseLeaveTimer =  this.removeClass.delay(150,this,['mouseenter-cat'])
            );
        }
      });
      <?php } ?>

    });

    <?php if( $this->_vars['setting']['show_cat_lv3'] ){ ?>
    container.getElements('.lv2 dd').each(function(item){
      var catLv2ID = item.getParent('.lv2').get('data-catid');
      item.adopt(container.getElements('a[data-catpid='+catLv2ID+']'));
    });
    <?php } ?>





    //console.info($time()-_t);


  });//end domready
</script>



<style type="text/css">
  .cat-ex-vertical{
    line-height: 20px; background: rgb(170,170,170);
    color:#333;
    width: <?php echo ((isset($this->_vars['setting']['container_width']) && ''!==$this->_vars['setting']['container_width'])?$this->_vars['setting']['container_width']:200); ?>px;
    position: relative;
  }

  .cat-ex-vertical li a,.cat-ex-vertical li span{display: block;}

  .cat-ex-vertical li span{padding: 5px 5px 5px 10px;}
  .cat-ex-vertical li{
    font-family: "Microsoft Yahei";
    font-size: 14px;
    border-bottom:rgb(231,199,152) 1px solid;
  }
  .cat-ex-vertical li.first{border-top: none;}
  .cat-ex-vertical li.last{border-bottom: none;}


  .cat-ex-vertical li .cat-root-box{border:<?php echo $this->_vars['setting']['box_border_width']; ?>px rgb(255,249,217) solid;}
  .cat-ex-vertical li .cat-root-box a{white-space:nowrap;color:white !important;}

  <?php if( $this->_vars['isbox'] ){ ?>
  .cat-children-box:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
  }
  .cat-children-box {display: inline-block;}
  * html .cat-children-box{display: block;}

  .cat-ex-vertical .cat-children-box{
    position: absolute;display: none;
    <?php if( $this->_vars['setting']['box_left'] ){ ?>
     left:-<?php echo $this->_vars['setting']['box_width']+$this->_vars['setting']['box_border_width']; ?>px;
    <?php }else{ ?>
     left:<?php echo $this->_vars['setting']['container_width']-$this->_vars['setting']['box_border_width']; ?>px;
    <?php } ?>
    top:0;
    font-family: Arail;font-size: 12px;
    width:<?php echo ((isset($this->_vars['setting']['box_width']) && ''!==$this->_vars['setting']['box_width'])?$this->_vars['setting']['box_width']:700); ?>px;
    overflow: hidden;
    line-height: 15px;
    border:<?php echo $this->_vars['setting']['box_border_width']; ?>px solid RGB(217,58,47);
    z-index: 90;
    background: #fff;
  }

  <?php if( $this->_vars['setting']['box_flex'] ){ ?>
  .cat-ex-vertical .cat-children-box-flex{
    background: #999;
    opacity: .4;
    filter:alpha(opacity=40);
    z-index: 80;position: absolute;display: none;
    }
  <?php } ?>
  .cat-ex-vertical li.mouseenter-cat{}
  .cat-ex-vertical li.mouseenter-cat .cat-root-box{
    border-color:RGB(217,58,47);
    position: relative;z-index: 100;
    <?php if( $this->_vars['setting']['box_left'] ){ ?>
    border-left:none;
    <?php }else{ ?>
    border-right:none;
    <?php } ?>

    background: white;
    color:black;
  }
  .cat-ex-vertical li.mouseenter-cat .cat-root-box a{color:black !important;}
  .cat-ex-vertical li.mouseenter-cat .cat-children-box,.cat-ex-vertical li.mouseenter-cat .cat-children-box-flex{
    display: block;
  }


  .cat-ex-vertical .cat-children,.cat-ex-vertical .cat-link{
    float:<?php echo ((isset($this->_vars['setting']['box_left']) && ''!==$this->_vars['setting']['box_left'])?$this->_vars['setting']['box_left']:'left'); ?>;
  }

  .cat-ex-vertical .cat-children dl,.cat-ex-vertical .cat-link dl{
    padding: 10px;
  }
  .cat-ex-vertical .cat-children{
    <?php if( $this->_vars['setting']['show_cat_sale'] or $this->_vars['setting']['show_cat_brand'] ){  $this->_vars[box_cc_width]=100-$this->_vars['setting']['box_link_width'];  }else{  $this->_vars[box_cc_width]=100;  } ?>
    width: <?php echo $this->_vars['box_cc_width']; ?>%;

  }

  .cat-ex-vertical .cat-link{
    <?php if( $this->_vars['setting']['show_cat_lv2'] ){ ?>
      width: <?php echo $this->_vars['setting']['box_link_width']; ?>%;
      background: RGB(255,253,231);
    <?php }else{ ?>
    width: 100%;
    <?php } ?>

  }

  .cat-ex-vertical .cat-children dl{border-bottom: 1px #ccc dotted;clear: both;display: inline-block;width: 100%;}
  .cat-ex-vertical .cat-children dl.last{border-bottom: none;}
  .cat-ex-vertical .cat-children dt,.cat-children dt a,.cat-children dt span{float: left; font-weight: bold;}
  <?php if( $this->_vars['setting']['show_cat_lv3'] ){ ?>
  .cat-ex-vertical .cat-children dt{width:<?php echo $this->_vars['setting']['cat_lv2_width']; ?>%;}
  .cat-ex-vertical .cat-children dd{display: inline-block;width: <?php echo 90-$this->_vars['setting']['cat_lv2_width']; ?>%}
  .cat-ex-vertical .cat-children dd a{float: left;}
  <?php }else{ ?>
  .cat-ex-vertical .cat-children dt{width:auto;}
  <?php } ?>
  .cat-ex-vertical .cat-link dt{font-size: 14px;font-weight: bold;padding: 5px;}
  .cat-ex-vertical .cat-link dd{padding: 10px;}

  .cat-ex-vertical .cat-link-sale-item{padding-left: 20px;line-height: 22px;}
  .cat-ex-vertical .cat-link-sale-item p{color: #666;}
  .cat-ex-vertical .cat-link-brand-item{float: left;margin-left: 10px;text-align: center;width: <?php echo $this->_vars['setting']['brand_logo_maxwidth']; ?>px;}
  .cat-ex-vertical .cat-link-brand-item img{width: 100%;}
  <?php } ?>


  .cat-lv2-redundancy{display: inline-block;overflow: hidden;}
  .cat-lv2-redundancy a{font-size: 12px;line-height: 18px;float: left;font-weight: normal;font-family: Arail;padding: 3px 3px 3px 10px;}


</style>
";s:8:"dateline";s:10:"1438844824";s:3:"ttl";s:1:"0";}