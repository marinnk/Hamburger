$(function() {
$(".c-button--headermenu").click(function() { //menuボタンをクリックしたらopenをつける
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
})
$(".c-transparent-background--nav").click(function() { //透明背景をクリックしてもopenが消える
    $(this).removeClass("open");
    $(".p-nav").removeClass("open");
    $(".p-close__line, .p-close").removeClass("open");
})

//三本線を消すた

// $(".c-button--headermenu").click(function() {
//     if($(".p-close, .p-close__line").hasClass("open")) {
//         $(".p-close, .p-close__line").css("opacity", 1);
//     } 
// })

// $(".c-transparent-background--nav").click(function() {
//     if($(".p-close, .p-close__line").hasClass("open") == false) {
//         $(".p-close, .p-close__line").css("opacity", 0);
//     }
// })
// $(".p-close").click(function() {
//     if($(".p-close, .p-close__line").hasClass("open") == false) {
//         $(".p-close, .p-close__line").css("opacity", 0);
//     }
// })
});