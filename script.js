$(function() {
$(".c-button--headermenu").click(function() {
    $(".c-button--close").toggleClass("open");
    $(".p-nav").toggleClass("open");
    $(".c-button--close>span").toggleClass("open");
    $(".c-transparent-background--nav").toggleClass("open");
})
$(".c-button--close").click(function() {
    $(this).removeClass("open");
    $(".p-nav").removeClass("open");
    $(".c-transparent-background--nav").removeClass("open");
})
$(".c-transparent-background--nav").click(function() {
    $(this).removeClass("open");
    $(".p-nav").removeClass("open");
    $(".c-button--close").removeClass("open");
})
});