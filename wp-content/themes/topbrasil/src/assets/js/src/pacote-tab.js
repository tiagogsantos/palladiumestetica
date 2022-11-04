$(function () {
    $('.tab-item').click(function () {
        $('.tab-item.active').removeClass('active');
        $(this).addClass('active');
        var tab_number = $(this).attr('data-tab-pacote');
        $('.tab-content-item.active-content').slideToggle(1000);
        $('.tab-content-item.active-content').removeClass('active-content');
        setTimeout(function () {
            $('.tab-content-item[data-content-pacote="' + tab_number + '"]').addClass('active-content');
            $('.tab-content-item[data-content-pacote="' + tab_number + '"]').slideToggle()
        }, 1000)
    })
});
$(document).ready(function () {
    $('.bt-file').click(function (e) {
        e.preventDefault();
        $('.file').click()
    })
});