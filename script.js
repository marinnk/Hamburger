$(function() {
$(".c-menu--header").click(function() {
    $(".c-close").toggleClass("open");
    $(".p-nav").toggleClass("open")
})
$(".c-close").click(function() {
    $(this).removeClass("open");
    $(".p-nav").removeClass("open");
})

});