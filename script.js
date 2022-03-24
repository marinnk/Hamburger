$(function() {
$(".c-button--headermenu").click(function() {
    $(".c-close").toggleClass("open");
    $(".p-nav").toggleClass("open");
    $(".c-close>span").toggleClass("open");
    $(".c-transparent-background--nav").toggleClass("open");
})
$(".c-close").click(function() {
    $(".c-close").removeClass("open");
    $(".p-nav").removeClass("open");
    $(".c-transparent-background--nav").removeClass("open");
})
});