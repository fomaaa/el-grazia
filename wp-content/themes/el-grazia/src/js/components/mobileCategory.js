$('.js-mobile-category').each(function() {
  let self = $(this);
  let $menu = self.find('.menu');
  let cloneBlock = $menu.clone();
  let currentItemText = cloneBlock.find('li.is-active a').text();

  cloneBlock.find('li.is-active').remove();

  $menu.addClass('hiddenMobile');

  let template = `<div class="categorySelect hiddenTablet">
    <div class="categorySelect__label">${currentItemText}</div>
</div>`;

  template = $(template).append(cloneBlock);

  self.append(template);

});
