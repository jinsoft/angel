layui.extend({setter:"config",admin:"lib/admin",view:"lib/view"}).define(["setter","admin"],function(a){var e=layui.setter,i=layui.element,n=layui.admin,t=n.tabsPage,d=layui.view,l=function(a,d){var l,u=r("#LAY_app_tabsheader>li"),y=a.replace(/(^http(s*):)|(\?[\s\S]*$)/g,"");u.each(function(e){var i=r(this),n=i.attr("lay-id");n===a&&(l=!0,t.index=e)}),d=d||"\u65b0\u6807\u7b7e\u9875";var b=function(){i.tabChange(o,a),n.tabsBodyChange(t.index,{url:a,text:d})};if(e.pageTabs)l||(setTimeout(function(){r(s).append(['<div class="layadmin-tabsbody-item layui-show">','<iframe src="'+a+'" frameborder="0" class="layadmin-iframe"></iframe>',"</div>"].join("")),b()},10),t.index=u.length,i.tabAdd(o,{title:"<span>"+d+"</span>",id:a,attr:y}));else{var c=n.tabsBody(n.tabsPage.index).find(".layadmin-iframe");c[0].contentWindow.location.href=a}b()},s="#LAY_app_body",o="layadmin-layout-tabs",r=layui.$;r(window);n.screen()<2&&n.sideFlexible(),layui.config({base:e.base+"modules/"}),layui.each(e.extend,function(a,i){var n={},t=e.extend.constructor===Array;n[t?i:a]="{/}"+e.base+"lib/extend/"+i,layui.extend(n)}),d().autoRender(),layui.use("common"),a("index",{openTabsPage:l})});
