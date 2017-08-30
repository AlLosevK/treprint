function AjaxFormRequest(result_id,form_id,url) {
    jQuery.ajax({
        url:     url, //Адрес подгружаемой страницы
        type:     "POST", //Тип запроса
        dataType: "html", //Тип данных
        data: jQuery("#"+form_id).serialize(),
        success: function(response) { 
            yaCounter40969514.reachGoal('submit_contact');
            document.getElementById(result_id).innerHTML = response;
    },
    error: function(response) { //Если ошибка
        document.getElementById(result_id).innerHTML = "Ошибка при отправке формы";
    }
    });
}
$(document).ready(function (){
    $('.feedback').on('click', function(){
        $('.feedback-contact').fadeIn(300);
        });
        $(document).mouseup(function(e) {
        var elem = $('.feedback-contact');
        if (e.target != elem[0] && !elem.has(e.target).length) {
        elem.fadeOut(300);
        }
    });
    $('.download-price').click(function() {
        yaCounter40969514.reachGoal('download_price');
    });
    $('.nav-left-li.first').click(function() {
        yaCounter40969514.reachGoal('rizograf');
    });
    $('.nav-left-li.second').click(function() {
        yaCounter40969514.reachGoal('visitka');
    });
    $('.nav-left-li.third').click(function() {
        yaCounter40969514.reachGoal('diskont');
    });
    $('.nav-left-li.fourth').click(function() {
        yaCounter40969514.reachGoal('calendar');
    });
    $('.nav-left-li.fifth').click(function() {
        yaCounter40969514.reachGoal('ofset');
    });
    $('.nav-left-li.sixhth').click(function() {
        yaCounter40969514.reachGoal('width');
    });
    $('.nav-left-li.eight').click(function() {
        yaCounter40969514.reachGoal('spread');
    });

    $('.nav-left-li.eight').hover(function () {
        $(this).find('img').attr('src','img/ico/calendar-hover.png');
    }, function () {
        $(this).find('img').attr('src','img/ico/calendar.png');
    });
    $('.nav-left-li.first').hover(function () {
        $(this).find('img').attr('src','img/ico/vizitka.png');
    }, function () {
        $(this).find('img').attr('src','img/ico/ico-left-1.png');
    });

    $('.nav-left-li.second').hover(function () {
        $(this).find('img').attr('src','img/ico/diskont.png');
    }, function () {
        $(this).find('img').attr('src','img/ico/ico-left-2.png');
    });

    $('.nav-left-li.third').hover(function () {
        $(this).find('img').attr('src','img/ico/ico-left-3.png');
    }, function () {
        $(this).find('img').attr('src','img/ico/rizograf.png');
    });

    $('.nav-left-li.fourth').hover(function () {
        $(this).find('img').attr('src','img/ico/ofsetnaya.png');
    }, function () {
        $(this).find('img').attr('src','img/ico/ico-left-4.png');
    });

    $('.nav-left-li.fifth').hover(function () {
        $(this).find('img').attr('src','img/ico/shirpechat.png');
    }, function () {
        $(this).find('img').attr('src','img/ico/ico-left-5.png');
    });

    $('.nav-left-li.sixth').hover(function () {
        $(this).find('img').attr('src','img/ico/rasprostran.png');
    }, function () {
        $(this).find('img').attr('src','img/ico/ico-left-6.png');
    });
});


//SLIDER

$('.slider-image').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  asNavFor: '.slider-image',
  centerMode: true,
  focusOnSelect: true,
  vertical: true,
  verticalSwiping: true
});
