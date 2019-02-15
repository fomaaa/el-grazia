<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package el-grazia
 */

get_header();
?>

      <div class="pageWrapper">
        <div class="breadcrumbs">
          <div class="container">
            <ul class="breadcrumbsList">
              <li class="breadcrumbsList__item">
                <a href="/">Главная</a>
              </li>
              <li class="breadcrumbsList__item">
                <span>404</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="section section--error">
          <div class="container section__inner text--center">
            <div class="error__head">
              <img src="<?php echo get_template_directory_uri() ?>/img/404.jpg" alt="404 Not Found">
            </div>
            <div class="error__title">
              <h1>Такой страницы не&nbsp;существует</h1>
            </div>
            <div class="error__bottom">
              <a href="/" class="btn btn--primary">
                <span>На главную</span>
              </a>
            </div>
          </div>
        </div>
      </div>

<?php
get_footer();
