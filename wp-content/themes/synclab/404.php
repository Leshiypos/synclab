<?php 
    get_header();
?>
<main>
    <section class="error">
        <div class="container">
            <div class="error__block">
                <img class="error__img" src="<?php echo get_template_directory_uri(  ); ?>/assets/img/404.png" alt="error">
                <span class="error__text">К сожалению, этой страницы не существует</span>
                <a href="<?php bloginfo('home');?>" class="error__btn btn-reset button">На главную</a>
            </div>
        </div>
    </section>
  </main>
<?php 
    get_footer();
?>