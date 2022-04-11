let galleyContent = document.querySelector('.gallery-content');
let photoContent = document.querySelector('.modal-photo .content')
let modalPhoto = document.querySelector('.modal-photo');
let pagginationWrapper = document.querySelector('.paggination-wrapper');
let loader = document.querySelector('.loader');

// закрыть модальное окно
modalPhoto.addEventListener('click',()=>{
    modalPhoto.style.display = 'none';
})

// открыть изображение в модальном окне
function openImg(event){
    photoContent.innerHTML = '';
    let img = document.createElement('img');
    img.setAttribute('src', event.target.src);
    photoContent.appendChild(img);
    modalPhoto.style.display = 'flex';

}

// вывод изображений на страницу
function renderGallery(arrayData){
    loader.style.display = 'none';
    galleyContent.innerHTML ='';
    arrayData.forEach(element => {
        let img = document.createElement('img');
        img.setAttribute('src', element.fullSrc);
        img.addEventListener('click', function(event){
            openImg(event);
        })
        galleyContent.appendChild(img);
        window.scrollBy(0,-window.innerHeight); 
    });
}

//  генирация пагинации на странице
function generatePaggination(count){
    pagginationWrapper.innerHTML ='';
    let countPage = Math.ceil(count/20);

    for(let i=0; i<countPage; i++){
        let step = i*20+1;
        let pagBtn = document.createElement('div');
        pagBtn.classList.add('paggination-button');
        pagBtn.dataset.min = step;
        pagBtn.dataset.max = step+19;
        pagBtn.innerText = i+1;
        pagginationWrapper.appendChild(pagBtn);
        pagBtn.addEventListener('click', (event)=>{
            loader.style.display = 'flex';
            let allPag = document.querySelectorAll('.paggination-button');
            allPag.forEach(element => {
                element.classList.remove('paggination-button-active');
            });
            event.target.classList.add('paggination-button-active');
            responceServer(event.target.dataset.min, event.target.dataset.max);
        }) 

    }
}

// вызов скрипта получающий количество изображений в базе
function getCount(){
    let xhr = new XMLHttpRequest;
    xhr.open('GET', `/serverScript/countPhoto.php`);
    xhr.send();
    xhr.onload = function(){
        let countResp = +xhr.response;
        generatePaggination(countResp);
    }
}

// запрос к серверу на получение фотографий
function responceServer(min=1, max=20){
    let xhr = new XMLHttpRequest;
    let responce = '';
    xhr.open('GET', `/serverScript/getPhoto.php?min=${min}&max=${max}`);
    xhr.send();
    xhr.onload = function(){
        responce = JSON.parse(xhr.response);
        if(responce.length ===0){
            alert();
            return;
        }
        renderGallery(responce);
        if(min===1 && max===20){
            getCount();
        }
    }
}

window.onload = function(){
    responceServer();
    // console.log(JSON.parse(localStorage.getItem('userBasket')));
}
