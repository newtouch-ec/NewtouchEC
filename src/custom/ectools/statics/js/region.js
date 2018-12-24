//

function changeRegion(type, region_id){
    //
    if(type  == 1){
        current_region = region_Data;
        
        displayAddrInfo(true);
        
        $$(".tr_div_addr").set("style", "display:none");
        
        displaySearchCondtion(false);
    }
    //
    else if(type  == 2){
        current_region = hotel_Data;
        
        displayAddrInfo(false);
        
        $$(".tr_div_addr").set("style", "display:");
        
        displaySearchCondtion(true);
    }
    //
    else if(type  == 3){
        current_region = airport_Data;
        
        displayAddrInfo(false);
        
        $$(".tr_div_addr").set("style", "display:none");
        
        displaySearchCondtion(false);
    }
    
    //
    try{
        //callback
        region_sel.init(callback, region_id);
    }
    catch(e){
        region_sel.init("selectArea", region_id);
    }
}

function displaySearchCondtion(display){
    $$(".search-condition-container").setStyle("display", display ? "" : "none");
}

function displayAddrInfo(display){
    var style = display ? "display:" : "display:none";
    $$(".tr_name").set("style", style);
    $$(".tr_addr").set("style", style);
    $$(".tr_zipcode").set("style", style);
    
    if(display){
        //
        if($("name") != null){
            $("name").set("value", "");
            $("addr").set("value", "");
            $("zipcode").set("value", "");
        }
        //
        if($("addrName") != null){
            $("addrName").set("value", "");
            $("addrMail").set("value", "");
            $("addrZip").set("value", "");
        }
    }
    else{
        //
        if($("name") != null){
            $("name").set("value", "");
            $("addr").set("value", "");
            $("zipcode").set("value", "");
        }
        //
        if($("addrName") != null){
            $("addrName").set("value", "");
            $("addrMail").set("value", "");
            $("addrZip").set("value", "");
        }
        
        if($("divAddr_add") != null){
            $("divAddr_add").set("html", "");
        }
        if($("divAddr_edit") != null){
            $("divAddr_edit").set("html", "");
        }
    }
}

var region_sel = {
addOpt:function(select,data){
    var fdoc = document.createDocumentFragment();
    fdoc.appendChild(new Element('option',{text:'请选择',value:'_NULL_'}));
    data && data.each(function(v,k){
        var attrs= v.split(':');
        fdoc.appendChild(new Element('option',{
            value:attrs[1],text:attrs[0],'data-level-index':attrs[2]?attrs[2]:'_NULL_'
        }));
    },this);
    select && select.empty().appendChild(fdoc);
    data && select && select.show();
    return this;
},
bindEvent:function(){
    var _this = this,sels = this.elem.getElements('select');
    sels.addEvent('change',function(e){
        _this.changeResponse(this,new Event(e));
    });
},
changeResponse:function(cur_sel,e){
	this.elem=cur_sel.getParent('.region');
    var _this = this,sels = this.elem.getElements('select');
    var level = _this.set(cur_sel,e.opt),elems= cur_sel.getAllNext();

    if(cur_sel.getSelected()[0].get('data-level-index') == "_NULL_" && _this.callback) {
        _this.callback(sels);
    }
    elems.each(function(el,i){
        if(i || elems.length==1) el.hide().empty();
    })
    _this.addOpt(cur_sel.getNext(),level).setValue(sels);
},
setValue:function(sels){
    var k = [],str,id;
    sels.each(function(el){
        var opt =el.getSelected(), t = opt.get('text'),v = opt.get('value');
        if(opt.length && v!='_NULL_'){
            k.push(t); id=v;
        }
    });
    if(k.length) {
        str = sels.getPrevious('*[package]').get('package') + ":" + k.join('/');
        this.elem.getElement('input').value=str+':'+id;
    }
    else {
        this.elem.getElement('input').value = "";
    }
},
isAddSel:function(select){
    select.getAllNext().each(function(el){el.empty().hide();});
    select.getNext() && select.getNext().empty();
},
set:function(target,opt){
    var opt =opt ? opt: target.options[target.selectedIndex],
        index = opt.set('selected',true).get('data-level-index');
    this.index = target.get('data-level-index').toInt()+1;
    var data =this.data[this.index];
    return data ?data[index]:false;
},
init:function(func_callback,region_id){
    this.callback = window[func_callback];
    this.elem =$(region_id);
	this.elem_id=region_id;
    var sels = this.elem.getElements('select');
    try{
        this.data = current_region; 
    }
    catch(e){
        //
        current_region
        this.data = region_Data;
    }
    this.addOpt(sels[0],this.data[0]).isAddSel(sels[0].show());
    this.bindEvent();
}
};

