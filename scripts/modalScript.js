const close = document.querySelector('.modal-close')
const modalWindow = document.querySelector('.modal-window')
const modal = document.querySelector('.modal')
const body = document.body;
const call = document.querySelector('.call_me');
const submit = document.querySelector('.submit-btn');

const xhr = new XMLHttpRequest();

call.addEventListener('click',()=>{
    modal.classList.add('active');
    body.style.overflow = 'hidden';
    call.style.display = 'none'
})

close.addEventListener('click', ()=>{
    modal.classList.remove('active');
    body.style.overflow = 'auto';
    call.style.display = 'flex'
})

//отправка данных из формы на сервер для заявки
function sendForm(){ 
    let checkNULLstr = true;
    let dataInput = document.querySelectorAll('.mandatoty_attribute');
    let allInput = document.querySelectorAll('form input, form textarea, form select');
        dataInput.forEach(element => {
        if(element.value == ''){
            checkNULLstr = false;
            element.classList.add('input-error');
            modalWindow.classList.add('input-error');
            
            setTimeout(() => {
                element.classList.remove('input-error');
                modalWindow.classList.remove('input-error');
                }, 1500);
             }
        });
    if(checkNULLstr){
        let formData = new FormData(document.forms.callMaster);
            xhr.open('post', `/serverScript/callMaster.php` );
            xhr.send(formData);
            allInput.forEach(element => {
                element.value ='';
            });
    }
}
submit.addEventListener('click', sendForm);