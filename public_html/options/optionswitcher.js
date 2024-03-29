$('.body-wrapper').each(function () {
    var link = $('<i class="option-switcher-btn fa fa-gear hidden-xs"></i><div class="option-switcher animated"><div class="option-swticher-header"><div class="option-switcher-heading">Template Options</div><div class="theme-close"><i class="fa fa-close"></i></div></div><div class="option-swticher-body"><ul class="list-unstyled"><li class="theme-default theme-active" data-color="default"></li><li class="theme-green" data-color="green"></li><li class="theme-blue" data-color="blue"></li><li class="theme-purple last" data-color="purple"></li></ul><div class="row no-col-space layoutStyle"><div class="col-xs-6"><a href="javascript:void(0);" class="btn-u  btn-block active-switcher-btn wide-layout-btn">Wide</a></div><div class="col-xs-6"><a href="javascript:void(0);" class="btn-u btn-block boxed-layout-btn">Boxed</a></div></div><div class="row no-col-space headerStyle"><div class="col-xs-6"><a href="javascript:void(0);" class="btn-u btn-block active-switcher-btn fixed-header-light">Default header</a></div><div class="col-xs-6"><a href="javascript:void(0);" class="btn-u btn-block fixed-header-dark">Fixed dark</a></div><div class="col-xs-6"><a href="javascript:void(0);" class="btn-u  btn-block static-header-light">Static light</a></div><div class="col-xs-6"><a href="javascript:void(0);" class="btn-u  btn-block static-header-dark">Static dark</a></div></div></div></div>');
    $('.body-wrapper').prepend(link);
});
var panel = jQuery('.option-switcher');
jQuery('.option-switcher-btn').click(function () {
    jQuery(this).hide(100);
    jQuery('.option-switcher').addClass('fadeInRight').removeClass('fadeOutRight').show();
});
jQuery('.theme-close').click(function () {
    jQuery('.option-switcher').removeClass('fadeInRight').addClass('fadeOutRight').hide(1000);
    jQuery('.option-switcher-btn').show(1000);
});
jQuery('li', panel).click(function () {
    var color = jQuery(this).attr("data-color");
    setColor(color);
    jQuery('.list-unstyled li', panel).removeClass("theme-active");
    jQuery(this).addClass("theme-active");
});
var setColor = function (color) {
    jQuery('#option_color').attr("href", "css/colors/" + color + ".css");
}
jQuery('.boxed-layout-btn').click(function () {
    jQuery(this).addClass("active-switcher-btn");
    jQuery(".wide-layout-btn").removeClass("active-switcher-btn");
    jQuery("body").addClass("bodyColor wrapper");
});
jQuery('.wide-layout-btn').click(function () {
    jQuery(this).addClass("active-switcher-btn");
    jQuery(".boxed-layout-btn").removeClass("active-switcher-btn");
    jQuery("body").removeClass("bodyColor wrapper");
});
jQuery('.static-header-light').click(function () {
    jQuery(this).addClass("active-switcher-btn");
    jQuery(".fixed-header-light , .fixed-header-dark, .static-header-dark").removeClass("active-switcher-btn");
    jQuery(".navbar-default").removeClass("navbar-fixed-top navbar-main darkHeader").addClass('static-light lightHeader');
    jQuery("body").addClass("static");
});
jQuery('.static-header-dark').click(function () {
    jQuery(this).addClass("active-switcher-btn");
    jQuery(".fixed-header-light , .fixed-header-dark, .static-header-light").removeClass("active-switcher-btn");
    jQuery(".navbar-default").removeClass("navbar-fixed-top navbar-main lightHeader static-light").addClass('darkHeader');
    jQuery("body").addClass("static");
});
jQuery('.fixed-header-light').click(function () {
    jQuery(this).addClass("active-switcher-btn");
    jQuery(".static-header-light , .static-header-dark, .fixed-header-dark").removeClass("active-switcher-btn");
    jQuery(".navbar-default").addClass("navbar-fixed-top lightHeader navbar-main").removeClass("darkHeader static-light");
    jQuery("body").removeClass("static");
});
jQuery('.fixed-header-dark').click(function () {
    jQuery(this).addClass("active-switcher-btn");
    jQuery(".static-header-light , .static-header-dark, .fixed-header-light").removeClass("active-switcher-btn");
    jQuery(".navbar-default").addClass("navbar-fixed-top darkHeader").removeClass("navbar-main lightHeader static-light");
    jQuery("body").removeClass("static");
});