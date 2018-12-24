<div class="modalOverlay"></div>
<div class="modalWindow successMsg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm successMsg_header">Спасибо за обращение!</div>
        </div>
        <div class="row">
            <div class="col-sm successMsg_text">Наш специалист свяжется с Вами в ближайшее время и подробно ответит на
                все интересующие вопросы!
            </div>
        </div>
    </div>
</div>
<div class="modal1 modalWindow inputForm" modalName="modal1" comment="Обратный звонок">
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            <p><br></p>
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalName">Обратный звонок</div>
        <div class="modalText">Оставьте свой телефон и мы свяжемся с вами в течение 5 минут:</div>
        <div class="modalInputName">НОМЕР ТЕЛЕФОНА *</div>
        <div class="modalInputBlock"><input name="phone" class="modalInput" id="modal1_phone"></div>
        <div class="modalBtnBlock">
            <button onclick="yaCounter51444706.reachGoal('ZK_Z'); return true;">ПЕРЕЗВОНИТЕ МНЕ<span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span></button>
        </div>
    </div>
</div>

<div class="modalWindow modal2 inputForm" modalName="modal2" comment="Записаться на диагностику в удобное время">
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            <p><br></p>
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalName">Запись на диагностику</div>
        <div class="modalText">Оставьте свой телефон и мы забронируем удобную для вас дату визита:
        </div>
        <div class="modalInputName">НОМЕР ТЕЛЕФОНА *</div>
        <div class="modalInputBlock"><input name="phone" class="modalInput" id="modal2_phone"></div>
        <div class="modalBtnBlock">
            <button onclick="yaCounter51444706.reachGoal('DIAG_Z'); return true;">ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ<span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span></button>
        </div>
    </div>
</div>

<div class="modalWindow modal3 inputForm" modalName="modal3" comment="Подобрать диски">
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            <p><br></p>
        </h4>
    </div>
    <div class="callBackModal_content">
        <form class="online-selection__form" name="online-selection">
            <div class="step" id="step5">
                <p class="modalName">
                    Шаг <span style="color: #f2a40c">1</span>/4
                </p>
                <p class="modalText">Выберите марку Вашего авто:</p>
                <label>
                    Марка авто
                    <select name="brand" id="modal3_brand">
                        <option value="ВАЗ">LADA (ВАЗ)</option>
                        <option value="Audi">Audi</option>
                        <option value="BMW" selected>BMW</option>
                        <option value="Chery">Chery</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Citroen">Citroen</option>
                        <option value="Daewoo">Daewoo</option>
                        <option value="Ford">Ford</option>
                        <option value="Great Wall">Great Wall</option>
                        <option value="Honda">Honda</option>
                        <option value="Infiniti">Infiniti</option>
                        <option value="Jeep">Jeep</option>
                        <option value="Kia">Kia</option>
                        <option value="Land Rover">Land Rover</option>
                        <option value="Lexus">Lexus</option>
                        <option value="Lifan">Lifan</option>
                        <option value="Mazda">Mazda</option>
                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Opel">Opel</option>
                        <option value="Peugeot">Peugeot</option>
                        <option value="Porsche">Porsche</option>
                        <option value="Renault">Renault</option>
                        <option value="Skoda">Skoda</option>
                        <option value="Ssang Yong">Ssang Yong</option>
                        <option value="Subaru">Subaru</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Volvo">Volvo</option>
                        <option value="ГАЗ">ГАЗ</option>
                        <option value="УАЗ">УАЗ</option>
                        <option value="Другая">Другая</option>
                    </select>
                </label>
                <button class="big-yellow-button js-next-step" type="button">Далее<span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span></button>
            </div>

            <div class="step" id="step6" style="display: none;">
                <p class="modalName">
                    Шаг <span style="color: #f2a40c">2</span>/4
                </p>
                <p class="modalText">Выберите желаемый диаметр дисков:</p>
                <select name="diameter" id="modal3_diameter">
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                </select>
                <div class="form-buttons">
                    <button class="big-yellow-button back-button js-prev-step" type="button">Назад</button>
                    <button class="big-yellow-button js-next-step" type="button">Далее<span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span></button>
                </div>
            </div>

            <div class="step" id="step7" style="display: none;">
                <p class="modalName">
                    Шаг <span style="color: #f2a40c">3</span>/4
                </p>
                <p class="modalText">
                    Выберите приемлимую для вас стоимость дисков:
                </p>
                <div class="online-selection__form-price">
                    <span class="range-border">1 000</span>
                    <input type="text" name="price" class="range-example-start" min="1000" max="80000" step="1000" id="modal3_price">
                    <span class="range-border">80 000</span>
                </div>
                <div class="form-buttons">
                    <button class="big-yellow-button back-button js-prev-step" type="button">Назад</button>
                    <button class="big-yellow-button js-next-step" type="button">Далее<span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span></button>
                </div>
            </div>

            <div class="step" id="step8" style="display: none;">
                <p class="modalName">
                    Шаг <span style="color: #f2a40c">4</span>/4
                </p>
                <p class="modalText">
                    Оставьте свой телефон и <span>в течение 10 минут</span> с вами свяжется наш менеджер и
                    продемонстрирует самые оптимальные варианты, <span>которые мы для вас подобрали</span>:
                </p>

                <label>Номер телефона *<input type="tel" name="phone" required id="modal3_phone"></label>
                <div class="modalBtnBlock">
                    <button class="big-yellow-button" type="submit" onclick="yaCounter51352711.reachGoal('diagnostika_Z'); return true;">Посмотреть лучшие диски для моего авто<span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span></button>
                </div>

                <p class="online-selection__form-free">
                    Это бесплатно и ни к чему вас не обязывает*
                </p>
            </div>
        </form>
    </div>
</div>

<div class="modalWindow modal4 inputForm" modalName="modal4" comment="Приобретение дисков в рассрочку">
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            <p><br></p>
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalName">Приобретение дисков в рассрочку</div>
        <div class="modalText">Оставьте свой телефон и мы свяжемся с вами для уточнения деталей:</div>
        <div class="modalInputName">НОМЕР ТЕЛЕФОНА *</div>
        <div class="modalInputBlock"><input name="phone" class="modalInput" id="modal4_phone"></div>
        <div class="modalBtnBlock">
            <button onclick="yaCounter51352711.reachGoal('RASSROCHKA_Z'); return true;">СВЯЗАТЬСЯ СО СПЕЦИАЛИСТОМ<span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span></button>
        </div>
    </div>
</div>

<div class="modalWindow modal5 inputForm" modalName="modal5" comment="Виджет слева">
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            <p><br></p>
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalName">Запись на диагностику</div>
        <div class="modalText">Оставьте свой телефон и мы забронируем удобную для вас дату визита:</div>
        <div class="modalInputName">НОМЕР ТЕЛЕФОНА *</div>
        <div class="modalInputBlock"><input name="phone" class="modalInput" id="modal5_phone"></div>
        <div class="modalBtnBlock">
            <button onclick="yaCounter51444706.reachGoal('VIDJET_Z'); return true;">ЗАБРОНИРОВАТЬ ВРЕМЯ<span class="ripple rippleEffect" style="width:250px; height:250px; left:-180px; top:-77px;"></span></button>
        </div>
    </div>
</div>

<div class="modalWindow modal-common" >
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            Общие проверки
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalText">
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/common/1.jpg" alt="">
                    <p>Контрольные лампы</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/common/2.jpg" alt="">
                    <p>Ремни безопасности</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/common/3.jpg" alt="">
                    <p>Стартер</p>
                </div>
            </div>
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/common/4.jpg" alt="">
                    <p>Двигатель (общая)</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/common/5.jpg" alt="">
                    <p>Стеклоочистители</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/common/6.jpg" alt="">
                    <p>Стеклоомыватели</p>
                </div>
            </div>
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/common/7.jpg" alt="">
                    <p>Зеркала</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/common/8.jpg" alt="">
                    <p>Трансмиссия (общая)</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/common/9.jpg" alt="">
                    <p>Система вентиляции</p>
                </div>
            </div>
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/common/10.jpg" alt="">
                    <p>Звуковой сигнал</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/common/11.jpg" alt="">
                    <p>Внешнее освещение</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/common/12.jpg" alt="">
                    <p>Внутреннее освещение</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modalWindow modal-hood" >
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            Проверки под капотом
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalText">
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/hood/1.jpg" alt="">
                    <p>Замок, фиксация капота</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/hood/2.jpg" alt="">
                    <p>Аккумулятор</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/hood/3.jpg" alt="">
                    <p>Воздушный фильтр</p>
                </div>
            </div>
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/hood/4.png" alt="">
                    <p>Радиатор</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/hood/5.jpg" alt="">
                    <p>Водяной насос</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/hood/6.png" alt="">
                    <p>Шланги охлаждения</p>
                </div>
            </div>
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/hood/7.png" alt="">
                    <p>Ремни (кроме ГРМ)</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modalWindow modal-under" >
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            Проверки под автомобилем
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalText">
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/under/1.jpg" alt="">
                    <p>Рулевое управление</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/under/2.jpg" alt="">
                    <p>Подвеска</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/under/3.jpg" alt="">
                    <p>Тормозные магистрали</p>
                </div>
            </div>
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/under/4.jpg" alt="">
                    <p>Топливные магистрали</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/under/5.jpg" alt="">
                    <p>Выпускная система</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/under/6.jpg" alt="">
                    <p>Днище</p>
                </div>
            </div>
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/under/7.jpg" alt="">
                    <p>Трансмиссия (проверки под автомобилем)</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/under/8.jpg" alt="">
                    <p>Двигатель (проверки под автомобилем)</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modalWindow modal-liquid" >
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            Проверка жидкостей
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalText">
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/liquid/1.jpg" alt="">
                    <p>Омыватель</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/liquid/2.jpg" alt="">
                    <p>Моторное масло</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/liquid/3.jpg" alt="">
                    <p>Охлаждающая жидкость</p>
                </div>
            </div>
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/liquid/4.jpg" alt="">
                    <p>Трансмиссионное масло</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/liquid/5.jpg" alt="">
                    <p>Гидроусилитель</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modalWindow modal-brake" >
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            Тормозные механизмы
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalText">
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/brake/1.jpg" alt="">
                    <p>Тормозные колодки</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/brake/2.jpg" alt="">
                    <p>Износ</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/brake/3.jpg" alt="">
                    <p>Тормозные диски</p>
                </div>
            </div>
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/brake/4.jpg" alt="">
                    <p>Толщина (мм) (тормозные механизмы)</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/brake/5.jpg" alt="">
                    <p>Педаль тормоза</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modalWindow modal-tire" >
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            Проверка шин
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalText">
            <div class="modalText__row">
                <div class="modalText__item">
                    <img src="assets/img/tire/1.jpg" alt="">
                    <p>Повреждения шин и состояния протектора</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/tire/2.jpg" alt="">
                    <p>Давление</p>
                </div>
                <div class="modalText__item">
                    <img src="assets/img/tire/3.jpg" alt="">
                    <p>Рекомендуемые работы: балансировка, перестановка, замена</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modalWindow modal-reviews">
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
           <br>
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalText">
            <div class="modal-reviews__left">
                <label>Общая оценка *
                    <select name="rating" id="">
                        <option value="" selected></option>
                        <option value="★">★</option>
                        <option value="★★">★★</option>
                        <option value="★★★">★★★</option>
                        <option value="★★★★">★★★★</option>
                        <option value="★★★★★">★★★★★</option>
                    </select>
                </label>
                <label>Достоинства
                    <textarea name="worth" id="" cols="30" rows="2"></textarea>
                </label>
                <label>Недостатки
                    <textarea name="limitations" id="" cols="30" rows="2"></textarea>
                </label>
            </div>
            <div class="modal-reviews__right">
                <label>Имя
                    <input type="text" name="name">
                </label>
                <label>Автомобиль
                    <input type="text" name="car">
                </label>
                <button type="submit" class="big-yellow-button">Отправить отзыв</button>
            </div>
        </div>
    </div>
</div>

<div class="modalWindow fakeRoistat modal7 inputForm openForm" modalName="modal7" comment="Обратный звонок">
    <div class="container-fluid px-4 pb-4">
        <div class="row">
            <div class="col-12 modal_header text-right">
                <button class="close nofonts">×</button>
            </div>
        </div>

        <div class="row">
            <div class="col-12 fakeRoistat_header pt-2">У Вас есть вопросы? Мы можем позвонить Вам абсолютно бесплатно!</div>
        </div>
        <div class="row">
            <div class="col-12 pt-2 fakeRoistat_text">Мы свяжемся с Вами и ответим на любые возникшие вопросы!</div>
        </div>
        <div class="row pt-4 justify-content-start">
            <div class="col-12 col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col-12 fakeRoistat_inputName">Ваш телефон:</div>
                </div>
                <div class="row">
                    <div class="col-12 pt-2"><input type="tel" name="phone" class="modalInput" id="modal7_phone"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 align-self-end fakeRoistatBtnBlock modalBtnBlock">
                <button class="fakeRoistat_btn px-5">Позвоните мне</button>
            </div>
        </div>
    </div>
</div>