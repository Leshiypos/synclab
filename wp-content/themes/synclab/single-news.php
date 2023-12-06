<?php 
/*
    Template name: Новости
    Template Post Type: post, news
*/
?>
<?php get_header(); ?>
<main>
    <section class="advertising">
      <div class="container">
<!-- Окончание цикла постов Новости-->      
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>  
            
            <div class="advertising__bread-crumbs">
            <?php get_breadcrumb(); ?>
            </div>

            <div class="news-page__flexbox">
            <div>
                <h1 class="news-page__title"><?php the_title();?></h1>
                <?php if (has_post_thumbnail()){?><img class="news-page__img-991" src="<?php echo the_post_thumbnail_url(); ?>" alt="photo"><?php } ?>
                <span class="news-page__text"><?php the_content(); ?> </span>
                <span class="news-page__date"><?php echo get_the_date( 'j F Y' ); ?></span>
                </div>
                <?php if (has_post_thumbnail()){?><img class="news-page__img" src="<?php echo the_post_thumbnail_url(); ?>" alt="photo"><?php } ?>
            </div>
                <?php endwhile; ?>			
		    <?php endif; ?> 
                <!-- Окончание цикла постов Новости-->

                <h2 class="advertising__subtitle">Другие новости</h2>
        <div class="news__swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
      <!-- Начало цикла постов Новости-->
      <?php  
                                        // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => 8,
                        'category_name' => 'news',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                ?>
      <div class="news__slide swiper-slide">
        <a href="<?php the_permalink(); ?>" class="news__block">
            <div class="news__date"><?php echo get_the_date( 'j F Y' ); ?></div>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="photo">
            <div class="news__text"><?php the_title(); ?></div>
        </a>
      </div>
        <?php
            }
            wp_reset_postdata(); // сброс 
        ?> 
                <!-- Окончание цикла постов Новости-->
            </div>
          
          </div>


      </div>

    </section>
  </main>

<?php get_footer(); ?>