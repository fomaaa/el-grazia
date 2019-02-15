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
              <form action="/registration" id="reg_form" method="POST" class="form form--registration">
                <div class="form__field form__field--select">
                  <select name="role" class="js-select">
                  	<option value="0" selected disabled>Роль пользователя*</option>
                    <?php
                      $block = get_field("roles" , 'option');
                      if ($block):
                        foreach($block as $key => $item) :
                    ?>
                      <option value="<?php echo $key+1; ?>"><?php echo $item['name'] ?></option>
                      <?php echo $item[''] ?>
                    <?php endforeach; endif; ?>
                  </select>
                  <span role="alert" class="wpcf7-not-valid-tip validation" style="display: none;">Поле обязательно для заполнения.</span>
                </div>
                <div class="form__field form__field--select">
                  <select name="seminar"  data-select-placeholder="Выберите семинар*"  multiple="multiple" class="js-select2" >
                    <?php
                      $block = get_field("seminars", 266);
                        if ($block):
                          foreach($block as $key => $item) :
                            if (!empty($item['seminar'][0]['sem'])) :
                              $seminars = $item['seminar'];
                                foreach($seminars as $seminar) :
                                   if (!empty($seminar['sem'])):
                                      $seminar = $seminar['sem'];
                    ?>
                        <option value="<?php echo get_the_title($seminar) ?>"><?php echo get_the_title($seminar) ?></option>
                    <?php  endif; endforeach; ?>
                    <?php endif; ?>
                    <?php endforeach; endif; ?>
                  </select>
                  <span role="alert" class="wpcf7-not-valid-tip validation" style="display: none;">Поле обязательно для заполнения.</span>
                </div>
                <div class="form__field form__field--select">
                  <select name="brand" class="js-select ">
                    <option value="0" selected disabled>Выберите бренд*</option>
                    <?php
                      $block = get_field("brands", 25);

                      if ($block):
                        foreach($block as $item) :
                      ?>
                      <option value="  <?php echo get_the_title($item['item']->ID); ?>">  <?php echo get_the_title($item['item']->ID); ?></option>
                        <?php echo get_the_title($item['item']->ID); ?>
                    <?php endforeach; endif; ?>
                  </select>
                  <span role="alert" class="wpcf7-not-valid-tip validation" style="display: none;">Поле обязательно для заполнения.</span>
                </div>
                <div class="form__field"  style="display: none;">
                  <input type="text" class="input " name="city" placeholder="Город*" />
                  <span role="alert" class="wpcf7-not-valid-tip validation" style="display: none;">Поле обязательно для заполнения.</span>
                </div>
                <div class="form__field">
                  <input type="text" class="input " name="name" placeholder="ФИО*" />
                  <span role="alert" class="wpcf7-not-valid-tip validation" style="display: none;">Поле обязательно для заполнения.</span>
                </div>
                <div class="form__field">
                  <input type="text" class="input" name="phone"  placeholder="Телефон*" />
                  <span role="alert" class="wpcf7-not-valid-tip validation" style="display: none;">Поле обязательно для заполнения.</span>
                </div>
                <div class="form__field">
                  <input type="text" class="input " name="email"  placeholder="E-mail*" />
                  <span role="alert" class="wpcf7-not-valid-tip validation" style="display: none;">Поле обязательно для заполнения.</span>
                </div>
                <div class="form__field">
                  <input type="text" class="input " name="about" placeholder="Как узнали о нас?*" />
                  <span role="alert" class="wpcf7-not-valid-tip validation" style="display: none;">Поле обязательно для заполнения.</span>
                </div>
                <div class="form__field form__field--textarea">
                  <textarea name="comment" class="textarea" name="comment" placeholder="Комментарий"></textarea>
                </div>
                <div class="form__bottom">
                  <div class="form__button">
                    <button type="submit" class="btn btn--primary">
                      <span>Зарегистрироваться</span>
                    </button>
                  </div>
                  <div class="form__rules"> Нажимая на кнопку Зарегистрироваться<br> я даю Согласие на <a href="/privacy-policy/">обработку персональных данных</a>
                  </div>
                  <div class="form__rules"> * помечены поля для обязательного<br> заполнения </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <script>
      var ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
<?php get_footer(); ?>
