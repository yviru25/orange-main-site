/*! jQuery v3.3.1 | (c) JS Foundation and other contributors | jquery.org/license */
$(".feature_list > li").hover(function () {
    $(".feature_list_active").removeClass("feature_list_active");
    $(this).addClass("feature_list_active");
    var x = $(this).attr("data-id");
    
    $(".picture_tab").removeClass("active_pic");
    $(".picture_tab").removeClass("in");	
    $("#" + x).addClass("active_pic");
    
     setTimeout(function(){
     $("#" + x).addClass("in");
    }, 100);
                    
});


$(".news_tab > ul > li > a").click(function () {
    $(".news_acitve").removeClass("news_acitve");
    $(this).addClass("news_acitve");
    var x = $(this).attr("title");
    
    $(".news_box").removeClass("active_pic");
    $(".news_box").removeClass("in");	
    $("#" + x).addClass("active_pic");
    
     setTimeout(function(){
     $("#" + x).addClass("in");
    }, 100);
});


$(".about_tab > ul > li > a").click(function () {
    $(".about_acitve").removeClass("about_acitve");
    $(this).addClass("about_acitve");
    var x = $(this).attr("title");
    
    $(".about_box").removeClass("active_about");
    $(".about_box").removeClass("in");	
    $("#" + x).addClass("active_about");
    
     setTimeout(function(){
     $("#" + x).addClass("in");
    }, 100);
});

$(".my_tab > ul > li > a").click(function () {
    $(".my_acitve").removeClass("my_acitve");
    $(this).addClass("my_acitve");
    var x = $(this).attr("title");
    
    $(".my_tab_box").removeClass("active_my");
    $(".my_tab_box").removeClass("in");	
    $("#" + x).addClass("active_my");
    
     setTimeout(function(){
     $("#" + x).addClass("in");
    }, 100);
});		   



$(".login__tab > ul > li > a").click(function () {
    $(".login__acitve").removeClass("login__acitve");
    $(this).addClass("login__acitve");
    var x = $(this).attr("title");
    
    $(".login_form").removeClass("active_about");
    $(".login_form").removeClass("in");	
    $("#" + x).addClass("active_about");
    
     setTimeout(function(){
     $("#" + x).addClass("in");
    }, 100);
});	 




$(".dis_cussions > ul > li > a").click(function () {
    $(".dis_active").removeClass("dis_active");
    $(this).addClass("dis_active");
    var x = $(this).attr("title");
    
    $(".chat_tab").removeClass("active_chat");
    $(".chat_tab").removeClass("in");	
    $("#" + x).addClass("active_chat");
    
     setTimeout(function(){
     $("#" + x).addClass("in");
    }, 100);
});	 

$(".periodicals_tab > ul > li > a").click(function () {
    $(".periodicals_acitve").removeClass("periodicals_acitve");
    $(this).addClass("periodicals_acitve");
    var x = $(this).attr("title");
    
    $(".periodicals_box").removeClass("active_periodicals_box");
    $(".periodicals_box").removeClass("in");	
    $("#" + x).addClass("active_periodicals_box");
    
     setTimeout(function(){
     $("#" + x).addClass("in");
    }, 100);
});	 		   

   



$(".search_click").click(function(){
$(".search_").fadeIn();
});	

$(".search_ > span").click(function(){
$(".search_").fadeOut();
});		


      

$(function(){$('#totopscroller').totopscroller({link:''});});

$(".text_more").click(function(){
$(".student_testimonial_contain > p").toggleClass('more_open');
$(this).find('i').toggleClass('fa-angle-up fa-angle-down')

});

$(window).scroll(function(){
if ($(window).scrollTop() >= 100) {
$('.logo img').addClass('logo_img');
$('.nav_section').addClass('nav_section_add');
$('.header_login').addClass('header_login_none');
$('.nav_section').addClass('nav_section_add');
$('.search_').addClass('search_add');
$('.nav_section').addClass('nav_add');


}
else {
$('.logo img').removeClass('logo_img');
$('.nav_section').removeClass('nav_section_add');
$('.header_login').removeClass('header_login_none');
$('.search_').removeClass('search_add');
$('.nav_section').removeClass('nav_add');

}
});

$(document).ready(function(){
var x = $(".slider_indanica").height();
var rightImgH = x / 2;
$(".sl_right_1").css({"height":rightImgH+'px'});
$(".sl_right_2").css({"height":rightImgH+'px'});;
$(".sl_right_3").css({"height":rightImgH+'px',"top":rightImgH+'px'});;
$(".sl_right_4").css({"height":rightImgH+'px',"top":rightImgH+'px'});;
console.log(x);
$('#slider_indanicaCarousel').carousel({
pause: "false"
});
});




$(document).ready(function(){
$(".nav_responsive").click(function(){
 $(".nav_open").addClass("add_menu");
});

$(".close_nav").click(function(){
    $(".nav_open").removeClass("add_menu");
});

$(".nav_btn_clolse").click(function(){
    
    $(".nav_open").removeClass("add_menu");
});

$(document).click(function(event) {
if (!$(event.target).closest(".nav_open,.nav_responsive").length) {
$("body").find(".nav_open").removeClass("add_menu");
}
});

});


$(document).ready(function() {  
if($(window).width() <= 768){    
$('.cust_carousel').carousel({
  interval: false
})
}
else{
$('.cust_carousel').carousel({
  interval: 6000
})
}
});


$(document).ready(function() {  
if($(window).width() <= 768){    
$('.digital_carousel').carousel({
  interval: false
})
}
else{
$('.digital_carousel').carousel({
  interval: 6000
})
}
});




$(document).ready(function(){
$(".filter_click").click(function(){
 $(".fiter_mian").addClass("add_filter");
});

$(".fiter_mian > h1 > i").click(function(){
    $(".fiter_mian").removeClass("add_filter");
});



});


$(document).ready(function(){
var bannerW = $(".banner_slider").width();
var bannerH = bannerW * 43.4 / 100;
$(".banner_slider").css('height', bannerH+'px');

});






