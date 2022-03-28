$(function() {
$(".c-button--headermenu").click(function() {
    $(".c-button--close").toggleClass("open");
    $(".p-nav").toggleClass("open");
    $(".c-transparent-background--nav").toggleClass("open");
    $(".p-close__line").toggleClass("open");
})
$(".c-button--close").click(function() {
    $(this).removeClass("open");
    $(".p-nav").removeClass("open");
    $(".c-transparent-background--nav").removeClass("open");
})
$(".c-transparent-background--nav").click(function() {
    $(this).removeClass("open");
    $(".p-nav").removeClass("open");
    $(".p-close__line").removeClass("open");
    $(".c-button--close").removeClass("open");
})
});