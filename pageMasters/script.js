const thead = document.querySelector('thead');
const tbody = document.querySelector('tbody');
const search = document.querySelector('.search');
const modal = document.querySelector('.modal')
const modal_close = document.querySelector('.modal_close')
const modal_content = document.querySelector('.modal_content')


let tableRow = document.createElement('tr');                        //создание строки
thead.appendChild(tableRow)                                         //добавление строки в таблицу

// const arrayHeader = ['id', 'Имя', 'Фамилия', 'Адрес',               // массив текста заголовка
// 'Телефон', 'Тип штор','Желаемая дата','Желаемое время',     
// 'Комментарий']                                                       

const arrayHeader = ['id', 'Имя', 'Фамилия',             // массив текста заголовка
'Телефон']                                                       


let row = document.querySelector('tr')                              // получить 1 строку для отображения заголовка

arrayHeader.forEach(element => {                                    // массив создания ячеек с текстом заголовка
    let th = document.createElement('th');
    th.innerHTML = element;
    row.appendChild(th);
    
});



function renderTable(data){
    tbody.innerHTML ='';                                         // функция создания контентных строк в таблице
    let count = 1;                                                  // счетчик для id        
    data.forEach(element => {                           
        let rowTD = document.createElement('tr');               //создание строки
        rowTD.id = 'item_' + count;                             //добавить аттрибут id со значение count  
        rowTD.addEventListener('click', clickRow, true)         //добавить событие click для строки и вызвать функцию clickRow, которая открывает модальное окно
        tbody.appendChild(rowTD);                               // добавить строку в таблицу
        let lastRow = document.querySelectorAll('tr');          // получить все строки
        for(let key in element){                                // цикл получения ключей объекта element
            if(key =='id' || key =='name' || key =='family' || key =='telephone'){           // проверка на занчение ключей
                let td = document.createElement('td');          // создать ячейку
                if(element[key] === "NULL"){                    //проверка значения 
                    element[key] = 'нет данных';                //если значение NULL то заменяем его на NULL
                }
                (element['status']==0)?rowTD.style.backgroundColor = "#ff2222aa":rowTD.style.backgroundColor = "#22ff22aa";
                td.innerHTML = element[key];                    // добавляем текст в созданную ячейку
                lastRow[lastRow.length-1].appendChild(td)       // добавлям ячейку в строку таблицы
            }
        }
        count++;                                                // увеличиваем счетчик
    });
}

window.onload = ()=>{                                               //onload - событие которое возникает сразу после загрузки страницы
    const xhr = new XMLHttpRequest();                               // инициализация нового запроса
    xhr.open('GET', '/serverScript/getClients.php');                // создание условий запроса <'метод запроса', 'адрес скрипта, получающий клиентов из базы'>
    xhr.send()                                                      // отправка запроса на сервер
    xhr.onload= ()=>{                                               // событие, когда приходит ответ от сервера 
        var responceData = xhr.responseText;                        // обработка ответа от сервера
        localStorage.setItem("responceServer", responceData);       //заносим ответ от сервера в локальное хранилице с именем "responceServer"
        responceData = JSON.parse(responceData);                    // преобразовываем текстовые данные от сервера в формат JSON
        renderTable(responceData)                                   // вызываем функцию для рендера таблицы
    }
}
function clickRow(){                                                // функция обработки события click на строке
    modal.classList.add('active');
    modal_content.innerHTML = '';
    var el = this.id;                                               //получаем id элемента
    var numEl = parseInt(el.match(/\d+/));                          //отсеиваем текст и получаем только число. Пример: "item_11" => 11
    let items = JSON.parse(localStorage.getItem('responceServer')); // получаем данные из локального хранилища
    let modalData = items[numEl-1];                                 //получаем объект из массива данных
    for (const key in modalData) {
        if (Object.hasOwnProperty.call(modalData, key)) {
            const element = modalData[key];
            let div = document.createElement('div');
            div.innerHTML = element;
            modal_content.appendChild(div);

        }
    }
}
search.addEventListener('input',(el)=>{
    let findText = el.target.value;
    let responceData = localStorage.getItem('responceServer')
    responceData = JSON.parse(responceData)
    
    let findArray = responceData.filter(item =>item.name.includes(findText));
    // console.log(findArray);
    renderTable(findArray)
})
modal_close.onclick = ()=>{
    modal.classList.remove('active')
}


