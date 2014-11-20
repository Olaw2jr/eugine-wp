/* __________________ SUPPORTS TOUCH OR NOT  __________________*/
/*!	Detects touch support and adds appropriate classes to html and returns a JS object  |  Copyright (c) 2013 Izilla Partners Pty Ltd  | http://www.izilla.com.au / Licensed under the MIT license  |  https://coderwall.com/p/egbgdw */
var supports=(function(){var d=document.documentElement,c="ontouchstart" in window||navigator.msMaxTouchPoints;if(c){d.className+=" touch";return{touch:true}}else{d.className+=" no-touch";return{touch:false}}})();


/* __________________ RESPONSIVE EQUAL HEIGHTS __________________*/
/*! jquery.matchHeight-min.js v0.5.1   |   http://brm.io/jquery-match-height/   |   License: MIT  */

(function(a){a.fn.matchHeight=function(b){if("remove"===b){var f=this;this.css("height","");a.each(a.fn.matchHeight._groups,function(g,h){h.elements=h.elements.not(f)});return this}if(1>=this.length){return this}b="undefined"!==typeof b?b:!0;a.fn.matchHeight._groups.push({elements:this,byRow:b});a.fn.matchHeight._apply(this,b);return this};a.fn.matchHeight._apply=function(b,g){var h=a(b),f=[h];g&&(h.css({display:"block","padding-top":"0","padding-bottom":"0","border-top":"0","border-bottom":"0",height:"100px"}),f=c(h),h.css({display:"","padding-top":"","padding-bottom":"","border-top":"","border-bottom":"",height:""}));a.each(f,function(i,l){var k=a(l),j=0;k.each(function(){var m=a(this);m.css({display:"block",height:""});m.outerHeight(!1)>j&&(j=m.outerHeight(!1));m.css({display:""})});k.each(function(){var m=a(this),n=0;"border-box"!==m.css("box-sizing")&&(n+=e(m.css("border-top-width"))+e(m.css("border-bottom-width")),n+=e(m.css("padding-top"))+e(m.css("padding-bottom")));m.css("height",j-n)})});return this};a.fn.matchHeight._applyDataApi=function(){var b={};a("[data-match-height], [data-mh]").each(function(){var f=a(this),g=f.attr("data-match-height");b[g]=g in b?b[g].add(f):f});a.each(b,function(){this.matchHeight(!0)})};a.fn.matchHeight._groups=[];var d=-1;a.fn.matchHeight._update=function(b){if(b&&"resize"===b.type){b=a(window).width();if(b===d){return}d=b}a.each(a.fn.matchHeight._groups,function(){a.fn.matchHeight._apply(this.elements,this.byRow)})};a(a.fn.matchHeight._applyDataApi);a(window).bind("load resize orientationchange",a.fn.matchHeight._update);var c=function(b){var f=null,g=[];a(b).each(function(){var i=a(this),k=i.offset().top-e(i.css("margin-top")),j=0<g.length?g[g.length-1]:null;null===j?g.push(i):1>=Math.floor(Math.abs(f-k))?g[g.length-1]=j.add(i):g.push(i);f=k});return g},e=function(b){return parseFloat(b)||0}})(jQuery);



/* __________________ MAIN MENU  __________________*/
/*! DC jQuery Vertical Accordion Menu - jQuery vertical accordion menu plugin  |  Copyright (c) 2011 Design Chemical
    Dual licensed under the MIT and GPL licenses: http://www.opensource.org/licenses/mit-license.php  | http://www.gnu.org/licenses/gpl.html */

(function(a){a.fn.dcAccordion=function(c){var e={classParent:"dcjq-parent",classActive:"active",classArrow:"dcjq-icon",classCount:"dcjq-count",classExpand:"dcjq-current-parent",eventType:"click",hoverDelay:300,menuClose:true,autoClose:true,autoExpand:false,speed:"slow",saveState:true,disableLink:true,showCount:false,cookie:"dcjq-accordion"};var c=a.extend(e,c);this.each(function(p){var h=this;l();if(e.saveState==true){d(e.cookie,h)}if(e.autoExpand==true){a("li."+e.classExpand+" > a").addClass(e.classActive)}j();if(e.eventType=="hover"){var g={sensitivity:2,interval:e.hoverDelay,over:o,timeout:e.hoverDelay,out:n};a("li a",h).hoverIntent(g);var f={sensitivity:2,interval:1000,over:m,timeout:1000,out:i};a(h).hoverIntent(f);if(e.disableLink==true){a("li a",h).click(function(q){if(a(this).siblings("ul").length>0){q.preventDefault()}})}}else{a("li a",h).click(function(q){$activeLi=a(this).parent("li");$parentsLi=$activeLi.parents("li");$parentsUl=$activeLi.parents("ul");if(e.disableLink==true){if(a(this).siblings("ul").length>0){q.preventDefault()}}if(e.autoClose==true){k($parentsLi,$parentsUl)}if(a("> ul",$activeLi).is(":visible")){a("ul",$activeLi).slideUp(e.speed);a("a",$activeLi).removeClass(e.classActive)}else{a(this).siblings("ul").slideToggle(e.speed);a("> a",$activeLi).addClass(e.classActive)}if(e.saveState==true){b(e.cookie,h)}})}function l(){$arrow='<span class="'+e.classArrow+'"></span>';var q=e.classParent+"-li";a("> ul",h).show();a("li",h).each(function(){if(a("> ul",this).length>0){a(this).addClass(q);a("> a",this).addClass(e.classParent).append($arrow)}});a("> ul",h).hide();if(e.showCount==true){a("li."+q,h).each(function(){if(e.disableLink==true){var r=parseInt(a("ul a:not(."+e.classParent+")",this).length)}else{var r=parseInt(a("ul a",this).length)}a("> a",this).append(' <span class="'+e.classCount+'">('+r+")</span>")})}}function o(){$activeLi=a(this).parent("li");$parentsLi=$activeLi.parents("li");$parentsUl=$activeLi.parents("ul");if(e.autoClose==true){k($parentsLi,$parentsUl)}if(a("> ul",$activeLi).is(":visible")){a("ul",$activeLi).slideUp(e.speed);a("a",$activeLi).removeClass(e.classActive)}else{a(this).siblings("ul").slideToggle(e.speed);a("> a",$activeLi).addClass(e.classActive)}if(e.saveState==true){b(e.cookie,h)}}function n(){}function m(){}function i(){if(e.menuClose==true){a("ul",h).slideUp(e.speed);a("a",h).removeClass(e.classActive);b(e.cookie,h)}}function k(q,r){a("ul",h).not(r).slideUp(e.speed);a("a",h).removeClass(e.classActive);a("> a",q).addClass(e.classActive)}function j(){a("ul",h).hide();$allActiveLi=a("a."+e.classActive,h);$allActiveLi.siblings("ul").show()}});function d(g,i){var f=a.cookie(g);if(f!=null){var h=f.split(",");a.each(h,function(k,m){var j=a("li:eq("+m+")",i);a("> a",j).addClass(e.classActive);var l=j.parents("li");a("> a",l).addClass(e.classActive)})}}function b(g,h){var f=[];a("li a."+e.classActive,h).each(function(j){var l=a(this).parent("li");var k=a("li",h).index(l);f.push(k)});a.cookie(g,f,{path:"/"})}}})(jQuery);
        
        
/* __________________ INITIALIZATIONS  __________________*/
        
        
jQuery(document).ready(function () {


    /* ----------  equal height columns   -------- */
    jQuery('.footer [class*="footer-col-"]').matchHeight();
    jQuery('.equal-height-col [class*="col-"]').matchHeight();


    /* ----------  .title inner wrapper -------- */
    jQuery('.title').wrapInner("<span></span>");


    /* ----------  .custom button -------- */
    jQuery('.btn-custom').wrapInner("<span></span>");


    /* ----  tooltips and popover (bootstrap.min.js)  -------- */
    if (jQuery('html').hasClass('no-touch')) { // hover doesn't work on touch, so don't use

        /* ----  hover tooltip -------- */
        jQuery('.tooltip-hover').tooltip({
            trigger: 'hover',
            container: 'body'
        });

        /* ----  hover popover -------- */
        jQuery('.popover-hover').popover({
            trigger: 'hover'
        });
    } // end if html has class no-touch


    /* ----  click tooltip -------- */
    jQuery('.tooltip-click').tooltip({
        trigger: 'click',
        container: 'body'
    });

    /* ----  click popover -------- */
    jQuery('.popover-click').popover({
        trigger: 'click'
    });


    /* ----------  .primary-nav   -------- */
    jQuery('.primary-nav').dcAccordion({
        saveState: false,
        autoClose: true,
        disableLink: true,
        speed: "fast",
        showCount: false,
        autoExpand: false
    });


    /* ----------  hide navigation when clicked or tapped off  -------- */
    jQuery(document).click(function (a) {
        if (jQuery(a.target).parents().index(jQuery("#nav")) == -1) {
            jQuery("#nav ul ul").slideUp("fast", function () {
                if (jQuery("#nav ul ul").is(":visible")) {}
                jQuery("#nav ul a").removeClass("active")
            })
        }
    });
    jQuery(document).on("touchstart", function (a) {
        if (jQuery(a.target).parents().index(jQuery("#nav")) == -1) {
            jQuery("#nav ul ul").slideUp("fast", function () {
                if (jQuery("#nav ul ul").is(":visible")) {}
                jQuery("#nav ul a").removeClass("active")
            })
        }
    });


    /* ----------   toggle-menu   -------- */
    jQuery('.toggle-menu').click(function () {
        jQuery('html').toggleClass('menu-open');
        jQuery('html').removeClass('login-open signup-open search-open social-open');
        jQuery('.login-panel,.search-panel,.signup-panel,.sub-bar .sb-social-wrapper').hide();
    });


    /* ----------   toggle-search   -------- */
    jQuery('.toggle-search').click(function () {
        jQuery('.search-panel').slideToggle();
        jQuery('html').toggleClass('search-open');
        jQuery('html').removeClass('menu-open signup-open login-open social-open');
        jQuery('.login-panel,.signup-panel').hide();
    });


    /* ----------   toggle-login   -------- */
    jQuery('.toggle-login').click(function () {
        jQuery('.login-panel').slideToggle();
        jQuery('.signup-panel').slideUp();
        jQuery('html').toggleClass('login-open');
        jQuery('html').removeClass('signup-open search-open');
        jQuery('.search-panel').hide();
    });


    /* ----------   toggle-signup   -------- */
    jQuery('.toggle-signup').click(function () {
        jQuery('.signup-panel').slideToggle();
        jQuery('.login-panel').slideUp();
        jQuery('html').toggleClass('signup-open');
        jQuery('html').removeClass('login-open search-open');
        jQuery('.search-panel').hide();
    });


    /* ----------   toggle-social on small viewports   -------- */
    jQuery('.toggle-social').click(function () {
        jQuery('.sub-bar .sb-social-wrapper').slideToggle();
        jQuery('html').toggleClass('social-open');
    });
    jQuery('.sub-bar .sb-social-wrapper .closeMe').click(function () {
        jQuery('.sb-social-wrapper').slideUp();
        jQuery('html').removeClass('social-open');
    });


    /* ----------   close various panels when clicked or tapped off-------- */
    jQuery(document).click(function (a) {
        if (jQuery(a.target).parents().index(jQuery(".nav-wrapper")) == -1) {
            jQuery('.search-panel,.login-panel,.signup-panel').slideUp('fast');
            jQuery('html').removeClass('search-open login-open signup-open');
        }
    });

    jQuery(document).on("touchstart", function (a) {
        if (jQuery(a.target).parents().index(jQuery(".nav-wrapper")) == -1) {
            jQuery('.search-panel,.login-panel,.signup-panel').slideUp('fast');
            jQuery('html').removeClass('search-open login-open signup-open');
        }
    });


}); // end document ready


/* __________________ SCROLL TO TOP __________________*/

if (jQuery("html").hasClass("ie8")) { // avoid IE8 bug

    jQuery('#toTop').hide();
}

if (jQuery("html").hasClass("boxshadow")) { // avoid IE8 bug

    jQuery(document).ready(function () {

        jQuery('#toTop').hide();

        //Check to see if the window is top if not then display button
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('#toTop').fadeIn();
            } else {
                jQuery('#toTop').fadeOut();
            }
        });

        //Click event to scroll to top
        jQuery('#toTop').click(function () {
            jQuery('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

    });

}


/* __________________ SCROLL MENU CLONE __________________*/

if (jQuery("html").hasClass("no-touch")) { // avoid IE8 bug


    jQuery(document).ready(function () {

        jQuery('#scroll-menu').hide();
        jQuery('.primary-nav').clone().removeClass('primary-nav').addClass('scroll-nav').appendTo('#menu-clone');

        jQuery('.scroll-nav').dcAccordion({
            saveState: false,
            autoClose: true,
            disableLink: true,
            showCount: false,
            autoExpand: false
        });


        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 130) {
                jQuery('#scroll-menu').fadeIn();
            } else {
                jQuery('#scroll-menu').fadeOut();
            }
        });

        jQuery('#scroll-menu .scroll-menu-toggle').click(function (e) {
            jQuery('html').toggleClass('scroll-menu-open');
            e.preventDefault();

        });

    });

    jQuery(document).click(function (a) {
        if (jQuery(a.target).parents().index(jQuery("#scroll-menu")) == -1) {
            jQuery('html').removeClass('scroll-menu-open');
        }
    });

    jQuery(document).on("touchstart", function (a) {
        if (jQuery(a.target).parents().index(jQuery("#scroll-menu")) == -1) {
            jQuery('html').removeClass('scroll-menu-open');
        }
    });


} // close if html has class no-touch




/* __________________ PLACEHOLDER SUPPORT FOR OLDER BROWSERS __________________*/

jQuery(document).ready(function() {
if(!Modernizr.input.placeholder){
  jQuery("input").each(
  function(){
    var inputField = jQuery(this);
    if(inputField.val()=="" && inputField.attr("placeholder")!=""){
    
      inputField.val(inputField.attr("placeholder"));
      
      inputField.focus(function(){
        if(inputField.val()==inputField.attr("placeholder")){ inputField.val(""); }
      });
      
      inputField.blur(function(){
        if(inputField.val()==""){ inputField.val(inputField.attr("placeholder")); }
      });
      
      jQuery(inputField).closest('form').submit(function(){
        var form = jQuery(this);
        if(!form.hasClass('placeholderPending')){
          jQuery('input',this).each(function(){
            var clearInput = jQuery(this);
            if(clearInput.val()==clearInput.attr("placeholder")){ clearInput.val(""); }
          });
          form.addClass('placeholderPending');
        }
      });
    
    }
  });
}
});



/* __________________ RENDER ICONS ON IE 8 __________________*/

if (jQuery("html").hasClass("ie8")) {

var head = document.getElementsByTagName('head')[0],
style = document.createElement('style');
style.type = 'text/css';
style.styleSheet.cssText = ':before,:after{content:none !important';
head.appendChild(style);
setTimeout(function(){
head.removeChild(style);
}, 0);

} // end if ie8






