<?php exit(); ?>a:3:{s:5:"value";s:16777:"<style>
    #ex_slide_<?php echo $this->_vars['widgets_id']; ?>{ 
        width:<?php echo $this->_vars['data']['ad']['width']; ?>px;
        height:<?php echo $this->_vars['data']['ad']['height']; ?>px;
        overflow:hidden;
        position:relative;
    }
    #ex_slide_<?php echo $this->_vars['widgets_id']; ?> ol li{
        height:<?php echo $this->_vars['data']['ad']['height']; ?>px;
        width:<?php echo $this->_vars['data']['ad']['width']; ?>px;
        list-style:none outside none; 
        display:block;
        overflow:hidden;
        border:0;
        margin:0 0 0 0 ;
    }
#ex_slide_<?php echo $this->_vars['widgets_id']; ?> .slide-trigger{position:absolute;z-index:60; bottom:10px; left:50%;}
.slide-trigger li{ float:left; background:#626262;margin-right:5px;font-size: 0;text-indent: -999;height: 3px;width: 20px;}
.slide-trigger li.active{background:#c40000;}

</style>

<div class="floortwo webwidth clb">
    <div class="floorbt fl">
        <a name="floor_<?php echo $this->_vars['widgets_id']; ?>" class="js_floor_icon" img_src="<?php echo $this->_vars['data']['floor_icon']; ?>"></a>
        <h2 style="background:<?php echo $this->_vars['data']['bg_color']; ?>">
            <a href="<?php echo $this->_vars['data']['title_link']; ?>"><?php echo $this->_vars['data']['title']; ?></a>
        </h2>
        <ul class="floormenu">
            <?php if($this->_vars['data']['f_link'])foreach ((array)$this->_vars['data']['f_link'] as $this->_vars['key'] => $this->_vars['item']){ ?>
                <li><a href="<?php echo $this->_vars['item']['top_link_url']; ?>"><?php echo $this->_vars['item']['top_link_title']; ?></a></li>
            <?php } ?>
        </ul>
        <div class="floorbrand">
            <a class="pre fl" href="javascript:void(0);" id="<?php echo $this->_vars['widgets_id']; ?>_LeftArr"></a>
            <div class="case_list fl" id="<?php echo $this->_vars['widgets_id']; ?>_ISL_Cont_1">
                <?php if($this->_vars['data']['brand'])foreach ((array)$this->_vars['data']['brand'] as $this->_vars['k'] => $this->_vars['item']){ ?>
                    <ul>
                        <li>
                            <a href="<?php echo $this->_vars['item']['0']['brand_url']; ?>">
                                <img src='<?php echo kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['item']['0']['brand_logo']) && ''!==$this->_vars['item']['0']['brand_logo'])?$this->_vars['item']['0']['brand_logo']:$this->_vars['data']['defaultImage'])); ?>' alt="<?php echo $this->_vars['item']['0']['brand_name']; ?>"/>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->_vars['item']['1']['brand_url']; ?>">
                                <img src='<?php echo kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['item']['1']['brand_logo']) && ''!==$this->_vars['item']['1']['brand_logo'])?$this->_vars['item']['1']['brand_logo']:$this->_vars['data']['defaultImage'])); ?>' alt="<?php echo $this->_vars['item']['1']['brand_name']; ?>"/>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->_vars['item']['2']['brand_url']; ?>">
                                <img src='<?php echo kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['item']['2']['brand_logo']) && ''!==$this->_vars['item']['2']['brand_logo'])?$this->_vars['item']['2']['brand_logo']:$this->_vars['data']['defaultImage'])); ?>' alt="<?php echo $this->_vars['item']['2']['brand_name']; ?>"/>
                            </a>
                        </li>
                    </ul>
                <?php } ?>
            </div>
            <a href="javascript:void(0);" class="aft fr" id="<?php echo $this->_vars['widgets_id']; ?>_RightArr"></a>
        </div>
    </div>
    <div class="floortwo-mid fl">
        <!--轮播广告开始-->
        <div class="ex-slide1-box cl_zhi" style="width:<?php echo $this->_vars['data']['ad']['width']; ?>px;height:<?php echo $this->_vars['data']['ad']['height']; ?>px;overflow: hidden;margin:0 auto;">
            <div id="ex_slide_<?php echo $this->_vars['widgets_id']; ?>" class="ex-slide1">
                <ol class="switchable-content clearfix">
                <?php if($this->_vars['data']['ad']['pic'])foreach ((array)$this->_vars['data']['ad']['pic'] as $this->_vars['parentId'] => $this->_vars['parent']){ ?>
                    <li class="switchable-panel">
                        <a href="<?php echo $this->_vars['parent']['linktarget']; ?>">
                            <img src="images/transparent.gif" lazyload="<?php echo $this->_vars['parent']['link']; ?>" class="img-lazyload" title="<?php echo $this->_vars['data']['linkinfo']; ?>">
                        </a>
                    </li>
                <?php } ?>
                </ol>
                <ul class="switchable-triggerBox slide-trigger">
                    <?php $this->_vars[countnum]="1";  if($this->_vars['data']['ad']['pic'])foreach ((array)$this->_vars['data']['ad']['pic'] as $this->_vars['parentId'] => $this->_vars['parent']){ ?>
                        <li><?php echo $this->_vars['countnum']++; ?></li> 
                    <?php } ?> 
                </ul>
            </div>
        </div>
        <!--轮播广告结束-->
        <div class="floortwoad02">
            <a href="<?php echo $this->_vars['data']['piclink']['0']; ?>"><img src="<?php echo $this->_vars['data']['pic']['0']; ?>" /></a>
        </div>
    </div>
    <div class="floortwoad03 fl">
        <a href="<?php echo $this->_vars['data']['piclink']['1']; ?>"><img src="<?php echo $this->_vars['data']['pic']['1']; ?>" /></a>
    </div>
    <div class="floortwoad05 fl">
        <a href="<?php echo $this->_vars['data']['piclink']['3']; ?>"><img src="<?php echo $this->_vars['data']['pic']['3']; ?>" /></a>
    </div>
    <div class="floortwoad04 fl">
        <a href="<?php echo $this->_vars['data']['piclink']['2']; ?>"><img src="<?php echo $this->_vars['data']['pic']['2']; ?>" /></a>
    </div>
    <div class="floortwoad06 fl">
        <a href="<?php echo $this->_vars['data']['piclink']['4']; ?>"><img src="<?php echo $this->_vars['data']['pic']['4']; ?>" /></a>
    </div>
    <div class="floortwoad07 fl">
        <a href="<?php echo $this->_vars['data']['piclink']['5']; ?>"><img src="<?php echo $this->_vars['data']['pic']['5']; ?>" /></a>
    </div>
</div>
<script> 
window.addEvent('domready',function(){

    new Switchable('ex_slide_<?php echo $this->_vars['widgets_id']; ?>',{
        effect:'<?php echo $this->_vars['data']['ad']['switcheffect']; ?>',
        autoplay:<?php echo $this->_vars['data']['ad']['autoplay']; ?>
    });

});


var sina={
  $:function(objName){
  if(document.getElementById){
    return eval('document.getElementById("'+objName+'")');
  }else{
    return eval('document.all.'+objName);
  }
  },isIE:navigator.appVersion.indexOf("MSIE")!=-1?true:false,addEvent:function(l,i,I){
    if(l.attachEvent){
      l.attachEvent("on"+i,I);
    }else{
      l.addEventListener(i,I,false);
    }
  },delEvent:function(l,i,I){
    if(l.detachEvent){
      l.detachEvent("on"+i,I);
    }else{
      l.removeEventListener(i,I,false);
    }
  },readCookie:function(O){
    var o="",l=O+"=";
    if(document.cookie.length>0){
      var i=document.cookie.indexOf(l);
      if(i!=-1){
        i+=l.length
        ;var I=document.cookie.indexOf(";",i);
        if(I==-1)I=document.cookie.length;
        o=unescape(document.cookie.substring(i,I));
      }
    }
    return o;
  },writeCookie:function(i,l,o,c){
    var O="",I="";
    if(o!=null){
      O=new Date((new Date).getTime()+o*3600000);
      O="; expires="+O.toGMTString()
    };
    if(c!=null){
      I=";domain="+c;
    }
    document.cookie=i+"="+escape(l)+O+I;
  },readStyle:function(I,l){
    if(I.style[l]){
      return I.style[l];
    }else if(I.currentStyle){
      return I.currentStyle[l];
    }else if(document.defaultView&&document.defaultView.getComputedStyle){
      var i=document.defaultView.getComputedStyle(I,null);
      return i.getPropertyValue(l);
    }else{
    return null;
    }
  }
}

//滚动图片构造函数
function ScrollPic(scrollContId,arrLeftId,arrRightId,dotListId){
  this.scrollContId=scrollContId;
  this.arrLeftId=arrLeftId;
  this.arrRightId=arrRightId;
  this.dotListId=dotListId;
  this.dotClassName="dotItem";
  this.dotOnClassName="dotItemOn";
  this.dotObjArr=[];
  this.pageWidth=0;
  this.frameWidth=0;
  this.speed=10;
  this.space=10;
  this.pageIndex=0;
  this.autoPlay=true;
  this.autoPlayTime=5;

  var _autoTimeObj,
  _scrollTimeObj,
  _state="ready";
  this.stripDiv=document.createElement("DIV");
  this.listDiv01=document.createElement("DIV");
  this.listDiv02=document.createElement("DIV");
  if(!ScrollPic.childs){
    ScrollPic.childs=[];
  }
  this.ID=ScrollPic.childs.length;
  ScrollPic.childs.push(this);
  this.initialize=function(){
    if(!this.scrollContId){
      throw new Error("必须指定scrollContId.");
      return;
    }
    this.scrollContDiv=sina.$(this.scrollContId);
    if(!this.scrollContDiv){
      throw new Error("scrollContId不是正确的对象.(scrollContId = \""+this.scrollContId+"\")");
      return;
    }
    this.scrollContDiv.style.width=this.frameWidth+"px";
    this.scrollContDiv.style.overflow="hidden";
    this.listDiv01.innerHTML=this.listDiv02.innerHTML=this.scrollContDiv.innerHTML;
    this.scrollContDiv.innerHTML="";
    this.scrollContDiv.appendChild(this.stripDiv);
    this.stripDiv.appendChild(this.listDiv01);
    this.stripDiv.appendChild(this.listDiv02);
    this.stripDiv.style.overflow="hidden";
    this.stripDiv.style.zoom="1";
    this.stripDiv.style.width="32766px";
    //this.listDiv01.style.cssFloat="left";
    //this.listDiv02.style.cssFloat="left";
    if(!+[1,]){
      this.listDiv01.style.styleFloat="left";
      this.listDiv02.style.styleFloat="left";
    }else{
      this.listDiv01.style.cssFloat="left";
      this.listDiv02.style.cssFloat="left";
    }
    sina.addEvent(this.scrollContDiv,"mouseover",Function("ScrollPic.childs["+this.ID+"].stop()"));
    sina.addEvent(this.scrollContDiv,"mouseout",Function("ScrollPic.childs["+this.ID+"].play()"));
    if(this.arrLeftId){
      this.arrLeftObj=sina.$(this.arrLeftId);
      if(this.arrLeftObj){
        sina.addEvent(this.arrLeftObj,"mousedown",Function("ScrollPic.childs["+this.ID+"].rightMouseDown()"));
        sina.addEvent(this.arrLeftObj,"mouseup",Function("ScrollPic.childs["+this.ID+"].rightEnd()"));
        sina.addEvent(this.arrLeftObj,"mouseout",Function("ScrollPic.childs["+this.ID+"].rightEnd()"));
      }
    }
    if(this.arrRightId){
      this.arrRightObj=sina.$(this.arrRightId);
      if(this.arrRightObj){
        sina.addEvent(this.arrRightObj,"mousedown",Function("ScrollPic.childs["+this.ID+"].leftMouseDown()"));
        sina.addEvent(this.arrRightObj,"mouseup",Function("ScrollPic.childs["+this.ID+"].leftEnd()"));
        sina.addEvent(this.arrRightObj,"mouseout",Function("ScrollPic.childs["+this.ID+"].leftEnd()"));
      }
    }
    if(this.dotListId){
      this.dotListObj=sina.$(this.dotListId);
      if(this.dotListObj){
        var pages=Math.round(this.listDiv01.offsetWidth/this.frameWidth+0.4),i,tempObj;
        for(i=0;i<pages;i++){
          tempObj=document.createElement("span");
          this.dotListObj.appendChild(tempObj);
          this.dotObjArr.push(tempObj);
          if(i==this.pageIndex){
            tempObj.className=this.dotClassName;
          }else{
            tempObj.className=this.dotOnClassName;
          }
          tempObj.title="第"+(i+1)+"页";
          sina.addEvent(tempObj,"click",Function("ScrollPic.childs["+this.ID+"].pageTo("+i+")"));
        }
      }
    }
    if(this.autoPlay){
      this.play();
    }
  }
  this.leftMouseDown=function(){
    if(_state!="ready"){return;}
    _state="floating";
    _scrollTimeObj=setInterval("ScrollPic.childs["+this.ID+"].moveLeft()",this.speed);
  }
  this.rightMouseDown=function(){
    if(_state!="ready"){return;}
    _state="floating";
    _scrollTimeObj=setInterval("ScrollPic.childs["+this.ID+"].moveRight()",this.speed);
  }
  this.moveLeft=function(){
    if(this.scrollContDiv.scrollLeft+this.space>=this.listDiv01.scrollWidth){
      this.scrollContDiv.scrollLeft=this.scrollContDiv.scrollLeft+this.space-this.listDiv01.scrollWidth;
    }else{
      this.scrollContDiv.scrollLeft+=this.space;
    }
    this.accountPageIndex();
  }
  this.moveRight=function(){
    if(this.scrollContDiv.scrollLeft-this.space<=0){
      this.scrollContDiv.scrollLeft=this.listDiv01.scrollWidth+this.scrollContDiv.scrollLeft-this.space;
    }else{
      this.scrollContDiv.scrollLeft-=this.space;
    }
    this.accountPageIndex();
  }
  this.leftEnd=function(){
    if(_state!="floating"){return;}
    _state="stoping";
    clearInterval(_scrollTimeObj);
    var fill=this.pageWidth-this.scrollContDiv.scrollLeft%this.pageWidth;
    this.move(fill);
  }
  this.rightEnd=function(){
    if(_state!="floating"){return;}
    _state="stoping";
    clearInterval(_scrollTimeObj);
    var fill=-this.scrollContDiv.scrollLeft%this.pageWidth;this.move(fill);
  }
  this.move=function(num,quick){
    var thisMove=num/5;
    if(!quick){
      if(thisMove>this.space){
        thisMove=this.space};
        if(thisMove<-this.space){
          thisMove=-this.space;
        }
      }
      if(Math.abs(thisMove)<1&&thisMove!=0){
        thisMove=thisMove>=0?1:-1;
      }else{
        thisMove=Math.round(thisMove);
      }
      var temp=this.scrollContDiv.scrollLeft+thisMove;
      if(thisMove>0){
        if(this.scrollContDiv.scrollLeft+thisMove>=this.listDiv01.scrollWidth){
          this.scrollContDiv.scrollLeft=this.scrollContDiv.scrollLeft+thisMove-this.listDiv01.scrollWidth;
        }else{
          this.scrollContDiv.scrollLeft+=thisMove;
        }
      }else{
        if(this.scrollContDiv.scrollLeft-thisMove<=0){
          this.scrollContDiv.scrollLeft=this.listDiv01.scrollWidth+this.scrollContDiv.scrollLeft-thisMove;
        }else{
          this.scrollContDiv.scrollLeft+=thisMove;
        }
      }
      num-=thisMove;
      if(Math.abs(num)==0){
        _state="ready";
        if(this.autoPlay){this.play();}
        this.accountPageIndex();
        return;
      }else{
        this.accountPageIndex();
        setTimeout("ScrollPic.childs["+this.ID+"].move("+num+","+quick+")",this.speed);
      }
  }
  this.next=function(){
    if(_state!="ready"){
      return;
    }
    _state="stoping";
    this.move(this.pageWidth,true);
  }
  this.play=function(){
    if(!this.autoPlay){
      return;
    }
    clearInterval(_autoTimeObj);
    _autoTimeObj=setInterval("ScrollPic.childs["+this.ID+"].next()",this.autoPlayTime*1000);
  }
  this.stop=function(){
    clearInterval(_autoTimeObj);
  }
  this.pageTo=function(num){
    if(_state!="ready"){return;}
    _state="stoping";
    var fill=num*this.frameWidth-this.scrollContDiv.scrollLeft;this.move(fill,true);
  }
  this.accountPageIndex=function(){
    this.pageIndex=Math.round(this.scrollContDiv.scrollLeft/this.frameWidth);
    if(this.pageIndex>Math.round(this.listDiv01.offsetWidth/this.frameWidth+0.4)-1){
      this.pageIndex=0;
    }
    var i;
    for(i=0;i<this.dotObjArr.length;i++){
      if(i==this.pageIndex){
        this.dotObjArr[i].className=this.dotClassName;
      }else{
        this.dotObjArr[i].className=this.dotOnClassName;
      }
    }
  }
}


var scrollPic_02 = new ScrollPic();
scrollPic_02.scrollContId   = "<?php echo $this->_vars['widgets_id']; ?>_ISL_Cont_1"; //内容容器ID
scrollPic_02.arrLeftId      = "<?php echo $this->_vars['widgets_id']; ?>_LeftArr";//左箭头ID
scrollPic_02.arrRightId     = "<?php echo $this->_vars['widgets_id']; ?>_RightArr"; //右箭头ID

scrollPic_02.frameWidth     = 134;//显示框宽度
scrollPic_02.pageWidth      = 134; //翻页宽度

scrollPic_02.speed          = 10; //移动速度(单位毫秒，越小越快)
scrollPic_02.space          = 134; //每次移动像素(单位px，越大越快)
scrollPic_02.autoPlay       = true; //自动播放
scrollPic_02.autoPlayTime   = 3; //自动播放间隔时间(秒)

scrollPic_02.initialize(); //初始化
</script> 
";s:8:"dateline";s:10:"1408608622";s:3:"ttl";s:1:"0";}