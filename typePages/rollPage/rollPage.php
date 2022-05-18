<!DOCTYPE html>
<html lang="en">
<head>
     <!--Google Tag Manager-->
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MT2NDSC');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог рулонных штор</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/orderStyle.css">     
    <link rel="stylesheet" href="/styles/headerStyle.css">
    <link rel="stylesheet" href="/typePages/styleTypes/rollPageStyle.css">
    <link rel="stylesheet" href="/styles/problemStyle.css">
    <link rel="stylesheet" href="/styles/footerStyle.css">
    <link rel="stylesheet" href="/styles/modalAndCall.css"> 
    <link rel="stylesheet" href="/styles/infoBlock.css"> 
    <link rel="stylesheet" href="/styles/loader/loader.css">
    <link rel="stylesheet" href="/styles/couner/counter.css">
    <link rel="stylesheet" href="/basketPOP/popUp.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>   
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
        ym(88017919, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/88017919" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MT2NDSC" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <input type="hidden" data-resources="/serverScript/getRollMaterials.php" id="resourse">
    <input type="hidden" data-path="rollMaterials" id="path">

    <!-- кнопка вызова -->
    <div class="call_me">
        <div class="call_ico">
            <i class="fas fa-phone"></i>
        </div>
    </div>

    <!-- модальное окно заявки -->
    <div class="modal">
        <div class="modal-window">
            <div class="modal-content">
                <div class="modal-title basic-title">Записаться на замер</div>
                <div class="modal-form">
                    <form action="POST" name="callMaster">
                    <input class="mandatoty_attribute"  type="text" name="name" id="" placeholder="Имя* ">
                    <input class="mandatoty_attribute"  type="text" name="family" id="" placeholder="Фамилия*">
                    <input class="mandatoty_attribute"  type="text" name="addres" id="" placeholder="Адрес*">
                    <input class="mandatoty_attribute"  type="number" name="telephone" placeholder="Номер для связи*">
                    <div class="select-block">
                    <select class="modal-select mandatoty_attribute" name="type" id="" >
                        <option value="" selected disabled>Вид штор*</option>
                        <optgroup label="Горизонтальные">
                            <option value="горизонтальные дерево">Деревянный</option>
                            <option value="горизонтальные пластик">Пластиковые</option>
                        </optgroup>
                        <optgroup label="Вертикальные">
                            <option value="вертикальные дерево">Деревянный</option>
                            <option value="вертикальные пластик">Пластиковые</option>
                            <option value="вертикальные ткань">Тканевые</option>
                        </optgroup>
                        <optgroup label="Рулонные">
                            <option value="Рулонные Классика LVT">Классика LVT</option>
                            <option value="Рулонные UNI">UNI</option>
                            <option value="Рулонные MINI">MINI</option>
                        </optgroup>
                        <optgroup label='Рулонные "Зебра"'>
                            <option value="Рулонные Зебра Классика LVT">Классика LVT</option>
                            <option value="Рулонные Зебра UNI">UNI</option>
                            <option value="Рулонные Зебра MINI">MINI</option>
                        </optgroup>
                        
                    </select>
                    </div>
                    <div class="modal-date">Укажите в желаемое время</div>
                    <input type="date" name="date">
                    <input type="time" name="time">
                    <textarea name="comment" cols="30" rows="10" placeholder="Оставьте ваш комментарий"></textarea>
                </div>
                <div class="modal-submit">
                    <div class="dop-info">
                        <span>&#8727; - поле обязательное для ввода</span>
                    </div>
                    <div class="submit-btn user-btn">Отправить</div>
                </div>
            </form>
            </div>
            <div class="modal-close">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>

    <!-- шапка страницы  -->
    <?require $_SERVER['DOCUMENT_ROOT'].'/header.php'?>

    <!-- контейнер -->
    <div class="container">
        <!-- блок с главныым избражением -->
        <div class="block-img main">
            <img src="img/roll_prev_img.jpg" alt="">
        </div>

        <!-- блок описания штор -->
        <div class="discription">
            <div class="discription-inner-wrapper">
                <div class="discription-inner-block main">
                    <h2 class="discription-title">Рулонные шторы на пластиковые окна</h2>
                    <p class="discription-paragraph">Рулонные жалюзи и шторы на пластиковые окна – практичный, стильный и недорогой вариант солнцезащитного декора. Они устанавливаются непосредственно в оконный проем, в результате подоконник остается свободным, такие конструкции требуют минимум места. При этом они могут частично приглушать или полностью перекрывать поток солнечного света. Для блокирования солнечных лучей предлагается выбрать рулонные мини-шторы из специального материала блэкаут. Они будут отлично смотреться и гармонично впишутся в любое пространство.</p>
                </div>  
            </div>
        </div>
        <!-- блок с типами штор -->
        <div class="systems">
            <div class="systems-wrapper">
                <h2 class="discription-subtitle discription-subtitle__systems">Системы рулонных штор</h2>
                <div class="type-system __frame">
                    <h3 class="system-title __in-frame" >Для установки на оконную раму предлагается 2 типа рулонных штор на заказ</h3>
                    <div class="frame-items">
                        <div class="item MINI">
                            <div class="item-img">
                                <img src="img/roll_mini.jpg" alt="">
                            </div>
                            <div class="item-discription">
                                <h3 class="item-title">MINI</h3>
                                <p>Это наиболее простой и недорогой вариант, он предполагает монтаж штор в оконный проем без использования направляющих и специального короба. Дополнительно можно автоматизировать поднимание и опускание штор</p>
                            </div>
                        </div>
                        <div class="item UNI">
                            <div class="item-img">
                                <img src="img/roll_uni.jpg" alt="">
                            </div>
                            <div class="item-discription">
                                <h3 class="item-title">UNI</h3>
                                <p>Вариант предусматривает установку декоративного короба, в котором будет скрываться свернутая штора. Фурнитура предлагается в широкой цветовой гамме. Возможна установка на скотч или с помощью сверлени</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="type-system __opening">
                    <h3 class="system-title __in-opening" >Для установки в оконный проем предлагается система Классика LVT</h3>
                    <div class="frame-items">
                        <div class="item MINI">
                            <div class="item-img">
                                <img src="img/roll__classic_LVT.png" alt="">
                            </div>
                            <div class="item-discription">
                                <h3 class="item-title">Классика LVT</h3>
                                <p>Это рулонные тканевые жалюзи на окна любой площади, предусмотрен открытый вал. Установка осуществляется методом сверления.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- блок с еще одним изображением -->
        <div class="block-img preview">
            <img src="img/roll_main_img.jpg" alt="">
        </div>

        <!-- блок с приемуществом штор -->
        <div class="block other">
            <div class="inner-wrapper">
                <h2 class="discription-subtitle">Преимущества рулонных штор:</h2>
                <div class="list-wrapper">
                    <ul>
                        <li>Разнообразная система управления. Можно выбрать не только на любой вкус, но и подобрать под индивидуальную особенность оконного проёма.</li>
                        <li>Уникальная технология пропитки полотен не позволяет выгорать предметам в комнате: мебели, обоям, картинам, декоративным элементам.</li>
                        <li>Используют любой вид ткани, начиная с шёлка и, заканчивая производными из полимеров. В этом случае появляется возможность сделать шторы по индивидуальному заказу.</li>
                        <li>Простота в эксплуатации позволяет размещать рулонные шторы не только на окнах, но и в дверных проёмах, на лоджиях, балконах или в оранжереях.</li>
                        <li>Возможность фиксировать полотно на любой высоте, к примеру, закрыть солнце, а полоску света оставит для цветов.</li>
                        <li>Гармоничное сочетание с традиционными занавесками: тюлем, гардинами и шторами.</li>
                        <li>Большой ассортимент размеров и цветов</li>
                        <li>Не требует особенных усилий в уходе, достаточно протирать их влажной тряпкой во время уборки.</li>
                    </ul>
                </div>
            </div>    
        </div>

        <!-- блок отображения материалов -->
        <div class="block materials">
            <h2 class="discription-subtitle materials">Материалы для рулонных штор</h2>
            <div class="loader">
                <div class="spinner">
                    <span class="ball-1"></span>
                    <span class="ball-2"></span>
                    <span class="ball-3"></span>
                    <span class="ball-4"></span>
                    <span class="ball-5"></span>
                    <span class="ball-6"></span>
                    <span class="ball-7"></span>
                    <span class="ball-8"></span>
                  </div>
            </div>
            <div class="materials-wrapper">   
            </div>
            <a href="/materialPages/roll.html" class="more">Показать больше</a>
        </div>

        <!-- блок "Как заказать жалюзи?" -->
        <div class="block order">
            <div class="order-wrapper">
                <h2 class="discription-subtitle">Как заказать жалюзи?</h2>
                <div class="order-step-wrapper">
                    <div class="step-item">
                        <div class="step-img">
                            <img src="/img/order/order_1.jpg" alt="">
                            <div class="step-num">
                                <span>01</span>
                            </div>
                        </div>
                        <p class="discription-paragraph">
                            Выбрать систему и материал на сайте
                        </p>
                    </div>
                    <div class="step-item">
                        <div class="step-img">
                            <img src="/img/order/order_2.jpg" alt="">
                            <div class="step-num">
                                <span>02</span>
                            </div>
                        </div>
                        <p class="discription-paragraph">
                            Оформить заявку на бесплатный замер
                        </p>
                    </div>
                    <div class="step-item">
                        <div class="step-img">
                            <img src="/img/order/order_3.jfif" alt="">
                            <div class="step-num">
                                <span>03</span>
                            </div>
                        </div>
                        <p class="discription-paragraph">
                            Определиться с материалом и фурнитурой
                        </p>
                    </div>
                    <div class="step-item">
                        <div class="step-img">
                            <img src="/img/order/order_4.jpg" alt="">
                            <div class="step-num">
                                <span>04</span>
                            </div>
                        </div>
                        <p class="discription-paragraph">
                            Получить детальный расчет и подписать договор
                        </p>
                    </div>
                    <div class="step-item">
                        <div class="step-img">
                            <img src="/img/order/order_5.jpg" alt="">
                            <div class="step-num">
                                <span>05</span>
                            </div>
                        </div>
                        <p class="discription-paragraph">
                            Согласовать удобную дату монтажа
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- проблема выбора -->
    <div class="problem">
        <div class="problem-img">
            <img src="/img/typeImg/522205019_w640_h640_shtory-zebra-klassicheskie.jpg" alt="">
        </div>
        <div class="problem-container">
            <div class="container-title">
                Затрудняетесь с выбором?
            </div>
            <div class="container-subtitle">
                Мы можем подобрать вам лучшее решение
            </div>
            <div class="container-links">
                <div class="links-item">
                    <a href="/typePages/horizontPage/horizontPage.html" class="link-name">Горизонтальные жалюзи</a><a href="/materialPages/horizont.html" class="link-material">Все материалы</a>
                </div>
                <div class="links-item">
                    <a href="/typePages/verticalPage/verticalPage.html" class="link-name">Вертикальные жалюзи</a><a href="/materialPages/vertical.html" class="link-material">Все материалы</a>
                </div>
                <div class="links-item">
                    <a href="/typePages/rollPage/rollPage.html" class="link-name">Рулонные шторы</a><a href="/materialPages/roll.html" class="link-material">Все материалы</a>
                </div>
                <div class="links-item">
                    <a href="/typePages/zebraPage/zebraPage.html" class="link-name"> Рулонные шторы "Зебра" </a><a href="/materialPages/zebra.html" class="link-material">Все материалы</a>
                </div>
            </div>
        </div>
    </div>

    <!-- подвал -->
    <div class="footer">
        <div class="footer-text">
            <h2>Наши контакты</h2>
            <div class="social">
                <div class="address">Ул. Малахова 83<span class="phone">т. 69-88-96</span></div>
                <div class="address">Пр-т Космонавтов 8/2<span class="phone">т. 53-38-30</span></div>
                <div class="address">Email:<span class="phone">jaluzi22@mail.ru</span></div>
                <div class="address">Instagram:<span class="phone">jaluzicentr</span></div>
            </div>

        </div>
        <div class="footer-map">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A8175d794635acb30806698bb23e5312ce6d6bea577924588155d58260f0f2c28&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
        </div>
    </div>

    <!-- карта товара -->
    <div class="info-block">
        <div class="info-material">
          <div class="material-images">
              <img src="" class="main-img " alt="">
              <img src="" class="mini-img" alt="">
          </div>
          <div class="material-information">
              <div class="material-title">
                  <div class="title-header">
                      <h2></h2>
                  </div>
                  <div class="title-article">
                      <span>артикль: </span><span class="article-num"></span>
                  </div>
  
              </div>
              <div class="information-content">
                  <div class="content-calculation">
                      <p>Рассчитать по моим размерам</p>
                      <div class="input-wrapper">
                        <input type="number" class="info-calc width" placeholder="ширина, см" name="calc-width" id="">
                        <input type="number" class="info-calc height" placeholder="высота, см" name="calc-height" id="">
                      </div>
                    </div>
                  <div class="content-parameters">
                      <div class="parametr color">
                          <span>Цвет</span><span class="parametr-value color-value"></span>
                      </div>
                      <div class="parametr opacity">
                          <span>Прозрачность</span><span class="parametr-value opacity-value"></span>
                      </div>
                      <div class="parametr structure">
                          <span>Состав</span><span class="parametr-value structure-value"></span>
                      </div>
                      <div class="parametr country">
                          <span>Страна</span><span class="parametr-value country-value"></span>
                      </div>
                  </div>
  
              </div>
              <div class="information-basket">
                  <div class="basket-btn">
                      <div class="user-btn user-btn-basket">в корзину</div>
                  </div>
                  <div class="basket-price">
                      <p>Цена:<span class="basket-price-num"></span></p>
                      <div class="help-tip">
                        <p>Цена указана без учета комплектующих. Подробную информацию вы можете уточнить у продавца.
                        </p>
                    </div>
                    </div>
  
              </div>
          </div>
          <div class="block-close">
              <i class="fas fa-times"></i>
            </div>
        </div>  
    </div>
    <div class="counter-block">
        <!--LiveInternet counter--><a href="https://www.liveinternet.ru/click"
target="_blank"><img id="licnt1EE4" width="88" height="31" style="border:0"
title="LiveInternet: показано число просмотров и посетителей за 24 часа"
src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
alt=""/></a><script>(function(d,s){d.getElementById("licnt1EE4").src=
"https://counter.yadro.ru/hit?t52.8;r"+escape(d.referrer)+
((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
";h"+escape(d.title.substring(0,150))+";"+Math.random()})
(document,screen)</script><!--/LiveInternet-->
        <!-- HotLog -->
<span id="hotlog_counter"></span>
<span id="hotlog_dyn"></span>
<script type="text/javascript"> var hot_s = document.createElement('script');
hot_s.type = 'text/javascript'; hot_s.async = true;
hot_s.src = 'http://js.hotlog.ru/dcounter/2599790.js';
hot_d = document.getElementById('hotlog_dyn');
hot_d.appendChild(hot_s);
</script>
<noscript>
<a href="http://click.hotlog.ru/?2599790" target="_blank">
<img src="http://hit27.hotlog.ru/cgi-bin/hotlog/count?s=2599790&im=202" border="0"
title="HotLog" alt="HotLog"></a>
</noscript>
<!--/HotLog --> 
</div>
    <script src="/scripts/modalScript.js"></script>
<!--    <script src="/scripts/headerScript.js"></script>-->
    <script src="/typePages/scripts/totalScript.js"></script>
    <!-- <script src="script.js"></script> -->
</body>
</html>