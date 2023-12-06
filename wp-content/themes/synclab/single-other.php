<?php 
/*
    Template name: Другие работы
    Template Post Type: post
*/
?>

<?php get_header(); ?>
<main>
    <section class="advertising">
      <div class="container">
      <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>   
            
            <div class="advertising__bread-crumbs">
            <?php get_breadcrumb(); ?>
            </div>

        <div class="advertising__flexbox">
          <div>
            <h1 class="advertising__title"><?php the_title(); ?></h1>

          <!-- Проверяем, если есть видео - выводим видео, если видео нет выводим превью -->
          <?php if (get_field('url_video')){?>
                  <iframe class="advertising__video-991" src="<?php the_field('url_video'); ?>"
                  title="<?php the_title(); ?>" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
          <?php } elseif (get_field('url_video_vimeo')){?>
                  <iframe class="advertising__video-991" src="<?php the_field('url_video_vimeo'); ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
          <?php } elseif (get_field('video_mp4') || get_field('video_webm') || get_field('video_ogg') || get_field('video_m4a')){ ?>
            <div class="hero__slide swiper-slide">    
            <video class="hero__slide-video advertising__video singl__video" controls="controls" poster="<?php the_post_thumbnail_url('singl-video'); ?>" preload="none">
                <?php if (get_field('video_mp4')){?><source src="<?php the_field('video_mp4');?>" type='video/mp4;'><?php } ?>
                <?php if (get_field('video_webm')){?><source src="<?php the_field('video_webm');?>" type='video/webm;'><?php } ?>
                <?php if (get_field('video_ogg')){?><source src="<?php the_field('video_ogg');?>" type='video/ogg; codecs="theora, vorbis"'><?php } ?>
                <?php if (get_field('video_m4a')){?><source src="<?php the_field('video_m4a');?>"><?php } ?>
                </video>
           </div>
            <?php } else {
                  if (has_post_thumbnail()){?><img class="advertising__video-991" src="<?php echo the_post_thumbnail_url(); ?>" alt="photo"><?php } 
             }?>
          <!-- Окончание, если есть видео - выводим видео, если видео нет выводим превью -->
        
            <span class="advertising__descr-title">
              Бренд:
            </span>
            <span class="advertising__descr-name">
            <?php the_field('brend'); ?>
            </span>
            <span class="advertising__descr-title">
              Год:
            </span>
            <span class="advertising__descr-name">
            <?php the_field('yer'); ?>
            </span>
            <span class="advertising__descr-title">
              Название трека:

            </span>
            <span class="advertising__descr-name">

            <?php the_field('name_trak'); ?>
            </span>
            <span class="advertising__descr-title">
              Задача:


            </span>
            <span class="advertising__descr-name">

            <?php the_field('task'); ?>
            </span>
          </div>
          <!-- Проверяем, если есть видео - выводим видео, если видео нет выводим превью -->
          <?php if (get_field('url_video')){?>
                  <iframe class="advertising__video" src="<?php the_field('url_video'); ?>" width="640" height="360"
                  title="<?php the_title(); ?>" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
          <?php } elseif (get_field('url_video_vimeo')){?>
                  <iframe class="advertising__video" src="<?php the_field('url_video_vimeo'); ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
          <?php } elseif (get_field('video_mp4') || get_field('video_webm') || get_field('video_ogg') || get_field('video_m4a')){ ?>
            <div class="hero__slide swiper-slide">    
            <video class="hero__slide-video advertising__video singl__video" controls="controls" poster="<?php the_post_thumbnail_url('singl-video'); ?>" preload="none">
                <?php if (get_field('video_mp4')){?><source src="<?php the_field('video_mp4');?>" type='video/mp4;'><?php } ?>
                <?php if (get_field('video_webm')){?><source src="<?php the_field('video_webm');?>" type='video/webm;'><?php } ?>
                <?php if (get_field('video_ogg')){?><source src="<?php the_field('video_ogg');?>" type='video/ogg; codecs="theora, vorbis"'><?php } ?>
                <?php if (get_field('video_m4a')){?><source src="<?php the_field('video_m4a');?>"><?php } ?>
                </video>
           </div>
            <?php } else {
                  if (has_post_thumbnail()){?><img class="advertising__video singl__img" src="<?php echo the_post_thumbnail_url('other-thumb'); ?>" alt="photo"><?php } 
             }?>
          <!-- Окончание, если есть видео - выводим видео, если видео нет выводим превью -->
        </div>

          <?php $categories = get_the_category(); // Определяем данные категории для добавления карусиле
              $cat_slug = $categories[0]->slug; // ID самой категории
          ?>
            <?php endwhile; ?>			
		<?php endif; ?>
        
        <h2 class="advertising__subtitle">Похожие работы</h2>
        
        <div class="advertising__swiper advertising__swiper_pl">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
          <!-- Slides -->
          
          <!-- Начало цикла постов Сериалы и кино-->
            <?php  
                // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => 8,
                        'category_name'    => $cat_slug,
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                ?>
                <div class="advertising__slide swiper-slide">
                    <a href="<?php the_permalink(); ?>" class="adv__block film__block">
                        <div class="adv__hover-block">
                            <img src="<?php echo the_post_thumbnail_url('other-thumb'); ?>" alt="photo">
                            <svg class="hover-icon"  width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM41.6538 34.7972C41.2633 34.4067 41.2633 33.7735 41.6538 33.383L45.5429 29.4939C45.9334 29.1034 46.5666 29.1034 46.9571 29.4939L62.867 45.4038L66.7561 49.2929C67.1466 49.6834 67.1466 50.3166 66.7561 50.7071L62.867 54.5962L46.9571 70.5061C46.5666 70.8966 45.9334 70.8966 45.5429 70.5061L41.6538 66.617C41.2633 66.2265 41.2633 65.5933 41.6538 65.2028L56.8566 50L41.6538 34.7972Z" fill="#F7F7F7" fill-opacity="0.85"/>
                                </svg>
                        </div>
                        <h3 class="adv__subtitle">«<?php the_title(); ?>»</h3>
                        <span class="adv__year"><?php the_field('yer'); ?></span>
                    </a>
                </div>
            <?php
                    }
                    wp_reset_postdata(); // сброс 
            ?> 
            <!-- Окончание цикла постов Сериалы и кино--> 
    </div>
    </div>
    
        

    
    </div>
    </section>
  </main>

<?php get_footer(); ?>