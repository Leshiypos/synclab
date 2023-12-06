<?php get_header(); ?>
<main>
    <section class="advertising">
      <div class="container">
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
                </div>
                <?php if (has_post_thumbnail()){?><img class="news-page__img" src="<?php echo the_post_thumbnail_url(); ?>" alt="photo"><?php } ?>
            </div>
            <?php endwhile; ?>			
		<?php endif; ?>
        
      </div>

    </section>
  </main>

<?php get_footer(); ?>