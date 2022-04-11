let basketWrapper = document.querySelector('.basket-wrapper');    
let emptyBasket = document.querySelector('.basket-wrapper-empty');    
let basketContent = document.querySelector('.basket-content');
let fullSum = document.querySelector('.sum-num');
let prodNun = document.querySelector('.prod-num');
let prodText = document.querySelector('.product.basket-text');
let btnMinus = document.querySelector('.product-btn__minus');

//TODO: доделать фукции добавления и уменьшения количества однотипных товаров
function initPlus(){
    let btnPlus = document.querySelectorAll('.product-btn__plus');
    btnPlus.forEach(element => {
        element.addEventListener('click', (event)=>{
            // body func
        })
    });
    
}

// функция удаления объекта из массива
function changeData(dataNum){
    let data = JSON.parse(localStorage.getItem('basket'))
    data.splice(dataNum, 1);
    localStorage.setItem('basket', JSON.stringify(data))
    initBasket();
}

// установка события на кнопку удаления элемента
function initDel(){
    let deleteItem = document.querySelectorAll('.product-delete')
    deleteItem.forEach(element=>{
    element.addEventListener('click', ()=>{
        changeData(element.dataset.item);
    })
})
}

// подсчет суммы товаров в массиве корзины
function totalSum(data){
    let total=0;
    if(data.length===1){
        prodText.innerHTML = "товар";
    }

    prodNun.innerHTML = data.length;
    data.forEach(element=>{
        total+= +element.sum.replace(/[^0-9]/g," ");
    })
    fullSum.innerHTML= total;
}
 
// убрать валюту
function clearCurrency(element){
    return element.replace(/[^0-9]/g," ");
}

// создание карты товара
//TODO заменить innerHTML на insertAdjacent
function createBasketItem(data){
    emptyBasket.classList.remove('active');
    basketContent.innerHTML = '';
    let numItem=0;
    data.forEach(element => {
        basketContent.innerHTML += `<div class="item">
        <div class="item-wrapper">
            <div class="product-img">
                <img src="${element.srcMainImg}" alt="">
            </div>
            <div class="product-name">
                <div class="name-title">${element.name}</div>
                <div class="name-size">
                    <span class="size-item size-width">${element.userWidth}</span>
                    x
                    <span class="size-item size-height">${element.userHeigth}</span>
                    см  
                </div>
            </div>
            <div class="product-count">
                <div class="count-wrapper">
                    <button class="product-btn product-btn__minus"><i class="fa-solid fa-minus"></i></button>
                    <input class="product-input" placeholder="1" type="number" min="1" max="10" step="1" value="1">
                    <button class="product-btn product-btn__plus"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
            <div class="product-sum">
                <span class="sum">${clearCurrency(element.sum)}</span><span class="currency">&#8381;</span>
            </div>
            <div class="product-delete" data-item ="${numItem}">
                <i class="fa-solid fa-trash-can"></i>
            </div>
        </div>
    </div>`;
    numItem++;
    });
    initPlus();
}

// функция в случае если корзина пуста
function initEmptyBasket(){
    basketWrapper.style.display = 'none';
    emptyBasket.classList.add('active');
}

// отрисовка содержимого страницы корзины
function initBasket(){
    let data = JSON.parse(localStorage.getItem('basket'));
    if(data.length===0){
        initEmptyBasket();
        return;
    }
    createBasketItem(data);
    totalSum(data);
    initDel();
}

window.onload = function(){
   initBasket();
}