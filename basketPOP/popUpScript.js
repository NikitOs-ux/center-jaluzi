let listItems = document.querySelector('.pop-list');
let basketPop = document.querySelector('.basket-pop');
let basketWrapper = document.querySelector('.pop-wrapper');
let totalResult = document.querySelector('.total-result');
let totalPrice = document.querySelector('.total-price');
let emptyBasket = document.querySelector('.empty-basket');
let clearList =  document.querySelector('.clear-list');

// basketPop.addEventListener('click', (event)=>{
//     // if(event.target.classList)
//     console.log(event.target.classList);
// })


clearList.addEventListener('click', ()=>{
    localStorage.removeItem('basket');
    renderBasketList();
})

function deleteItem(id){
    let basketList = JSON.parse(localStorage.getItem('basket'));
    basketList.splice(id, 1);
    localStorage.setItem('basket', JSON.stringify(basketList));
    renderBasketList();
}

function getDeleteBtn(){
    let deleteBtns = document.querySelectorAll('.item-delete');
    // console.log(deleteBtns);
    deleteBtns.forEach(element=>{
            element.addEventListener('click', ()=>{
                    deleteItem(element.dataset.id)
                })
            })
}

function renderBasketList(data = JSON.parse(localStorage.getItem('basket'))){
    listItems.innerHTML = '';
    let result = 0;
    let countItem =0;

    function totalResult(data){
        return +data.sum.replace(/[^0-9]/g," ");
    }

    // если корзина пуста
    if(data === null || data.length===0){
        basketWrapper.innerHTML = '';
        let div = document.createElement('div');
        div.classList.add('empty-basket');
        let span = document.createElement('span');
        span.innerText = 'Корзина пуста';
        div.appendChild(span)
        basketWrapper.appendChild(div);
    }
    else{
        data.forEach(element => {
            result += totalResult(element);
            let struct = `<div class="basket-item"  data-id="${countItem}">
            <div class="item-wrapper">
                <div class="item-img">
                    <img src="${element.srcMainImg}" alt="">
                </div>
                <div class="item-text">
                    <div class="text-title">${element.name}</div>
                    <div class="text-size">
                        <span class="size-width">${element.userWidth}</span>x<span class="size-heigth">${element.userHeigth}</span>см
                    </div>
                </div>
                <div class="item-price">${element.sum}</div>
                <div class="item-delete" data-id="${countItem}">
                    <i class="fa-solid fa-trash-can"></i>
                </div>
            </div>
        </div> `;
         listItems.insertAdjacentHTML('beforeend', struct);
         countItem++;
        });
        getDeleteBtn();
        totalPrice.innerHTML = result.toLocaleString() + '&#8381;';
    }
}


window.onload = function(){
    renderBasketList()
}