        <div class="news_page">
            <a href="<?php the_permalink(); ?>" class="news__block">
                <div class="news__date_page"><?php echo get_the_date( 'j F Y' ); ?></div>
                <img src="<?php the_post_thumbnail_url('news-thumb'); ?>" alt="photo">
                <div class="news__text_page"><?php the_title(); ?></div>
            </a>
        </div>