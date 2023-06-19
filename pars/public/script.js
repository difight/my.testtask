$( document ).ready(function() {
  getAdv()
  .then((adv) => {
    generateTableRow(adv);
  })
  .finally(_ => {
    $('.loading').remove();
  })

  $('.search').click(function() {

    $('.search').attr('disabled', true);

    $('.advs').html(loaderHtml());

    getAdv(getAllInputData())
    .then((adv) => {
      generateTableRow(adv);
    })
    .finally(_ => {
      $('.loading').remove();
      $('.search').attr('disabled', false);
    })
  })
});

function getAllInputData() {
  let data = {};

  $('input').each((_, elem) => {
    if( $(elem).val()) {
      data[ $(elem).attr('name') ] = $(elem).val();
    }
  })

  return data;
}

function loaderHtml() {
  return '<img class="loading" src="https://img.pikbest.com/png-images/20190918/cartoon-snail-loading-loading-gif-animation_2734139.png!bw700"/>';
}

function generateTableRow(data) {
  let html = '';
  data.forEach(element => {
    html += '<tr><td>'+element.name+'</td><td>'+element.price+'</td><td>'+element.bedrooms+'</td><td>'+element.bathrooms+'</td><td>'+element.storeys+'</td><td>'+element.garages+'</td></tr>'
  });
  $('.advs').html(html);
}

function getAdv(data = {}) {
  return new Promise((resolve) => {
    url = '/api/adv'
    if (data.price_from && data.price_from !== false && data.price_to && data.price_to !== false) {
      url = '/api/adv/' + data.price_from + '-' + data.price_to
      delete data.price_from
      delete data.price_to
    }
    $.ajax({
      url,
      method: 'post',
      dataType: 'json',
      data,
    })
    .then((data) => {
      resolve(data)
    })
    .catch(_ => {
      throw new Error('error from request: ' + code);
    });
  })
}