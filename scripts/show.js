$(function () {
    $(".button-show").on("click", function () {
        $(this).next().slideToggle();
        $(this).addClass('animation');
    });
});