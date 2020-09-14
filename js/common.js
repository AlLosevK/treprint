function AjaxFormRequest(result_id,form_id,url) {
    jQuery.ajax({
        url:     url, //Адрес подгружаемой страницы
        type:     "POST", //Тип запроса
        dataType: "html", //Тип данных
        data: jQuery("#"+form_id).serialize(),
        success: function(response) {
            document.getElementById(result_id).innerHTML = response;
    },
    error: function(response) { //Если ошибка
        document.getElementById(result_id).innerHTML = "Ошибка при отправке формы";
    }
    });
}

$(document).ready(function (){
  $(".popup").on("click", function(){
    $(".background, .promo").addClass("is-active");
  });
  $(".background").on("click", function(){
    $(".background, .promo").removeClass("is-active");
  });
});
