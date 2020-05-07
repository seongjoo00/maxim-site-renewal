$(document).ready(function(){
    
    $(".p_gnb>ul>li,.gnb_bg").hover(function(){
        $(".gnb_bg").stop().slideDown('fast');
        $(".p_gnb ul ul").stop().slideDown('fast');
        $(this).find("ul").addClass("p_gnb_hover");
    },function(){
        $(".gnb_bg").stop().slideUp('fast');
        $(".p_gnb ul ul").stop().slideUp('fast');
        $(this).find("ul").removeClass("p_gnb_hover");
    });


    /* 태블릿 & 모바일 스크립트 */
    $(".t_gnb > ul > li > a").click(function(){
        $(this).next().slideToggle()/* .gnb > ul > li 자식요소 ul 의 slide */
        $(".t_gnb ul ul").not($(this).next()).slideUp()/* .gnb ul ul 을 slideUp 너의 자식ul 을 제외한 나머지 */
    });

    $(".menu_close").click(function(){
        $(".nav_wrap,.tgnb_bg,.top_menu").fadeOut();
        $(".top_facebook").hide();
    });
    $(".all_menu").click(function(){
        $(".nav_wrap,.tgnb_bg,.top_menu").fadeIn();
    });
    $(".t_login").click(function(){
        $(".login_wrap").fadeIn();
    });


    /* footer */
    $(".footer_click").click(function(){
        $(".footer_link").find("ul").toggle();
    });

    /* side_menu */
    $( ".side_menu" ).click( function() {
        $( 'html, body' ).animate( { scrollTop : 0 }, 400 );
        return false;
    });

});
$(window).on("scroll",function(){
    var top = $(window).scrollTop();
    if(top > 280){
        $(".side_menu").fadeIn('fast');
    }else{
        $(".side_menu").fadeOut('fast');
    };
});