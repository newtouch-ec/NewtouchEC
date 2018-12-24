<?php exit(); ?>a:3:{s:5:"value";s:2818:"<div id="goods_exshow_config" class="tableform">
    <div class="division">
        <label>
            <p>最多展示数量：</p>
            <input type="text"  name="limit"  value="<?php echo $this->_vars['setting']['limit']; ?>" />个商品
        </label>
    </div>
    <div class="division">
        <div class="goods-selector-handle clearfix">
            <div class="span-auto">
                <label>
                    <input type="radio"  name="selector" value="filter"  <?php if( $this->_vars['setting']['selector']=="filter" ){ ?>checked<?php } ?> />&nbsp;范围选择商品
                </label>
            </div>
            <div class="span-auto">
                <label><input type="radio"  name="selector" value="select"  <?php if( $this->_vars['setting']['selector']=="select" ){ ?>checked<?php } ?> />&nbsp;精确选择商品</label>
            </div>
        </div>
        <div class="division goods-selector">
            <div data-extend = "filter" <?php if( $this->_vars['setting']['selector']=="select" ){ ?>style="display:none"<?php } ?>> 
                <?php echo $this->ui()->input(array('type' => "goodsfilter",'name' => "goods_filter",'value' => $this->_vars['setting']['goods_filter']));?>
                <div class="division">
                    排序规则：
                    <select  name="goods_order_by">
                        <?php if($this->_vars['data']['goods_order_by'])foreach ((array)$this->_vars['data']['goods_order_by'] as $this->_vars['item']){ ?>
                        <option value="<?php echo $this->_vars['item']['condition']; ?>"  <?php if( $this->_vars['setting']['goods_order_by'] == $this->_vars['item']['condition'] ){ ?>selected<?php } ?>><?php echo $this->_vars['item']['label']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div data-extend = "select"  <?php if( $this->_vars['setting']['selector']=="filter" ){ ?>style="display:none;"<?php } ?>>
                <?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'pdt_name' => "goods_select",'pdt_value' => $this->_vars['setting']['goods_select'],'obj_name' => "goods_select_linkobj",'obj_value' => $this->_vars['setting']['goods_select_linkobj'],'breakpoint' => 0));?>
            </div>

        </div>
    </div>
</div>
<script>
    $$('#goods_exshow_config .goods-selector-handle input[type=radio]').addEvent('change',function(){
        var radio  = this;
        if(!radio.checked)return;
        $$('#goods_exshow_config .goods-selector [data-extend]').each(function(item){

            if(item.get('data-extend')!=radio.value){
                item.hide();
                }else{
                item.show();
            }

        });

    });
</script>
";s:8:"dateline";s:10:"1439551005";s:3:"ttl";s:1:"0";}