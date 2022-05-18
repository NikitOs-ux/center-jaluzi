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
    <link rel="stylesheet" href="/styles/modalAndCall.css">
    <link rel="stylesheet" href="/styles/headerStyle.css">
    <link rel="stylesheet" href="/styles/orderStyle.css">
    <link rel="stylesheet" href="/styles/footerStyle.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="/styles/loader/loader.css">
    <link rel="stylesheet" href="/styles/couner/counter.css">
    <link rel="stylesheet" href="/basketPOP/popUp.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Наши работы</title>
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

    <!-- модальное окно фотографии -->
    <div class="modal-photo">
        <div class="close">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <div class="content"></div>
    </div>

    <?
    require $_SERVER['DOCUMENT_ROOT'].'/modules/application_modal.php';
    require $_SERVER['DOCUMENT_ROOT'].'/header.php';
    ?>

    <!-- тело галлереи -->
    <div class="gallery">
        <h2 class="discription-subtitle" >Наши работы</h2>
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
        <div class="gallery-content"></div>
        <div class="gallery-pagenation">
            <div class="paggination-wrapper"></div>
        </div>
    </div>

     <!-- заказ штор -->
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

    <!-- подвал -->
    <?require $_SERVER['DOCUMENT_ROOT'].'/footer.php'?>
    
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
<script src="/scripts/modalScript.js" defer></script>
<script src="/scripts/headerScript.js" defer></script>
<script src="scripts/script.js" defer></script>
</body>
</html>