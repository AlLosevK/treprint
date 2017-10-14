<?php include('head.php'); ?>
<body>
<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter37668145 = new Ya.Metrika({ id:37668145, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/37668145" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
    <div class="container-fluid">
        <div class="row">
            <div class="h_head"></div>
        </div>
    </div>
<section>
    <div class="container-fluid">
        <div class="row">
            <?php include('left-menu.php'); ?>
            <div class="col-xs-9 col-lg-9 content">
                <?php include('nav.php'); ?>
                <div class="row contact-us">
                    <div class="max-content clearfix">
                        <h1 class="text-center">Контакты</h1>
                        <div class="col-xs-6">
                            <div class="row row-contact">
                                <p class="contcat-p">
                                    <img src="img/ico/ico-tel.png" alt="">
                                    <span class="label">Телефон: </span>
                                    <span> +7 (812) 330-03-04, 958-08-26</span>
                                </p>
                                <p class="contcat-p">
                                    <img src="img/ico/ico-adres.png" alt="">
                                    <span class="label">Адрес: </span>
                                    <span> ул.Шоссе Революции, 31</span>
                                </p>
                                <p class="contcat-p">
                                    <img src="img/ico/ico-email.png" alt="">
                                    <span class="label">E-mail: </span>
                                    <span> reprint.spb@gmail.com</span>
                                </p>
                            </div>
                            <div class="row row-contact">
                                <h3>Остались вопросы?</h3>
                                <form action="" method="POST" id="form">
                                    <div id="result_div_id">
                                    </div>
                                    <input type="text" name="name" placeholder="Введите ваше имя" required="required">
                                    <input type="tel" name="phone" placeholder="Введите ваш телефон" required="required">
                                    <textarea name="question" placeholder="Текст вопроса" required="required"></textarea>
                                    <button type="button"  onclick="AjaxFormRequest('result_div_id', 'form', 'mail.php')"><span><img src="img/ico/ico-download.png" alt=""></span><span>Отправить</span></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <img src="img/kartasayta.png" alt="Схема расположения объектов" class="outline">
                            <div class="map">
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=eLinI-utSpNfU2HVP7Fjr96-u8s_XYoW&width=445&height=445&lang=ru_RU&sourceType=constructor&scroll=true"></script>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('nav-footer.php'); ?>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>
