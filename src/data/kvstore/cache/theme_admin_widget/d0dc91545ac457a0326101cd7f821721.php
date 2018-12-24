<?php exit(); ?>a:3:{s:5:"value";s:4182:"<style>
  #top_link_area .add-title,
  #top_link_area .add-url,
  #top_link_area .delete{float:left;_display:inline;margin-left:5px;}
  #top_link_area .delete{height:20px;width:16px;cursor:pointer;}
  #top_link_area .top-link-item{background-color:#E2E8EB;padding:5px 5px 3px;line-height:22px;margin:2px 0;}
  #add_top_link{cursor:pointer;}
</style>
<div class="tableform">
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr>
            <th>标题：</th>
            <td colspan="2">
                <input type="text" name="title" class="inputstyle" value="<?php echo $this->_vars['setting']['title']; ?>" />
            </td>
        </tr>
        <tr>
            <th>标题链接：</th>
            <td colspan="2">
                <input type="text" name="title_link" class="inputstyle" value="<?php echo $this->_vars['setting']['title_link']; ?>">
            </td>
        </tr>
        <tr>
            <th>更多开启:</th>
            <td>
                <?php echo $this->ui()->input(array('required' => true,'type' => 'radio','name' => "more",'options' => array('1'=>'是','0'=>'否'),'value' => ((isset($this->_vars['setting']['more']) && ''!==$this->_vars['setting']['more'])?$this->_vars['setting']['more']:'0')));?>
            </td>
            <td>
                <div id="more_link" style="display:none">
                链接：
                    <input type="text" name="more_link" class="inputstyle" value="<?php echo $this->_vars['setting']['more_link']; ?>" />
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="button" id="add_top_link" value="添加文字链接" />
                <ul id="top_link_area">

                </ul>
            </td>
        </tr>
    </table>
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
        var ActiveLi = new Element('li',{'class':'top-link-item clearfix','html':'<div class="add-title"> 文字：<input type="text" name="top_link_title[]" class="inputstyle" value="'+k+'"/> </div> <div class="add-url"> 链接地址：<input type="text" name="top_link_url[]" class="inputstyle" value="'+v+'"/> </div> <span class="delete" title="删除"></span>'}).inject('top_link_area');
        ActiveLi.getElement('.delete').addEvent('click',function(){
          DelTopLink(this);
        });
      });
    }
    CreateTopLinkDom(TopLink);
    var AddTopLink = $('add_top_link');
    AddTopLink.addEvent('click',function(){
      var ActiveLi = new Element('li',{'class':'top-link-item clearfix','html':'<div class="add-title"> 文字：<input type="text" name="top_link_title[]" class="inputstyle"/> </div> <div class="add-url"> 链接地址：<input type="text" name="top_link_url[]" class="inputstyle"/> </div> <span class="delete" title="删除"></span>'}).inject('top_link_area');
      ActiveLi.getElement('.delete').addEvent('click',function(){
        DelTopLink(this);
      });
    });

$E('[name="more"]').addEvent('change',function(item,index){
    if($E('[name="more"]').checked){
        $('more_link').setStyle('display','');
    }else{
        $('more_link').setStyle('display','none');
    }
});

window.addEvent('domready',function(){
    if($E('[name="more"]').checked){
        $('more_link').setStyle('display','');
    }else{
        $('more_link').setStyle('display','none');
    }
});
</script>";s:8:"dateline";s:10:"1430382297";s:3:"ttl";s:1:"0";}