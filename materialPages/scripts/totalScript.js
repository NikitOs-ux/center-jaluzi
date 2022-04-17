let jsonResponse ='';

let basketArray;
localStorage.getItem('basket') !== null ? basketArray = JSON.parse(localStorage.getItem('basket')): basketArray =[];

let gridBlock = document.querySelector('.materials-wrapper');
let infoBlock = document.querySelector('.info-block');
let innerInfoBlock = document.querySelector('.info-material');
let link = document.querySelector('#resourse');
let path = document.querySelector('#path');
let callMe = document.querySelector('.call_me');
let inputCard = document.querySelectorAll('.info-calc');
let inputCardWidth = document.querySelector('.info-calc.width');
let inputCardHeight = document.querySelector('.info-calc.height');
let price = document.querySelector('.basket-price-num');
let btnBasket = document.querySelector('.user-btn-basket');
link = link.dataset.resources;
path = path.dataset.path;

function createBasket(data){
    basketArray.push(data);
    localStorage.setItem('basket', JSON.stringify(basketArray));
}


// добавить в корзину
btnBasket.addEventListener('click', ()=>{
    let selectProduct = infoBlock.dataset.selectElement;
    let objProducts = JSON.parse(localStorage.getItem('responceServer'));
    for(let i=0; i<objProducts.length; i++){
        if(objProducts[i].id == selectProduct){
            objProducts[i].srcMainImg = `/img/${path}/${objProducts[i].srcMainImg}`;
            
            inputCardWidth.value === ''?objProducts[i].userWidth=100:objProducts[i].userWidth=inputCardWidth.value;

            inputCardHeight.value === ''?objProducts[i].userHeigth=100:objProducts[i].userHeigth=inputCardHeight.value;

            objProducts[i].sum = price.innerHTML;
            createBasket(objProducts[i]);
        }
    }
    infoBlock.classList.remove('active');
})

let pagginationWrapper = document.querySelector('.paggination-wrapper');

let countItems = 12;

let selectedBlinds ='';  // переменная в которой хранится значение стоимости 1м х 1м (из БД )

// события для рассчета стоимости
inputCardHeight.addEventListener('input', (element)=>{

    price.innerHTML = (((element.target.value*0.01) * (inputCardWidth.value*0.01)) * selectedBlinds).toFixed(0) + '&#x20bd;';

})

// события для рассчета стоимости
inputCardWidth.addEventListener('input', (element)=>{
    price.innerHTML = (((element.target.value*0.01) * (inputCardHeight.value*0.01)) * selectedBlinds).toFixed(0) + '&#x20bd;';
})

// функция очистки полей для ввода
function cleanInput(){
    inputCard.forEach(element => {
        element.value = '';
    });
}

// закрыть блок с информацией 
document.querySelector('.block-close').addEventListener('click',(event)=>{
    callMe.style.display='flex';
    infoBlock.classList.remove('active');
    cleanInput();
})

// получить полную информация об объекте
function getFullInfo(numEl){
    let data = JSON.parse(localStorage.getItem('responceServer'));
    let findElement = '';
    data.forEach(element=>{
        if(element.id === numEl){
            findElement = element;
        }
    })
    return findElement; 
}

// отрисовка карты с выбранными товарами
function renderMaterialCard(data){
    jsonResponse = data;
    // console.log(data, link, path);
    callMe.style.display='none';
    cleanInput();
    infoBlock.dataset.selectElement = data.id;
    let mainImg = document.querySelector('.main-img');
    let miniImg = document.querySelector('.mini-img');
    mainImg.setAttribute('src', `/img/${path}/${data.srcMainImg}`);
    miniImg.setAttribute('src', `/img/${path}/mini/${data.srcSmallImg}`);
    document.querySelector('.title-header h2').innerHTML = data.name;
    document.querySelector('.article-num').innerHTML = data.article;
    document.querySelector('.color-value').innerHTML = data.color;
    document.querySelector('.opacity-value').innerHTML = data.opacity;
    document.querySelector('.structure-value').innerHTML = data.structure;
    document.querySelector('.country-value').innerHTML = data.country;
    document.querySelector('.basket-price-num').innerHTML = data.price + '&#x20bd;';
    selectedBlinds = +data.price;
}

// переключение страниц
function itemsPage(page){
    window.scrollBy(0,-window.innerHeight);
    document.querySelector('.loader').style.display = 'none';
    gridBlock.innerHTML='';
    let listItems = JSON.parse(localStorage.getItem("responceServer"));
    let minValue, maxValue;
    if(page===1){
        minValue =0;
        maxValue = countItems;
    }
    else{
        minValue = (page-1) * countItems;
        maxValue = page * countItems;
    }
    if(countItems > listItems.length){
        maxValue = listItems.length;
    }
    
    for(minValue; minValue < maxValue; minValue++){
            addItems(listItems[minValue]);
    } 
}

// количество страниц
function countPage(){
    let listItems = JSON.parse(localStorage.getItem("responceServer"));
    listItems = Math.ceil(listItems.length / countItems);
    for(let i =1; i<=listItems; i++){
        let pagBtn = document.createElement('div');
        pagBtn.classList.add('paggination-button');
        pagBtn.dataset.value = i;
        pagBtn.innerText = i;
        pagginationWrapper.appendChild(pagBtn);
        pagBtn.addEventListener('click', event=>{
            let allPag = document.querySelectorAll('.paggination-button');
            allPag.forEach(element => {
                element.classList.remove('paggination-button-active');
            });
            event.target.classList.add('paggination-button-active');
            itemsPage(event.target.dataset.value);
        })
    }
}


// отрисовка таблицы с окнами
function addItems(element){
        let el = document.createElement('div')
        el.setAttribute('class','material-item');
        el.setAttribute('data-roll', element.id);

        // создание карты товара в списке
        el.insertAdjacentHTML('afterbegin',`
        <div class="item-viewBlock">
            <div class="item-images">
                <img src="/img/${path}/${element.srcMainImg}" alt="" class="mainImg">
                <img src="/img/${path}/mini/${element.srcSmallImg}" alt="" class="miniImg">
            </div>
        <div class="item-text">
            <span class="text-title">${element.name}</span>
            <span class="text-price">от ${element.price} &#8381;</span>
            <span class="text-color"></span>
            <span class="text-result">рассчитать</span>
        </div>
        </div>
            <div class="item-hiddenBlock"></div>
        `);
        gridBlock.appendChild(el) //добавляем элемент в блок со списком товаров
        el.addEventListener('click', function(){
            let dataElement = getFullInfo(this.getAttribute('data-roll'))
            renderMaterialCard(dataElement) //вызов функции отрисовки товара
            infoBlock.classList.add('active') // показ карты товара
        })
}
    window.onload = ()=>{                                               //onload - событие которое возникает сразу после загрузки страницы
        const xhr = new XMLHttpRequest();                               // инициализация нового запроса
        xhr.open('GET', link);                                          // создание условий запроса <'метод запроса', 'адрес скрипта, получающий клиентов из базы'>
        xhr.send()                                                      // отправка запроса на сервер
        xhr.onload= ()=>{                                               // событие, когда приходит ответ от сервера 
            var responceData = xhr.responseText;                        // обработка ответа от сервера
            localStorage.setItem("responceServer", responceData);       //заносим ответ от сервера в локальное хранилице с именем "responceServer"
            responceData = JSON.parse(responceData);                    // преобразовываем текстовые данные от сервера в формат JSON
            countPage();
            itemsPage(1);
        }
    }


  