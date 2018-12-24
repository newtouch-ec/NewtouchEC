<?php exit(); ?>a:3:{s:5:"value";s:9834:"<div class="webwidth i_brand clb">
    <div class="i_brand_top">
        <h3>推荐品牌</h3>
        <ul>
          <?php $this->_env_vars['foreach']["tablist"]=array('total'=>count($this->_vars['data']['tab_info']),'iteration'=>0);foreach ((array)$this->_vars['data']['tab_info'] as $this->_vars['key'] => $this->_vars['item']){
                        $this->_env_vars['foreach']["tablist"]['first'] = ($this->_env_vars['foreach']["tablist"]['iteration']==0);
                        $this->_env_vars['foreach']["tablist"]['iteration']++;
                        $this->_env_vars['foreach']["tablist"]['last'] = ($this->_env_vars['foreach']["tablist"]['iteration']==$this->_env_vars['foreach']["tablist"]['total']);
?>
            <li <?php if( $this->_env_vars['foreach']['tablist']['first'] ){ ?>class="cur"<?php } ?> id="tab_name_<?php echo $this->_vars['item']['title_id']; ?>" >
                <!--<?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['item']['title'],30); ?>-->
            </li>
          <?php } unset($this->_env_vars['foreach']["tablist"]); ?>
        </ul>
    </div>
    <div class="i_brand_m clb">
        <div class="i_brand_ml fl">
            <a href="<?php echo $this->_vars['data']['left_piclink']; ?>"><img src="<?php echo $this->_vars['data']['left_pic']; ?>"/></a>
        </div>
        <div class="i_brand_mc fl">
          <?php if($this->_vars['data']['tab_info'])foreach ((array)$this->_vars['data']['tab_info'] as $this->_vars['key'] => $this->_vars['item']){  if( $this->_vars['item']['title_id'] == $this->_vars['data']['list'][$this->_vars['key']]['data_id'] ){ ?>
            <ul class="i_brand_mclist" id="brandlist_<?php echo $this->_vars['item']['title_id']; ?>" key="<?php echo $this->_vars['data']['list'][$this->_vars['key']]['id']; ?>">
              <?php if($this->_vars['data']['list'][$this->_vars['key']]['branddata'])foreach ((array)$this->_vars['data']['list'][$this->_vars['key']]['branddata'] as $this->_vars['brand']){ ?>
                <li>
                    <div class="viewport-flip">
                        <a target="_blank" name="in" class="list flipitem in" href="<?php echo $this->_vars['brand']['brand_url']; ?>">
                            <img class="img-lazyload" src="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['brand']['brand_logo']); ?>" />
                        </a>
                        <a target="_blank" name="out"  class="list flipitem flipname out" href="<?php echo $this->_vars['brand']['brand_url']; ?>">
                            <?php echo $this->_vars['brand']['brand_name']; ?>
                        </a>
                    </div>
                </li>
              <?php } ?>
            </ul>
            <?php }  } ?>
        </div>
        <div class="i_brand_mr fr">
            <a href="<?php echo $this->_vars['data']['right_piclink']; ?>"><img src="<?php echo $this->_vars['data']['right_pic']; ?>"/></a>
        </div>
    </div>
<div class="bare"></div>
</div>
<script>
var title = $$('.i_brand_top').getElement('ul').getChildren('li');
    title.each(function(item){
        item.addEvent('click',function(){
            var title_id=this.id;
            var key = title_id.substring(9);
            var brand_area = 'brandlist_'+key;

            $(this).getParent('ul').getChildren('li').each(function(e){
                e.removeClass('cur');
            });
            $(this).getParent('div.i_brand').getElement('div.i_brand_mc')
            .getChildren('ul').each(function(e){
                e.setStyle('display','none');
            });
            

            if($(brand_area).getElements('li').length < 1){
                if($(brand_area).get('key') != ''){
                    new Request.HTML({
                        url:'<?php echo kernel::router()->gen_url(array('app' => "b2c",'ctl' => "site_product",'act' => "ajaxGetWidgetBrands")); ?>',
                        method:'post',
                        update:$(brand_area),
                        data:{'linkid':$(brand_area).get('key'),'limit':24}
                    }).send();
                }
            }

            this.addClass('cur');
            $(brand_area).setStyle('display','');

        });
    });

    (function () { 
        
        //图片反转
        var flips = $$('.viewport-flip');
        for (var i = 0; i < flips.length; i++) {
            flips[i].eleList = flips[i].getElements('.flipitem');
            
            flips[i].backOrFront = function () {
                var _this = this;
                _this.eleList.each(function (e) {
                    if (e.hasClass('out')) {
                        _this.eleBack = e;
                    }else {
                        _this.eleFront = e;
                    }
                });
            };
            
            flips[i].backOrFront();
        }
        
        flips.addEvent('mouseenter', flipin).addEvent('mouseleave', flipout);
        
        function flipin(e) {
            var _this = this;
            if (checkFather(_this,e)) {
                clearTimeout(_this.timer);
                if (_this.eleFront.hasClass('out')) {
                    _this.eleBack.addClass("in").removeClass("out");
                }else {
                    _this.eleFront.addClass("out").removeClass("in");
                    _this.timer = setTimeout(function() {
                         _this.eleBack.addClass("in").removeClass("out");
                    }, 150);
                }
            }
        }
        
        function flipout(e) {
            var _this = this;
            if (checkFather(_this, e)) {
                clearTimeout(_this.timer);
                if (_this.eleBack.hasClass('out')) {
                    _this.eleFront.addClass("in").removeClass("out");
                }else {
                    _this.eleBack.addClass("out").removeClass("in");
                    _this.timer = setTimeout(function() {
                        _this.eleFront.addClass("in").removeClass("out");
                    }, 150);
                }
            }
        }
        
        function checkFather(that,e){
            var parent = e.relatedTarget;
             try {
                while ( parent && parent !== that ) {
                    parent = parent.parentNode;
                }
                return (parent !== that);
            } catch(e) { }
        }
    })();
</script> 
	<script>
		 
			var num={Name:"in",Namer:"out",tagName:"a",width:132,height:80,box:[]};
				
		 
			function LS_ifIE(fun){
			 	if ((navigator.userAgent.indexOf('MSIE') >= 0)&& (navigator.userAgent.indexOf('Opera') < 0)){
					fun(); 
					}
				}  
			
			
			
			function LS_getName(Name,tagName){ 
			
			 if (typeof(document.getElementsByTagName(tagName)=="undefined")){
					var backa=document.getElementsByTagName(tagName),
					backlist=[];
					for(var x=0;x<backa.length;x++){   
							if(backa[x].getAttribute("name")==Name){ 
									backlist.push(backa[x]); 
								}
						} 
						return backlist;
				}
				else{
						return document.getElementsByName(num.Name);
					} 
			}
			
			
		 
			function LS_onmouseover(){ 
						var box=LS_getName(num.Name,num.tagName);
		 					for(var x=0;x<box.length;x++){
									box[x].onmouseover=function(){
											num.box.push(this);
											LS_overtx(this);  
										}
							}
				}
				
				
			function LS_overpluse(){   
					 for(var x=0;x<num.box.length-1;x++){
							var box; 
							box=num.box[x].parentNode.getElementsByTagName('a')[1];  
							if(box.offsetWidth!=0){  
								num.box.splice(x,1);x--; 
								LS_outtx(box);
								}  
						}   
						 
				}
				
				
			function LS_overtx(div){ 
					div.onmouseover=function(){}; 
					var   
					v=num.width,
					y=v/10,v1=0,y1=num.height*0.8,v2=y1/10,
					box=div.parentNode.getElementsByTagName('a')[1],
					time=setInterval(function(){ 	
							if(v1>num.width&&y1>num.height){   clearTimeout(time);return false; }
							if(v>=y){ 
							div.style.width=v+"px";
							div.style.marginLeft=-v/2+"px";
							v=v>num.width?num.width:v;
							v=v-y; }
							else{ 
								box.style.display="block";
								box.style.width=v1+"px";
								box.style.marginLeft=-v1/2+"px";
								box.style.height=y1+"px";
								box.style.lineHeight=y1-2+"px";
								box.style.marginTop=-y1/2+"px";
								v1=v1>num.width?num.width:v1; 
								y1=y1>num.height?num.height:y1; 
								v1=v1+y;
								y1=y1+v2; 
								} 
						},1000/60);
				} 
			function LS_onmouseout(){
						var box=LS_getName(num.Namer,num.tagName);
		 					for(var x=0;x<box.length;x++){
									box[x].onmouseout=function(){
											 LS_outtx(this);
										}
							}
				}
				
			function LS_outtx(div){ 
						var
						w=num.width,
						w_=num.width/10,
						h=num.height,
						h_=h/10,
						box=div.parentNode.getElementsByTagName('a')[0],
						time;
						box.style.width=w+"px";
						box.style.left="50%";
						box.style.marginLeft=-w/2+"px";
						time=setInterval(function(){
								if(w==0){ box.onmouseover=function(){LS_overtx(box);num.box.push(box);LS_overpluse();}; clearTimeout(time); return false;  }
								w=w-w_;	 
								w=w>0?w:0;		
								div.style.width=w+"px";	
								div.style.marginLeft=-w/2+"px";	
							},1000/60);
				} 
		(function(){
			   
			  LS_ifIE(function(){LS_onmouseover()});
			  LS_ifIE(function(){LS_onmouseout()});  
			 
			  var time=setInterval(function(){if(num.box.length>1){LS_overpluse(); }},200); 
		})() 
    </script>
	
 ";s:8:"dateline";s:10:"1433317985";s:3:"ttl";s:1:"0";}