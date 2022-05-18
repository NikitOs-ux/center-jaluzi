<script src="https://kit.fontawesome.com/95bd7eb798.js" crossorigin="anonymous"></script>
 <!-- header -->
 <div class="header">
        <div class="header-logo">
            <a href="/index.php" class="header-title"><h2><span>Центр</span>Жалюзи</h2></a>
        </div>
        <div class="header-menu">
           <ul>
                <li><a href="/index.php" class="menu-item">Главная</a></li>
                <li><a href="#" class="menu-item menu-item-catalog">Каталог</a>
                    <ul class="catalog-submenu">
                        <li><a href="/typePages/horizontPage/horizontPage.php">Горизонтальные</a></li>
                        <li><a href="/typePages/verticalPage/verticalPage.php">Вертикальные</a></li>
                        <li><a href="/typePages/rollPage/rollPage.php">Рулонные</a></li>
                        <li><a href="/typePages/zebraPage/zebraPage.php">Рулонные "Зебра"</a></li>
                    </ul>
                </li>
                <li><a href="/servicePage/index.php" class="menu-item">Оплата и услуги</a></li>
                <li><a href="/galleryPage/index.php" class="menu-item">Наши работы</a></li>
                <li><a href="/aboutUs/index.php" class="menu-item">о нас</a></li>
           </ul>
        </div>
        <div class="header-user-panel">
            <div class="basket-btn">
                <a href="/userBasket/index.php" class="user-btn basket"><i class="fa-solid fa-basket-shopping"></i>Корзина</a>
                <div class="product-counter">0</div>
            </div>
        </div>
        
    </div>
    <div class="header-hide">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>

 <!-- корзина всплывашка -->

 <div class="basket-pop">
     <div class="pop-wrapper">
         <div class="list-active">
             <div class="pop-header">
                 <div class="header-wrapper">
                     <span>Товары в корзине</span>
                     <a href="#" class="clear-list">Очистить список</a>
                 </div>
             </div>
             <div class="pop-list"></div>
             <div class="pop-total">
                 <div class="total-wrapper">
                     <div class="total-result">
                         <span>Итого:</span>
                         <span class="total-price"></span>
                     </div>
                     <a class="total-btnPOP" href="/userBasket/index.html">В корзину</a>
                 </div>
             </div>
         </div>
         <div class="empty-basket">
             <span>Корзина пуста</span>
         </div>
     </div>
 </div>