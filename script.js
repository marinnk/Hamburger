$(function() {
$(".c-button--headermenu").click(function() {
    $(".c-button--close").toggleClass("open");
    $(".p-nav").toggleClass("open");
    $(".c-transparent-background--nav").toggleClass("open");
    $(".p-close__line").toggleClass("open");
})
$(".p-close").click(function() {
    $(this).removeClass("open");
    $(".p-nav").removeClass("open");
    $(".p-close__line").removeClass("open");
    $(".c-transparent-background--nav").removeClass("open");
})
$(".c-transparent-background--nav").click(function() {
    $(this).removeClass("open");
    $(".p-nav").removeClass("open");
    $(".p-close__line, .p-close").removeClass("open");
})

//三本線を消すため
$(".c-button--headermenu").click(function() {
    if($(".p-close").hasClass("open")) {
        $(".p-close").css("display", "block");
    }
})
$(".c-transparent-background--nav").click(function() {
    if($(".p-close").hasClass("open") == false) {
        $(".p-close").css("display", "none");
    }
})
$(".p-close").click(function() {
    if($(".p-close").hasClass("open") == false) {
        $(".p-close").css("display", "none");
    }
})

});