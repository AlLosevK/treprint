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


					<img src="img/banner3.png" width="100%">

                </div>
                <div class="row prices prices-calendars">
                    <div class="max-content clearfix">
                      <div class="price-nav">
                        <a href="#trio" class="price-nav__item price-nav__item--promo">
                          <img src="img/Trio.png" alt="Календарь трио">
                          <div>
                            <h4>Календари ТРИО</h4>
                            <p>Рассчитать</p>
                          </div>
                          <img src="img/Trio_Maxi.png" alt="Календарь трио макси">
                        </a>
                        <a href="#pocket" class="price-nav__item">
                          <img src="img/Karmanny.png" alt="Карманный календарь">
                          <h4>Карманные календари</h4>
                          <p>Рассчитать</p>
                        </a>
                        <a href="#desk" class="price-nav__item">
                          <img src="img/Perekidnoy.png" alt="Перекидной календарь">
                          <h4>Перекидные календари</h4>
                          <p>Рассчитать</p>
                        </a>
                        <a href="#mono" class="price-nav__item">
                          <img src="img/mono.png" alt="Календарь-домик">
                          <h4>Календари "Моно"</h4>
                          <p>Рассчитать</p>
                        </a>
                        <a href="#other" class="price-nav__item">
                          <img src="img/Domik.png" alt="Календарь-домик">
                          <h4>Другие виды календарей</h4>
                          <p>Рассчитать</p>
                        </a>
                      </div>

                      <div id="trio" class="price-item col-xs-12">
                        <div class="price-descr row">
                          <div class="price-descr__content col-xs-9">
                            <h2 class="price-descr__title">Календарь - ТРИО "Стандарт"</h4>
                            <ul>
                              <li> <b>Формат в раскрытом виде:</b> 30x82 см. </li>
                              <li> <b>Шапка, подложка:</b> Глянцевый картон 300г/м </li>
                              <li> <b>Каленжарные блоки:</b> глянцевая бумага (серое, синие исполнение), 90г/м</li>
                              <li> <b>Вариaнты дополнительной обработки:</b> ламинация, сплощной лак, тиснение фольгой</li>
                            </ul>
                            <h4 class="price-descr__subtitle">Дизайн в подарок при покупке от 100шт</h4>
                            <button class="popup" type="button"> Заказать </button>
                          </div>
                          <div class="col-xs-3">
                            <img src="img/Trio.png" alt="">
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
                                  <td class="popup"> 1650 руб </td>
                                  <td class="popup"> 2490 руб </td>
                                  <td class="popup"> 3180 руб </td>
                                  <td class="popup"> 3700 руб </td>
                                  <td class="popup"> 4940 руб </td>
                                  <td class="popup"> 7500 руб	</td>
                                  <td class="popup"> 12700 руб </td>
                                  <td class="popup"> 22000 руб </td>
                                  <td class="popup"> 31900 руб </td>
                                  <td class="popup"> 48440 руб </td>
                                </tr>
                              </tbody>
                            </table>

                          </div>
                        </div>
                      </div>
                      <div id="trio-maxi" class="price-item col-xs-12">
                        <div class="price-descr row">
                          <div class="price-descr__content col-xs-9">
                            <h2 class="price-descr__title">Календарь - ТРИО "Макси"</h4>
                            <ul>
                              <li> <b>Формат в раскрытом виде:</b> 30x82 см. увеличенное рекламное поле</li>
                              <li> <b>Шапка, подложка:</b> Глянцевый картон 300г/м </li>
                              <li> <b>Каленжарные блоки:</b> глянцевая бумага (серое, синие исполнение), 90г/м</li>
                              <li> <b>Вариaнты дополнительной обработки:</b> ламинация, сплощной лак, тиснение фольгой</li>
                            </ul>
                            <h4 class="price-descr__subtitle">Дизайн в подарок при покупке от 100шт</h4>
                            <button class="popup" type="button"> Заказать </button>
                          </div>
                          <div class="col-xs-3">
                            <img src="img/Trio_Maxi.png" alt="">
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
                                  <td class="popup"> 2150 руб </td>
                                  <td class="popup"> 2990 руб </td>
                                  <td class="popup"> 3800 руб </td>
                                  <td class="popup"> 4680 руб </td>
                                  <td class="popup"> 6200 руб </td>
                                  <td class="popup"> 9500 руб	</td>
                                  <td class="popup"> 16200 руб </td>
                                  <td class="popup"> 28550 руб </td>
                                  <td class="popup"> 39600 руб </td>
                                  <td class="popup"> 63400 руб </td>
                                </tr>
                              </tbody>
                            </table>

                          </div>
                        </div>
                      </div>
                      <div id="pocket" class="price-item col-xs-12">
                        <div class="price-descr row">
                          <div class="price-descr__content col-xs-9">
                            <h2 class="price-descr__title">Календарь "Карманный"</h4>
                            <ul>
                              <li><b>Формат кадендаря:</b> 86х54 мм или 70х100 мм</li>
                              <li><b>Материал календаря:</b> Глянцевый картон 300г/м</li>
                              <li><b>Варианты дополнительной обработки:</b> ламинация, тиснение фольгой</li>
                            </ul>
                            <button class="popup" type="button"> Заказать </button>
                          </div>
                          <div class="col-xs-3">
                            <img src="img/Karmanny.png" alt="">
                          </div>
                        </div>
                        <div class="row row-tables">
                          <div class="table-responsive">
                            <table class="table table-hover table-striped text-center">
                              <thead>
                                <tr>
                                  <td class="popup"> карманные календари (100x70 мм) </td>
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
                      <div id="desk" class="price-item col-xs-12">
                        <div class="price-descr row">
                          <div class="price-descr__content col-xs-9">
                            <h2 class="price-descr__title">Календарь "Перекидной".</h2>
                            <ul>
                              <li> <b>Различные форматы календаря</b> </li>
                              <li> <b>Материал календаря:</b> от 115 до 300 г/м</li>
                              <li> <b>Варианты дополнительной обработки:</b> Дополнительная твердая обложка</li>
                            </ul>
                            <h4 class="price-descr__subtitle">Дизайн в подарок при покупке от 100шт</h4>
                            <button class="popup" type="button"> Заказать </button>
                          </div>
                          <div class="col-xs-3">
                            <img src="img/Perekidnoy.png" alt="">
                          </div>
                        </div>
                        <div class="row row-tables">
                          <div class="table-responsive">
                            <table class="table table-hover table-striped text-center">
                              <thead>
                                <tr class="first">
                                  <td class="popup"> A3 вертикальный (297х420 мм) </td>
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
                                  <td class="popup"> 1950 руб </td>
                                  <td class="popup"> 3040 руб </td>
                                  <td class="popup"> 4290 руб </td>
                                  <td class="popup"> 5400 руб </td>
                                  <td class="popup"> 7500 руб </td>
                                  <td class="popup"> 11890 руб </td>
                                  <td class="popup"> 22450 руб	</td>
                                  <td class="popup"> 41600 руб </td>
                                  <td class="popup"> 61600 руб </td>
                                  <td class="popup"> 90650 руб </td>
                                </tr>
                              </tbody>
                            </table>

                          </div>
                        </div>
                      </div>
                      <div id="mono" class="price-item col-xs-12">
                        <div class="price-descr row">
                          <div class="price-descr__content col-xs-9">
                            <h2 class="price-descr__title">Печать и изготовление календарей "Моно".</h2>
                            <ul>
                              <li><b>Формат в раскрытом виде:</b> 32x50 см, одно рекламное поле.</li>
                              <li><b>Шапка, подложка:</b> Глянцевый картон 300г/м</li>
                              <li><b>Календарный блок:</b> цвет - серый. Размер увеличенный, со статическим курсором.</li>
                              <li><b>Варианты дополнительной обработки:</b> Ламинация, сплошной лак, тиснение фольгой</li>
                            </ul>
                            <h4 class="price-descr__subtitle">Дизайн в подарок при покупке от 100шт</h4>
                            <button class="popup" type="button"> Заказать </button>
                          </div>
                          <div class="col-xs-3">
                            <img src="img/mono.png" alt="">
                          </div>
                        </div>
                        <div class="row row-tables">
                          <div class="table-responsive">
                            <table class="table table-hover table-striped text-center">
                              <thead>
                                <tr class="first">
                                  <td class="popup"> Календари "Моно" </td>
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
                                  <td class="popup"> 1056 руб </td>
                                  <td class="popup"> 1270 руб </td>
                                  <td class="popup"> 1650 руб </td>
                                  <td class="popup"> 1925 руб </td>
                                  <td class="popup"> 2770 руб </td>
                                  <td class="popup"> 4180 руб	</td>
                                  <td class="popup"> 8000 руб </td>
                                  <td class="popup"> 15150 руб </td>
                                  <td class="popup"> 21840 руб </td>
                                  <td class="popup"> 34230 руб </td>
                                </tr>
                              </tbody>
                            </table>

                          </div>
                        </div>
                      </div>
                      <div id="other" class="price-item col-xs-12">
                        <div class="price-descr row">
                          <div class="price-descr__content col-xs-9">
                            <h2 class="price-descr__title">Другие виды календарей.</h2>
                            <ul>
                              <li><b>- календари домик</b></li>
                              <li><b>- календари плакаты</b></li>
                              <li><b>- нестандартные календари</b></li>
                              <li><b>- разработка индивидуального дизайна</b></li>
                            </ul>
                            <button class="popup" type="button"> Заказать </button>
                          </div>
                          <div class="col-xs-3">
                            <img src="img/Domik.png" alt="">
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
