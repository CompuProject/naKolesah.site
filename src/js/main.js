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
  $('#uid17').click(function (event) {
    event.preventDefault();
    
    const form = $('#callback-form'),
          COMMENT = 'Заказ обратного звонка',
          phone = form.find('input[name=phone]');
    
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=${generateHash()}&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'callback-top');
          $('.area').click();
          console.log(json);
          invoice();
          phone.val('');
        }
      }).fail(error => console.log(error));
    }
  });
  
  //Get tires
  $('#uid40').click(function (event) {
    event.preventDefault();
    
    const form = $('#get-tyres'),
          COMMENT = 'Заказ шин',
          phone = form.find('input[name=phone]');
    
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=${generateHash()}&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'get-tyres');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    }
  })
  //Left widget form
  $('#uid14').click(function (event) {
    event.preventDefault();
  
    const form = $('#left-widget-form'),
      COMMENT = 'Заказ шин из левого виджета',
      phone = form.find('input[name=phone]');
  
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=${generateHash()}&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'left-widget-get-tyres');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    }
  });
  
  // Get tyres 3 screen
  $('#uid43').click(function (event) {
    event.preventDefault();
  
    const form = $('#second-get-tyres-form'),
      COMMENT = 'Заказ шин',
      phone = form.find('input[name=phone]');
  
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=${generateHash()}&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'get-tyres');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    }
  });
  //Check variants from
  $('#uid49').click(function (event) {
    event.preventDefault();
    
    const form = $('#check-variants'),
      COMMENT = 'Подбор дисков по марке авто',
      car = form.find('select[name=car]'),
      phone = form.find('input[name=phone]');
  
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=${generateHash()}&brand=${car.val()}&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val(), car: car.val()}, 'check-variants');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    }
  });
  //Tire fitting
  $('#uid54').click(function (event) {
    event.preventDefault();
  
    const form = $('#tire-fitting'),
      COMMENT = 'Заявка на подобор шин',
      phone = form.find('input[name=phone]');
  
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=${generateHash()}&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'tire-fitting');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    }
  });
  //Store amount
  $('#uid64').click(function (event) {
    event.preventDefault();
  
    const form = $('#store-amount'),
      COMMENT = 'Наличие мест на складе',
      phone = form.find('input[name=phone]');
  
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=${generateHash()}&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'store-amount');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    }
  });
  //Check variants two
  $('#uid85').click(function (event) {
    event.preventDefault();
  
    const form = $('#check-variants-two'),
      COMMENT = 'ПОСМОТРЕТЬ ВАРИАНТЫ ДЛЯ АВТО',
      phone = form.find('input[name=phone]');
  
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=${generateHash()}&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'check-variants-two');
          $('.area').click();
          invoice();
          console.log(json);
          phone.val('');
        }
      }).fail(error => console.log(error));
    }
  });
  //callback-bottom
  $('#uid88').click(function (event) {
    event.preventDefault();
  
    const form = $('#callback-bottom'),
      COMMENT = 'Заказ обратного звонка',
      phone = form.find('input[name=phone]');
  
    if (phone.val()) {
      $.ajax({
        url: 'https://wilgood.ru/handler_for_partners/',
        type: 'POST',
        data: `type_partner=${generateHash()}&comment=${COMMENT}&type_response=html&phone=${phone.val()}&unique_code=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f`
      }).done(json => {
        if (json) {
          sgSender({phone: phone.val()}, 'callback-bottom');
          $('.area').click();
          console.log(json);
          invoice();
          phone.val('');
        }
      }).fail(error => console.log(error));
    }
  });
})();
$(document).ready(function () {
    $('.modal-content .btn-inner .btn').click(function () {
        console.log($(this).attr('id'));
    });
});