let jsonResponse ='';
let gridBlock = document.querySelector('.materials-wrapper');
let infoBlock = document.querySelector('.info-block');
let innerInfoBlock = document.querySelector('.info-material')
let basketBtn = document.querySelector('.user-btn-basket');
let callMe = document.querySelector('.call_me');
let link = document.querySelector('#resourse');
let path = document.querySelector('#path');
let inputCard = document.querySelectorAll('.info-calc');
let inputCardWidth = document.querySelector('.info-calc.width');
let inputCardHeight = document.querySelector('.info-calc.height');
let price = document.querySelector('.basket-price-num');
link = link.dataset.resources;
path = path.dataset.path;
let selectedBlinds ='';

// функция очистки полей для ввода
function cleanInput(){
    inputCard.forEach(element => {
        element.value = '';
    });
}

// события для рассчета стоимости
inputCardHeight.addEventListener('change', (element)=>{
    price.innerHTML = (((element.target.value*0.01) * (inputCardWidth.value*0.01)) * selectedBlinds).toFixed(2) + '&#x20bd;';
})

inputCardWidth.addEventListener('change', (element)=>{
    price.innerHTML = (((element.target.value*0.01) * (inputCardHeight.value*0.01)) * selectedBlinds).toFixed(2) + '&#x20bd;';
})


document.querySelector('.block-close').addEventListener('click',(event)=>{
    infoBlock.classList.remove('active');
    callMe.style.display = 'flex';
    cleanInput();
})

// получение информации о выбранном товаре
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
// TODO: попробовать реализовать в отдельном скрипте
function renderMaterialCard(data){
    callMe.style.display = 'none';
    cleanInput();
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

function addItems(response){
    document.querySelector('.loader').style.display = 'none';
    for(let i=0; i<8; i++){
        let el = document.createElement('div')
        el.setAttribute('class','material-item');
        el.setAttribute('data-roll', response[i].id);

         // создание карты товара в списке
         el.insertAdjacentHTML('afterbegin',`
         <div class="item-viewBlock">
             <div class="item-images">
                 <img src="/img/${path}/${response[i].srcMainImg}" alt="" class="mainImg">
                 <img src="/img/${path}/mini/${response[i].srcSmallImg}" alt="" class="miniImg">
             </div>
         <div class="item-text">
             <span class="text-title">${response[i].name}</span>
             <span class="text-price">от ${response[i].price} &#8381;</span>
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
    if(response.length > 8){
        document.querySelector('.more').style.display='block';
    }
}
    window.onload = ()=>{                                               //onload - событие которое возникает сразу после загрузки страницы
        const xhr = new XMLHttpRequest();                               // инициализация нового запроса
        xhr.open('GET', link);                // создание условий запроса <'метод запроса', 'адрес скрипта, получающий клиентов из базы'>
        xhr.send()                                                      // отправка запроса на сервер
        xhr.onload= ()=>{                                               // событие, когда приходит ответ от сервера 
            var responceData = xhr.responseText;                        // обработка ответа от сервера
            localStorage.setItem("responceServer", responceData);       //заносим ответ от сервера в локальное хранилице с именем "responceServer"
            responceData = JSON.parse(responceData);                    // преобразовываем текстовые данные от сервера в формат JSON
            addItems(responceData)                                   // вызываем функцию для рендера таблицы
        }
    }


  