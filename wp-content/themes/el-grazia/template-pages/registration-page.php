<?php 
/* Template Name: Регистрация */
  get_header(); 
?>
      <div class="pageWrapper">
        <div class="breadcrumbs">
          <div class="container">
          <?php woocommerce_breadcrumb(
              array(
              'before' => '<li class="breadcrumbsList__item">',
              'after' => '</li>',
              'wrap_before' => '<ul class="breadcrumbsList">',
              'wrap_after' => '</ul>',
              'delimiter' => ''
            )
          ); ?>
          </div>
        </div>
        <div class="section section--registration">
          <div class="container section__inner">
            <div class="section__title">
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="registration">
              <?php echo do_shortcode('[contact-form-7 id="299" title="Форма регистрации" html_class="form form--registration"]') ?>
<!--               <form action="/" class="form form--registration">
                <div class="form__field form__field--select">
                  <select name="" class="js-select ">
                    <option value="" selected disabled>Роль пользователя*</option>
                    <option value="Модель">Модель</option>
                    <option value="Модель 2">Модель 2</option>
                    <option value="Модель 3">Модель 3</option>
                  </select>
                </div>
                <div class="form__field">
                  <input type="text" class="input " placeholder="ФИО*" />
                </div>
                <div class="form__field">
                  <input type="text" class="input js-mask-phone" placeholder="Телефон*" />
                </div>
                <div class="form__field">
                  <input type="text" class="input " placeholder="E-mail*" />
                </div>
                <div class="form__field">
                  <input type="text" class="input " placeholder="Как узнали об Обучающем центре?" />
                </div>
                <div class="form__field form__field--textarea">
                  <textarea name="message" class="textarea" placeholder="Комментарий"></textarea>
                </div>
                <div class="form__bottom">
                  <div class="form__button">
                    <button type="button" class="btn btn--primary">
                      <span>Зарегистрироваться</span>
                    </button>
                  </div>
                  <div class="form__rules"> Нажимая на кнопку Зарегистрироваться<br> я даю Согласие на <a href="#">обработку персональных данных</a>
                  </div>
                  <div class="form__rules"> * помечены поля для обязательного<br> заполнения </div>
                </div>
              </form> -->
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>