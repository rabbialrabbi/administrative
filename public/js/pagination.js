var paginator=function(){"use strict";var a=function(a,e,s){$(".jsPages").remove(),$(".js-paginator").data({pageTotal:a,pageSelected:1}),$('.jsNavPage[data-nav="-1"]').addClass("disabled"),null!=e&&($(".jsPagination").removeClass().addClass("jsPagination"),$(".jsPagination").addClass("pagination jsPagination "+e),$(".js-paginator").data({paginationClass:e})),(s<1||null==s)&&(s=1);var t="";a>1?$('.jsNavPage[data-nav="1"]').removeClass("disabled"):$('.jsNavPage[data-nav="1"]').addClass("disabled");for(var l=0;l<a;l++){var i=l+1,g="";if(i===s&&(g="selected"),t=t+'<li class="views-item jsPages '+g+'"><span class="views-link jsPage" data-rel="'+i+'">'+i+"</span></li>",9===l&&i!=a){var n=l+1;t=t+'<li class="views-item jsPages jsNewPages"><span class="views-link jsNewPage" data-load="'+(n+=1)+'" >...</span></li>';break}}$(".jspreviousPage").after(t)},e=function(){$(document).on("click",".jsNewPage",function(){var a=$(".js-paginator").data("pageTotal"),e=$(".js-paginator").data("pageSelected");if(e>0)var s=e;for(var t=parseInt($(this).attr("data-load")),l='<li class="views-item jsPages jsOldPages"><span class="views-link jsOldPage" data-load="'+t+'" >...</span></li>',i=t;i<a+1;i++){var g="";if(i==s&&(g="selected"),l=l+'<li class="views-item jsPages '+g+'"><span class="views-link jsPage" data-rel="'+i+'">'+i+"</span></li>",i===t+9&&i!=a){l=l+'<li class="views-item jsPages jsNewPages"><span class="views-link jsNewPage" data-load="'+(i+1)+'" >...</span></li>';break}}$(".jsPages").remove(),$(".jspreviousPage").after(l)})},s=function(){$(document).on("click",".jsOldPage",function(){var a=$(".js-paginator").data("pageSelected");if(a>0)var e=a;var s=parseInt($(this).attr("data-load")),t="";if(s>18)t='<li class="views-item jsPages jsOldPages"><span class="views-link jsOldPage" data-load="'+(s-10)+'" >...</span></li>';else if(s>11&&s<=18){t='<li class="views-item jsPages jsOldPages"><span class="views-link jsOldPage" data-load="'+10+'" >...</span></li>'}for(var l=s-10;l<s;l++)if(l>0){var i="";if(l==e&&(i="selected"),t=t+'<li class="views-item jsPages '+i+'"><span class="views-link jsPage" data-rel="'+l+'">'+l+"</span></li>",l===s-1){t=t+'<li class="views-item jsPages jsNewPages"><span class="views-link jsNewPage" data-load="'+(l+1)+'" >...</span></li>';break}}$(".jsPages").remove(),$(".jspreviousPage").after(t)})},t=function(a){$(document).on("click",".jsPage",function(e){if(e.preventDefault(),!$(this).hasClass("disabled")){var s=parseInt($(this).attr("data-rel"));$(".jsPages").removeClass("selected"),$(this).parent().addClass("selected"),$(".js-paginator").data({pageSelected:s}),g(),a()}})},l=function(){$(".js-paginator").empty()},i=function(){$(document).on("click",".jsNavPage",function(a){if(a.preventDefault(),!$(this).hasClass("disabled")){var e=$(".js-paginator").data("pageSelected")+parseInt($(this).attr("data-nav"));$(".js-paginator").data({pageSelected:e}),$(this).data("nav")>0?$(".jsNewPage").data("load")==e?($(".jsNewPage").trigger("click"),$('.jsPage[data-rel="'+e+'"]').trigger("click")):$('.jsPage[data-rel="'+e+'"]').trigger("click"):$(".jsOldPage").data("load")-1==e?($(".jsOldPage").trigger("click"),$('.jsPage[data-rel="'+e+'"]').trigger("click")):$('.jsPage[data-rel="'+e+'"]').trigger("click"),g()}})},g=function(){var a=$(".js-paginator").data("pageTotal"),e=$(".js-paginator").data("pageSelected");1==e?$('.jsNavPage[data-nav="-1"]').addClass("disabled"):$('.jsNavPage[data-nav="-1"]').removeClass("disabled"),a==e?$('.jsNavPage[data-nav="1"]').addClass("disabled"):$('.jsNavPage[data-nav="1"]').removeClass("disabled")};return{initPaginator:function(g){null!=g.previousPage&&null!=g.previousPage||(g.previousPage="Previous Page"),null!=g.nextPage&&null!=g.nextPage||(g.nextPage="Next Page"),null!=g.totalPage&&null!=g.totalPage||console.log("You should send total views number as parameter to initPaginator function"),l();var n='<nav aria-label="Page navigation" class="navigation"> <ul class="pagination jsPagination"> <li class="views-item jspreviousPage"> <a class="views-link jsNavPage disabled" data-nav="-1" href="#">'+g.previousPage+'</a> </li> <li class="views-item jsNextPage"> <a class="views-link jsNavPage disabled"  data-nav="1" href="#">'+g.nextPage+"</a> </li> </ul> </nav>";$(".js-paginator").append(n),$(".js-paginator").data({pageTotal:g.totalPage,pageSelected:1,paginationClass:g.paginationClass}),$(".jsPagination").addClass(g.paginationClass),a(g.totalPage,g.paginationClass,g.selectedPage),t(g.triggerFunc),e(),s(),i()},destroyPaginator:l,paginatorPages:a}}();
