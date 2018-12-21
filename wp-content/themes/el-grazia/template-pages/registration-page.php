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
              <?php 
                if (!empty($_GET)) {
                  if (!empty($_GET['id'])) {
                    $title = get_the_title($_GET['id']);

                  } else if (!empty($_GET['type'])) {
                    if ($_GET['type'] == 'cooperation') {
                      $title = 'Сотрудничество';
                    }
                  }
                }
              ?>
              <?php if ($title) : ?>
                <script>var form_title = '<?php echo $title; ?>';</script>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>