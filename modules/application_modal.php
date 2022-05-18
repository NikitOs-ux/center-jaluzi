<div class="modal">
        <div class="modal-window">
            <div class="modal-content">
                <div class="modal-title basic-title">Записаться на замер</div>
                <div class="modal-form">
                    <form action="POST" name="callMaster">
                    <input class="mandatoty_attribute"  type="text" name="name" id="" placeholder="Имя* ">
                    <input class="mandatoty_attribute"  type="text" name="family" id="" placeholder="Фамилия*">
                    <input class="mandatoty_attribute"  type="text" name="addres" id="" placeholder="Адрес*">
                    <input class="mandatoty_attribute"  type="number" name="telephone" placeholder="Номер для связи*">
                    <div class="select-block">
                        <select class="modal-select mandatoty_attribute" name="type" id="" >
                            <option value="" selected disabled>Вид штор*</option>
                            <optgroup label="Горизонтальные">
                                <option value="горизонтальные дерево">Деревянный</option>
                                <option value="горизонтальные пластик">Пластиковые</option>
                            </optgroup>
                            <optgroup label="Вертикальные">
                                <option value="вертикальные дерево">Деревянные</option>
                                <option value="вертикальные пластик">Пластиковые</option>
                                <option value="вертикальные ткань">Тканевые</option>
                            </optgroup>
                            <optgroup label="Рулонные">
                                <option value="Рулонные Классика LVT">Классика LVT</option>
                                <option value="Рулонные UNI">UNI</option>
                                <option value="Рулонные MINI">MINI</option>
                            </optgroup>
                            <optgroup label='Рулонные "Зебра"'>
                                <option value="Рулонные Зебра Классика LVT">Классика LVT</option>
                                <option value="Рулонные Зебра UNI">UNI</option>
                                <option value="Рулонные Зебра MINI">MINI</option>
                            </optgroup>
                            
                        </select>
                    </div>
                    <div class="modal-date">Укажите в желаемое время</div>
                    <input type="date" name="date">
                    <input type="time" name="time">
                    <textarea name="comment" cols="30" rows="10" placeholder="Оставьте ваш комментарий"></textarea>
                </div>
                <div class="modal-submit">
                    <div class="dop-info">
                        <span>&#8727; - поле обязательное для ввода</span>
                    </div>
                    <div class="submit-btn user-btn">Отправить</div>
                </div>
            </form>
            </div>
            <div class="modal-close">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>

    <!-- call -->
    <div class="call_me">
        <div class="call_ico">
            <i class="fas fa-phone"></i>
        </div>
    </div>
</div>