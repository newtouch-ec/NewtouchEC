<?php exit(); ?>a:3:{s:5:"value";s:2308:"<style>
  #top_link_area .add-title,
  #top_link_area .add-url,
  #top_link_area .delete{float:left;_display:inline;margin-left:5px;}
  #top_link_area .delete{height:20px;width:16px;cursor:pointer;}
  #top_link_area .top-link-item{background-color:#E2E8EB;padding:5px 5px 3px;line-height:22px;margin:2px 0;}
  #add_top_link{cursor:pointer;}
</style>
<div class="tableform">
	<input type="button" id="add_top_link" value="添加文字链接" />
	<ul id="top_link_area">

	</ul>
</div>

<script>
	var TopLinkTitle = new Array(<?php if($this->_vars['setting']['top_link_title'])foreach ((array)$this->_vars['setting']['top_link_title'] as $this->_vars['title_item']){ ?> "<?php echo $this->_vars['title_item']; ?>", <?php } ?>"end");
    TopLinkTitle.pop();
    var TopLinkUrl = new Array(<?php if($this->_vars['setting']['top_link_url'])foreach ((array)$this->_vars['setting']['top_link_url'] as $this->_vars['url_item']){ ?>"<?php echo $this->_vars['url_item']; ?>",<?php } ?>"end");
    TopLinkUrl.pop();
    var TopLink = new Hash(TopLinkUrl.associate(TopLinkTitle));
    function DelTopLink(item){
        item.getParent(".top-link-item").destroy();
    }
    function CreateTopLinkDom(DomHash){
      DomHash.each(function(v,k){
        var ActiveLi = new Element('li',{'class':'top-link-item clearfix','html':'<div class="add-title"> 文字：<input type="text" name="top_link_title[]" value="'+k+'"/> </div> <div class="add-url"> 链接地址：<input type="text" name="top_link_url[]" value="'+v+'"/> </div> <span class="delete" title="删除"></span>'}).inject('top_link_area');
        ActiveLi.getElement('.delete').addEvent('click',function(){
          DelTopLink(this);
        });
      });
    }
    CreateTopLinkDom(TopLink);
    var AddTopLink = $('add_top_link');
    AddTopLink.addEvent('click',function(){
      var ActiveLi = new Element('li',{'class':'top-link-item clearfix','html':'<div class="add-title"> 文字：<input type="text" name="top_link_title[]"/> </div> <div class="add-url"> 链接地址：<input type="text" name="top_link_url[]"/> </div> <span class="delete" title="删除"></span>'}).inject('top_link_area');
      ActiveLi.getElement('.delete').addEvent('click',function(){
        DelTopLink(this);
      });
    });
</script>";s:8:"dateline";s:10:"1439551212";s:3:"ttl";s:1:"0";}