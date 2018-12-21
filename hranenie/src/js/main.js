(() => {
  const invoice = () => {
    const popupWindow = $('<div class="popup-overlay js-window">' +
      '<div class="popup-window js-popup" style="display: none;">' +
      '<div class="popup-window__body">' +
      '<div class="wrapper1">' +
      '<div class="wrapper1">' +
      '<div class="check"></div>' +
      '<p class="invoice">Спасибо!</p>' +
      '<p class="invoice">Ваша заявка отправлена.</p>' +
      '<p class="invoice">В ближайшее время мы с Вами свяжемся!</p>' +
      '</div>' +
      '</div></div>' +
      '</div>' +
      '</div>' +
      '</div>');
    $('body').prepend(popupWindow);
    $('.js-popup').slideDown('slow');
    $('.js-window').click(function (event) {
      $(this).remove();
    })
  };
  
  //Random hash generator
  function generateHash() {
    return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
  }
  //Sales-g-sender
  function sgSender(fieldsObj, type) {
    const fields = fieldsObj;
    let dataString = `type=${type}`;
    
    for (let field in fields) {
      dataString += `&${field}=${fields[field]}`
    }
    $.ajax({
      url: 'mail.php',
      type: 'POST',
      data: dataString
    }).done(json => {
      console.log(JSON.parse(json));
    }).fail(error => console.log(error));
  }
  //Callback form
  $('#uid5').click(function (event) {
    event.preventDefault();
    
    const form = $('#callback-form'),
      COMMENT = 'Заказ обратного звонка',
      phone = form.find('input[name=phone]');
    
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=sg,&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=${generateHash()}`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'callback-top');
          $('.area').click();
          console.log(json);
          invoice();
          phone.val('');
        }
      }).fail(error => console.log(error));
    } else {
        phone.after('<div class="ErrMsg">Не заполнено поле</div>');
        phone.css('border-color','red');
    }
  });
  
  //Get tires
  $('#uid18').click(function (event) {
    event.preventDefault();
    
    const form = $('#get-tyres'),
      COMMENT = 'ПРОВЕРИТЬ НАЛИЧИЕ МЕСТ НА СКЛАДЕ',
      phone = form.find('input[name=phone]');
    
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=sg,&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=${generateHash()}`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'get-tyres');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    } else {
        phone.after('<div class="ErrMsg">Не заполнено поле</div>');
        phone.css('border-color','red');
    }
  })
  //Left widget form
  $('#uid2').click(function (event) {
    event.preventDefault();
    
    const form = $('#left-widget-form'),
      COMMENT = 'РАССЧИТАТЬ СТОИМОСТЬ',
      diametr = form.find('select[name=diametr]'),
      disk = form.find('select[name=disk]'),
      phone = form.find('input[name=phone]');
    
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=sg,&diametr=${diametr.val()}&disk=${disk.val()}&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=${generateHash()}`
      }).done(json => {
        if (json) {
            sgSender({phone: phone.val(), diametr: diametr.val(), disk: disk.val()}, 'left-widget-get-tyres');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    } else {
        phone.after('<div class="ErrMsg">Не заполнено поле</div>');
        phone.css('border-color','red');
    }
  });
  
  // Get tyres 2 screen
  $('#uid21').click(function (event) {
    event.preventDefault();
    
    const form = $('#second-get-tyres-form'),
      COMMENT = 'Сдать шины в ближайший автоцентр',
      phone = form.find('input[name=phone]');
    
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=sg,&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=${generateHash()}`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'second-get-tyres-form');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    } else {
        phone.after('<div class="ErrMsg">Не заполнено поле</div>');
        phone.css('border-color','red');
    }
  });
  //Забронировать место
  $('#uid26').click(function (event) {
    event.preventDefault();
    
    const form = $('#bronirovanie'),
      COMMENT = 'ЗАБРОНИРОВАТЬ МЕСТО НА СКЛАДЕ',
      phone = form.find('input[name=phone]');
    
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=sg,&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=${generateHash()}`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'bronirovanie');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    } else {
        phone.after('<div class="ErrMsg">Не заполнено поле</div>');
        phone.css('border-color','red');
    }
  });
  //Оставить заявку на хранение
  $('#uid39').click(function (event) {
    event.preventDefault();
    
    const form = $('#tire-fitting'),
      COMMENT = 'ОСТАВИТЬ ЗАЯВКУ НА ХРАНЕНИЕ ШИН',
      phone = form.find('input[name=phone]');
    
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=sg,&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=${generateHash()}`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'hranenie-shin');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    } else {
        phone.after('<div class="ErrMsg">Не заполнено поле</div>');
        phone.css('border-color','red');
    }
  });
  //Записаться на шиномонтаж в ближайший автоцентр (табы)
  $('#uid46').click(function (event) {
    event.preventDefault();
    
    const form = $('#store-amount'),
      COMMENT = 'ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В БЛИЖАЙШИЙ АВТОЦЕНТР',
      phone = form.find('input[name=phone]');
    
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=sg,&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=${generateHash()}`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'store-amount');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    } else {
        phone.after('<div class="ErrMsg">Не заполнено поле</div>');
        phone.css('border-color','red');
    }
  });
  //callback-bottom
  $('#uid52').click(function (event) {
    event.preventDefault();
    
    const form = $('#callback-bottom'),
      COMMENT = 'Заказ обратного звонка',
      phone = form.find('input[name=phone]');
    
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=sg,&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=${generateHash()}`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'callback-bottom');
          $('.area').click();
          console.log(json);
          invoice();
          phone.val('');
        }
      }).fail(error => console.log(error));
    } else {
        phone.after('<div class="ErrMsg">Не заполнено поле</div>');
        phone.css('border-color','red');
    }
  });
})();