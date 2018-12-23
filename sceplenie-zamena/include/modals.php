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

<div class="modalWindow fakeRoistat modal6 inputForm" modalName="fakeRoistat_modal" comment="Обратный звонок">
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
                    <div class="col-12 pt-2"><input name="phone" class="modalInput" id="modal6_phone"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 align-self-end fakeRoistatBtnBlock modalBtnBlock">
                <button class="fakeRoistat_btn px-5">Позвоните мне</button>
            </div>
        </div>
    </div>
</div>

<div class="modalWindow modal1 inputForm" comment="Обратный звонок" modalName="headerCallBack">
    <div class="modal_header">
        <button class="close nofonts">×</button>
    </div>
    <div class="callBackModal_content">
        <div class="modalName">Обратный звонок</div>
        <div class="modalText">Оставьте свой телефон и мы свяжемся с вами в течение 5 минут:</div>
        <div class="modalInputName">НОМЕР ТЕЛЕФОНА *</div>
        <div class="modalInputBlock"><input name="phone" class="modalInput" id="modal1_phone"></div>
        <div class="modalBtnBlock text-center pt-3">
            <button class="btn modalBtn px-5 py-4" onclick="ym(yaID[siteUrl], 'reachGoal', 'PR_Z'); return true;">ПЕРЕЗВОНИТЕ МНЕ</button>
        </div>
    </div>
</div>

<div class="modalWindow modal2 inputForm" comment="Узнать стоиомость замены сцепления для моего авто"
     modalName="availability_at_the_store">
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            <p><br></p>
        </h4>
    </div>
    <div class="callBackModal_content">
        <div class="modalName">Расчет стоимости</div>
        <div class="modalInputName">МАРКА АВТО</div>
        <div class="modalInputBlock">
            <select class="modalSelect" name="brand" id="modal2_brand">
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
        </div>
        <div class="modalText">Укажите свой номер, и мы пришлем расчет по смс, в течение 5 минут:</div>
        <div class="modalInputName">НОМЕР ТЕЛЕФОНА *</div>
        <div class="modalInputBlock"><input name="phone" class="modalInput" id="modal2_phone"></div>
        <div class="modalBtnBlock text-center pt-3">
            <button class="btn modalBtn px-5 py-4" onclick="ym(yaID[siteUrl], 'reachGoal', 'ST_Z'); return true;">УЗНАТЬ СТОИМОСТЬ ЗАМЕНЫ</button>
        </div>
        <div class="modalBtnBlockDescription text-center pt-2">Проверка займет не более 10 минут*</div>
    </div>
</div>

<div class="modalWindow modal3 inputForm" comment="Записаться на диагностику" modalName="diagnostic">
    <div class="modal_header">
        <button class="close nofonts">×</button>
    </div>
    <div class="callBackModal_content">
        <div class="modalName">ЗАПИСЬ НА ДИАГНОСТИКУ</div>
        <div class="modalText">Оставьте свой телефон и наш специалист<br>свяжется с вами, для согласования<br>даты
            вашего визита:
        </div>
        <div class="modalInputName">НОМЕР ТЕЛЕФОНА *</div>
        <div class="modalInputBlock"><input name="phone" class="modalInput" id="modal3_phone"></div>
        <div class="modalBtnBlock text-center pt-3">
            <button class="btn modalBtn px-5 py-4" onclick="ym(yaID[siteUrl], 'reachGoal', 'DG_Z'); return true;">ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ</button>
        </div>
    </div>
</div>

<div class="modalWindow modal4 inputForm" comment="Бесплатная консультация" modalName="consult">
    <div class="modal_header">
        <button class="close nofonts">×</button>
    </div>
    <div class="callBackModal_content">
        <div class="modalName">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</div>
        <div class="modalText">Оставьте свой телефон и наш эксперт<br>свяжется с вами и ответит<br>на ваши вопросы:
        </div>
        <div class="modalInputName">НОМЕР ТЕЛЕФОНА *</div>
        <div class="modalInputBlock"><input name="phone" class="modalInput" id="modal4_phone"></div>
        <div class="modalBtnBlock text-center pt-3">
            <button class="btn modalBtn px-5 py-4" onclick="ym(yaID[siteUrl], 'reachGoal', 'SPE_Z'); return true;">ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ</button>
        </div>
    </div>
</div>

<div class="modalWindow modal5 inputForm" comment="Узнать предварительную стоимость" modalName="cost">
    <div class="modal_header">
        <button class="close nofonts">×</button>
        <h4 class="textable">
            <p><br></p>
        </h4>
    </div>
    <div class="callBackModal_content">
        <form class="online-selection__form" name="online-selection">
            <div class="step" id="step1">
                <p class="modalName">
                    Шаг <span style="color: #d44831">1</span>/4
                </p>
                <p class="modalText">Выберите марку Вашего авто:</p>
                <div class="modalInputName">
                    Марка авто
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <select class="modalSelect" name="brand" id="modal5_brand">
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xl-12 pt-3 text-center">
                        <button class="btn modalBtn px-5 py-4 js-next-step" type="button">Далее</button>
                    </div>
                </div>

            </div>

            <div class="step" id="step2" style="display: none;">
                <p class="modalName">
                    Шаг <span style="color: #f2a40c">2</span>/4
                </p>
                <p class="modalText">Выберите год выпуска вашего автомобиля:</p>
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <select class="modalSelect" name="year" id="modal5_year">
                            <option value="До 2000">До 2000</option>
                            <? for ($i = 2001; $i <= date('Y'); $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <? endfor; ?>
                        </select>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-lg-6 col-xl-6 text-center">
                        <button class="btn modalBtn px-5 py-4 back-button js-prev-step" type="button">Назад</button>
                    </div>
                    <div class="col-lg-6 col-xl-6 text-center">
                        <button class="btn modalBtn px-5 py-4 js-next-step" type="button">Далее</button>
                    </div>
                </div>
            </div>

            <div class="step" id="step3" style="display: none;">
                <p class="modalName">
                    Шаг <span style="color: #f2a40c">3</span>/4
                </p>
                <p class="modalText">
                    Замена всего узла или отдельной запчасти:
                </p>
                <select class="modalSelect" name="detail" id="modal5_detail">
                    <option value="Замена всего узла" selected>Замена всего узла</option>
                    <option value="Замена отдельной запчасти">Замена отдельной запчасти</option>
                    <option value="Нужна консультация по этому вопросу">Нужна консультация по этому вопросу</option>
                </select>
                <div class="row pt-3">
                    <div class="col-lg-6 col-xl-6 text-center">
                        <button class="btn modalBtn px-5 py-4 back-button js-prev-step" type="button">Назад</button>
                    </div>
                    <div class="col-lg-6 col-xl-6 text-center">
                        <button class="btn modalBtn px-5 py-4 js-next-step" type="button">Далее</button>
                    </div>
                </div>
            </div>

            <div class="step" id="step4" style="display: none;">
                <p class="modalName">МЫ РАССЧИТАЛИ ПРЕДВАРИТЕЛЬНУЮ СТОИМОСТЬ ЗАМЕНЫ</p>
                <p class="modalText">Укажите свой номер, и мы пришлем расчет по смс, в течение 5 минут:</p>
                <div class="modalInputName">Номер телефона *</div>
                <div class="modalInputBlock"><input class="modalInput" name="phone" type="tel" required id="modal5_phone"></div>
                <div class="modalBtnBlock text-center pt-3">
                    <button class="btn modalBtn px-5 py-4" onclick="ym(yaID[siteUrl], 'reachGoal', 'QV_Z'); return true;">ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ</button>
                </div>

                <p class="online-selection__form-free text-center pt-2">
                    Это бесплатно и ни к чему вас не обязывает*
                </p>
            </div>
        </form>
    </div>
</div>