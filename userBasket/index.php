<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/95bd7eb798.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
    <link rel="stylesheet" href="styles/basketStyle.css">
    <link rel="stylesheet" href="/styles/headerStyle.css">
    <link rel="stylesheet" href="/styles/orderStyle.css">
    <link rel="stylesheet" href="/styles/problemStyle.css">
    <link rel="stylesheet" href="/styles/footerStyle.css">
    <title>Корзина</title>
</head>
<body>
    <div class="header">
        <div class="header-logo">
            <a href="/index.html" class="header-title"><h2><span>Центр</span>Жалюзи</h2></a>
        </div>
        <div class="header-menu">
           <ul>
                <li><a href="/index.html" class="menu-item">Главная</a></li>
                <li><a href="#" class="menu-item menu-item-catalog">Каталог</a>
                    <ul class="catalog-submenu">
                        <li><a href="/typePages/horizontPage/horizontPage.html">Горизонтальные</a></li>
                        <li><a href="/typePages/verticalPage/verticalPage.html">Вертикальные</a></li>
                        <li><a href="/typePages/rollPage/rollPage.html">Рулонные</a></li>
                        <li><a href="/typePages/zebraPage/zebraPage.html">Рулонные "Зебра"</a></li>
                    </ul>
                </li>
                <li><a href="/servicePage/index.html" class="menu-item">Оплата и услуги</a></li>
                <li><a href="/galleryPage/index.html" class="menu-item">Наши работы</a></li>
                <li><a href="/aboutUs/index.html" class="menu-item">О нас</a></li>
           </ul>
        </div>
        <!-- <div class="header-user-panel">
            <a href="pageMasters/pageMasters.html" class="user-btn measurer"><i class="fas fa-ruler"></i>Личный кабинет</a>
        </div> -->
    </div>

    <!-- кнопка скрыть меню -->
    <div class="header-hide">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="basket-wrapper">
            <div class="basket-content">    
                <!-- <div class="item">
                    <div class="item-wrapper">
                        <div class="product-img">
                            <img src="/img/horizontMaterials/511308e319e7b808b78d6aed01141c31.jpg" alt="">
                        </div>
                        <div class="product-name">
                            <div class="name-title">Какая-то там Аврора хз откуда и зачем</div>
                            <div class="name-size">
                                <span class="size-item size-width">200</span>
                                x
                                <span class="size-item size-height">300</span>
                                см  
                            </div>
                        </div>
                        <div class="product-count">
                            <div class="count-wrapper">
                                <button class="product-btn product-btn__minus"><i class="fa-solid fa-minus"></i></button>
                                <input class="product-input" placeholder="1" type="number" min="1" max="10" step="1">
                                <button class="product-btn product-btn__plus"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="product-sum">
                            <span class="sum">1 900 450</span><span class="currency">&#8381;</span>
                        </div>
                        <div class="product-delete">
                            <i class="fa-solid fa-trash-can"></i>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="basket-aside">
                <div class="aside-content">
                    <div class="content-wrapper">
                        <div class="num-products basket-text">В корзине <span class="prod-num">0</span> <span class="product basket-text">товара</span></div>
                        <div class="total-amount basket-text">Общая сумма: <span class="sum-num">0</span> <span class="currency">&#8381;</span></div>
                    </div>
                </div>
                <div class="aside-buttons">
                    <!-- <button class="aside-btn aside-btn-clear">Очистить корзину</button> -->
                    <button class="aside-btn aside-btn-buy">Оформить заказ</button>
                </div>
            </div>
        </div>
        <div class="basket-wrapper-empty">
            <div class="inner-wrapper">
                <div class="empty-img">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
                <div class="empty-text-wrapper">
                    <span class="empty-text">Ваша корзина пуста</span>
                    <a href="/index.html" class="user-btn">На главную</a>
                </div> 
            </div>
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
    <script src="script.js"></script>
    
</body>
</html>