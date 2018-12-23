let $categoryTarget = $('.filter [data-id]');
let $sectionTitle = $('.section--catalog .section__title');
let $gridWrapper = $('.section--catalog .gridWrapper');

let templateCatalog = (gridCards) => {
  return `
    <div class="gridWrapper">
          <div class="grid gridDesktop--3 gridMobile--2"></div>
          <div class="grid__bottom">
                  <a href="#" id="load_more" data-category="38" class="btn btn--primary"><span>Показать еще</span></a>
                  <a href="/registration/?type=price" class="btn btn--secondary"><span>Узнать стоимость</span></a>
          </div>
    </div>
  `;
};

let newCard = (photo, title, subtitle, link) => {
  return `
          <div class="grid__item">
            <div class="card card--good">
              <a href="${link}" class="card__link"></a>
              <div class="card__photo">
                <img src="${photo}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""></div>
              <div class="card__body">
                <div class="card__title">${title}</div>
                <div class="card__subtitle">${subtitle}</div>
              </div>
            </div>
          </div>
        `;
};


$categoryTarget.on('click', function(e) {
  e.preventDefault();
  let self = $(this);

  $.ajax({
    url: ajax_url,
    method: 'POST',
    dataType: 'json',
    data: {
      action: 'load_category',
      term_id: self.data('id')
    },
    success: function({title_category, counter_category, id_category, nextPage, url_category, body}) {
      let newTitle = `<div class="section__title" data-counter="${counter_category}"> ${title_category} </div>`;

      $('.section--catalog .section__title').replaceWith(newTitle);

      if (body) {
        let $gridContainer = $('<div class="grid gridDesktop--3 gridMobile--2" />');

        body.forEach((item) => {
          let {photo, title, subtitle, link} = item;

          $gridContainer.append(newCard(photo, title, subtitle, link));
        });

        let $gridCatalog = $('.section--catalog .grid');

        if ($gridCatalog.length) {
          $gridCatalog.replaceWith($gridContainer);
        } else {
          $gridWrapper.replaceWith(templateCatalog());
          $('.section--catalog .grid').replaceWith($gridContainer);
        }
      }

      if (!body && counter_category === 0) {
        $('.section--catalog .gridWrapper').html('<h3 class="text-center">Товаров, соответствующих вашему запросу, не обнаружено.</h3>');
      }

    }
  });

});
