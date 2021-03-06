var DragDropPlus = new Class({
    Implements: [Options, Events],
    options: {},
    initialize: function(a, c, b) {
        this.dragSelecterString = a;
        this.dropSelecterString = c;
        this.drags = $$(a);
        this.drops = $$(c);
        this.setOptions(b);
        if (this.drag_operate_box = $("drag_operate_box")) this.drag_operate_box.store("lock", !1),
        this.drag_handle_box = this.drag_operate_box.getElement(".drag_handle_box"),
        this.scrollFx = new Fx.Scroll(document, {
            fps: 50,
            duration: 200,
            link: "cancel"
        }),
        this.dobFx = new Fx.Morph(this.drag_operate_box, {
            fps: 50,
            duration: 200,
            link: "cancel"
        }),
        this.dhbFx = new Fx.Morph(this.drag_handle_box, {
            fps: 50,
            duration: 200,
            link: "cancel"
        }),
        this.dragSign = $("drag_ghost_box").inject(document.body),
        this.fireEvent("onInit", this),
        this.initDOBBase(this.drops),
        this.initDrags(this.drags),
        this.initDrops(this.drops)
    },
    checkEmptyDropPanel: function(a) {
        if (a && a.hasClass(this.dropSelecterString.substring(1, this.dropSelecterString.length))) if (a.getElement(this.dragSelecterString)) a.getElement(".empty_drop_box") && a.getElement(".empty_drop_box").destroy();
        else if (!a.getElement(".empty_drop_box")) {
            var c = (new Element("div.empty_drop_box")).set("html", '&nbsp;<button type="button" class="btn btn-add-widgets"><span><span><i class="icon"></i>\u6dfb\u52a0\u6302\u4ef6</span></span></button>').inject(a);
            c.addEvent("click",
            function() {
                this.fireEvent("add", [c], this)
            }.bind(this));
            this.dragmoveInstance && (a.store("droppanel", !0), this.dragmoveInstance.droppables.include(a))
        }
    },
    dragLeave: function() {},
    dargInject: function(a, c) {
        var b = this.dragging;
        if (b) {
            var d = "inside";
            c.retrieve("droppanel") || (d = b.getAllPrevious().contains(c) ? "before": "after");
            b.inject(c, d);
            this.checkEmptyDropPanel(a.retrieve("droped"));
            this.checkEmptyDropPanel(c);
            a.store("droped", c);
            this.dragSign.setStyles(b.getCoordinates())
        }
    },
    getDropables: function() {
        var a = this.dragging;
        return Array.from(this.drags).erase(a).combine(this.drops.filter(function(a) {
            if (a.getElement(this.dragSelecterString)) return a.store("droppanel", !1),
            !1;
            a.store("droppanel", !0);
            return ! 0
        }.bind(this)))
    },
    initDOBBase: function(a) {
        var c = this.drag_operate_box,
        b = this.drag_handle_box,
        d = this;
        a && (b.getElements(".btn-up-slot,.btn-down-slot").addEvent("click",
        function(a) {
            var b = c.retrieve("drag"),
            h = b.getParent().getChildren(),
            i = b[this.hasClass("btn-up-slot") ? "getPrevious": "getNext"]();
            if (i) {
                a.stop();
                var j = (new Fx.Sort(h, {
                    duration: 250,
                    mode: "vertical",
                    link: "chain",
                    onComplete: function() {
                        j.rearrangeDOM();
                        document.body.fireEvent("mouseover", {
                            target: b
                        });
                        d.fireEvent("upDown", [c.retrieve("drag")], d)
                    }
                })).swap(b, i)
            }
        }), b.getElement(".btn-edit-widgets").addEvent("click",
        function(a) {
            a.stop();
            this.fireEvent("edit", [c.retrieve("drag")], this)
        }.bind(this)), c.addEvent("dblclick",
        function(a) {
            a.stop();
            this.fireEvent("edit", [c.retrieve("drag")], this)
        }.bind(this)), b.addEvent("dblclick",
        function(a) {
            a.stop()
        }.bind(this)), b.getElement(".btn-del-widgets").addEvent("click",
        function(a) {
            a.stop();
            this.fireEvent("delete", [c.retrieve("drag")], this)
        }.bind(this)), b.getElements("li").addEvent("click",
        function(a) {
            a.stop();
            this.fireEvent("add", [c.retrieve("drag"), $(a.target)], this)
        }.bind(this)))
    },
    initDrags: function(a) {
        var c = this;
        document.body.addEvents({
            mouseover: function(b) {
                var b = $(b.target),
                d = b.getParent(c.dragSelecterString),
                e = c.drag_operate_box,
                g = c.drag_handle_box;
                if ((d || b.hasClass(c.dragSelecterString.substr(1))) && !e.retrieve("lock")) {
                    d = d || b;
                    c.fireEvent("initDrags", [d, a], c);
                    g.set("title", d.get("title") || "&nbsp;");
                    e.setStyle("visibility", "visible");
                    e.store("drag", d);
                    b = d.getCoordinates();
                    b = Object.append(b, {
                        top: b.top - g.getSize().y,
                        height: b.height - e.getPatch().y + g.getSize().y,
                        width: b.width - e.getPatch().x
                    });
                    delete b.bottom;
                    delete b.right;
                    var h = 235 + e.getPatch().x;
                    c.dhbFx.set({
                        left: b.left + h + e.getStyle("border-left").toInt() > document.body.getSize().x && !Browser.ie6 ? b.width - h: 0
                    });
                    c.dobFx.set(b);
                    g.getElements(".btn-up-slot,.btn-down-slot").removeClass("disabled");
                    d.getPrevious() || g.getElement(".btn-up-slot").addClass("disabled");
                    d.getNext() || g.getElement(".btn-down-slot").addClass("disabled")
                }
            }
        });
        a.each(function(a) {
            c.checkEmptyDrag(a);
            a.getElements("form").removeEvents().addEvent("submit",
            function(a) {
                a.stop()
            });
            a.getElements("a").removeEvents().addEvent("click",
            function(a) {
                a.stop()
            })
        })
    },
    checkEmptyDrag: function(a) {
        window.addEvent("load",
        function() {
            a.offsetHeight || this.fireEvent("emptyDrag", [a], this)
        }.bind(this))
    },
    initDrops: function(a) {
        a.each(function(c) {
            this.checkEmptyDropPanel(c);
            this.fireEvent("initDrops", [c, a], this)
        },
        this)
    }
}),
Widgets = new Class({
    Extends: DragDropPlus,
    initialize: function(a, c, b) {
        this.parent(a, c, b);
        this.drags.each(function(a) {
            a.getProperty("ishtml") && a.getElement(".content-html").set("html", a.getElement(".content-textarea").get("value"))
        })
    },
    inject: function(a, c) {
        this.addWidget(this.curEl, a, c || this.theme)
    },
    ghostDrop: function(a, c) {
        a = "string" === typeOf(a) ? JSON.decode(a) : a;
        this.drag_operate_box.setStyle("visibility", "hidden").store("lock", !0);
        $("tempDropBox") && $("tempDropBox").destroy();
        this.tempDropBox = (new Element("div", {
            id: "tempDropBox"
        })).inject(document.body);
        try {
            var b = this.drag_operate_box.retrieve("drag");
            this.tempDropBox.empty();
            this.addWidget(b, a, c);
            this.drag_operate_box.store("lock", !1)
        } catch(d) {
            alert(JSON.encode(d))
        }
        document.body.addEvent("contextmenu",
        function(a) {
            a.stop();
            $("tempDropBox") && $("tempDropBox").destroy();
            this.drag_operate_box.store("lock", !1);
            document.body.removeEvent("contextmenu", arguments.callee)
        }.bind(this))
    },
    copyWidgets: function() {},
    addWidget: function(a, c, b) {
        this.curdialog = new top.Dialog(top.SHOPADMINDIR + "theme-doaddwidgets-" + c.name + "-" + c.app + "-" + c.theme + "-" + b+".html", {
            modal: !0,
            title: LANG_shopwidgets.addWidget + (c.label || ""),
            ajaxoptions: {
                render: !1
            },
            width: 0.7,
            height: 0.7
        });
        this.curDrop = a
    },
    editWidget: function(a) {
        var c = {
            modal: !0,
            title: LANG_shopwidgets.editWidget + (a.label || a.title),
            ajaksable: !1,
            width: 0.7,
            height: 0.7
        };
        this.curWidget = $(a);
        return a.get("ishtml") ? this.curdialog = new top.Dialog(top.SHOPADMINDIR + "index.php?ctl=content/pages&act=editHtml", Object.merge(c, {
            ajaksable: !0,
            ajaxoptions: {
                method: "post",
                data: "htmls=" + encodeURIComponent(a.getElement(".content-html").get("html").clean().trim())
            },
            title: LANG_shopwidgets.editHTML
        })) : this.curdialog = new top.Dialog(top.SHOPADMINDIR + "theme-doeditwidgets-" + a.get("widgets_id") + "-" + a.get("widgets_theme")+".html", c)
    },
    delWidget: function(a) {
        var c = this.drag_operate_box;
        c.setStyle("visibility", "hidden").store("lock", !0);
        var b = a.getParent(); (new Fx.Tween(a)).start("opacity", 0).chain(function() {
            a.destroy();
            c.store("lock", !1);
            this.checkEmptyDropPanel(b);
            top.document.id("btn_save") && (top.document.id("btn_save").disabled = !1)
        }.bind(this))
    },
    preview: function(a, c) {
        var b = [],
        d = {};
        this.drops.each(function(a) {
            a.getElements(".shopWidgets_box").each(function(a) {
                b.push("widgets[{widgetsId}]={baseFile}:{baseSlot}:{baseId}".substitute({
                    widgetsId: a.get("widgets_id"),
                    baseFile: this.bf,
                    baseSlot: this.bs,
                    baseId: this.bi
                }));
                if (a.get("ishtml")) {
                    var c = a.getElement(".content-html");
                    b.push("html[{widgetsId}]={htmls}".substitute({
                        widgetsId: a.get("widgets_id"),
                        htmls: encodeURIComponent(c.get("html"))
                    }))
                }
            },
            {
                mce: this.mce,
                bf: a.get("base_file"),
                bs: a.get("base_slot"),
                bi: a.get("base_id")
            });
            d[a.get("base_file")] = 1
        }.bind(this));
        for (f in d) b.push("files[]={file}".substitute({
            file: f
        })); (new Request({
            url: a,
            method: "post",
            data: b.join("&"),
            onRequest: function() {
                $(c).set({
                    disabled: !0,
                    html: "<span><span>\u6b63\u5728\u751f\u6210\u9884\u89c8...</span></span>"
                })
            },
            onComplete: function(a) {
                a = JSON.decode(a);
                $(c).set({
                    disabled: !1,
                    html: "<span><span>\u9884\u89c8\u6a21\u677f</span></span>"
                });
                if (a && a.success) if (a = $("_temp_preview_link") || (new Element("a#_temp_preview_link.hide", {
                    target: "preview",
                    href: a.url || top.PREVIEW_URL
                })).inject(document.body), document.createEvent) {
                    var b = document.createEvent("MouseEvent");
                    b.initEvent("click", !1, !1);
                    a.dispatchEvent(b)
                } else a.click()
            }
        })).send()
    },
    saveAll: function(a, c) {
        var b = [],
        d = {};
        this.drops.each(function(a) {
            a.getElements(".shopWidgets_box").each(function(a) {
                b.push("widgets[{widgetsId}]={baseFile}:{baseSlot}:{baseId}".substitute({
                    widgetsId: a.get("widgets_id"),
                    baseFile: this.bf,
                    baseSlot: this.bs,
                    baseId: this.bi
                }));
                if (a.get("ishtml")) {
                    var c = a.getElement(".content-html");
                    b.push("html[{widgetsId}]={htmls}".substitute({
                        widgetsId: a.get("widgets_id"),
                        htmls: encodeURIComponent(c.get("html"))
                    }))
                }
            },
            {
                mce: this.mce,
                bf: a.get("base_file"),
                bs: a.get("base_slot"),
                bi: a.get("base_id")
            });
            d[a.get("base_file")] = 1
        }.bind(this));
        for (f in d) b.push("files[]={file}".substitute({
            file: f
        })); (new Request({
            url: top.SHOPADMINDIR + "theme-saveall.html",
            method: "post",
            data: b.join("&"),
            onRequest: function() {
                new top.MessageBox(LANG_shopwidgets.saving)
            },
            onSuccess: function(b) {
                a && a.call(c || this, this);
                try {
                    b = JSON.decode(b);
                    for (dom in b) $(dom) && b[dom] && $(dom).set("widgets_id", b[dom]);
                    top.MessageBox.success(LANG_shopwidgets.saveSuccess)
                } catch(d) {
                    top.MessageBox.error(LANG_shopwidgets.saveError + d.message)
                }
            }.bind(this)
        })).send()
    }
});
window.addEvent("domready",
function() {
    this.shopWidgets = new Widgets(".shopWidgets_box", ".shopWidgets_panel", {
        onInit: function() {
            this.theme = top.THEME_NAME || ""
        },
        onEdit: function(a) {
            shopWidgets.editWidget(a)
        },
        onDelete: function(a) {
            top.confirmDialog ? top.confirmDialog(LANG_shopwidgets.comfirmDel,
            function() {
                this.delWidget(a)
            }.bind(this)) : confirm(LANG_shopwidgets.comfirmDel) && this.delWidget()
        },
        onAdd: function(a, c) {
            var b = this.drag_operate_box,
            d = c ? c.get("class") || "": "";
            b.store("lock", !0);
            shopWidgets.widgetsDialog = new top.Dialog(top.SHOPADMINDIR + "theme-addwidgetspage-" + this.theme+".html", {
                width: 770,
                height: 500,
                title: "\u6dfb\u52a0\u6302\u4ef6",
                modal: !0,
                resizeable: !1,
                onShow: function() {
                    this.dialog_body.id = "dialogContent";
                    shopWidgets.injectWhere = d;
                    shopWidgets.injectBox = a.hasClass("empty_drop_box") ? a.getParent() : null
                },
                onClose: function() {
                    b.store("lock", !1)
                }
            })
        },
        onUpDown: function() {
            top.document.id("btn_save") && (top.document.id("btn_save").disabled = !1)
        },
        onEmptyDrag: function(a) { (new Element("div.empty_drag_box", {
                html: a.get("title") + "(NO DATA)"
            })).inject(a)
        }
    });
    $$("a").addEvent("click",function(){
        return false;
    });
    $$("form").addEvent("submit",function(){
        return false;
    });
});