<?php include('head.php'); ?>
<body>
<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) {(w[c] = w[c] || []).push(function () {try {w.yaCounter37668145 = new Ya.Metrika({id: 37668145, clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true, trackHash: true});}catch (e) {}});var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {n.parentNode.insertBefore(s, n);};s.type = "text/javascript";s.async = true;s.src = "https://mc.yandex.ru/metrika/watch.js";if (w.opera == "[object Opera]") {d.addEventListener("DOMContentLoaded", f, false);}else {f();}})(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/37668145" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter --><div class="container-fluid">
    <div class="row">
        <div class="h_head"></div>
    </div>
</div>
<div class="background">
</div>
<div class="contact-us promo">
  <form role="form" action="mail.php" method="POST" id="form">
    <div id="result_div_id">
    </div>
    <input type="text" name="phone" placeholder="Введите ваш телефон или E-mail" required="required">
    <textarea name="question" placeholder="Заказ календарей"></textarea>
    <button type="button" onclick="AjaxFormRequest('result_div_id', 'form', 'mail.php')"><span><img src="img/ico/ico-download.png" alt=""></span><span>Отправить</span></button>
  </form>
</div>
<section>
    <div class="container-fluid">
        <div class="row">
            <?php include('left-menu.php'); ?>
            <div class="col-xs-9 col-lg-9 content">
                <?php include('nav.php'); ?>
                <div class="row promo">


					<img src="img/banner2.jpg" width="100%">

                </div>
                <div class="row prices prices-calendars">
                    <div class="max-content clearfix">
                        <div class="price-nav">
                          <a href="#desk" class="price-nav__item">
                            <img src="img/Perekidnoy.png" alt="Перекидной календарь">
                            <h4>Перекидные календарь</h4>
                            <p>Рассчитать</p>
                          </a>
                          <a href="#pocket" class="price-nav__item">
                            <img src="img/Karmanny.png" alt="Карманный календарь">
                            <h4>Карманные календари</h4>
                            <p>Рассчитать</p>
                          </a>
                          <a href="#trio" class="price-nav__item price-nav__item--promo">
                            <img src="img/Trio.png" alt="Календарь трио">
                            <div>
                              <h4>Календари ТРИО</h4>
                              <p>Рассчитать</p>
                            </div>
                            <img src="img/Trio_Maxi.png" alt="Календарь трио макси">
                          </a>
                          <a href="#other" class="price-nav__item">
                            <img src="img/Domik.png" alt="Календарь-домик">
                            <h4>Другие виды календарей</h4>
                            <p>Рассчитать</p>
                          </a>
                          <a href="#other" class="price-nav__item">
                            <img src="img/pencil.jpg" alt="Календарь-домик">
                            <h4>Дизайн</h4>
                            <p>Рассчитать</p>
                          </a>
                        </div>

                        <div id="desk" class="col-xs-12">
                          <div class="price-descr row">
                            <h4 class="col-xs-12">Печать и изготовление перекидных календарей.</h4>
                            <div class="col-xs-5">
                              <img src="img/Perekidnoy.png" alt="">
                            </div>
                            <div class="price-descr__content col-xs-7">
                              <ul>
                                <li>- выбор плотности бумаги</li>
                                <li>- одно- и двусторнняя печать</li>
                                <li>- выбор цвета пружинки и ригеля</li>
                                <li>- печать с обложкой и без</li>
                              </ul>
                              <button class="popup" type="button"> Заказать </button>
                            </div>
                          </div>
                          <div class="row row-tables">
                            <div class="table-responsive">
                              <table class="table table-hover table-striped text-center">
                                <thead>
                                  <tr class="first">
                                    <td class="popup"> перекидные календари  </td>
                                    <td class="popup"> размер  </td>
                                    <td class="popup"></td>
                                    <td class="popup"></td>
                                    <td class="popup"></td>
                                    <td class="popup"></td>
                                    <td class="popup"></td>
                                    <td class="popup"></td>
                                    <td class="popup"></td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="popup"> вертикальный на ригеле </td>
                                    <td class="popup"> квадрат 200х200 </td>
                                    <td class="popup"> квадрат 300х300 </td>
                                    <td class="popup"> А5	</td>
                                    <td class="popup"> А4	</td>
                                    <td class="popup"> А3	</td>
                                    <td class="popup"> квадрат 340х340 </td>
                                    <td class="popup"> 340х490 </td>
                                    <td class="popup"> 350х600 </td>
                                  </tr>
                                  <tr>
                                    <td class="popup"> горизонтальный на ригеле </td>
                                    <td class="popup"> квадрат 200х200 </td>
                                    <td class="popup"> квадрат 300х300 </td>
                                    <td class="popup"> А5	</td>
                                    <td class="popup"> А4	</td>
                                    <td class="popup"> А3	</td>
                                    <td class="popup"> квадрат 340х340 </td>
                                    <td class="popup"> 340х490 </td>
                                  </tr>
                                  <tr>
                                    <td class="popup"> вертикальный на люверсе  </td>
                                    <td class="popup"> квадрат 200х200 </td>
                                    <td class="popup"> квадрат 300х300 </td>
                                    <td class="popup"> А5	</td>
                                    <td class="popup"> А4	</td>
                                    <td class="popup"> А3	</td>
                                    <td class="popup"> квадрат 340х340 </td>
                                    <td class="popup"> 340х490 </td>
                                    <td class="popup"> 350х600 </td>
                                  </tr>
                                  <tr>
                                    <td class="popup"> горизонатльный на люверсе  </td>
                                    <td class="popup"> квадрат 200х200 </td>
                                    <td class="popup"> квадрат 300х300 </td>
                                    <td class="popup"> А5	</td>
                                    <td class="popup"> А4	</td>
                                    <td class="popup"> А3	</td>
                                    <td class="popup"> квадрат 340х340 </td>
                                    <td class="popup"> 340х490 </td>
                                    <td class="popup"> 350х600 </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div id="pocket" class="col-xs-12">
                          <div class="price-descr row">
                            <h4 class="col-xs-12">Печать и изготовление карманных календарей.</h4>
                            <div class="col-xs-5">
                              <img src="img/Karmanny.png" alt="">
                            </div>
                            <div class="price-descr__content col-xs-7">
                              <ul>
                                <li>- возможна срочная печать</li>
                                <li>- скругление углов</li>
                                <li>- возможна печать в размере 86*54</li>
                              </ul>
                              <button class="popup" type="button"> Заказать </button>
                            </div>
                          </div>
                          <div class="row row-tables">
                            <div class="table-responsive">
                              <table class="table table-hover table-striped text-center">
                                <thead>
                                  <tr>
                                    <td class="popup"> карманные календари 100x70 </td>
                                    <td class="popup"> 500 шт </td>
                                    <td class="popup"> 1000 шт </td>
                                    <td class="popup"> 2000 шт </td>
                                    <td class="popup"> 3000 шт </td>
                                    <td class="popup"> 5000 шт </td>
                                    <td class="popup"> 8000 шт </td>
                                    <td class="popup"> 10000 шт </td>
                                    <td class="popup"> 15000 шт </td>
                                    <td class="popup"> 20000 шт </td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="popup"> без ламинации</td>
                                    <td class="popup"> 1060 руб </td>
                                    <td class="popup"> 1390 руб </td>
                                    <td class="popup"> 1590 руб </td>
                                    <td class="popup"> 2670 руб </td>
                                    <td class="popup"> 3845 руб </td>
                                    <td class="popup"> 5980 руб </td>
                                    <td class="popup"> 6730 руб </td>
                                    <td class="popup"> 9584 руб </td>
                                    <td class="popup"> 12436 руб </td>
                                  </tr>
                                  <tr>
                                    <td class="popup"> с ламинацией </td>
                                    <td class="popup"> 1690 руб	</td>
                                    <td class="popup"> 1940 руб	</td>
                                    <td class="popup"> 2567 руб	</td>
                                    <td class="popup"> 3862 руб	</td>
                                    <td class="popup"> 5950 руб	</td>
                                    <td class="popup"> 8890 руб	</td>
                                    <td class="popup"> 10632 руб </td>
                                    <td class="popup"> 14418 руб </td>
                                    <td class="popup"> 18740 руб </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div id="trio" class="col-xs-12">
                          <div class="price-descr row">
                            <h4 class="col-xs-12">Печать и изготовление календарей трио.</h4>
                            <div class="col-xs-5">
                              <img src="img/Trio.png" alt="">
                            </div>
                            <div class="price-descr__content col-xs-7">
                              <ul>
                                <li>- макет в подарок при заказе <b>от 100 шт.</b> </li>
                                <li>- бесплатная доставка при заказе <b>от 200 шт.</b> </li>
                                <li>- серые и синие численники</li>
                                <li>- шпигель + 3 рекламных поля</li>
                                <li>- выбор цвета люверса и пружины</li>
                              </ul>
                              <button class="popup" type="button"> Заказать </button>
                            </div>
                          </div>
                          <div class="row row-tables">
                            <div class="table-responsive">
                              <table class="table table-hover table-striped text-center">
                                <thead>
                                  <tr class="first">
                                    <td class="popup"> трио стандарт </td>
                                    <td class="popup"> 5 шт </td>
                                    <td class="popup"> 10 шт </td>
                                    <td class="popup"> 15 шт </td>
                                    <td class="popup"> 20 шт </td>
                                    <td class="popup"> 30 шт </td>
                                    <td class="popup"> 50 шт </td>
                                    <td class="popup"> 100 шт </td>
                                    <td class="popup"> 200 шт </td>
                                    <td class="popup"> 300 шт </td>
                                    <td class="popup"> 500 шт </td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="popup"> цена за тираж </td>
                                    <td class="popup"> 1450 руб </td>
                                    <td class="popup"> 2300 руб </td>
                                    <td class="popup"> 2998 руб </td>
                                    <td class="popup"> 3320 руб </td>
                                    <td class="popup"> 4534 руб </td>
                                    <td class="popup"> 7000 руб	</td>
                                    <td class="popup"> 11000 руб </td>
                                    <td class="popup"> 20000 руб </td>
                                    <td class="popup"> 28762 руб </td>
                                    <td class="popup"> 43947 руб </td>
                                  </tr>
                                </tbody>
                              </table>
                              <span class="col-xs-12"><b>дополнительная обработка: ламинация, уф-лак, тиснение фольгой</b></span>
                            </div>
                          </div>
                        </div>
                        <div id="trio-maxi" class="col-xs-12">
                          <div class="price-descr row">
                            <h4 class="col-xs-12">Печать и изготовление календарей трио макси.</h4>
                            <div class="col-xs-5">
                              <img src="img/Trio_Maxi.png" alt="">
                            </div>
                            <div class="price-descr__content col-xs-7">
                              <ul>
                                <li>- макет в подарок при заказе <b>от 100 шт.</b> </li>
                                <li>- бесплатная доставка при заказе <b>от 200 шт.</b> </li>
                                <li>- серые и синие численники</li>
                                <li>- увеличенное рекламное поле</li>
                                <li>- выбор цвета люверса и пружины</li>
                              </ul>
                              <button class="popup" type="button"> Заказать </button>
                            </div>
                          </div>
                          <div class="row row-tables">
                            <div class="table-responsive">
                              <table class="table table-hover table-striped text-center">
                                <thead>
                                  <tr class="first">
                                    <td class="popup"> трио макси </td>
                                    <td class="popup"> 5 шт </td>
                                    <td class="popup"> 10 шт </td>
                                    <td class="popup"> 15 шт </td>
                                    <td class="popup"> 20 шт </td>
                                    <td class="popup"> 30 шт </td>
                                    <td class="popup"> 50 шт </td>
                                    <td class="popup"> 100 шт </td>
                                    <td class="popup"> 200 шт </td>
                                    <td class="popup"> 300 шт </td>
                                    <td class="popup"> 500 шт </td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="popup"> цена за тираж </td>
                                    <td class="popup"> 1740 руб </td>
                                    <td class="popup"> 2580 руб </td>
                                    <td class="popup"> 3320 руб </td>
                                    <td class="popup"> 3974 руб </td>
                                    <td class="popup"> 5480 руб </td>
                                    <td class="popup"> 8612 руб	</td>
                                    <td class="popup"> 13358 руб </td>
                                    <td class="popup"> 23180 руб </td>
                                    <td class="popup"> 31960 руб </td>
                                    <td class="popup"> 54200 руб </td>
                                  </tr>
                                </tbody>
                              </table>
                              <span class="col-xs-12"><b>дополнительная обработка: ламинация, уф-лак, тиснение фольгой</b></span>
                            </div>
                          </div>
                        </div>
                        <div id="other"  class="col-xs-12">
                          <div class="price-descr row">
                            <h4 class="col-xs-12">Печать и изготовление календарей.</h4>
                            <div class="col-xs-5">
                              <img src="img/Domik.png" alt="">
                            </div>
                            <div class="price-descr__content col-xs-7">
                              <ul>
                                <li>- календари домик</li>
                                <li>- моно календари</li>
                                <li>- настольные календари</li>
                                <li>- календари плакаты</li>
                                <li>- нестандартные календари</li>
                                <li>- разработка индивидуального дизайна</li>
                              </ul>
                              <button class="popup" type="button"> Заказать </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-lg-12">
                            <h2>Квартальный календарь «Трио» — эффективная реклама круглый год</h2>
                            <p>Вы не знаете, где заказать <strong>изготовление трио календаря в СПб</strong>? Вы ищете исполнителя, в котором сочетаются профессионализм, качество, цена? Тогда воспользуйтесь услугами типографии RePrint, предлагающей выгодные услови сотрудничества и не только. </p>
                            <h3>Почему календарь «Трио»</h3>
                            <p>Квартальный календарь — это одна из наиболее популярных разновидностей полиграфической продукции. Внешне он представляет собой конструкцию из шпигеля (верхняя рекламная часть), подложки и трех календарных блоков. </p>
                            <p> Кто их заказывает: </p>
                            <ul>
                                <li>Компании, желающие провести рекламную кампанию себя и своей продукции, которая будет длиться целый год и не потребует дополнительных финансовых вложений.</li>
                                <li>Компании, которые формируют корпоративные подарки для своих клиентов и партнеров.</li>
                            </ul>
                            <p>Календарь «Трио» — это отличная возможность не только круглый год напоминать о себе, но и приносить пользу.</p>
                            <h3>Причины сотрудничать с RePrint</h3>
                            <p>Основная причина выбрать RePrint — возможность <strong>заказать календари «Трио» в СПб</strong>, имея готовый макет, или воспользоваться услугами наших дизайнеров и маркетологов. Ввиду экономической выгоды многие компании делают выбор в пользу данной продукции, поэтому важно выделиться на фоне конкурентов. Наша команда специализируется на создании такого продукта, который хочется повесить на стену и смотреть на него весь год.</p>
                            <p>Клиентам предлагается широкий выбор материалов, изображений, печатных приемов. Наличие современного оборудования позволяет реализовывать любые идеи.</p>
                            <p>Кроме квартальных календарей «Трио», наша типография изготавливает <strong>моно-календари</strong>, календари с окошком и подобную продукцию. Цена изготовления зависит от сложности макета и количества экземпляров. Для заказа звоните по телефону и приходите в офис на шоссе Революции. </p>
                        </div>
                    </div>
                </div>
                <?php include('nav-footer.php'); ?>
            </div>
        </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
</body>

</html>
