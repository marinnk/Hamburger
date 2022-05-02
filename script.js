$(function() {
$(".c-button--headermenu").click(function() { //menuボタンをクリックしたらopenをつける
    $(this).toggleClass("open");
    $(".c-button--close").toggleClass("open");
    $(".p-nav").toggleClass("open");
    $(".c-transparent-background--nav").toggleClass("open");
    $(".p-close__line").toggleClass("open");
})
$(".p-close").click(function() { //×ボタンをクリックしたらopenが消える
    $(this).removeClass("open");
    $(".p-nav").removeClass("open");
    $(".p-close__line").removeClass("open");
    $(".c-transparent-background--nav").removeClass("open");
    $(".c-button--headermenu").removeClass("open");
})
$(".c-transparent-background--nav").click(function() { //透明背景をクリックしてもopenが消える
    $(this).removeClass("open");
    $(".p-nav").removeClass("open");
    $(".p-close__line, .p-close").removeClass("open");
    $(".c-button--headermenu").removeClass("open");
})
});