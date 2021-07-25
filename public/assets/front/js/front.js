window.onload = function(){
  crear_select();
}

function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};

 
var li = new Array();
function crear_select(){
var div_cont_select = document.querySelectorAll("[data-mate-select='active']");
var select_ = '';
for (var e = 0; e < div_cont_select.length; e++) {
div_cont_select[e].setAttribute('data-indx-select',e);
div_cont_select[e].setAttribute('data-selec-open','false');
var ul_cont = document.querySelectorAll("[data-indx-select='"+e+"'] > .cont_list_select_mate > ul");
 select_ = document.querySelectorAll("[data-indx-select='"+e+"'] >select")[0];
 if (isMobileDevice()) { 
select_.addEventListener('change', function () {
 _select_option(select_.selectedIndex,e);
});
 }
var select_optiones = select_.options;
document.querySelectorAll("[data-indx-select='"+e+"']  > .selecionado_opcion ")[0].setAttribute('data-n-select',e);
document.querySelectorAll("[data-indx-select='"+e+"']  > .icon_select_mate ")[0].setAttribute('data-n-select',e);
for (var i = 0; i < select_optiones.length; i++) {
li[i] = document.createElement('li');
if (select_optiones[i].selected == true || select_.value == select_optiones[i].innerHTML ) {
li[i].className = 'active';
document.querySelector("[data-indx-select='"+e+"']  > .selecionado_opcion ").innerHTML = select_optiones[i].innerHTML;
};
li[i].setAttribute('data-index',i);
li[i].setAttribute('data-selec-index',e);
// funcion click al selecionar 
li[i].addEventListener( 'click', function(){  _select_option(this.getAttribute('data-index'),this.getAttribute('data-selec-index')); });

li[i].innerHTML = select_optiones[i].innerHTML;
ul_cont[0].appendChild(li[i]);

    }; // Fin For select_optiones
  }; // fin for divs_cont_select
} // Fin Function 



var cont_slc = 0;
function open_select(idx){
var idx1 =  idx.getAttribute('data-n-select');
  var ul_cont_li = document.querySelectorAll("[data-indx-select='"+idx1+"'] .cont_select_int > li");
var hg = 0;
var slect_open = document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].getAttribute('data-selec-open');
var slect_element_open = document.querySelectorAll("[data-indx-select='"+idx1+"'] select")[0];
 if (isMobileDevice()) { 
  if (window.document.createEvent) { // All
  var evt = window.document.createEvent("MouseEvents");
  evt.initMouseEvent("mousedown", false, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
    slect_element_open.dispatchEvent(evt);
} else if (slect_element_open.fireEvent) { // IE
  slect_element_open.fireEvent("onmousedown");
}else {
  slect_element_open.click();
}
}else {

  
  for (var i = 0; i < ul_cont_li.length; i++) {
hg += ul_cont_li[i].offsetHeight;
}; 
 if (slect_open == 'false') {  
 document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].setAttribute('data-selec-open','true');
 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.height = hg+"px";
 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .icon_select_mate")[0].style.transform = 'rotate(180deg)';
}else{
 document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].setAttribute('data-selec-open','false');
 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .icon_select_mate")[0].style.transform = 'rotate(0deg)';
 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
 }
}

} // fin function open_select

function salir_select(indx){
var select_ = document.querySelectorAll("[data-indx-select='"+indx+"'] > select")[0];
 document.querySelectorAll("[data-indx-select='"+indx+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
document.querySelector("[data-indx-select='"+indx+"'] > .icon_select_mate").style.transform = 'rotate(0deg)';
 document.querySelectorAll("[data-indx-select='"+indx+"']")[0].setAttribute('data-selec-open','false');
}


function _select_option(indx,selc){
 if (isMobileDevice()) { 
selc = selc -1;
}
    var select_ = document.querySelectorAll("[data-indx-select='"+selc+"'] > select")[0];

  var li_s = document.querySelectorAll("[data-indx-select='"+selc+"'] .cont_select_int > li");
  var p_act = document.querySelectorAll("[data-indx-select='"+selc+"'] > .selecionado_opcion")[0].innerHTML = li_s[indx].innerHTML;
var select_optiones = document.querySelectorAll("[data-indx-select='"+selc+"'] > select > option");
for (var i = 0; i < li_s.length; i++) {
if (li_s[i].className == 'active') {
li_s[i].className = '';
};
li_s[indx].className = 'active';

};
select_optiones[indx].selected = true;
  select_.selectedIndex = indx;
  select_.onchange();
  salir_select(selc); 
}
!function(i){"use strict";"function"==typeof define&&define.amd?define(["jquery"],i):"undefined"!=typeof exports?module.exports=i(require("jquery")):i(jQuery)}(function(i){"use strict";var e=window.Slick||{};(e=function(){var e=0;return function(t,o){var s,n=this;n.defaults={accessibility:!0,adaptiveHeight:!1,appendArrows:i(t),appendDots:i(t),arrows:!0,asNavFor:null,prevArrow:'<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',nextArrow:'<button class="slick-next" aria-label="Next" type="button">Next</button>',autoplay:!1,autoplaySpeed:3e3,centerMode:!1,centerPadding:"50px",cssEase:"ease",customPaging:function(e,t){return i('<button type="button" />').text(t+1)},dots:!1,dotsClass:"slick-dots",draggable:!0,easing:"linear",edgeFriction:.35,fade:!1,focusOnSelect:!1,focusOnChange:!1,infinite:!0,initialSlide:0,lazyLoad:"ondemand",mobileFirst:!1,pauseOnHover:!0,pauseOnFocus:!0,pauseOnDotsHover:!1,respondTo:"window",responsive:null,rows:1,rtl:!1,slide:"",slidesPerRow:1,slidesToShow:1,slidesToScroll:1,speed:500,swipe:!0,swipeToSlide:!1,touchMove:!0,touchThreshold:5,useCSS:!0,useTransform:!0,variableWidth:!1,vertical:!1,verticalSwiping:!1,waitForAnimate:!0,zIndex:1e3},n.initials={animating:!1,dragging:!1,autoPlayTimer:null,currentDirection:0,currentLeft:null,currentSlide:0,direction:1,$dots:null,listWidth:null,listHeight:null,loadIndex:0,$nextArrow:null,$prevArrow:null,scrolling:!1,slideCount:null,slideWidth:null,$slideTrack:null,$slides:null,sliding:!1,slideOffset:0,swipeLeft:null,swiping:!1,$list:null,touchObject:{},transformsEnabled:!1,unslicked:!1},i.extend(n,n.initials),n.activeBreakpoint=null,n.animType=null,n.animProp=null,n.breakpoints=[],n.breakpointSettings=[],n.cssTransitions=!1,n.focussed=!1,n.interrupted=!1,n.hidden="hidden",n.paused=!0,n.positionProp=null,n.respondTo=null,n.rowCount=1,n.shouldClick=!0,n.$slider=i(t),n.$slidesCache=null,n.transformType=null,n.transitionType=null,n.visibilityChange="visibilitychange",n.windowWidth=0,n.windowTimer=null,s=i(t).data("slick")||{},n.options=i.extend({},n.defaults,o,s),n.currentSlide=n.options.initialSlide,n.originalSettings=n.options,void 0!==document.mozHidden?(n.hidden="mozHidden",n.visibilityChange="mozvisibilitychange"):void 0!==document.webkitHidden&&(n.hidden="webkitHidden",n.visibilityChange="webkitvisibilitychange"),n.autoPlay=i.proxy(n.autoPlay,n),n.autoPlayClear=i.proxy(n.autoPlayClear,n),n.autoPlayIterator=i.proxy(n.autoPlayIterator,n),n.changeSlide=i.proxy(n.changeSlide,n),n.clickHandler=i.proxy(n.clickHandler,n),n.selectHandler=i.proxy(n.selectHandler,n),n.setPosition=i.proxy(n.setPosition,n),n.swipeHandler=i.proxy(n.swipeHandler,n),n.dragHandler=i.proxy(n.dragHandler,n),n.keyHandler=i.proxy(n.keyHandler,n),n.instanceUid=e++,n.htmlExpr=/^(?:\s*(<[\w\W]+>)[^>]*)$/,n.registerBreakpoints(),n.init(!0)}}()).prototype.activateADA=function(){this.$slideTrack.find(".slick-active").attr({"aria-hidden":"false"}).find("a, input, button, select").attr({tabindex:"0"})},e.prototype.addSlide=e.prototype.slickAdd=function(e,t,o){var s=this;if("boolean"==typeof t)o=t,t=null;else if(t<0||t>=s.slideCount)return!1;s.unload(),"number"==typeof t?0===t&&0===s.$slides.length?i(e).appendTo(s.$slideTrack):o?i(e).insertBefore(s.$slides.eq(t)):i(e).insertAfter(s.$slides.eq(t)):!0===o?i(e).prependTo(s.$slideTrack):i(e).appendTo(s.$slideTrack),s.$slides=s.$slideTrack.children(this.options.slide),s.$slideTrack.children(this.options.slide).detach(),s.$slideTrack.append(s.$slides),s.$slides.each(function(e,t){i(t).attr("data-slick-index",e)}),s.$slidesCache=s.$slides,s.reinit()},e.prototype.animateHeight=function(){var i=this;if(1===i.options.slidesToShow&&!0===i.options.adaptiveHeight&&!1===i.options.vertical){var e=i.$slides.eq(i.currentSlide).outerHeight(!0);i.$list.animate({height:e},i.options.speed)}},e.prototype.animateSlide=function(e,t){var o={},s=this;s.animateHeight(),!0===s.options.rtl&&!1===s.options.vertical&&(e=-e),!1===s.transformsEnabled?!1===s.options.vertical?s.$slideTrack.animate({left:e},s.options.speed,s.options.easing,t):s.$slideTrack.animate({top:e},s.options.speed,s.options.easing,t):!1===s.cssTransitions?(!0===s.options.rtl&&(s.currentLeft=-s.currentLeft),i({animStart:s.currentLeft}).animate({animStart:e},{duration:s.options.speed,easing:s.options.easing,step:function(i){i=Math.ceil(i),!1===s.options.vertical?(o[s.animType]="translate("+i+"px, 0px)",s.$slideTrack.css(o)):(o[s.animType]="translate(0px,"+i+"px)",s.$slideTrack.css(o))},complete:function(){t&&t.call()}})):(s.applyTransition(),e=Math.ceil(e),!1===s.options.vertical?o[s.animType]="translate3d("+e+"px, 0px, 0px)":o[s.animType]="translate3d(0px,"+e+"px, 0px)",s.$slideTrack.css(o),t&&setTimeout(function(){s.disableTransition(),t.call()},s.options.speed))},e.prototype.getNavTarget=function(){var e=this,t=e.options.asNavFor;return t&&null!==t&&(t=i(t).not(e.$slider)),t},e.prototype.asNavFor=function(e){var t=this.getNavTarget();null!==t&&"object"==typeof t&&t.each(function(){var t=i(this).slick("getSlick");t.unslicked||t.slideHandler(e,!0)})},e.prototype.applyTransition=function(i){var e=this,t={};!1===e.options.fade?t[e.transitionType]=e.transformType+" "+e.options.speed+"ms "+e.options.cssEase:t[e.transitionType]="opacity "+e.options.speed+"ms "+e.options.cssEase,!1===e.options.fade?e.$slideTrack.css(t):e.$slides.eq(i).css(t)},e.prototype.autoPlay=function(){var i=this;i.autoPlayClear(),i.slideCount>i.options.slidesToShow&&(i.autoPlayTimer=setInterval(i.autoPlayIterator,i.options.autoplaySpeed))},e.prototype.autoPlayClear=function(){var i=this;i.autoPlayTimer&&clearInterval(i.autoPlayTimer)},e.prototype.autoPlayIterator=function(){var i=this,e=i.currentSlide+i.options.slidesToScroll;i.paused||i.interrupted||i.focussed||(!1===i.options.infinite&&(1===i.direction&&i.currentSlide+1===i.slideCount-1?i.direction=0:0===i.direction&&(e=i.currentSlide-i.options.slidesToScroll,i.currentSlide-1==0&&(i.direction=1))),i.slideHandler(e))},e.prototype.buildArrows=function(){var e=this;!0===e.options.arrows&&(e.$prevArrow=i(e.options.prevArrow).addClass("slick-arrow"),e.$nextArrow=i(e.options.nextArrow).addClass("slick-arrow"),e.slideCount>e.options.slidesToShow?(e.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),e.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),e.htmlExpr.test(e.options.prevArrow)&&e.$prevArrow.prependTo(e.options.appendArrows),e.htmlExpr.test(e.options.nextArrow)&&e.$nextArrow.appendTo(e.options.appendArrows),!0!==e.options.infinite&&e.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true")):e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({"aria-disabled":"true",tabindex:"-1"}))},e.prototype.buildDots=function(){var e,t,o=this;if(!0===o.options.dots){for(o.$slider.addClass("slick-dotted"),t=i("<ul />").addClass(o.options.dotsClass),e=0;e<=o.getDotCount();e+=1)t.append(i("<li />").append(o.options.customPaging.call(this,o,e)));o.$dots=t.appendTo(o.options.appendDots),o.$dots.find("li").first().addClass("slick-active")}},e.prototype.buildOut=function(){var e=this;e.$slides=e.$slider.children(e.options.slide+":not(.slick-cloned)").addClass("slick-slide"),e.slideCount=e.$slides.length,e.$slides.each(function(e,t){i(t).attr("data-slick-index",e).data("originalStyling",i(t).attr("style")||"")}),e.$slider.addClass("slick-slider"),e.$slideTrack=0===e.slideCount?i('<div class="slick-track"/>').appendTo(e.$slider):e.$slides.wrapAll('<div class="slick-track"/>').parent(),e.$list=e.$slideTrack.wrap('<div class="slick-list"/>').parent(),e.$slideTrack.css("opacity",0),!0!==e.options.centerMode&&!0!==e.options.swipeToSlide||(e.options.slidesToScroll=1),i("img[data-lazy]",e.$slider).not("[src]").addClass("slick-loading"),e.setupInfinite(),e.buildArrows(),e.buildDots(),e.updateDots(),e.setSlideClasses("number"==typeof e.currentSlide?e.currentSlide:0),!0===e.options.draggable&&e.$list.addClass("draggable")},e.prototype.buildRows=function(){var i,e,t,o,s,n,r,l=this;if(o=document.createDocumentFragment(),n=l.$slider.children(),l.options.rows>1){for(r=l.options.slidesPerRow*l.options.rows,s=Math.ceil(n.length/r),i=0;i<s;i++){var d=document.createElement("div");for(e=0;e<l.options.rows;e++){var a=document.createElement("div");for(t=0;t<l.options.slidesPerRow;t++){var c=i*r+(e*l.options.slidesPerRow+t);n.get(c)&&a.appendChild(n.get(c))}d.appendChild(a)}o.appendChild(d)}l.$slider.empty().append(o),l.$slider.children().children().children().css({width:100/l.options.slidesPerRow+"%",display:"inline-block"})}},e.prototype.checkResponsive=function(e,t){var o,s,n,r=this,l=!1,d=r.$slider.width(),a=window.innerWidth||i(window).width();if("window"===r.respondTo?n=a:"slider"===r.respondTo?n=d:"min"===r.respondTo&&(n=Math.min(a,d)),r.options.responsive&&r.options.responsive.length&&null!==r.options.responsive){s=null;for(o in r.breakpoints)r.breakpoints.hasOwnProperty(o)&&(!1===r.originalSettings.mobileFirst?n<r.breakpoints[o]&&(s=r.breakpoints[o]):n>r.breakpoints[o]&&(s=r.breakpoints[o]));null!==s?null!==r.activeBreakpoint?(s!==r.activeBreakpoint||t)&&(r.activeBreakpoint=s,"unslick"===r.breakpointSettings[s]?r.unslick(s):(r.options=i.extend({},r.originalSettings,r.breakpointSettings[s]),!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e)),l=s):(r.activeBreakpoint=s,"unslick"===r.breakpointSettings[s]?r.unslick(s):(r.options=i.extend({},r.originalSettings,r.breakpointSettings[s]),!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e)),l=s):null!==r.activeBreakpoint&&(r.activeBreakpoint=null,r.options=r.originalSettings,!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e),l=s),e||!1===l||r.$slider.trigger("breakpoint",[r,l])}},e.prototype.changeSlide=function(e,t){var o,s,n,r=this,l=i(e.currentTarget);switch(l.is("a")&&e.preventDefault(),l.is("li")||(l=l.closest("li")),n=r.slideCount%r.options.slidesToScroll!=0,o=n?0:(r.slideCount-r.currentSlide)%r.options.slidesToScroll,e.data.message){case"previous":s=0===o?r.options.slidesToScroll:r.options.slidesToShow-o,r.slideCount>r.options.slidesToShow&&r.slideHandler(r.currentSlide-s,!1,t);break;case"next":s=0===o?r.options.slidesToScroll:o,r.slideCount>r.options.slidesToShow&&r.slideHandler(r.currentSlide+s,!1,t);break;case"index":var d=0===e.data.index?0:e.data.index||l.index()*r.options.slidesToScroll;r.slideHandler(r.checkNavigable(d),!1,t),l.children().trigger("focus");break;default:return}},e.prototype.checkNavigable=function(i){var e,t;if(e=this.getNavigableIndexes(),t=0,i>e[e.length-1])i=e[e.length-1];else for(var o in e){if(i<e[o]){i=t;break}t=e[o]}return i},e.prototype.cleanUpEvents=function(){var e=this;e.options.dots&&null!==e.$dots&&(i("li",e.$dots).off("click.slick",e.changeSlide).off("mouseenter.slick",i.proxy(e.interrupt,e,!0)).off("mouseleave.slick",i.proxy(e.interrupt,e,!1)),!0===e.options.accessibility&&e.$dots.off("keydown.slick",e.keyHandler)),e.$slider.off("focus.slick blur.slick"),!0===e.options.arrows&&e.slideCount>e.options.slidesToShow&&(e.$prevArrow&&e.$prevArrow.off("click.slick",e.changeSlide),e.$nextArrow&&e.$nextArrow.off("click.slick",e.changeSlide),!0===e.options.accessibility&&(e.$prevArrow&&e.$prevArrow.off("keydown.slick",e.keyHandler),e.$nextArrow&&e.$nextArrow.off("keydown.slick",e.keyHandler))),e.$list.off("touchstart.slick mousedown.slick",e.swipeHandler),e.$list.off("touchmove.slick mousemove.slick",e.swipeHandler),e.$list.off("touchend.slick mouseup.slick",e.swipeHandler),e.$list.off("touchcancel.slick mouseleave.slick",e.swipeHandler),e.$list.off("click.slick",e.clickHandler),i(document).off(e.visibilityChange,e.visibility),e.cleanUpSlideEvents(),!0===e.options.accessibility&&e.$list.off("keydown.slick",e.keyHandler),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().off("click.slick",e.selectHandler),i(window).off("orientationchange.slick.slick-"+e.instanceUid,e.orientationChange),i(window).off("resize.slick.slick-"+e.instanceUid,e.resize),i("[draggable!=true]",e.$slideTrack).off("dragstart",e.preventDefault),i(window).off("load.slick.slick-"+e.instanceUid,e.setPosition)},e.prototype.cleanUpSlideEvents=function(){var e=this;e.$list.off("mouseenter.slick",i.proxy(e.interrupt,e,!0)),e.$list.off("mouseleave.slick",i.proxy(e.interrupt,e,!1))},e.prototype.cleanUpRows=function(){var i,e=this;e.options.rows>1&&((i=e.$slides.children().children()).removeAttr("style"),e.$slider.empty().append(i))},e.prototype.clickHandler=function(i){!1===this.shouldClick&&(i.stopImmediatePropagation(),i.stopPropagation(),i.preventDefault())},e.prototype.destroy=function(e){var t=this;t.autoPlayClear(),t.touchObject={},t.cleanUpEvents(),i(".slick-cloned",t.$slider).detach(),t.$dots&&t.$dots.remove(),t.$prevArrow&&t.$prevArrow.length&&(t.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),t.htmlExpr.test(t.options.prevArrow)&&t.$prevArrow.remove()),t.$nextArrow&&t.$nextArrow.length&&(t.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),t.htmlExpr.test(t.options.nextArrow)&&t.$nextArrow.remove()),t.$slides&&(t.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function(){i(this).attr("style",i(this).data("originalStyling"))}),t.$slideTrack.children(this.options.slide).detach(),t.$slideTrack.detach(),t.$list.detach(),t.$slider.append(t.$slides)),t.cleanUpRows(),t.$slider.removeClass("slick-slider"),t.$slider.removeClass("slick-initialized"),t.$slider.removeClass("slick-dotted"),t.unslicked=!0,e||t.$slider.trigger("destroy",[t])},e.prototype.disableTransition=function(i){var e=this,t={};t[e.transitionType]="",!1===e.options.fade?e.$slideTrack.css(t):e.$slides.eq(i).css(t)},e.prototype.fadeSlide=function(i,e){var t=this;!1===t.cssTransitions?(t.$slides.eq(i).css({zIndex:t.options.zIndex}),t.$slides.eq(i).animate({opacity:1},t.options.speed,t.options.easing,e)):(t.applyTransition(i),t.$slides.eq(i).css({opacity:1,zIndex:t.options.zIndex}),e&&setTimeout(function(){t.disableTransition(i),e.call()},t.options.speed))},e.prototype.fadeSlideOut=function(i){var e=this;!1===e.cssTransitions?e.$slides.eq(i).animate({opacity:0,zIndex:e.options.zIndex-2},e.options.speed,e.options.easing):(e.applyTransition(i),e.$slides.eq(i).css({opacity:0,zIndex:e.options.zIndex-2}))},e.prototype.filterSlides=e.prototype.slickFilter=function(i){var e=this;null!==i&&(e.$slidesCache=e.$slides,e.unload(),e.$slideTrack.children(this.options.slide).detach(),e.$slidesCache.filter(i).appendTo(e.$slideTrack),e.reinit())},e.prototype.focusHandler=function(){var e=this;e.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick","*",function(t){t.stopImmediatePropagation();var o=i(this);setTimeout(function(){e.options.pauseOnFocus&&(e.focussed=o.is(":focus"),e.autoPlay())},0)})},e.prototype.getCurrent=e.prototype.slickCurrentSlide=function(){return this.currentSlide},e.prototype.getDotCount=function(){var i=this,e=0,t=0,o=0;if(!0===i.options.infinite)if(i.slideCount<=i.options.slidesToShow)++o;else for(;e<i.slideCount;)++o,e=t+i.options.slidesToScroll,t+=i.options.slidesToScroll<=i.options.slidesToShow?i.options.slidesToScroll:i.options.slidesToShow;else if(!0===i.options.centerMode)o=i.slideCount;else if(i.options.asNavFor)for(;e<i.slideCount;)++o,e=t+i.options.slidesToScroll,t+=i.options.slidesToScroll<=i.options.slidesToShow?i.options.slidesToScroll:i.options.slidesToShow;else o=1+Math.ceil((i.slideCount-i.options.slidesToShow)/i.options.slidesToScroll);return o-1},e.prototype.getLeft=function(i){var e,t,o,s,n=this,r=0;return n.slideOffset=0,t=n.$slides.first().outerHeight(!0),!0===n.options.infinite?(n.slideCount>n.options.slidesToShow&&(n.slideOffset=n.slideWidth*n.options.slidesToShow*-1,s=-1,!0===n.options.vertical&&!0===n.options.centerMode&&(2===n.options.slidesToShow?s=-1.5:1===n.options.slidesToShow&&(s=-2)),r=t*n.options.slidesToShow*s),n.slideCount%n.options.slidesToScroll!=0&&i+n.options.slidesToScroll>n.slideCount&&n.slideCount>n.options.slidesToShow&&(i>n.slideCount?(n.slideOffset=(n.options.slidesToShow-(i-n.slideCount))*n.slideWidth*-1,r=(n.options.slidesToShow-(i-n.slideCount))*t*-1):(n.slideOffset=n.slideCount%n.options.slidesToScroll*n.slideWidth*-1,r=n.slideCount%n.options.slidesToScroll*t*-1))):i+n.options.slidesToShow>n.slideCount&&(n.slideOffset=(i+n.options.slidesToShow-n.slideCount)*n.slideWidth,r=(i+n.options.slidesToShow-n.slideCount)*t),n.slideCount<=n.options.slidesToShow&&(n.slideOffset=0,r=0),!0===n.options.centerMode&&n.slideCount<=n.options.slidesToShow?n.slideOffset=n.slideWidth*Math.floor(n.options.slidesToShow)/2-n.slideWidth*n.slideCount/2:!0===n.options.centerMode&&!0===n.options.infinite?n.slideOffset+=n.slideWidth*Math.floor(n.options.slidesToShow/2)-n.slideWidth:!0===n.options.centerMode&&(n.slideOffset=0,n.slideOffset+=n.slideWidth*Math.floor(n.options.slidesToShow/2)),e=!1===n.options.vertical?i*n.slideWidth*-1+n.slideOffset:i*t*-1+r,!0===n.options.variableWidth&&(o=n.slideCount<=n.options.slidesToShow||!1===n.options.infinite?n.$slideTrack.children(".slick-slide").eq(i):n.$slideTrack.children(".slick-slide").eq(i+n.options.slidesToShow),e=!0===n.options.rtl?o[0]?-1*(n.$slideTrack.width()-o[0].offsetLeft-o.width()):0:o[0]?-1*o[0].offsetLeft:0,!0===n.options.centerMode&&(o=n.slideCount<=n.options.slidesToShow||!1===n.options.infinite?n.$slideTrack.children(".slick-slide").eq(i):n.$slideTrack.children(".slick-slide").eq(i+n.options.slidesToShow+1),e=!0===n.options.rtl?o[0]?-1*(n.$slideTrack.width()-o[0].offsetLeft-o.width()):0:o[0]?-1*o[0].offsetLeft:0,e+=(n.$list.width()-o.outerWidth())/2)),e},e.prototype.getOption=e.prototype.slickGetOption=function(i){return this.options[i]},e.prototype.getNavigableIndexes=function(){var i,e=this,t=0,o=0,s=[];for(!1===e.options.infinite?i=e.slideCount:(t=-1*e.options.slidesToScroll,o=-1*e.options.slidesToScroll,i=2*e.slideCount);t<i;)s.push(t),t=o+e.options.slidesToScroll,o+=e.options.slidesToScroll<=e.options.slidesToShow?e.options.slidesToScroll:e.options.slidesToShow;return s},e.prototype.getSlick=function(){return this},e.prototype.getSlideCount=function(){var e,t,o=this;return t=!0===o.options.centerMode?o.slideWidth*Math.floor(o.options.slidesToShow/2):0,!0===o.options.swipeToSlide?(o.$slideTrack.find(".slick-slide").each(function(s,n){if(n.offsetLeft-t+i(n).outerWidth()/2>-1*o.swipeLeft)return e=n,!1}),Math.abs(i(e).attr("data-slick-index")-o.currentSlide)||1):o.options.slidesToScroll},e.prototype.goTo=e.prototype.slickGoTo=function(i,e){this.changeSlide({data:{message:"index",index:parseInt(i)}},e)},e.prototype.init=function(e){var t=this;i(t.$slider).hasClass("slick-initialized")||(i(t.$slider).addClass("slick-initialized"),t.buildRows(),t.buildOut(),t.setProps(),t.startLoad(),t.loadSlider(),t.initializeEvents(),t.updateArrows(),t.updateDots(),t.checkResponsive(!0),t.focusHandler()),e&&t.$slider.trigger("init",[t]),!0===t.options.accessibility&&t.initADA(),t.options.autoplay&&(t.paused=!1,t.autoPlay())},e.prototype.initADA=function(){var e=this,t=Math.ceil(e.slideCount/e.options.slidesToShow),o=e.getNavigableIndexes().filter(function(i){return i>=0&&i<e.slideCount});e.$slides.add(e.$slideTrack.find(".slick-cloned")).attr({"aria-hidden":"true",tabindex:"-1"}).find("a, input, button, select").attr({tabindex:"-1"}),null!==e.$dots&&(e.$slides.not(e.$slideTrack.find(".slick-cloned")).each(function(t){var s=o.indexOf(t);i(this).attr({role:"tabpanel",id:"slick-slide"+e.instanceUid+t,tabindex:-1}),-1!==s&&i(this).attr({"aria-describedby":"slick-slide-control"+e.instanceUid+s})}),e.$dots.attr("role","tablist").find("li").each(function(s){var n=o[s];i(this).attr({role:"presentation"}),i(this).find("button").first().attr({role:"tab",id:"slick-slide-control"+e.instanceUid+s,"aria-controls":"slick-slide"+e.instanceUid+n,"aria-label":s+1+" of "+t,"aria-selected":null,tabindex:"-1"})}).eq(e.currentSlide).find("button").attr({"aria-selected":"true",tabindex:"0"}).end());for(var s=e.currentSlide,n=s+e.options.slidesToShow;s<n;s++)e.$slides.eq(s).attr("tabindex",0);e.activateADA()},e.prototype.initArrowEvents=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.off("click.slick").on("click.slick",{message:"previous"},i.changeSlide),i.$nextArrow.off("click.slick").on("click.slick",{message:"next"},i.changeSlide),!0===i.options.accessibility&&(i.$prevArrow.on("keydown.slick",i.keyHandler),i.$nextArrow.on("keydown.slick",i.keyHandler)))},e.prototype.initDotEvents=function(){var e=this;!0===e.options.dots&&(i("li",e.$dots).on("click.slick",{message:"index"},e.changeSlide),!0===e.options.accessibility&&e.$dots.on("keydown.slick",e.keyHandler)),!0===e.options.dots&&!0===e.options.pauseOnDotsHover&&i("li",e.$dots).on("mouseenter.slick",i.proxy(e.interrupt,e,!0)).on("mouseleave.slick",i.proxy(e.interrupt,e,!1))},e.prototype.initSlideEvents=function(){var e=this;e.options.pauseOnHover&&(e.$list.on("mouseenter.slick",i.proxy(e.interrupt,e,!0)),e.$list.on("mouseleave.slick",i.proxy(e.interrupt,e,!1)))},e.prototype.initializeEvents=function(){var e=this;e.initArrowEvents(),e.initDotEvents(),e.initSlideEvents(),e.$list.on("touchstart.slick mousedown.slick",{action:"start"},e.swipeHandler),e.$list.on("touchmove.slick mousemove.slick",{action:"move"},e.swipeHandler),e.$list.on("touchend.slick mouseup.slick",{action:"end"},e.swipeHandler),e.$list.on("touchcancel.slick mouseleave.slick",{action:"end"},e.swipeHandler),e.$list.on("click.slick",e.clickHandler),i(document).on(e.visibilityChange,i.proxy(e.visibility,e)),!0===e.options.accessibility&&e.$list.on("keydown.slick",e.keyHandler),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().on("click.slick",e.selectHandler),i(window).on("orientationchange.slick.slick-"+e.instanceUid,i.proxy(e.orientationChange,e)),i(window).on("resize.slick.slick-"+e.instanceUid,i.proxy(e.resize,e)),i("[draggable!=true]",e.$slideTrack).on("dragstart",e.preventDefault),i(window).on("load.slick.slick-"+e.instanceUid,e.setPosition),i(e.setPosition)},e.prototype.initUI=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.show(),i.$nextArrow.show()),!0===i.options.dots&&i.slideCount>i.options.slidesToShow&&i.$dots.show()},e.prototype.keyHandler=function(i){var e=this;i.target.tagName.match("TEXTAREA|INPUT|SELECT")||(37===i.keyCode&&!0===e.options.accessibility?e.changeSlide({data:{message:!0===e.options.rtl?"next":"previous"}}):39===i.keyCode&&!0===e.options.accessibility&&e.changeSlide({data:{message:!0===e.options.rtl?"previous":"next"}}))},e.prototype.lazyLoad=function(){function e(e){i("img[data-lazy]",e).each(function(){var e=i(this),t=i(this).attr("data-lazy"),o=i(this).attr("data-srcset"),s=i(this).attr("data-sizes")||n.$slider.attr("data-sizes"),r=document.createElement("img");r.onload=function(){e.animate({opacity:0},100,function(){o&&(e.attr("srcset",o),s&&e.attr("sizes",s)),e.attr("src",t).animate({opacity:1},200,function(){e.removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading")}),n.$slider.trigger("lazyLoaded",[n,e,t])})},r.onerror=function(){e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"),n.$slider.trigger("lazyLoadError",[n,e,t])},r.src=t})}var t,o,s,n=this;if(!0===n.options.centerMode?!0===n.options.infinite?s=(o=n.currentSlide+(n.options.slidesToShow/2+1))+n.options.slidesToShow+2:(o=Math.max(0,n.currentSlide-(n.options.slidesToShow/2+1)),s=n.options.slidesToShow/2+1+2+n.currentSlide):(o=n.options.infinite?n.options.slidesToShow+n.currentSlide:n.currentSlide,s=Math.ceil(o+n.options.slidesToShow),!0===n.options.fade&&(o>0&&o--,s<=n.slideCount&&s++)),t=n.$slider.find(".slick-slide").slice(o,s),"anticipated"===n.options.lazyLoad)for(var r=o-1,l=s,d=n.$slider.find(".slick-slide"),a=0;a<n.options.slidesToScroll;a++)r<0&&(r=n.slideCount-1),t=(t=t.add(d.eq(r))).add(d.eq(l)),r--,l++;e(t),n.slideCount<=n.options.slidesToShow?e(n.$slider.find(".slick-slide")):n.currentSlide>=n.slideCount-n.options.slidesToShow?e(n.$slider.find(".slick-cloned").slice(0,n.options.slidesToShow)):0===n.currentSlide&&e(n.$slider.find(".slick-cloned").slice(-1*n.options.slidesToShow))},e.prototype.loadSlider=function(){var i=this;i.setPosition(),i.$slideTrack.css({opacity:1}),i.$slider.removeClass("slick-loading"),i.initUI(),"progressive"===i.options.lazyLoad&&i.progressiveLazyLoad()},e.prototype.next=e.prototype.slickNext=function(){this.changeSlide({data:{message:"next"}})},e.prototype.orientationChange=function(){var i=this;i.checkResponsive(),i.setPosition()},e.prototype.pause=e.prototype.slickPause=function(){var i=this;i.autoPlayClear(),i.paused=!0},e.prototype.play=e.prototype.slickPlay=function(){var i=this;i.autoPlay(),i.options.autoplay=!0,i.paused=!1,i.focussed=!1,i.interrupted=!1},e.prototype.postSlide=function(e){var t=this;t.unslicked||(t.$slider.trigger("afterChange",[t,e]),t.animating=!1,t.slideCount>t.options.slidesToShow&&t.setPosition(),t.swipeLeft=null,t.options.autoplay&&t.autoPlay(),!0===t.options.accessibility&&(t.initADA(),t.options.focusOnChange&&i(t.$slides.get(t.currentSlide)).attr("tabindex",0).focus()))},e.prototype.prev=e.prototype.slickPrev=function(){this.changeSlide({data:{message:"previous"}})},e.prototype.preventDefault=function(i){i.preventDefault()},e.prototype.progressiveLazyLoad=function(e){e=e||1;var t,o,s,n,r,l=this,d=i("img[data-lazy]",l.$slider);d.length?(t=d.first(),o=t.attr("data-lazy"),s=t.attr("data-srcset"),n=t.attr("data-sizes")||l.$slider.attr("data-sizes"),(r=document.createElement("img")).onload=function(){s&&(t.attr("srcset",s),n&&t.attr("sizes",n)),t.attr("src",o).removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading"),!0===l.options.adaptiveHeight&&l.setPosition(),l.$slider.trigger("lazyLoaded",[l,t,o]),l.progressiveLazyLoad()},r.onerror=function(){e<3?setTimeout(function(){l.progressiveLazyLoad(e+1)},500):(t.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"),l.$slider.trigger("lazyLoadError",[l,t,o]),l.progressiveLazyLoad())},r.src=o):l.$slider.trigger("allImagesLoaded",[l])},e.prototype.refresh=function(e){var t,o,s=this;o=s.slideCount-s.options.slidesToShow,!s.options.infinite&&s.currentSlide>o&&(s.currentSlide=o),s.slideCount<=s.options.slidesToShow&&(s.currentSlide=0),t=s.currentSlide,s.destroy(!0),i.extend(s,s.initials,{currentSlide:t}),s.init(),e||s.changeSlide({data:{message:"index",index:t}},!1)},e.prototype.registerBreakpoints=function(){var e,t,o,s=this,n=s.options.responsive||null;if("array"===i.type(n)&&n.length){s.respondTo=s.options.respondTo||"window";for(e in n)if(o=s.breakpoints.length-1,n.hasOwnProperty(e)){for(t=n[e].breakpoint;o>=0;)s.breakpoints[o]&&s.breakpoints[o]===t&&s.breakpoints.splice(o,1),o--;s.breakpoints.push(t),s.breakpointSettings[t]=n[e].settings}s.breakpoints.sort(function(i,e){return s.options.mobileFirst?i-e:e-i})}},e.prototype.reinit=function(){var e=this;e.$slides=e.$slideTrack.children(e.options.slide).addClass("slick-slide"),e.slideCount=e.$slides.length,e.currentSlide>=e.slideCount&&0!==e.currentSlide&&(e.currentSlide=e.currentSlide-e.options.slidesToScroll),e.slideCount<=e.options.slidesToShow&&(e.currentSlide=0),e.registerBreakpoints(),e.setProps(),e.setupInfinite(),e.buildArrows(),e.updateArrows(),e.initArrowEvents(),e.buildDots(),e.updateDots(),e.initDotEvents(),e.cleanUpSlideEvents(),e.initSlideEvents(),e.checkResponsive(!1,!0),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().on("click.slick",e.selectHandler),e.setSlideClasses("number"==typeof e.currentSlide?e.currentSlide:0),e.setPosition(),e.focusHandler(),e.paused=!e.options.autoplay,e.autoPlay(),e.$slider.trigger("reInit",[e])},e.prototype.resize=function(){var e=this;i(window).width()!==e.windowWidth&&(clearTimeout(e.windowDelay),e.windowDelay=window.setTimeout(function(){e.windowWidth=i(window).width(),e.checkResponsive(),e.unslicked||e.setPosition()},50))},e.prototype.removeSlide=e.prototype.slickRemove=function(i,e,t){var o=this;if(i="boolean"==typeof i?!0===(e=i)?0:o.slideCount-1:!0===e?--i:i,o.slideCount<1||i<0||i>o.slideCount-1)return!1;o.unload(),!0===t?o.$slideTrack.children().remove():o.$slideTrack.children(this.options.slide).eq(i).remove(),o.$slides=o.$slideTrack.children(this.options.slide),o.$slideTrack.children(this.options.slide).detach(),o.$slideTrack.append(o.$slides),o.$slidesCache=o.$slides,o.reinit()},e.prototype.setCSS=function(i){var e,t,o=this,s={};!0===o.options.rtl&&(i=-i),e="left"==o.positionProp?Math.ceil(i)+"px":"0px",t="top"==o.positionProp?Math.ceil(i)+"px":"0px",s[o.positionProp]=i,!1===o.transformsEnabled?o.$slideTrack.css(s):(s={},!1===o.cssTransitions?(s[o.animType]="translate("+e+", "+t+")",o.$slideTrack.css(s)):(s[o.animType]="translate3d("+e+", "+t+", 0px)",o.$slideTrack.css(s)))},e.prototype.setDimensions=function(){var i=this;!1===i.options.vertical?!0===i.options.centerMode&&i.$list.css({padding:"0px "+i.options.centerPadding}):(i.$list.height(i.$slides.first().outerHeight(!0)*i.options.slidesToShow),!0===i.options.centerMode&&i.$list.css({padding:i.options.centerPadding+" 0px"})),i.listWidth=i.$list.width(),i.listHeight=i.$list.height(),!1===i.options.vertical&&!1===i.options.variableWidth?(i.slideWidth=Math.ceil(i.listWidth/i.options.slidesToShow),i.$slideTrack.width(Math.ceil(i.slideWidth*i.$slideTrack.children(".slick-slide").length))):!0===i.options.variableWidth?i.$slideTrack.width(5e3*i.slideCount):(i.slideWidth=Math.ceil(i.listWidth),i.$slideTrack.height(Math.ceil(i.$slides.first().outerHeight(!0)*i.$slideTrack.children(".slick-slide").length)));var e=i.$slides.first().outerWidth(!0)-i.$slides.first().width();!1===i.options.variableWidth&&i.$slideTrack.children(".slick-slide").width(i.slideWidth-e)},e.prototype.setFade=function(){var e,t=this;t.$slides.each(function(o,s){e=t.slideWidth*o*-1,!0===t.options.rtl?i(s).css({position:"relative",right:e,top:0,zIndex:t.options.zIndex-2,opacity:0}):i(s).css({position:"relative",left:e,top:0,zIndex:t.options.zIndex-2,opacity:0})}),t.$slides.eq(t.currentSlide).css({zIndex:t.options.zIndex-1,opacity:1})},e.prototype.setHeight=function(){var i=this;if(1===i.options.slidesToShow&&!0===i.options.adaptiveHeight&&!1===i.options.vertical){var e=i.$slides.eq(i.currentSlide).outerHeight(!0);i.$list.css("height",e)}},e.prototype.setOption=e.prototype.slickSetOption=function(){var e,t,o,s,n,r=this,l=!1;if("object"===i.type(arguments[0])?(o=arguments[0],l=arguments[1],n="multiple"):"string"===i.type(arguments[0])&&(o=arguments[0],s=arguments[1],l=arguments[2],"responsive"===arguments[0]&&"array"===i.type(arguments[1])?n="responsive":void 0!==arguments[1]&&(n="single")),"single"===n)r.options[o]=s;else if("multiple"===n)i.each(o,function(i,e){r.options[i]=e});else if("responsive"===n)for(t in s)if("array"!==i.type(r.options.responsive))r.options.responsive=[s[t]];else{for(e=r.options.responsive.length-1;e>=0;)r.options.responsive[e].breakpoint===s[t].breakpoint&&r.options.responsive.splice(e,1),e--;r.options.responsive.push(s[t])}l&&(r.unload(),r.reinit())},e.prototype.setPosition=function(){var i=this;i.setDimensions(),i.setHeight(),!1===i.options.fade?i.setCSS(i.getLeft(i.currentSlide)):i.setFade(),i.$slider.trigger("setPosition",[i])},e.prototype.setProps=function(){var i=this,e=document.body.style;i.positionProp=!0===i.options.vertical?"top":"left","top"===i.positionProp?i.$slider.addClass("slick-vertical"):i.$slider.removeClass("slick-vertical"),void 0===e.WebkitTransition&&void 0===e.MozTransition&&void 0===e.msTransition||!0===i.options.useCSS&&(i.cssTransitions=!0),i.options.fade&&("number"==typeof i.options.zIndex?i.options.zIndex<3&&(i.options.zIndex=3):i.options.zIndex=i.defaults.zIndex),void 0!==e.OTransform&&(i.animType="OTransform",i.transformType="-o-transform",i.transitionType="OTransition",void 0===e.perspectiveProperty&&void 0===e.webkitPerspective&&(i.animType=!1)),void 0!==e.MozTransform&&(i.animType="MozTransform",i.transformType="-moz-transform",i.transitionType="MozTransition",void 0===e.perspectiveProperty&&void 0===e.MozPerspective&&(i.animType=!1)),void 0!==e.webkitTransform&&(i.animType="webkitTransform",i.transformType="-webkit-transform",i.transitionType="webkitTransition",void 0===e.perspectiveProperty&&void 0===e.webkitPerspective&&(i.animType=!1)),void 0!==e.msTransform&&(i.animType="msTransform",i.transformType="-ms-transform",i.transitionType="msTransition",void 0===e.msTransform&&(i.animType=!1)),void 0!==e.transform&&!1!==i.animType&&(i.animType="transform",i.transformType="transform",i.transitionType="transition"),i.transformsEnabled=i.options.useTransform&&null!==i.animType&&!1!==i.animType},e.prototype.setSlideClasses=function(i){var e,t,o,s,n=this;if(t=n.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden","true"),n.$slides.eq(i).addClass("slick-current"),!0===n.options.centerMode){var r=n.options.slidesToShow%2==0?1:0;e=Math.floor(n.options.slidesToShow/2),!0===n.options.infinite&&(i>=e&&i<=n.slideCount-1-e?n.$slides.slice(i-e+r,i+e+1).addClass("slick-active").attr("aria-hidden","false"):(o=n.options.slidesToShow+i,t.slice(o-e+1+r,o+e+2).addClass("slick-active").attr("aria-hidden","false")),0===i?t.eq(t.length-1-n.options.slidesToShow).addClass("slick-center"):i===n.slideCount-1&&t.eq(n.options.slidesToShow).addClass("slick-center")),n.$slides.eq(i).addClass("slick-center")}else i>=0&&i<=n.slideCount-n.options.slidesToShow?n.$slides.slice(i,i+n.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false"):t.length<=n.options.slidesToShow?t.addClass("slick-active").attr("aria-hidden","false"):(s=n.slideCount%n.options.slidesToShow,o=!0===n.options.infinite?n.options.slidesToShow+i:i,n.options.slidesToShow==n.options.slidesToScroll&&n.slideCount-i<n.options.slidesToShow?t.slice(o-(n.options.slidesToShow-s),o+s).addClass("slick-active").attr("aria-hidden","false"):t.slice(o,o+n.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false"));"ondemand"!==n.options.lazyLoad&&"anticipated"!==n.options.lazyLoad||n.lazyLoad()},e.prototype.setupInfinite=function(){var e,t,o,s=this;if(!0===s.options.fade&&(s.options.centerMode=!1),!0===s.options.infinite&&!1===s.options.fade&&(t=null,s.slideCount>s.options.slidesToShow)){for(o=!0===s.options.centerMode?s.options.slidesToShow+1:s.options.slidesToShow,e=s.slideCount;e>s.slideCount-o;e-=1)t=e-1,i(s.$slides[t]).clone(!0).attr("id","").attr("data-slick-index",t-s.slideCount).prependTo(s.$slideTrack).addClass("slick-cloned");for(e=0;e<o+s.slideCount;e+=1)t=e,i(s.$slides[t]).clone(!0).attr("id","").attr("data-slick-index",t+s.slideCount).appendTo(s.$slideTrack).addClass("slick-cloned");s.$slideTrack.find(".slick-cloned").find("[id]").each(function(){i(this).attr("id","")})}},e.prototype.interrupt=function(i){var e=this;i||e.autoPlay(),e.interrupted=i},e.prototype.selectHandler=function(e){var t=this,o=i(e.target).is(".slick-slide")?i(e.target):i(e.target).parents(".slick-slide"),s=parseInt(o.attr("data-slick-index"));s||(s=0),t.slideCount<=t.options.slidesToShow?t.slideHandler(s,!1,!0):t.slideHandler(s)},e.prototype.slideHandler=function(i,e,t){var o,s,n,r,l,d=null,a=this;if(e=e||!1,!(!0===a.animating&&!0===a.options.waitForAnimate||!0===a.options.fade&&a.currentSlide===i))if(!1===e&&a.asNavFor(i),o=i,d=a.getLeft(o),r=a.getLeft(a.currentSlide),a.currentLeft=null===a.swipeLeft?r:a.swipeLeft,!1===a.options.infinite&&!1===a.options.centerMode&&(i<0||i>a.getDotCount()*a.options.slidesToScroll))!1===a.options.fade&&(o=a.currentSlide,!0!==t?a.animateSlide(r,function(){a.postSlide(o)}):a.postSlide(o));else if(!1===a.options.infinite&&!0===a.options.centerMode&&(i<0||i>a.slideCount-a.options.slidesToScroll))!1===a.options.fade&&(o=a.currentSlide,!0!==t?a.animateSlide(r,function(){a.postSlide(o)}):a.postSlide(o));else{if(a.options.autoplay&&clearInterval(a.autoPlayTimer),s=o<0?a.slideCount%a.options.slidesToScroll!=0?a.slideCount-a.slideCount%a.options.slidesToScroll:a.slideCount+o:o>=a.slideCount?a.slideCount%a.options.slidesToScroll!=0?0:o-a.slideCount:o,a.animating=!0,a.$slider.trigger("beforeChange",[a,a.currentSlide,s]),n=a.currentSlide,a.currentSlide=s,a.setSlideClasses(a.currentSlide),a.options.asNavFor&&(l=(l=a.getNavTarget()).slick("getSlick")).slideCount<=l.options.slidesToShow&&l.setSlideClasses(a.currentSlide),a.updateDots(),a.updateArrows(),!0===a.options.fade)return!0!==t?(a.fadeSlideOut(n),a.fadeSlide(s,function(){a.postSlide(s)})):a.postSlide(s),void a.animateHeight();!0!==t?a.animateSlide(d,function(){a.postSlide(s)}):a.postSlide(s)}},e.prototype.startLoad=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.hide(),i.$nextArrow.hide()),!0===i.options.dots&&i.slideCount>i.options.slidesToShow&&i.$dots.hide(),i.$slider.addClass("slick-loading")},e.prototype.swipeDirection=function(){var i,e,t,o,s=this;return i=s.touchObject.startX-s.touchObject.curX,e=s.touchObject.startY-s.touchObject.curY,t=Math.atan2(e,i),(o=Math.round(180*t/Math.PI))<0&&(o=360-Math.abs(o)),o<=45&&o>=0?!1===s.options.rtl?"left":"right":o<=360&&o>=315?!1===s.options.rtl?"left":"right":o>=135&&o<=225?!1===s.options.rtl?"right":"left":!0===s.options.verticalSwiping?o>=35&&o<=135?"down":"up":"vertical"},e.prototype.swipeEnd=function(i){var e,t,o=this;if(o.dragging=!1,o.swiping=!1,o.scrolling)return o.scrolling=!1,!1;if(o.interrupted=!1,o.shouldClick=!(o.touchObject.swipeLength>10),void 0===o.touchObject.curX)return!1;if(!0===o.touchObject.edgeHit&&o.$slider.trigger("edge",[o,o.swipeDirection()]),o.touchObject.swipeLength>=o.touchObject.minSwipe){switch(t=o.swipeDirection()){case"left":case"down":e=o.options.swipeToSlide?o.checkNavigable(o.currentSlide+o.getSlideCount()):o.currentSlide+o.getSlideCount(),o.currentDirection=0;break;case"right":case"up":e=o.options.swipeToSlide?o.checkNavigable(o.currentSlide-o.getSlideCount()):o.currentSlide-o.getSlideCount(),o.currentDirection=1}"vertical"!=t&&(o.slideHandler(e),o.touchObject={},o.$slider.trigger("swipe",[o,t]))}else o.touchObject.startX!==o.touchObject.curX&&(o.slideHandler(o.currentSlide),o.touchObject={})},e.prototype.swipeHandler=function(i){var e=this;if(!(!1===e.options.swipe||"ontouchend"in document&&!1===e.options.swipe||!1===e.options.draggable&&-1!==i.type.indexOf("mouse")))switch(e.touchObject.fingerCount=i.originalEvent&&void 0!==i.originalEvent.touches?i.originalEvent.touches.length:1,e.touchObject.minSwipe=e.listWidth/e.options.touchThreshold,!0===e.options.verticalSwiping&&(e.touchObject.minSwipe=e.listHeight/e.options.touchThreshold),i.data.action){case"start":e.swipeStart(i);break;case"move":e.swipeMove(i);break;case"end":e.swipeEnd(i)}},e.prototype.swipeMove=function(i){var e,t,o,s,n,r,l=this;return n=void 0!==i.originalEvent?i.originalEvent.touches:null,!(!l.dragging||l.scrolling||n&&1!==n.length)&&(e=l.getLeft(l.currentSlide),l.touchObject.curX=void 0!==n?n[0].pageX:i.clientX,l.touchObject.curY=void 0!==n?n[0].pageY:i.clientY,l.touchObject.swipeLength=Math.round(Math.sqrt(Math.pow(l.touchObject.curX-l.touchObject.startX,2))),r=Math.round(Math.sqrt(Math.pow(l.touchObject.curY-l.touchObject.startY,2))),!l.options.verticalSwiping&&!l.swiping&&r>4?(l.scrolling=!0,!1):(!0===l.options.verticalSwiping&&(l.touchObject.swipeLength=r),t=l.swipeDirection(),void 0!==i.originalEvent&&l.touchObject.swipeLength>4&&(l.swiping=!0,i.preventDefault()),s=(!1===l.options.rtl?1:-1)*(l.touchObject.curX>l.touchObject.startX?1:-1),!0===l.options.verticalSwiping&&(s=l.touchObject.curY>l.touchObject.startY?1:-1),o=l.touchObject.swipeLength,l.touchObject.edgeHit=!1,!1===l.options.infinite&&(0===l.currentSlide&&"right"===t||l.currentSlide>=l.getDotCount()&&"left"===t)&&(o=l.touchObject.swipeLength*l.options.edgeFriction,l.touchObject.edgeHit=!0),!1===l.options.vertical?l.swipeLeft=e+o*s:l.swipeLeft=e+o*(l.$list.height()/l.listWidth)*s,!0===l.options.verticalSwiping&&(l.swipeLeft=e+o*s),!0!==l.options.fade&&!1!==l.options.touchMove&&(!0===l.animating?(l.swipeLeft=null,!1):void l.setCSS(l.swipeLeft))))},e.prototype.swipeStart=function(i){var e,t=this;if(t.interrupted=!0,1!==t.touchObject.fingerCount||t.slideCount<=t.options.slidesToShow)return t.touchObject={},!1;void 0!==i.originalEvent&&void 0!==i.originalEvent.touches&&(e=i.originalEvent.touches[0]),t.touchObject.startX=t.touchObject.curX=void 0!==e?e.pageX:i.clientX,t.touchObject.startY=t.touchObject.curY=void 0!==e?e.pageY:i.clientY,t.dragging=!0},e.prototype.unfilterSlides=e.prototype.slickUnfilter=function(){var i=this;null!==i.$slidesCache&&(i.unload(),i.$slideTrack.children(this.options.slide).detach(),i.$slidesCache.appendTo(i.$slideTrack),i.reinit())},e.prototype.unload=function(){var e=this;i(".slick-cloned",e.$slider).remove(),e.$dots&&e.$dots.remove(),e.$prevArrow&&e.htmlExpr.test(e.options.prevArrow)&&e.$prevArrow.remove(),e.$nextArrow&&e.htmlExpr.test(e.options.nextArrow)&&e.$nextArrow.remove(),e.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden","true").css("width","")},e.prototype.unslick=function(i){var e=this;e.$slider.trigger("unslick",[e,i]),e.destroy()},e.prototype.updateArrows=function(){var i=this;Math.floor(i.options.slidesToShow/2),!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&!i.options.infinite&&(i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false"),i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false"),0===i.currentSlide?(i.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false")):i.currentSlide>=i.slideCount-i.options.slidesToShow&&!1===i.options.centerMode?(i.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")):i.currentSlide>=i.slideCount-1&&!0===i.options.centerMode&&(i.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")))},e.prototype.updateDots=function(){var i=this;null!==i.$dots&&(i.$dots.find("li").removeClass("slick-active").end(),i.$dots.find("li").eq(Math.floor(i.currentSlide/i.options.slidesToScroll)).addClass("slick-active"))},e.prototype.visibility=function(){var i=this;i.options.autoplay&&(document[i.hidden]?i.interrupted=!0:i.interrupted=!1)},i.fn.slick=function(){var i,t,o=this,s=arguments[0],n=Array.prototype.slice.call(arguments,1),r=o.length;for(i=0;i<r;i++)if("object"==typeof s||void 0===s?o[i].slick=new e(o[i],s):t=o[i].slick[s].apply(o[i].slick,n),void 0!==t)return t;return o}});

/*
!function (e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], e) : "undefined" != typeof exports ? module.exports = e(require("jquery")) : e(jQuery)
}(function (p) {
    "use strict";
    var t = window.Select;
    (t = function (e, t) {
        this.defaults = {
            activeClass: "item-active",
            disabledClass: "select-disabled",
            itemDisabledClass: "item-disabled",
            openClass: "select-open",
            gutter: 2,
            placeholder: "Выберите"
        }, this.trigger = p(e), this.opts = p.extend({}, this.defaults, t), this.init()
    }).prototype = {
        constructor: t, init: function () {
            var s = this, e = this.trigger;
            p.each(e, function (e, t) {
                p(t).attr("data-select", e), s.setActive(t, p(t).find("select"), 0)
            }), s.bindEvents()
        }, bindEvents: function () {
            var n = this;
            n.trigger.on("click", function (e) {
                e.stopPropagation();
                var t = p(this), s = t.find("select"), i = n.getData(s);
                n.trigger.not(this).removeClass(n.opts.openClass), t.hasClass(n.opts.disabledClass) || t.hasClass(n.opts.openClass) ? n.destroy() : (n.render(t, i), t.addClass(n.opts.openClass))
            }), n.trigger.find("select").on("change", function (e, t) {
                n.setActive(p(this).parent(), this, t)
            }), p(document).on("click", ".select-option-item", function () {
                var e = p(this).index(), t = p(this).parents(".select-wrapper").attr("data-select");
                n.trigger.filter('[data-select="' + t + '"]').find("select").trigger("change", e)
            }), p(document).click(function () {
                n.destroy()
            })
        }, getData: function (e) {
            for (var t = [], s = !1, i = e.find("option"), n = 0; n < i.length; n++) s = e.get(0).selectedIndex === n, t.push({
                name: p(i[n]).text(),
                value: p(i[n]).val(),
                disabled: void 0 !== p(i[n]).attr("disabled"),
                active: s
            });
            return t
        }, setActive: function (e, t, s) {
            var i = parseInt(s), n = p(t).find("option");
            0 < n.length ? ((i >= n.length || i < 0) && (i = 0), p(t).get(0).selectedIndex = i, p(e).find(".select-inner").text(p(n[i]).text())) : p(e).find(".select-inner").text(this.opts.placeholder)
        }, render: function (e, t) {
            var s = this, i = e, n = "", a = t;
            n += '<div class="select-wrapper" data-select="' + i.attr("data-select") + '"><div class="select-content"><ul class="select-options">';
            for (var l = 0; l < a.length; l++) a[l].disabled ? n += '<li class="select-option-item ' + s.opts.itemDisabledClass + '" data-value="' + a[l].value + '">' + a[l].name + "</li>" : a[l].active ? n += '<li class="select-option-item ' + s.opts.activeClass + '" data-value="' + a[l].value + '">' + a[l].name + "</li>" : n += '<li class="select-option-item" data-value="' + a[l].value + '">' + a[l].name + "</li>";
            n += "</ul></div></div>", p(".select-wrapper").remove(), p("body").append(n);
            var o = i.outerWidth(!0), r = i.outerHeight(!0), c = i.offset().left, d = i.offset().top;
            p(".select-wrapper").css({width: o + "px", top: d + r + s.opts.gutter + "px", left: c + "px"})
        }, destroy: function () {
            this.trigger.removeClass(this.opts.openClass), p(".select-wrapper").remove()
        }
    }, p.fn.select = function (e) {
        return new t(this, e)
    }, p.fn.select.Constructor = t
});
*/

/*! Simple JavaScript Inheritance
 * By John Resig http://ejohn.org/
 * MIT Licensed.
 */
!function(){"use strict";var a=!1;window.JQClass=function(){},JQClass.classes={},JQClass.extend=function b(c){function d(){!a&&this._init&&this._init.apply(this,arguments)}var e=this.prototype;a=!0;var f=new this;a=!1;for(var g in c)if("function"==typeof c[g]&&"function"==typeof e[g])f[g]=function(a,b){return function(){var c=this._super;this._super=function(b){return e[a].apply(this,b||[])};var d=b.apply(this,arguments);return this._super=c,d}}(g,c[g]);else if("object"==typeof c[g]&&"object"==typeof e[g]&&"defaultOptions"===g){var h,i=e[g],j=c[g],k={};for(h in i)k[h]=i[h];for(h in j)k[h]=j[h];f[g]=k}else f[g]=c[g];return d.prototype=f,d.prototype.constructor=d,d.extend=b,d}}(),/*! Abstract base class for collection plugins v1.0.2.
	Written by Keith Wood (wood.keith{at}optusnet.com.au) December 2013.
	Licensed under the MIT license (http://keith-wood.name/licence.html). */
function($){"use strict";function camelCase(a){return a.replace(/-([a-z])/g,function(a,b){return b.toUpperCase()})}JQClass.classes.JQPlugin=JQClass.extend({name:"plugin",defaultOptions:{},regionalOptions:{},deepMerge:!0,_getMarker:function(){return"is-"+this.name},_init:function(){$.extend(this.defaultOptions,this.regionalOptions&&this.regionalOptions[""]||{});var a=camelCase(this.name);$[a]=this,$.fn[a]=function(b){var c=Array.prototype.slice.call(arguments,1),d=this,e=this;return this.each(function(){if("string"==typeof b){if("_"===b[0]||!$[a][b])throw"Unknown method: "+b;var f=$[a][b].apply($[a],[this].concat(c));if(f!==d&&void 0!==f)return e=f,!1}else $[a]._attach(this,b)}),e}},setDefaults:function(a){$.extend(this.defaultOptions,a||{})},_attach:function(a,b){if(a=$(a),!a.hasClass(this._getMarker())){a.addClass(this._getMarker()),b=$.extend(this.deepMerge,{},this.defaultOptions,this._getMetadata(a),b||{});var c=$.extend({name:this.name,elem:a,options:b},this._instSettings(a,b));a.data(this.name,c),this._postAttach(a,c),this.option(a,b)}},_instSettings:function(a,b){return{}},_postAttach:function(a,b){},_getMetadata:function(elem){try{var data=elem.data(this.name.toLowerCase())||"";data=data.replace(/(\\?)'/g,function(a,b){return b?"'":'"'}).replace(/([a-zA-Z0-9]+):/g,function(a,b,c){var d=data.substring(0,c).match(/"/g);return d&&d.length%2!==0?b+":":'"'+b+'":'}).replace(/\\:/g,":"),data=$.parseJSON("{"+data+"}");for(var key in data)if(data.hasOwnProperty(key)){var value=data[key];"string"==typeof value&&value.match(/^new Date\(([-0-9,\s]*)\)$/)&&(data[key]=eval(value))}return data}catch(a){return{}}},_getInst:function(a){return $(a).data(this.name)||{}},option:function(a,b,c){a=$(a);var d=a.data(this.name),e=b||{};return!b||"string"==typeof b&&"undefined"==typeof c?(e=(d||{}).options,e&&b?e[b]:e):void(a.hasClass(this._getMarker())&&("string"==typeof b&&(e={},e[b]=c),this._optionsChanged(a,d,e),$.extend(d.options,e)))},_optionsChanged:function(a,b,c){},destroy:function(a){a=$(a),a.hasClass(this._getMarker())&&(this._preDestroy(a,this._getInst(a)),a.removeData(this.name).removeClass(this._getMarker()))},_preDestroy:function(a,b){}}),$.JQPlugin={createPlugin:function(a,b){"object"==typeof a&&(b=a,a="JQPlugin"),a=camelCase(a);var c=camelCase(b.name);JQClass.classes[c]=JQClass.classes[a].extend(b),new JQClass.classes[c]}}}(jQuery);
//# sourceMappingURL=jquery.plugin.min.map
/*! http://keith-wood.name/countdown.html
	Countdown for jQuery v2.1.0.
	Written by Keith Wood (wood.keith{at}optusnet.com.au) January 2008.
	Available under the MIT (http://keith-wood.name/licence.html) license. 
	Please attribute the author if you use it. */
!function(a){"use strict";var b="countdown",c=0,d=1,e=2,f=3,g=4,h=5,i=6;a.JQPlugin.createPlugin({name:b,defaultOptions:{until:null,since:null,timezone:null,serverSync:null,format:"dHMS",layout:"",compact:!1,padZeroes:!1,significant:0,description:"",expiryUrl:"",expiryText:"",alwaysExpire:!1,onExpiry:null,onTick:null,tickInterval:1},regionalOptions:{"":{labels:["Years","Months","Weeks","Days","Hours","Minutes","Seconds"],labels1:["Year","Month","Week","Day","Hour","Minute","Second"],compactLabels:["y","m","w","d"],whichLabels:null,digits:["0","1","2","3","4","5","6","7","8","9"],timeSeparator:":",isRTL:!1}},_rtlClass:b+"-rtl",_sectionClass:b+"-section",_amountClass:b+"-amount",_periodClass:b+"-period",_rowClass:b+"-row",_holdingClass:b+"-holding",_showClass:b+"-show",_descrClass:b+"-descr",_timerElems:[],_init:function(){function b(a){var h=a<1e12?e?window.performance.now()+window.performance.timing.navigationStart:d():a||d();h-g>=1e3&&(c._updateElems(),g=h),f(b)}var c=this;this._super(),this._serverSyncs=[];var d="function"==typeof Date.now?Date.now:function(){return(new Date).getTime()},e=window.performance&&"function"==typeof window.performance.now,f=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||null,g=0;!f||a.noRequestAnimationFrame?(a.noRequestAnimationFrame=null,a.countdown._timer=setInterval(function(){c._updateElems()},1e3)):(g=window.animationStartTime||window.webkitAnimationStartTime||window.mozAnimationStartTime||window.oAnimationStartTime||window.msAnimationStartTime||d(),f(b))},UTCDate:function(a,b,c,d,e,f,g,h){"object"==typeof b&&b instanceof Date&&(h=b.getMilliseconds(),g=b.getSeconds(),f=b.getMinutes(),e=b.getHours(),d=b.getDate(),c=b.getMonth(),b=b.getFullYear());var i=new Date;return i.setUTCFullYear(b),i.setUTCDate(1),i.setUTCMonth(c||0),i.setUTCDate(d||1),i.setUTCHours(e||0),i.setUTCMinutes((f||0)-(Math.abs(a)<30?60*a:a)),i.setUTCSeconds(g||0),i.setUTCMilliseconds(h||0),i},periodsToSeconds:function(a){return 31557600*a[0]+2629800*a[1]+604800*a[2]+86400*a[3]+3600*a[4]+60*a[5]+a[6]},resync:function(){var b=this;a("."+this._getMarker()).each(function(){var c=a.data(this,b.name);if(c.options.serverSync){for(var d=null,e=0;e<b._serverSyncs.length;e++)if(b._serverSyncs[e][0]===c.options.serverSync){d=b._serverSyncs[e];break}if(b._eqNull(d[2])){var f=a.isFunction(c.options.serverSync)?c.options.serverSync.apply(this,[]):null;d[2]=(f?(new Date).getTime()-f.getTime():0)-d[1]}c._since&&c._since.setMilliseconds(c._since.getMilliseconds()+d[2]),c._until.setMilliseconds(c._until.getMilliseconds()+d[2])}});for(var c=0;c<b._serverSyncs.length;c++)b._eqNull(b._serverSyncs[c][2])||(b._serverSyncs[c][1]+=b._serverSyncs[c][2],delete b._serverSyncs[c][2])},_instSettings:function(a,b){return{_periods:[0,0,0,0,0,0,0]}},_addElem:function(a){this._hasElem(a)||this._timerElems.push(a)},_hasElem:function(b){return a.inArray(b,this._timerElems)>-1},_removeElem:function(b){this._timerElems=a.map(this._timerElems,function(a){return a===b?null:a})},_updateElems:function(){for(var a=this._timerElems.length-1;a>=0;a--)this._updateCountdown(this._timerElems[a])},_optionsChanged:function(b,c,d){d.layout&&(d.layout=d.layout.replace(/&lt;/g,"<").replace(/&gt;/g,">")),this._resetExtraLabels(c.options,d);var e=c.options.timezone!==d.timezone;a.extend(c.options,d),this._adjustSettings(b,c,!this._eqNull(d.until)||!this._eqNull(d.since)||e);var f=new Date;(c._since&&c._since<f||c._until&&c._until>f)&&this._addElem(b[0]),this._updateCountdown(b,c)},_updateCountdown:function(b,c){if(b=b.jquery?b:a(b),c=c||this._getInst(b)){if(b.html(this._generateHTML(c)).toggleClass(this._rtlClass,c.options.isRTL),"pause"!==c._hold&&a.isFunction(c.options.onTick)){var d="lap"!==c._hold?c._periods:this._calculatePeriods(c,c._show,c.options.significant,new Date);1!==c.options.tickInterval&&this.periodsToSeconds(d)%c.options.tickInterval!==0||c.options.onTick.apply(b[0],[d])}var e="pause"!==c._hold&&(c._since?c._now.getTime()<c._since.getTime():c._now.getTime()>=c._until.getTime());if(e&&!c._expiring){if(c._expiring=!0,this._hasElem(b[0])||c.options.alwaysExpire){if(this._removeElem(b[0]),a.isFunction(c.options.onExpiry)&&c.options.onExpiry.apply(b[0],[]),c.options.expiryText){var f=c.options.layout;c.options.layout=c.options.expiryText,this._updateCountdown(b[0],c),c.options.layout=f}c.options.expiryUrl&&(window.location=c.options.expiryUrl)}c._expiring=!1}else"pause"===c._hold&&this._removeElem(b[0])}},_resetExtraLabels:function(a,b){var c=null;for(c in b)c.match(/[Ll]abels[02-9]|compactLabels1/)&&(a[c]=b[c]);for(c in a)c.match(/[Ll]abels[02-9]|compactLabels1/)&&"undefined"==typeof b[c]&&(a[c]=null)},_eqNull:function(a){return"undefined"==typeof a||null===a},_adjustSettings:function(b,c,d){for(var e=null,f=0;f<this._serverSyncs.length;f++)if(this._serverSyncs[f][0]===c.options.serverSync){e=this._serverSyncs[f][1];break}var g=null,h=null;if(this._eqNull(e)){var i=a.isFunction(c.options.serverSync)?c.options.serverSync.apply(b[0],[]):null;g=new Date,h=i?g.getTime()-i.getTime():0,this._serverSyncs.push([c.options.serverSync,h])}else g=new Date,h=c.options.serverSync?e:0;var j=c.options.timezone;j=this._eqNull(j)?-g.getTimezoneOffset():j,(d||!d&&this._eqNull(c._until)&&this._eqNull(c._since))&&(c._since=c.options.since,this._eqNull(c._since)||(c._since=this.UTCDate(j,this._determineTime(c._since,null)),c._since&&h&&c._since.setMilliseconds(c._since.getMilliseconds()+h)),c._until=this.UTCDate(j,this._determineTime(c.options.until,g)),h&&c._until.setMilliseconds(c._until.getMilliseconds()+h)),c._show=this._determineShow(c)},_preDestroy:function(a,b){this._removeElem(a[0]),a.empty()},pause:function(a){this._hold(a,"pause")},lap:function(a){this._hold(a,"lap")},resume:function(a){this._hold(a,null)},toggle:function(b){var c=a.data(b,this.name)||{};this[c._hold?"resume":"pause"](b)},toggleLap:function(b){var c=a.data(b,this.name)||{};this[c._hold?"resume":"lap"](b)},_hold:function(b,c){var d=a.data(b,this.name);if(d){if("pause"===d._hold&&!c){d._periods=d._savePeriods;var e=d._since?"-":"+";d[d._since?"_since":"_until"]=this._determineTime(e+d._periods[0]+"y"+e+d._periods[1]+"o"+e+d._periods[2]+"w"+e+d._periods[3]+"d"+e+d._periods[4]+"h"+e+d._periods[5]+"m"+e+d._periods[6]+"s"),this._addElem(b)}d._hold=c,d._savePeriods="pause"===c?d._periods:null,a.data(b,this.name,d),this._updateCountdown(b,d)}},getTimes:function(b){var c=a.data(b,this.name);return c?"pause"===c._hold?c._savePeriods:c._hold?this._calculatePeriods(c,c._show,c.options.significant,new Date):c._periods:null},_determineTime:function(a,b){var c=this,d=function(a){var b=new Date;return b.setTime(b.getTime()+1e3*a),b},e=function(a){a=a.toLowerCase();for(var b=new Date,d=b.getFullYear(),e=b.getMonth(),f=b.getDate(),g=b.getHours(),h=b.getMinutes(),i=b.getSeconds(),j=/([+-]?[0-9]+)\s*(s|m|h|d|w|o|y)?/g,k=j.exec(a);k;){switch(k[2]||"s"){case"s":i+=parseInt(k[1],10);break;case"m":h+=parseInt(k[1],10);break;case"h":g+=parseInt(k[1],10);break;case"d":f+=parseInt(k[1],10);break;case"w":f+=7*parseInt(k[1],10);break;case"o":e+=parseInt(k[1],10),f=Math.min(f,c._getDaysInMonth(d,e));break;case"y":d+=parseInt(k[1],10),f=Math.min(f,c._getDaysInMonth(d,e))}k=j.exec(a)}return new Date(d,e,f,g,h,i,0)},f=this._eqNull(a)?b:"string"==typeof a?e(a):"number"==typeof a?d(a):a;return f&&f.setMilliseconds(0),f},_getDaysInMonth:function(a,b){return 32-new Date(a,b,32).getDate()},_normalLabels:function(a){return a},_generateHTML:function(b){var j=this;b._periods=b._hold?b._periods:this._calculatePeriods(b,b._show,b.options.significant,new Date);var k=!1,l=0,m=b.options.significant,n=a.extend({},b._show),o=null;for(o=c;o<=i;o++)k=k||"?"===b._show[o]&&b._periods[o]>0,n[o]="?"!==b._show[o]||k?b._show[o]:null,l+=n[o]?1:0,m-=b._periods[o]>0?1:0;var p=[!1,!1,!1,!1,!1,!1,!1];for(o=i;o>=c;o--)b._show[o]&&(b._periods[o]?p[o]=!0:(p[o]=m>0,m--));var q=b.options.compact?b.options.compactLabels:b.options.labels,r=b.options.whichLabels||this._normalLabels,s=function(a){var c=b.options["compactLabels"+r(b._periods[a])];return n[a]?j._translateDigits(b,b._periods[a])+(c?c[a]:q[a])+" ":""},t=b.options.padZeroes?2:1,u=function(a){var c=b.options["labels"+r(b._periods[a])];return!b.options.significant&&n[a]||b.options.significant&&p[a]?'<span class="'+j._sectionClass+'"><span class="'+j._amountClass+'">'+j._minDigits(b,b._periods[a],t)+'</span><span class="'+j._periodClass+'">'+(c?c[a]:q[a])+"</span></span>":""};return b.options.layout?this._buildLayout(b,n,b.options.layout,b.options.compact,b.options.significant,p):(b.options.compact?'<span class="'+this._rowClass+" "+this._amountClass+(b._hold?" "+this._holdingClass:"")+'">'+s(c)+s(d)+s(e)+s(f)+(n[g]?this._minDigits(b,b._periods[g],2):"")+(n[h]?(n[g]?b.options.timeSeparator:"")+this._minDigits(b,b._periods[h],2):"")+(n[i]?(n[g]||n[h]?b.options.timeSeparator:"")+this._minDigits(b,b._periods[i],2):""):'<span class="'+this._rowClass+" "+this._showClass+(b.options.significant||l)+(b._hold?" "+this._holdingClass:"")+'">'+u(c)+u(d)+u(e)+u(f)+u(g)+u(h)+u(i))+"</span>"+(b.options.description?'<span class="'+this._rowClass+" "+this._descrClass+'">'+b.options.description+"</span>":"")},_buildLayout:function(b,j,k,l,m,n){for(var o=b.options[l?"compactLabels":"labels"],p=b.options.whichLabels||this._normalLabels,q=function(a){return(b.options[(l?"compactLabels":"labels")+p(b._periods[a])]||o)[a]},r=function(a,c){return b.options.digits[Math.floor(a/c)%10]},s={desc:b.options.description,sep:b.options.timeSeparator,yl:q(c),yn:this._minDigits(b,b._periods[c],1),ynn:this._minDigits(b,b._periods[c],2),ynnn:this._minDigits(b,b._periods[c],3),y1:r(b._periods[c],1),y10:r(b._periods[c],10),y100:r(b._periods[c],100),y1000:r(b._periods[c],1e3),ol:q(d),on:this._minDigits(b,b._periods[d],1),onn:this._minDigits(b,b._periods[d],2),onnn:this._minDigits(b,b._periods[d],3),o1:r(b._periods[d],1),o10:r(b._periods[d],10),o100:r(b._periods[d],100),o1000:r(b._periods[d],1e3),wl:q(e),wn:this._minDigits(b,b._periods[e],1),wnn:this._minDigits(b,b._periods[e],2),wnnn:this._minDigits(b,b._periods[e],3),w1:r(b._periods[e],1),w10:r(b._periods[e],10),w100:r(b._periods[e],100),w1000:r(b._periods[e],1e3),dl:q(f),dn:this._minDigits(b,b._periods[f],1),dnn:this._minDigits(b,b._periods[f],2),dnnn:this._minDigits(b,b._periods[f],3),d1:r(b._periods[f],1),d10:r(b._periods[f],10),d100:r(b._periods[f],100),d1000:r(b._periods[f],1e3),hl:q(g),hn:this._minDigits(b,b._periods[g],1),hnn:this._minDigits(b,b._periods[g],2),hnnn:this._minDigits(b,b._periods[g],3),h1:r(b._periods[g],1),h10:r(b._periods[g],10),h100:r(b._periods[g],100),h1000:r(b._periods[g],1e3),ml:q(h),mn:this._minDigits(b,b._periods[h],1),mnn:this._minDigits(b,b._periods[h],2),mnnn:this._minDigits(b,b._periods[h],3),m1:r(b._periods[h],1),m10:r(b._periods[h],10),m100:r(b._periods[h],100),m1000:r(b._periods[h],1e3),sl:q(i),sn:this._minDigits(b,b._periods[i],1),snn:this._minDigits(b,b._periods[i],2),snnn:this._minDigits(b,b._periods[i],3),s1:r(b._periods[i],1),s10:r(b._periods[i],10),s100:r(b._periods[i],100),s1000:r(b._periods[i],1e3)},t=k,u=c;u<=i;u++){var v="yowdhms".charAt(u),w=new RegExp("\\{"+v+"<\\}([\\s\\S]*)\\{"+v+">\\}","g");t=t.replace(w,!m&&j[u]||m&&n[u]?"$1":"")}return a.each(s,function(a,b){var c=new RegExp("\\{"+a+"\\}","g");t=t.replace(c,b)}),t},_minDigits:function(a,b,c){return b=""+b,b.length>=c?this._translateDigits(a,b):(b="0000000000"+b,this._translateDigits(a,b.substr(b.length-c)))},_translateDigits:function(a,b){return(""+b).replace(/[0-9]/g,function(b){return a.options.digits[b]})},_determineShow:function(a){var b=a.options.format,j=[];return j[c]=b.match("y")?"?":b.match("Y")?"!":null,j[d]=b.match("o")?"?":b.match("O")?"!":null,j[e]=b.match("w")?"?":b.match("W")?"!":null,j[f]=b.match("d")?"?":b.match("D")?"!":null,j[g]=b.match("h")?"?":b.match("H")?"!":null,j[h]=b.match("m")?"?":b.match("M")?"!":null,j[i]=b.match("s")?"?":b.match("S")?"!":null,j},_calculatePeriods:function(a,b,j,k){a._now=k,a._now.setMilliseconds(0);var l=new Date(a._now.getTime());a._since?k.getTime()<a._since.getTime()?a._now=k=l:k=a._since:(l.setTime(a._until.getTime()),k.getTime()>a._until.getTime()&&(a._now=k=l));var m=[0,0,0,0,0,0,0];if(b[c]||b[d]){var n=this._getDaysInMonth(k.getFullYear(),k.getMonth()),o=this._getDaysInMonth(l.getFullYear(),l.getMonth()),p=l.getDate()===k.getDate()||l.getDate()>=Math.min(n,o)&&k.getDate()>=Math.min(n,o),q=function(a){return 60*(60*a.getHours()+a.getMinutes())+a.getSeconds()},r=Math.max(0,12*(l.getFullYear()-k.getFullYear())+l.getMonth()-k.getMonth()+(l.getDate()<k.getDate()&&!p||p&&q(l)<q(k)?-1:0));m[c]=b[c]?Math.floor(r/12):0,m[d]=b[d]?r-12*m[c]:0,k=new Date(k.getTime());var s=k.getDate()===n,t=this._getDaysInMonth(k.getFullYear()+m[c],k.getMonth()+m[d]);k.getDate()>t&&k.setDate(t),k.setFullYear(k.getFullYear()+m[c]),k.setMonth(k.getMonth()+m[d]),s&&k.setDate(t)}var u=Math.floor((l.getTime()-k.getTime())/1e3),v=null,w=function(a,c){m[a]=b[a]?Math.floor(u/c):0,u-=m[a]*c};if(w(e,604800),w(f,86400),w(g,3600),w(h,60),w(i,1),u>0&&!a._since){var x=[1,12,4.3482,7,24,60,60],y=i,z=1;for(v=i;v>=c;v--)b[v]&&(m[y]>=z&&(m[y]=0,u=1),u>0&&(m[v]++,u=0,y=v,z=1)),z*=x[v]}if(j)for(v=c;v<=i;v++)j&&m[v]?j--:j||(m[v]=0);return m}})}(jQuery);
//# sourceMappingURL=jquery.countdown.min.map
/* http://keith-wood.name/countdown.html
 * Russian initialisation for the jQuery countdown extension
 * Written by Sergey K. (xslade{at}gmail.com) June 2010. */
(function($) {
	'use strict';
	$.countdown.regionalOptions.ru = {
		labels: ['Лет','Месяцев','Недель','Дней','Часов','Минут','Секунд'],
		labels1: ['Год','Месяц','Неделя','День','Час','Минута','Секунда'],
		labels2: ['Года','Месяца','Недели','Дня','Часа','Минуты','Секунды'],
		compactLabels: ['л','м','н','д'],
		compactLabels1: ['г','м','н','д'],
		whichLabels: function(amount) {
			var units = amount % 10;
			var tens = Math.floor((amount % 100) / 10);
			return (amount === 1 ? 1 : (units >= 2 && units <= 4 && tens !== 1 ? 2 :
				(units === 1 && tens !== 1 ? 1 : 0)));
		},
		digits: ['0','1','2','3','4','5','6','7','8','9'],
		timeSeparator: ':',
		isRTL: false
	};
	$.countdown.setDefaults($.countdown.regionalOptions.ru);
})(jQuery);
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});

window.addEventListener('DOMContentLoaded', function () {
    const headBox = document.querySelectorAll('.head__box'),
        numberHide = document.querySelectorAll('.number__hide'),
        headInput = document.querySelector('#head__input'),
        tabs = document.querySelectorAll('.tab'),
        content = document.querySelectorAll('.choose__content'),
        contact = document.querySelectorAll('.head__contact'),
        contactHide = document.querySelectorAll('.contact__hide'),
        sliderShow = document.querySelectorAll('.intro__slider');

    let sliderContent;

    function calcScroll() {
        let div = document.createElement('div');

        div.style.width = '50px';
        div.style.height = '50px';
        div.style.overflowY = "scroll";
        div.style.visibility = 'hidden';

        document.body.append(div);
        let scrollWidth = div.offsetWidth - div.clientWidth;
        div.remove();

        return scrollWidth;
    }

    const showOverlay = (open = true) => {
        if(open){
            document.querySelector('.black__over').style.display = 'block';
            setTimeout(function () {
                document.querySelector('.black__over').classList.add('show__over');
            },10)
            document.body.style.overflow = 'hidden';
            // document.body.style.paddingRight = calcScroll() + 'px';
        }else{
            document.querySelector('.black__over').classList.remove('show__over');
            document.body.style.overflow = 'auto';
            document.body.style.paddingRight = '0px';
            setTimeout(function() {
               document.querySelector('.black__over').style.display = 'none';    
            },300)
        }
    };
    const hideModal = (iteam,iteam2) => {
        for(let i = 0; i < iteam.length; i++){
            iteam[i].classList.remove('show');
            setTimeout(function () {
                iteam[i].style.display = 'none';
            },300)
        }
        for(let i = 0; i < iteam2.length; i++){
            let image =  iteam2[i].querySelectorAll('img');
            for(let j = 0; j < image.length; j++){
                if(image[j].getAttribute('src') === 'img/down_white.png'){
                    image[j].style.transform = 'rotate(0)'
                }
            }
        }
    };

    const searchInput = () => {
        document.querySelector('.map__head_input').classList.add('head__input_active')
        headInput.parentElement.querySelector('#seacrh').style.display = 'none';
        headInput.parentElement.querySelector('.close__icon').style.display = 'inline-block';

        headInput.addEventListener('input', () => {
            showOverlay();

            headInput.parentElement.classList.add('active');
            document.querySelector('.head__hide').classList.add('head__hide_active')
        });


        headInput.parentElement.querySelector('.close__icon').addEventListener('click', closeInput);
        // headInput.addEventListener('blur', closeInput);

    };
    function closeInput() {
        headInput.parentElement.classList.remove('active');
        headInput.parentElement.querySelector('.close__icon').style.display = 'none'
        headInput.parentElement.querySelector('#seacrh').style.display = 'inline-block'
        document.querySelector('.head__hide').classList.remove('head__hide_active');
        document.querySelector('.map__head_input').classList.remove('head__input_active')

        headInput.value = '';

        showOverlay(false)
    };

    const showHide = (iteam, iteam2) => {
        for (let i = 0; i < iteam2.length; i++) {
            iteam2[i].addEventListener('click', () => {
                show(i)
            });
        }
        function show(i) {
            if (document.querySelector('.contact__hide').classList.length > 1) {
                return;
            }
            iteam2[i].querySelector('img:not(.vodafone__icon)').style.transform = 'rotate(-180deg)'

            iteam[i].style.display = 'block';

            setTimeout(function () {
                iteam[i].classList.add('show');
            }, 10);

            showOverlay();
        }
    };
    const changeTab = (e, index,media = false) => {
        let tabHide = document.querySelectorAll('.tab__hide');
        if(innerWidth <= 1150 && e.target.classList.contains('active__tab') === true){
            if(tabHide[index].classList.contains('active__tab_menu') === true){
                tabHide[index].classList.remove('active__tab_menu');
                e.target.querySelector('img').style.transform = 'rotate(0)'
            }else{
                for(let i = 0; i < tabHide.length; i++){
                    tabHide[i].classList.remove('active__tab_menu');
                    e.target.querySelector('img').style.transform = 'rotate(0)'
                }
                tabHide[index].classList.add('active__tab_menu');
                e.target.querySelector('img').style.transform = 'rotate(-180deg)'
            } 
        }
        for (let i = 0; i < tabs.length; i++) {
            tabs[i].classList.remove('active__tab');
            content[i].classList.add('hide');
        }
        if(e.target.classList.contains('tab') === true){
            e.target.classList.add('active__tab');
            content[index].classList.remove('hide');
            
            tabHide[index - 1 === 0 ? 0 : 1].classList.remove('active__tab_menu');
            tabs[index - 1 === 0 ? 0 : 1].querySelector('img').style.transform = 'rotate(0deg)'
        }else if (e.target.nodeName === 'IMG') {
            e.target.parentElement.classList.add('active__tab');
            content[index].classList.remove('hide');
        }
        
    };

    showHide(numberHide, headBox);
    showHide(contactHide, contact);
    showHide(contactHide, contact);

    headInput.addEventListener('focus', searchInput);

    for (let i = 0; i < tabs.length; i++) {
        tabs[i].addEventListener('click', (e) => {
            changeTab(e, i);
        });
    }

    document.querySelector('.head__contact').addEventListener('click', function () {
        const hide = document.querySelector('.contact__hide');
        if (hide.classList[1] === "show") {

            hide.style.display = 'none';
            hide.classList.remove('show');

            document.querySelector('.head__contact img').style.transform = 'rotate(0)';

            showOverlay(false);
        }
    });
    document.querySelector('.down__icon').addEventListener('click', function() {
        hideModal(numberHide,headBox);
        showOverlay(false);
    })

    
    document.querySelector('.black__over').addEventListener('click',() => {
        closeInput();
        hideModal(contactHide,contact)
        hideModal(numberHide,headBox)
    });

    const footShow = (iteam, iteam2, clas = false) => {
        const clickBlock = document.querySelectorAll(iteam),
              showBlock = document.querySelectorAll(iteam2);

        for (let i = 0; i < clickBlock.length; i++) {
            clickBlock[i].addEventListener('click', function () {
                openFoot(i)
            });
        }

        function openFoot(i) {
            if (clas == true) {
                clickBlock[i].classList.toggle('active__menu')
            }

            if (showBlock[i].clientHeight > 0) {
                showBlock[i].style.display = 'none';
                showBlock[i].style.height = '0';
                clickBlock[i].querySelector('img').style.transform = 'rotate(0)';
                showOverlay(false);
                hideModal(contactHide,contact);
            } else {
                for (let i = 0; i < showBlock.length; i++) {
                    showBlock[i].style.display = 'none';
                    clickBlock[i].querySelector('img').style.transform = 'rotate(0)';
                }
                showBlock[i].style.display = 'block';
                clickBlock[i].querySelector('img').style.transform = 'rotate(-180deg)';

                setTimeout(function () {
                    showBlock[i].style.height = 'auto';
                }, 10)
            }
        }

    };

    footShow('.media__foot_iteam', '.media__foot_hide');
    footShow('.media__map_iteam', '.media__map_hide');
    footShow('.media__head_burger', '.media__modal', true);

    // window.addEventListener('resize', () => {
    //     if (window.innerWidth <= 1150) {
    //         footShow('.tab', '.tab__hide');
    //     }
    // });

});

(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
window.addEventListener('load',function(){
	$('body').css('opacity', 1);

	$('.catalog-filters__block-head').click(function(){
		$(this).parent().find('.catalog-filters__block-body').slideToggle();
		$(this).toggleClass('activee');
	});

		
		    
		$(window).scroll(function () {        
			
		});

	
	var header = $('.header'),
		scrollPrev = 0;

		$(window).scroll(function() {
			var scrolled = $(window).scrollTop();
		
			if ( scrolled > 100 && scrolled > scrollPrev && $(window).width() <= 640) {
				header.addClass('out');
				if($('.product-card__btn--buy').length > 0){
					if ($(window).scrollTop() > $('.product-card__btn--buy').offset().top && $(window).width() < 640) { 
						$('.product-card__btn--buy').addClass('fixed');  
					}
				}
			} else {
				header.removeClass('out');
				$('.product-card__btn--buy').removeClass('fixed');  
			}
			scrollPrev = scrolled;
			
		});
	$('.catalog-filters__block--mainlinks').hover(function(){
		$(this).parent().find('.catalog-filters__block-body').slideToggle();
		$(this).parent().find('.catalog-filters__block-head').toggleClass('activee');
	});

	$('.info__changer span').click(function(){
		console.log($(this).index());
		$('.information__item').removeClass('active');
		$('.information__item').eq($(this).index()).addClass('active');
		if($(window).width() <= 1024){
			$('html, body').animate({
				scrollTop: $('.information__item').eq($(this).index()).offset().top - 50
			}, {
				duration: 570,   
				easing: "swing"
			});
		
			return false;
		}
	});

	$('.searchbox button.closer').click(function() {
		console.log('clicked')
		$(this).parent().find('input').val('');
	});
	// $('.mob-select-btn').click(function() {
	// 	console.log('clicked')
	// 	$(this).find('select').show();
	// 	// $(this).find('select').focus();
	// 	$(this).find('select').find('option').prop('selected', true);
				
	// });
	$('.searchbox input').focus(function() {
		$(this).parent().find('.search').hide();
		$(this).parent().find('.closer').fadeIn();
	});
	$('.searchbox input').blur(function() {
		$(this).parent().find('.closer').hide();
		$(this).parent().find('.search').fadeIn();
	});
	


	$('.product-card__description-head').click(function(){
		if ($(window).width() <= 1024) {
			$(this).parent().find('.product-card__description-body').slideToggle();
			$(this).toggleClass('activee');
		}
	});
	$('[data-filters-opener]').click(function(){
			$('.catalog-filters').addClass('active');
	});
	$('[data-filters-closer]').click(function(){
		$('.catalog-filters').removeClass('active');
});

	$('[data-modal-closer]').click(function(){
		$('.modal-box').removeClass('active');
	});
	$('[data-modal-open]').click(function(){
		$('[data-modal-name="'+ $(this).attr('data-modal-open') +'"]').addClass('active');
	});

	let hid = false;
	$('[data-form-opener]').click(function(){
		$(this).toggleClass('activee');
		$('.cart__form--mob').slideToggle({
			start: function() {
				jQuery(this).css('display','flex');
			  }
		});
		$('.cart__form--full').slideToggle({
			start: function() {
				jQuery(this).css('display','flex');
			  }
		});
	});

	$(".phone").mask("+38(999) 999-9999");


	/*setTimeout(() => {
		$("#slider-range").slider({
			range: true,
			min: 715,
			max: $("#maxValPrice").val(),
			values: [ 715, $("#maxValPrice").val() ],
			slide: function( event, ui ) {
				$(this).parent().find('.catalog-filters__slider-val--min').text(ui.values[0]);
				$(this).parent().find('.catalog-filters__slider-val--max').text(ui.values[1]);
			}
		});
	}, 1000);*/


			var newYear = new Date(); 
			newYear = new Date(newYear.getFullYear() + 1, 1 - 1, -6); 
			$('#prod-timer').countdown({until: 12600, format: 'HMS', padZeroes: true}); 
			$('#prod-timer-mob').countdown({until: 12600, format: 'HMS', padZeroes: true}); 

			$('.review__images-slider').each(function() {
				$(this).slick({
					infinite: true,
					slidesToShow: 1,
					slidesToScroll: 1, 
					arrows: false,
					dots: false,
					// prevArrow: '.review__images .prev',
					// nextArrow: '.review__images .next',
				});
			});

			$('.review__images .next').on('click', function() {
				$(this).parent().find('.review__images-slider').slick('slickNext');
			  });
			  $('.review__images .prev').on('click', function() {
				$(this).parent().find('.review__images-slider').slick('slickPrev');
			  });

	  $('.product-card__slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1, 
		arrows: false,
		dots: false,
		asNavFor: '.product-card__slider-nav',
	  });
	  $('.product-card__slider-nav').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1, 
		arrows: true,
		dots: false,
		prevArrow: '.product-card__slider-navbox .prev',
		nextArrow: '.product-card__slider-navbox .next',
		asNavFor: '.product-card__slider',
		focusOnSelect: true,
		responsive: [
			{
				breakpoint: 600,
				settings: {
				  slidesToShow: 3,
				  slidesToScroll: 1,
				}
			  },
		  ]
	  });


	  /*$('.product-more__slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		prevArrow: '.product-more__sliderbox .prev',
		nextArrow: '.product-more__sliderbox .next',
		responsive: [
			{
			  breakpoint: 900,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
			  }
			},
			{
				breakpoint: 600,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1,
				  infinite: true,
				}
			  },
		  ]
	  });*/

	  $('.select').select({
		//options
	 });
	

		const productIteam = document.querySelectorAll('.product__iteam'),
		  introFoto = document.querySelectorAll('.intro__foto'),
		  leftArrow = document.querySelector('.left__arrow'),
		  rightArrow = document.querySelector('.right__arrow'),
		  blogIteam = document.querySelectorAll('.blog__iteam'),
		  blogInner = document.querySelector('.blog__slider'),
		  blogLeft = document.querySelector('.blog__left'),
		  tabs = document.querySelectorAll('.tab'),
		  blogRight = document.querySelector('.blog__right');

	let index = 0;
	let priseKind; 


	if (!Array.from) {
	  Array.from = (function() {
	    var toStr = Object.prototype.toString;
	    var isCallable = function(fn) {
	      return typeof fn === 'function' || toStr.call(fn) === '[object Function]';
	    };
	    var toInteger = function (value) {
	      var number = Number(value);
	      if (isNaN(number)) { return 0; }
	      if (number === 0 || !isFinite(number)) { return number; }
	      return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
	    };
	    var maxSafeInteger = Math.pow(2, 53) - 1;
	    var toLength = function (value) {
	      var len = toInteger(value);
	      return Math.min(Math.max(len, 0), maxSafeInteger);
	    };

	    // Свойство length метода from равно 1.
	    return function from(arrayLike/*, mapFn, thisArg */) {
	      // 1. Положим C равным значению this.
	      var C = this;

	      // 2. Положим items равным ToObject(arrayLike).
	      var items = Object(arrayLike);

	      // 3. ReturnIfAbrupt(items).
	      if (arrayLike == null) {
	        throw new TypeError('Array.from requires an array-like object - not null or undefined');
	      }

	      // 4. Если mapfn равен undefined, положим mapping равным false.
	      var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
	      var T;
	      if (typeof mapFn !== 'undefined') {
	        // 5. иначе
	        // 5. a. Если вызов IsCallable(mapfn) равен false, выкидываем исключение TypeError.
	        if (!isCallable(mapFn)) {
	          throw new TypeError('Array.from: when provided, the second argument must be a function');
	        }

	        // 5. b. Если thisArg присутствует, положим T равным thisArg; иначе положим T равным undefined.
	        if (arguments.length > 2) {
	          T = arguments[2];
	        }
	      }

	      // 10. Положим lenValue равным Get(items, "length").
	      // 11. Положим len равным ToLength(lenValue).
	      var len = toLength(items.length);

	      // 13. Если IsConstructor(C) равен true, то
	      // 13. a. Положим A равным результату вызова внутреннего метода [[Construct]]
	      //     объекта C со списком аргументов, содержащим единственный элемент len.
	      // 14. a. Иначе, положим A равным ArrayCreate(len).
	      var A = isCallable(C) ? Object(new C(len)) : new Array(len);

	      // 16. Положим k равным 0.
	      var k = 0;
	      // 17. Пока k < len, будем повторять... (шаги с a по h)
	      var kValue;
	      while (k < len) {
	        kValue = items[k];
	        if (mapFn) {
	          A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T, kValue, k);
	        } else {
	          A[k] = kValue;
	        }
	        k += 1;
	      }
	      // 18. Положим putStatus равным Put(A, "length", len, true).
	      A.length = len;
	      // 20. Вернём A.
	      return A;
	    };
	  }());
	}
	

	const changeFoto = (iteam) => {
		const clickIteam = document.querySelectorAll(iteam);

		for(let i = 0; i < clickIteam.length; i++){
			clickIteam[i].addEventListener('click', () => {
				change(i)
			});
		}

		function change (index) {
			let parent = clickIteam[index].offsetParent.offsetParent.offsetParent;
			parent.querySelector('img').setAttribute('src', clickIteam[index].src)
		}
	}
	changeFoto('.product__hide_iteam');
	const productSorting = (iteam, iteam2, class1, class2, btn = false) => {
		const title = document.querySelectorAll(iteam),
			  subtitle  = document.querySelectorAll(iteam2);

		for(let i = 0; i < title.length; i++){
			title[i].addEventListener('click', (e) => { 
				changeActive(i,e)
			});
		}

		for(let i = 0; i < subtitle.length; i++){
			subtitle[i].addEventListener('click', (e) => { 
				changeActive(i,e)
			});
		}
		function changeActive (index,e) {
			if(e.target.parentElement.parentElement.classList.contains('product__king') === true){
				for(let i = 0; i < title.length; i++){
					title[i].classList.remove(class1)
				}
				title[index].classList.add(class1)
			}else if(e.target.parentElement.parentElement.classList.contains('product__name') === true || 
				e.target.parentElement.parentElement.classList.contains('blog__subtitle') === true){
				for(let i = 0; i < subtitle.length; i++){
					subtitle[i].classList.remove(class2);
				}
				subtitle[index].classList.add(class2)

				if(btn){
					const button = document.querySelector(btn);
					button.textContent = subtitle[index].textContent
				}
			}
		}
	};

	const checkProducts = (iteam) => {
		// let counter = 5;
		// let start = 2;

		const productInner = document.querySelectorAll(iteam);

		for(let i = 0; i < productInner.length; i++){
			let productColorIteam = productInner[i].querySelectorAll('img:not(.product__hide_icon)');
			if(productColorIteam.length <= 6){
				productInner[i].parentElement.querySelector('.product__hide_icon').style.display = "none";
			}else if(productColorIteam.length >= 7){
				changeProduct(productColorIteam);		
			}
		}
		function changeProduct (iteam) {
			let counter = 5;
			let start = 2;
			for(let i = 0; i < iteam.length; i++){
				if(i >= 5){
					iteam[i].style.display = 'none';
				}
			}
			let div = document.createElement('div');
			div.classList.add('product__icon_box');
			div.classList.add('product__hide_arrow')
			let img = document.createElement('img');
			img.classList.add('product__hide_icon');
			img.src = "img/left.svg";

			div.append(img);
			iteam[0].parentElement.prepend(div)


			let productIcon = iteam[iteam.length - 1].nextElementSibling.querySelector('img');

			productIcon.addEventListener('click',() => {
				changeRight(iteam, productIcon)
			})
			iteam[0].previousElementSibling.addEventListener('click',() => {
				changeLeft(iteam, iteam[0].previousElementSibling)
			});
			function changeRight(iteam,iteam2) {
				if(start <= 0){
					start = 2;
				}
				if(counter <= 4){
					counter = 5;
				}
				for(let i = 0; i < iteam.length; i++){
					iteam[i].style.display = 'none';
				}
				for(let i = counter; i >= start; i--){
					iteam[i].style.display = 'block';
				}
				iteam[0].previousElementSibling.classList.remove('product__hide_arrow');
				
				counter++;
				if(counter >= iteam.length - 1){
					iteam2.parentElement.classList.add('product__hide_arrow')
					iteam[counter].style.display = 'block';
				}
				start++;
			}
			function changeLeft(iteam,iteam2) {
				counter--;
				start--;
				for(let i = 0; i < iteam.length; i++){
					iteam[i].style.display = 'none';
				}
				if(counter <= 5){
					iteam2.classList.add('product__hide_arrow')
					iteam[counter - 1].style.display = 'block';
					counter = 4;
					start = 0;
				}
				for(let i = counter; i >= start; i--){
					iteam[i].style.display = 'block';
				}
				iteam[iteam.length - 1].nextElementSibling.classList.remove('product__hide_arrow');
			}
		}
	}
	checkProducts('.product__hide_colors');
	const sliderr = (iteam, parent) => {
		const sliderIteam = document.querySelectorAll(iteam),
			leftBtn = document.querySelector('.slider_left'),
			rightBtn = document.querySelector('.slider_right'),
			parentElem = document.querySelector(parent);

		let counter = 0;

		for(let i = 0; i < sliderIteam.length; i++){
			if(i === 1){
				sliderIteam[i].classList.add('right_1');
			}
			if(i === 2){
				sliderIteam[i].classList.add('right_2');
			}
			if(i === sliderIteam.length - 1){
				sliderIteam[i].classList.add('left_1');
			}
			if(i === sliderIteam.length - 2){
				sliderIteam[i].classList.add('left_2');
			}
			sliderIteam[i].addEventListener('click',() => {
				clikedElem(i);
			});
		}

		function clikedElem (index) {
			sliderIteam[index].classList.add('center');
			let classIteam = sliderIteam[index].classList[1].split('_');
			if(classIteam.includes('right') === true){
				
				for(let i = 0; i < sliderIteam.length; i++){
					sliderIteam[i].className = 'blog__slider_iteam';
				}

				sliderIteam[index].classList.add('center')

				if (!parentElem.querySelector('.center').nextElementSibling) {
					sliderIteam[0].className = 'blog__slider_iteam right_1'
				}else{
					parentElem.querySelector('.center').nextElementSibling.className = 'blog__slider_iteam right_1';
				}

				if(parentElem.querySelector('.center').nextElementSibling === null){
					sliderIteam[1].className = 'blog__slider_iteam right_2'
				}else{
					if (!parentElem.querySelector('.center').nextElementSibling.nextElementSibling) {
						sliderIteam[0].className = 'blog__slider_iteam right_2'
					}else{
						parentElem.querySelector('.center').nextElementSibling.nextElementSibling.className = 'blog__slider_iteam right_2';
					}
				}
				
				if(!parentElem.querySelector('.center').previousElementSibling){
					sliderIteam[sliderIteam.length - 1].className = 'blog__slider_iteam left_1'
				}else{
					parentElem.querySelector('.center').previousElementSibling.className = 'blog__slider_iteam left_1';
				}

				if(parentElem.querySelector('.center').previousElementSibling === null){
					sliderIteam[sliderIteam.length - 2].className = 'blog__slider_iteam left_2'
				}else{
					if (!parentElem.querySelector('.center').previousElementSibling.previousElementSibling) {
						sliderIteam[sliderIteam.length - 1].className = 'blog__slider_iteam left_2'
					}else{
						parentElem.querySelector('.center').previousElementSibling.previousElementSibling.className = 'blog__slider_iteam left_2';
					}

				}

			}else if (classIteam.includes('left') === true) {
				for(let i = 0; i < sliderIteam.length; i++){
					sliderIteam[i].className = 'blog__slider_iteam';
				}

				sliderIteam[index].classList.add('center')

				if (!parentElem.querySelector('.center').nextElementSibling) {
					sliderIteam[0].className = 'blog__slider_iteam right_1'
				}else{
					parentElem.querySelector('.center').nextElementSibling.className = 'blog__slider_iteam right_1';
				}

				if(parentElem.querySelector('.center').nextElementSibling === null){
					sliderIteam[1].className = 'blog__slider_iteam right_2'
				}else{
					if (!parentElem.querySelector('.center').nextElementSibling.nextElementSibling) {
						sliderIteam[0].className = 'blog__slider_iteam right_2'
					}else{
						parentElem.querySelector('.center').nextElementSibling.nextElementSibling.className = 'blog__slider_iteam right_2';
					}
				}
				
				if(!parentElem.querySelector('.center').previousElementSibling){
					sliderIteam[sliderIteam.length - 1].className = 'blog__slider_iteam left_1'
				}else{
					parentElem.querySelector('.center').previousElementSibling.className = 'blog__slider_iteam left_1';
				}
				
				if(parentElem.querySelector('.center').previousElementSibling === null){
					sliderIteam[sliderIteam.length - 2].className = 'blog__slider_iteam left_2'
				}else{
					if (!parentElem.querySelector('.center').previousElementSibling.previousElementSibling) {
						sliderIteam[sliderIteam.length - 1].className = 'blog__slider_iteam left_2'
					}else{
						parentElem.querySelector('.center').previousElementSibling.previousElementSibling.className = 'blog__slider_iteam left_2';
					}

				}
			}


		}
		function moveRight() {
			
			parentElem.querySelector('.left_2').classList.remove('left_2');

			parentElem.querySelector('.left_1').classList.add('left_2');
			parentElem.querySelector('.left_1').classList.remove('left_1');

			parentElem.querySelector('.center').classList.add('left_1');
			parentElem.querySelector('.center').classList.remove('center');


			parentElem.querySelector('.right_1').classList.add('center');
			parentElem.querySelector('.right_1').classList.remove('right_1');

			parentElem.querySelector('.right_2').classList.add('right_1');

			if(!parentElem.querySelector('.right_2').nextElementSibling){
				parentElem.querySelector('.right_2').classList.remove('right_2');
				parentElem.querySelector('.blog__slider_iteam').classList.add('right_2')
			}else{
				parentElem.querySelector('.right_2').nextElementSibling.classList.add('right_2');
				parentElem.querySelector('.right_2').classList.remove('right_2');
			}
			
		}
		function moveLeft() {
			parentElem.querySelector('.right_2').classList.remove('right_2');

			parentElem.querySelector('.right_1').classList.add('right_2');
			parentElem.querySelector('.right_1').classList.remove('right_1');


			parentElem.querySelector('.center').classList.add('right_1');
			parentElem.querySelector('.center').classList.remove('center');

			parentElem.querySelector('.left_1').classList.add('center');
			parentElem.querySelector('.left_1').classList.remove('left_1');

			parentElem.querySelector('.left_2').classList.add('left_1');

			if(!parentElem.querySelector('.left_2').previousElementSibling){
				parentElem.querySelector('.left_2').classList.remove('left_2');
				sliderIteam[sliderIteam.length - 1].classList.add('left_2')
			}else{
				parentElem.querySelector('.left_2').classList.remove('left_2');
				parentElem.querySelector('.left_1').previousElementSibling.classList.add('left_2');
			}
			
		}

		rightBtn.addEventListener('click', moveRight);
		leftBtn.addEventListener('click', moveLeft);
	};

  	sliderr('.blog__slider_iteam','.blog__slider_center');
	
	
	productSorting('.first__kind pre span', '.product__name pre span', 'product__king_active', 'product__name_active', '.product__btn_box .intro__btn span');
	productSorting('.second__kind pre span', '.blog__subtitle pre span', 'product__king_active', 'blog__subtitle_active');
	
	// if(!leftArrow) return;
	
	for(let i = 0; i < productIteam.length; i++){
		if(productIteam[i].querySelector('.product__prise').classList.length <= 1){
			if(innerWidth >= 660){
				productIteam[i].querySelector('.product__prise').previousElementSibling.style.marginBottom = 'auto';
			}
		}
	}
	if (document.querySelector('.intro__slider_block2')) {
		document.querySelector('.intro__slider_block2').style.display = 'block';
	}
	
	
	for(let i = 0; i < tabs.length; i++){
		tabs[i].addEventListener('click', () => {
			if(i == 0){
				document.querySelector('.intro__slider_block .slick-list .slick-track').classList.remove('hide_slider');
				document.querySelector('.intro__slider_block2 .slick-list .slick-track').classList.add('hide_slider');

				  $('.intro__slider_block').slick('slickPlay');
				  $('.intro__slider_block2').slick('slickPause');

				document.querySelector('.intro__control').classList.remove('hide');
				  document.querySelector('.intro__control2').classList.add('hide');

			}else if( i == 1){
				document.querySelector('.intro__slider_block .slick-list .slick-track').classList.add('hide_slider');
				document.querySelector('.intro__slider_block2 .slick-list .slick-track').classList.remove('hide_slider');

				$('.intro__slider_block').slick('slickPause');
				  $('.intro__slider_block2').slick('slickPlay');

				  document.querySelector('.intro__control2').classList.remove('hide');
				  document.querySelector('.intro__control').classList.add('hide');
			}

		});
	}

	$('.intro__slider_block').slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		prevArrow: $('.intro__control .left__arrow'),
		nextArrow: $('.intro__control .right__arrow'),
		speed: 600,
		pauseOnHover: true
  	});

  	$('.intro__slider_block2').slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		prevArrow: $('.intro__control2 .left__arrow2'),
		nextArrow: $('.intro__control2 .right__arrow2'),
		speed: 600,
		pauseOnHover: true
  	});
  	$('.intro__slider_block2').slick('slickPause');

  	if(innerWidth <= 560){
	  	$('.mobile__blog_slide').slick({
			infinite: true,
			arrows: true,
			prevArrow: $('.slider_left'),
			nextArrow: $('.slider_right'),
	  	});
  	}

	  if (document.querySelector('.intro__slider_block2 .slick-list .slick-track')) {
		document.querySelector('.intro__slider_block2 .slick-list .slick-track').classList.add('hide_slider')
	  }

  	
  	
  
  	
  	if(window.innerWidth <= 1800 ||
  		document.querySelector('.brands__slide').clientWidth > document.querySelector('.brands__name').clientWidth){

  		const runLine = (iteam) => {
	  		const brandBlock =  document.querySelector(iteam),
	  			  brandIteam = document.querySelector('.brands__block1');

	  		let counter = 0;
	  		let hovered = false;
	  		let a = 1;
	  		let b = 2;
	  		let a2 = 1;
	  		let b2 = 2;
	  		let array = [];
	  		let cliked = false;
	  		let interatot = 2;

	  		document.querySelector('.brands__name').addEventListener('mouseenter',() => {
	  			hovered = true;
	  		});

	  		document.querySelector('.brands__name').addEventListener('mouseleave',() => {
	  			hovered = false;
	  			brandMove();
	  		});

  			document.querySelector('.brands__name').addEventListener('mousedown',() => {
	  			cliked = true;
  				hovered = true;

	  		});
	  		window.addEventListener('mouseup',() => {
	  			cliked = false;
	  			array = [];
	  		});

	  		window.addEventListener('mousemove',movePosition);

	  		let div = document.createElement('div');
	  		div.classList.add('brands__block2');
	  		div.innerHTML = brandIteam.innerHTML;
	  		brandBlock.append(div);
  			let brandIteam2  = document.querySelector('.brands__block2');
  			let links = brandBlock.querySelectorAll('a');

  			for(let i = 0; i < links.length; i++){
	  			links[i].addEventListener("dragstart", (event) => {
				    event.preventDefault();

	  			});
  			}
  			
  			document.querySelector('.brands__name').addEventListener("touchend", (e) => {
	  			hovered = false;
	  			brandMove();
  			})

	  		document.querySelector('.brands__name').addEventListener("touchmove", (e) => {
	  			hovered = true;
  				array.push(e.touches[0].clientX);

	  			if(counter > (-200)){
	  				brandIteam2.style.transform = 'translateX(' + 0  + 'px)';
	  			}
  				if(counter <=  (brandIteam.clientWidth * -1) * a){
	  				brandIteam.style.transform = 'translateX(' + (brandIteam.clientWidth * 2) * (b / 2) + 'px)';
	  				a += 2
	  			}
	  			if(counter <=  (brandIteam2.clientWidth * -1) * b){
	  				brandIteam2.style.transform = 'translateX(' + brandIteam.clientWidth * 2 * (b / 2)   + 'px)';
	  				b += 2
	  			}
	  			if(counter > 0){
						brandIteam2.style.transform = 'translateX(' + (brandIteam.clientWidth * 2 * -1) * (b2 / 2)   + 'px)';

	  				if(counter >=  (brandIteam.clientWidth) * a2){
		  				brandIteam.style.transform = 'translateX(' + (brandIteam.clientWidth * 2 * -1) * (b2 / 2) + 'px)';
		  				a2 += 2
		  			}
		  			if(counter >=  (brandIteam2.clientWidth) * b2){
		  				brandIteam2.style.transform = 'translateX(' + (brandIteam.clientWidth * 2 * -1) * (b2 / 2)   + 'px)';
		  				b2 += 2
		  			}
	  			}

  				if(array[array.length - 2] - e.touches[0].clientX < 0){

  					counter += 7;
  					brandBlock.style.transform = 'translateX(' + counter + 'px)';
  				}else{

  					counter -= 7;
  					brandBlock.style.transform = 'translateX(' + counter + 'px)';
  				}
	  		});

	  		function movePosition(e) {
	  			let a2 = 1;
	  			let b2 = 2;

	  			if(cliked){
	  				hovered = true;
	  				array.push(e.clientX);

		  			if(counter > (-200)){
		  				brandIteam2.style.transform = 'translateX(' + 0  + 'px)';
		  			}
	  				if(counter <=  (brandIteam.clientWidth * -1) * a){
		  				brandIteam.style.transform = 'translateX(' + (brandIteam.clientWidth * 2) * (b / 2) + 'px)';
		  				a += 2
		  			}
		  			if(counter <=  (brandIteam2.clientWidth * -1) * b){
		  				brandIteam2.style.transform = 'translateX(' + brandIteam.clientWidth * 2 * (b / 2)   + 'px)';
		  				b += 2
		  			}
		  			if(counter > 0){
  						brandIteam2.style.transform = 'translateX(' + (brandIteam.clientWidth * 2 * -1) * (b2 / 2)   + 'px)';

		  				if(counter >=  (brandIteam.clientWidth) * a2){
			  				brandIteam.style.transform = 'translateX(' + (brandIteam.clientWidth * 2 * -1) * (b2 / 2) + 'px)';
			  				a2 += 2
			  			}
			  			if(counter >=  (brandIteam2.clientWidth) * b2){
			  				brandIteam2.style.transform = 'translateX(' + (brandIteam.clientWidth * 2 * -1) * (b2 / 2)   + 'px)';
			  				b2 += 2
			  			}
		  			}

	  				if(array[array.length - 2] - e.clientX < 0){

	  					counter += 7;
	  					brandBlock.style.transform = 'translateX(' + counter + 'px)';
	  				}else{

	  					counter -= 7;
	  					brandBlock.style.transform = 'translateX(' + counter + 'px)';
	  				}
	  			}
	  		}

	  		

	  		function brandMove () {
	  			// console.log(hovered)
	  			let num = ((Math.ceil(brandIteam.clientWidth / interatot)) * interatot) - brandIteam.clientWidth;
	  			if(hovered){
		  			return;
	  			}else{

	  				if(counter > (-200)){
		  				brandIteam2.style.transform = 'translateX(' + 0  + 'px)';
		  			}
		  			if(counter <=  (brandIteam.clientWidth * -1) * a){
		  				brandIteam.style.transform = 'translateX(' + (brandIteam.clientWidth * 2) * (b / 2) + 'px)';
		  				a += 2
		  			}
		  			if(counter <=  (brandIteam2.clientWidth * -1) * b){
		  				brandIteam2.style.transform = 'translateX(' + brandIteam.clientWidth * 2 * (b / 2)   + 'px)';
		  				b += 2
		  			}
		  			if(counter > 0){
  						brandIteam2.style.transform = 'translateX(' + (brandIteam.clientWidth * 2 * -1) * (b2 / 2)   + 'px)';

		  				if(counter >=  (brandIteam.clientWidth) * a2){
			  				brandIteam.style.transform = 'translateX(' + (brandIteam.clientWidth * 2 * -1) * (b2 / 2) + 'px)';
			  				a2 += 2
			  			}
			  			if(counter >=  (brandIteam2.clientWidth) * b2){
			  				brandIteam2.style.transform = 'translateX(' + (brandIteam.clientWidth * 2 * -1) * (b2 / 2)   + 'px)';
			  				b2 += 2
			  			}
		  			}

		  			counter -= interatot;
	  				brandBlock.style.transform = 'translateX(' + counter + 'px)';

		  			window.requestAnimationFrame(brandMove)
	  			}
	  		}

	  		window.requestAnimationFrame(brandMove)

	  	}
	  	runLine('.brands__slide')
	  }
	  
	
	
	window.addEventListener('resize', () => {
		if(innerWidth <= 560){
		  	$('.mobile__blog_slide').slick({
				infinite: true,
				arrows: true,
				prevArrow: $('.slider_left'),
				nextArrow: $('.slider_right'),
		  	});
	  	}
	});

	
		
});
},{}]},{},[1]);
