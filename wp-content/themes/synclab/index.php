<?php 
    get_header();
?>
    <main>
        <section class="hero">
            <div class="container" style="margin-top : 100px">
                <div class="hero__swiper-borders">
                    <!-- Slider main container -->
                    <div class="hero__swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                        <!-- Slides -->
                        
                <!-- Начало цикла постов Рекламы-->
                <?php  
                                        // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'slider',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                      ?>
                        <div class="hero__slide swiper-slide">
                            <video class="hero__slide-video" controls="controls" poster="<?php the_post_thumbnail_url('singl-video'); ?>" preload="none">
                                <?php if (get_field('video_mp4')){?><source src="<?php the_field('video_mp4');?>" type='video/mp4;'><?php } ?>
                                <?php if (get_field('video_webm')){?><source src="<?php the_field('video_webm');?>" type='video/webm;'><?php } ?>
                                <?php if (get_field('video_ogg')){?><source src="<?php the_field('video_ogg');?>" type='video/ogg; codecs="theora, vorbis"'><?php } ?>
                                <?php if (get_field('video_m4a')){?><source src="<?php the_field('video_m4a');?>"><?php } ?>
                            </video>
                        </div>
                               <?php
                    }
                    wp_reset_postdata(); // сброс 
                     ?> 
                <!-- Окончание цикла постов Сериалы и кино-->   
                        </div>
                       
                    
                        <!-- If we need navigation buttons -->
                        

                    </div>
                   
                    <div class="hero__button-prev"></div>
                    <div class="hero__button-next"></div>
                    <svg class="hero__bg-1" width="267" height="264" viewBox="0 0 267 264" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.145 22.2896C17.3001 22.2896 22.2896 17.2999 22.2896 11.1448C22.2896 4.98971 17.3001 0 11.145 0C4.98987 0 0 4.98971 0 11.1448C0 17.2999 4.98987 22.2896 11.145 22.2896Z" fill="#B76FEF"/>
                        <path d="M59.8619 22.2896C66.017 22.2896 71.0068 17.2999 71.0068 11.1448C71.0068 4.98971 66.017 0 59.8619 0C53.7067 0 48.7173 4.98971 48.7173 11.1448C48.7173 17.2999 53.7067 22.2896 59.8619 22.2896Z" fill="#B76FEF"/>
                        <path d="M108.578 22.2896C114.733 22.2896 119.722 17.2999 119.722 11.1448C119.722 4.98971 114.733 0 108.578 0C102.422 0 97.4326 4.98971 97.4326 11.1448C97.4326 17.2999 102.422 22.2896 108.578 22.2896Z" fill="#B76FEF"/>
                        <path d="M157.378 22.2896C163.533 22.2896 168.523 17.2999 168.523 11.1448C168.523 4.98971 163.533 0 157.378 0C151.223 0 146.233 4.98971 146.233 11.1448C146.233 17.2999 151.223 22.2896 157.378 22.2896Z" fill="#B76FEF"/>
                        <path d="M206.096 22.2896C212.251 22.2896 217.24 17.2999 217.24 11.1448C217.24 4.98971 212.251 0 206.096 0C199.941 0 194.951 4.98971 194.951 11.1448C194.951 17.2999 199.941 22.2896 206.096 22.2896Z" fill="#B76FEF"/>
                        <path d="M254.895 22.2896C261.05 22.2896 266.04 17.2999 266.04 11.1448C266.04 4.98971 261.05 0 254.895 0C248.74 0 243.75 4.98971 243.75 11.1448C243.75 17.2999 248.74 22.2896 254.895 22.2896Z" fill="#B76FEF"/>
                        <path d="M11.145 62.4784C17.3001 62.4784 22.2896 57.4887 22.2896 51.3335C22.2896 45.1784 17.3001 40.1887 11.145 40.1887C4.98987 40.1887 0 45.1784 0 51.3335C0 57.4887 4.98987 62.4784 11.145 62.4784Z" fill="#B76FEF"/>
                        <path d="M59.8619 62.4784C66.017 62.4784 71.0068 57.4887 71.0068 51.3335C71.0068 45.1784 66.017 40.1887 59.8619 40.1887C53.7067 40.1887 48.7173 45.1784 48.7173 51.3335C48.7173 57.4887 53.7067 62.4784 59.8619 62.4784Z" fill="#B76FEF"/>
                        <path d="M108.578 62.4784C114.733 62.4784 119.722 57.4887 119.722 51.3335C119.722 45.1784 114.733 40.1887 108.578 40.1887C102.422 40.1887 97.4326 45.1784 97.4326 51.3335C97.4326 57.4887 102.422 62.4784 108.578 62.4784Z" fill="#B76FEF"/>
                        <path d="M157.378 62.4784C163.533 62.4784 168.523 57.4887 168.523 51.3335C168.523 45.1784 163.533 40.1887 157.378 40.1887C151.223 40.1887 146.233 45.1784 146.233 51.3335C146.233 57.4887 151.223 62.4784 157.378 62.4784Z" fill="#B76FEF"/>
                        <path d="M206.096 62.4784C212.251 62.4784 217.24 57.4887 217.24 51.3335C217.24 45.1784 212.251 40.1887 206.096 40.1887C199.941 40.1887 194.951 45.1784 194.951 51.3335C194.951 57.4887 199.941 62.4784 206.096 62.4784Z" fill="#B76FEF"/>
                        <path d="M254.895 62.4784C261.05 62.4784 266.04 57.4887 266.04 51.3335C266.04 45.1784 261.05 40.1887 254.895 40.1887C248.74 40.1887 243.75 45.1784 243.75 51.3335C243.75 57.4887 248.74 62.4784 254.895 62.4784Z" fill="#B76FEF"/>
                        <path d="M11.145 102.668C17.3001 102.668 22.2896 97.6779 22.2896 91.5227C22.2896 85.3676 17.3001 80.3779 11.145 80.3779C4.98987 80.3779 0 85.3676 0 91.5227C0 97.6779 4.98987 102.668 11.145 102.668Z" fill="#B76FEF"/>
                        <path d="M59.8619 102.668C66.017 102.668 71.0068 97.6779 71.0068 91.5227C71.0068 85.3676 66.017 80.3779 59.8619 80.3779C53.7067 80.3779 48.7173 85.3676 48.7173 91.5227C48.7173 97.6779 53.7067 102.668 59.8619 102.668Z" fill="#B76FEF"/>
                        <path d="M108.578 102.668C114.733 102.668 119.722 97.6779 119.722 91.5227C119.722 85.3676 114.733 80.3779 108.578 80.3779C102.422 80.3779 97.4326 85.3676 97.4326 91.5227C97.4326 97.6779 102.422 102.668 108.578 102.668Z" fill="#B76FEF"/>
                        <path d="M157.378 102.668C163.533 102.668 168.523 97.6779 168.523 91.5227C168.523 85.3676 163.533 80.3779 157.378 80.3779C151.223 80.3779 146.233 85.3676 146.233 91.5227C146.233 97.6779 151.223 102.668 157.378 102.668Z" fill="#B76FEF"/>
                        <path d="M206.096 102.668C212.251 102.668 217.24 97.6779 217.24 91.5227C217.24 85.3676 212.251 80.3779 206.096 80.3779C199.941 80.3779 194.951 85.3676 194.951 91.5227C194.951 97.6779 199.941 102.668 206.096 102.668Z" fill="#B76FEF"/>
                        <path d="M254.895 102.668C261.05 102.668 266.04 97.6779 266.04 91.5227C266.04 85.3676 261.05 80.3779 254.895 80.3779C248.74 80.3779 243.75 85.3676 243.75 91.5227C243.75 97.6779 248.74 102.668 254.895 102.668Z" fill="#B76FEF"/>
                        <path d="M11.145 142.856C17.3001 142.856 22.2896 137.867 22.2896 131.711C22.2896 125.556 17.3001 120.567 11.145 120.567C4.98987 120.567 0 125.556 0 131.711C0 137.867 4.98987 142.856 11.145 142.856Z" fill="#B76FEF"/>
                        <path d="M59.8619 142.856C66.017 142.856 71.0068 137.867 71.0068 131.711C71.0068 125.556 66.017 120.567 59.8619 120.567C53.7067 120.567 48.7173 125.556 48.7173 131.711C48.7173 137.867 53.7067 142.856 59.8619 142.856Z" fill="#B76FEF"/>
                        <path d="M108.578 142.856C114.733 142.856 119.722 137.867 119.722 131.711C119.722 125.556 114.733 120.567 108.578 120.567C102.422 120.567 97.4326 125.556 97.4326 131.711C97.4326 137.867 102.422 142.856 108.578 142.856Z" fill="#B76FEF"/>
                        <path d="M157.378 142.856C163.533 142.856 168.523 137.867 168.523 131.711C168.523 125.556 163.533 120.567 157.378 120.567C151.223 120.567 146.233 125.556 146.233 131.711C146.233 137.867 151.223 142.856 157.378 142.856Z" fill="#B76FEF"/>
                        <path d="M206.096 142.856C212.251 142.856 217.24 137.867 217.24 131.711C217.24 125.556 212.251 120.567 206.096 120.567C199.941 120.567 194.951 125.556 194.951 131.711C194.951 137.867 199.941 142.856 206.096 142.856Z" fill="#B76FEF"/>
                        <path d="M254.895 142.856C261.05 142.856 266.04 137.867 266.04 131.711C266.04 125.556 261.05 120.567 254.895 120.567C248.74 120.567 243.75 125.556 243.75 131.711C243.75 137.867 248.74 142.856 254.895 142.856Z" fill="#B76FEF"/>
                        <path d="M11.145 183.045C17.3001 183.045 22.2896 178.056 22.2896 171.9C22.2896 165.745 17.3001 160.756 11.145 160.756C4.98987 160.756 0 165.745 0 171.9C0 178.056 4.98987 183.045 11.145 183.045Z" fill="#B76FEF"/>
                        <path d="M59.8619 183.045C66.017 183.045 71.0068 178.056 71.0068 171.9C71.0068 165.745 66.017 160.756 59.8619 160.756C53.7067 160.756 48.7173 165.745 48.7173 171.9C48.7173 178.056 53.7067 183.045 59.8619 183.045Z" fill="#B76FEF"/>
                        <path d="M108.578 183.045C114.733 183.045 119.722 178.056 119.722 171.9C119.722 165.745 114.733 160.756 108.578 160.756C102.422 160.756 97.4326 165.745 97.4326 171.9C97.4326 178.056 102.422 183.045 108.578 183.045Z" fill="#B76FEF"/>
                        <path d="M157.378 183.045C163.533 183.045 168.523 178.056 168.523 171.9C168.523 165.745 163.533 160.756 157.378 160.756C151.223 160.756 146.233 165.745 146.233 171.9C146.233 178.056 151.223 183.045 157.378 183.045Z" fill="#B76FEF"/>
                        <path d="M206.096 183.045C212.251 183.045 217.24 178.056 217.24 171.9C217.24 165.745 212.251 160.756 206.096 160.756C199.941 160.756 194.951 165.745 194.951 171.9C194.951 178.056 199.941 183.045 206.096 183.045Z" fill="#B76FEF"/>
                        <path d="M254.895 183.045C261.05 183.045 266.04 178.056 266.04 171.9C266.04 165.745 261.05 160.756 254.895 160.756C248.74 160.756 243.75 165.745 243.75 171.9C243.75 178.056 248.74 183.045 254.895 183.045Z" fill="#B76FEF"/>
                        <path d="M11.145 223.234C17.3001 223.234 22.2896 218.244 22.2896 212.089C22.2896 205.934 17.3001 200.944 11.145 200.944C4.98987 200.944 0 205.934 0 212.089C0 218.244 4.98987 223.234 11.145 223.234Z" fill="#B76FEF"/>
                        <path d="M59.8619 223.234C66.017 223.234 71.0068 218.244 71.0068 212.089C71.0068 205.934 66.017 200.944 59.8619 200.944C53.7067 200.944 48.7173 205.934 48.7173 212.089C48.7173 218.244 53.7067 223.234 59.8619 223.234Z" fill="#B76FEF"/>
                        <path d="M108.578 223.234C114.733 223.234 119.722 218.244 119.722 212.089C119.722 205.934 114.733 200.944 108.578 200.944C102.422 200.944 97.4326 205.934 97.4326 212.089C97.4326 218.244 102.422 223.234 108.578 223.234Z" fill="#B76FEF"/>
                        <path d="M157.378 223.234C163.533 223.234 168.523 218.244 168.523 212.089C168.523 205.934 163.533 200.944 157.378 200.944C151.223 200.944 146.233 205.934 146.233 212.089C146.233 218.244 151.223 223.234 157.378 223.234Z" fill="#B76FEF"/>
                        <path d="M206.096 223.234C212.251 223.234 217.24 218.244 217.24 212.089C217.24 205.934 212.251 200.944 206.096 200.944C199.941 200.944 194.951 205.934 194.951 212.089C194.951 218.244 199.941 223.234 206.096 223.234Z" fill="#B76FEF"/>
                        <path d="M254.895 223.234C261.05 223.234 266.04 218.244 266.04 212.089C266.04 205.934 261.05 200.944 254.895 200.944C248.74 200.944 243.75 205.934 243.75 212.089C243.75 218.244 248.74 223.234 254.895 223.234Z" fill="#B76FEF"/>
                        <path d="M11.145 263.423C17.3001 263.423 22.2896 258.433 22.2896 252.278C22.2896 246.123 17.3001 241.133 11.145 241.133C4.98987 241.133 0 246.123 0 252.278C0 258.433 4.98987 263.423 11.145 263.423Z" fill="#B76FEF"/>
                        <path d="M59.8619 263.423C66.017 263.423 71.0068 258.433 71.0068 252.278C71.0068 246.123 66.017 241.133 59.8619 241.133C53.7067 241.133 48.7173 246.123 48.7173 252.278C48.7173 258.433 53.7067 263.423 59.8619 263.423Z" fill="#B76FEF"/>
                        <path d="M108.578 263.423C114.733 263.423 119.722 258.433 119.722 252.278C119.722 246.123 114.733 241.133 108.578 241.133C102.422 241.133 97.4326 246.123 97.4326 252.278C97.4326 258.433 102.422 263.423 108.578 263.423Z" fill="#B76FEF"/>
                        <path d="M157.378 263.423C163.533 263.423 168.523 258.433 168.523 252.278C168.523 246.123 163.533 241.133 157.378 241.133C151.223 241.133 146.233 246.123 146.233 252.278C146.233 258.433 151.223 263.423 157.378 263.423Z" fill="#B76FEF"/>
                        <path d="M206.096 263.423C212.251 263.423 217.24 258.433 217.24 252.278C217.24 246.123 212.251 241.133 206.096 241.133C199.941 241.133 194.951 246.123 194.951 252.278C194.951 258.433 199.941 263.423 206.096 263.423Z" fill="#B76FEF"/>
                        <path d="M254.895 263.423C261.05 263.423 266.04 258.433 266.04 252.278C266.04 246.123 261.05 241.133 254.895 241.133C248.74 241.133 243.75 246.123 243.75 252.278C243.75 258.433 248.74 263.423 254.895 263.423Z" fill="#B76FEF"/>
                        </svg>
                        <svg class="hero__bg-2" width="298" height="196" viewBox="0 0 298 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 117.139L92.2307 171L113.888 77.2163L191.119 134.824L212.777 41L289 99.0105" stroke="#19223F" stroke-width="28.7888" stroke-miterlimit="10"/>
                            <path d="M9 101.122L81.2307 155L102.888 61.1873L180.119 118.813L201.777 25L278 82.9882" stroke="#FF2AAC" stroke-width="28.7888" stroke-miterlimit="10"/>
                            </svg>
                                                    
                </div>
            </div>
        </section>
        <section class="ReklamaBlog" id="ReklamaBlog">
            <div class="container">
                <h2 class="adv__title title">Реклама</h2>
                <div class="adv__socket">

                <!-- Начало цикла постов Рекламы-->
                <?php  
                                        // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => 5,
                        'category_name'    => 'advertising',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                ?>
                    <a href="<?php the_permalink(); ?>" class="adv__block">
                        <div class="adv__hover-block">
                            <img src="<?php echo the_post_thumbnail_url('other-thumb');?>" alt="photo">
                            <svg class="hover-icon"  width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM41.6538 34.7972C41.2633 34.4067 41.2633 33.7735 41.6538 33.383L45.5429 29.4939C45.9334 29.1034 46.5666 29.1034 46.9571 29.4939L62.867 45.4038L66.7561 49.2929C67.1466 49.6834 67.1466 50.3166 66.7561 50.7071L62.867 54.5962L46.9571 70.5061C46.5666 70.8966 45.9334 70.8966 45.5429 70.5061L41.6538 66.617C41.2633 66.2265 41.2633 65.5933 41.6538 65.2028L56.8566 50L41.6538 34.7972Z" fill="#F7F7F7" fill-opacity="0.85"/>
                                </svg>
                                
                        </div>
                        <h3 class="adv__subtitle">«<?php the_title(); ?>»</h3>
                        <span class="adv__year"><?php the_field('yer'); ?></span>
                    </a>
                <?php
                    }
                    wp_reset_postdata(); // сброс 
                ?> 
                <!-- Окончание цикла постов Рекламы-->

                    <a href="<?php echo get_category_link(3);?>" class="adv__block adv__block_last">
                        Посмотреть все работы
                        <svg width="126" height="38" viewBox="0 0 126 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 16.5C1.61929 16.5 0.5 17.6193 0.5 19C0.5 20.3807 1.61929 21.5 3 21.5V16.5ZM124.768 20.7678C125.744 19.7915 125.744 18.2085 124.768 17.2322L108.858 1.32233C107.882 0.34602 106.299 0.34602 105.322 1.32233C104.346 2.29864 104.346 3.88155 105.322 4.85786L119.464 19L105.322 33.1421C104.346 34.1184 104.346 35.7014 105.322 36.6777C106.299 37.654 107.882 37.654 108.858 36.6777L124.768 20.7678ZM3 21.5H123V16.5H3V21.5Z" fill="#1D1A31"/>
                            </svg>
                            
                    </a>
                </div>
            </div>
        </section>
        <section class="movies">
            <div class="container">
                <h2 class="movies__title adv__title title">Сериалы и кино</h2>
                <div class="movies__socket adv__socket">
                    
                <!-- Начало цикла постов Сериалы и кино-->
                <?php  
                // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => 7,
                        'category_name'    => 'series_and_films',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    global $post;
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                ?>
                    <a href="<?php the_permalink(); ?>" class="adv__block">
                        <div class="adv__hover-block">
                            <img src="<?php echo the_post_thumbnail_url('film-thumb'); ?>" alt="photo">
                            <svg class="hover-icon"  width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM41.6538 34.7972C41.2633 34.4067 41.2633 33.7735 41.6538 33.383L45.5429 29.4939C45.9334 29.1034 46.5666 29.1034 46.9571 29.4939L62.867 45.4038L66.7561 49.2929C67.1466 49.6834 67.1466 50.3166 66.7561 50.7071L62.867 54.5962L46.9571 70.5061C46.5666 70.8966 45.9334 70.8966 45.5429 70.5061L41.6538 66.617C41.2633 66.2265 41.2633 65.5933 41.6538 65.2028L56.8566 50L41.6538 34.7972Z" fill="#F7F7F7" fill-opacity="0.85"/>
                                </svg>
                                
                        </div>
                        <h3 class="adv__subtitle">«<?php the_title(); ?>»</h3>
                        <span class="movies__season"><?php the_field('season'); ?></span>
                        <span class="adv__year"><?php the_field('yer_serial'); ?></span>
                    </a>
                    <?php
                    }
                    wp_reset_postdata(); // сброс 
                ?> 
                <!-- Окончание цикла постов Сериалы и кино-->    

                    <a href="<?php echo bloginfo('home').'/serialy-i-kino';?>" class="adv__block adv__block_last">
                        Посмотреть все работы
                        <svg width="126" height="38" viewBox="0 0 126 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 16.5C1.61929 16.5 0.5 17.6193 0.5 19C0.5 20.3807 1.61929 21.5 3 21.5V16.5ZM124.768 20.7678C125.744 19.7915 125.744 18.2085 124.768 17.2322L108.858 1.32233C107.882 0.34602 106.299 0.34602 105.322 1.32233C104.346 2.29864 104.346 3.88155 105.322 4.85786L119.464 19L105.322 33.1421C104.346 34.1184 104.346 35.7014 105.322 36.6777C106.299 37.654 107.882 37.654 108.858 36.6777L124.768 20.7678ZM3 21.5H123V16.5H3V21.5Z" fill="#1D1A31"/>
                            </svg>
                            
                    </a>
                </div>
            </div>
        </section>
                <?php  
                // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => 5,
                        'category_name'    => 'music_prodaction',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                if ($my_posts){?>
                <section class="music">
                    <div class="container">
                        <h2 class="music__title adv__title title">Производство музыки</h2>
                        <div class="music__socket adv__socket"><?php } ?>
                    
                <!-- Начало цикла постов Производство музыки-->


                <?php    global $post;
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                ?>
                <a href="<?php the_permalink(); ?>" class="adv__block">
                        <div class="adv__hover-block">
                            <img src="<?php echo the_post_thumbnail_url('other-thumb'); ?>" alt="photo">
                            <svg class="hover-icon"  width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM41.6538 34.7972C41.2633 34.4067 41.2633 33.7735 41.6538 33.383L45.5429 29.4939C45.9334 29.1034 46.5666 29.1034 46.9571 29.4939L62.867 45.4038L66.7561 49.2929C67.1466 49.6834 67.1466 50.3166 66.7561 50.7071L62.867 54.5962L46.9571 70.5061C46.5666 70.8966 45.9334 70.8966 45.5429 70.5061L41.6538 66.617C41.2633 66.2265 41.2633 65.5933 41.6538 65.2028L56.8566 50L41.6538 34.7972Z" fill="#F7F7F7" fill-opacity="0.85"/>
                                </svg>
                                
                        </div>
                        <h3 class="adv__subtitle"><?php the_title(); ?></h3>
                        <span class="adv__year"><?php the_field('yer'); ?></span>
                    </a>
                    <?php
                    }
                    wp_reset_postdata(); // сброс 
                ?> 
                <!-- Окончание цикла постов Производство музыки--> 
                <?php if ($my_posts){?>
                    <a href="<?php echo get_category_link(5);?>" class="adv__block adv__block_last">
                        Посмотреть все работы
                        <svg width="126" height="38" viewBox="0 0 126 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 16.5C1.61929 16.5 0.5 17.6193 0.5 19C0.5 20.3807 1.61929 21.5 3 21.5V16.5ZM124.768 20.7678C125.744 19.7915 125.744 18.2085 124.768 17.2322L108.858 1.32233C107.882 0.34602 106.299 0.34602 105.322 1.32233C104.346 2.29864 104.346 3.88155 105.322 4.85786L119.464 19L105.322 33.1421C104.346 34.1184 104.346 35.7014 105.322 36.6777C106.299 37.654 107.882 37.654 108.858 36.6777L124.768 20.7678ZM3 21.5H123V16.5H3V21.5Z" fill="#1D1A31"/>
                            </svg>
                            
                    </a>
                </div>
            </div>
        </section>
        <?php } ?> <!-- Если нет постов то блок не выводится--> 



        <section class="music-library">
            <div class="container">
                <h2 class="music-library__title title">Музыкальные библиотеки</h2>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed music-library__block first-block" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        
                            <img src="<?php echo bloginfo( 'template_url' )?>/assets/img/music-library-1.png" alt="logo">
                       
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <div class="acc-block">
                        <h3 class="acc__title"><?php the_field('nazvanie_fonoteki_synclab', 2); ?></h3>
                        <div class="acc-block-2">
                            <a class="acc__link" href="<?php the_field('website_synclab', 2); ?>"><?php the_field('website_synclab'); ?></a>
                            <span class="acc__count"><?php the_field('number_of_tracks_synclab', 2); ?></span>
                        </div>
                    </div>
                        <span class="acc__text">Описание фонотеки</span>
                        <p class="acc__paragraph"><?php the_field('descript_fonoteki_synclab', 2); ?></p>
                        <button class="acc__btn btn-reset button" data-bs-toggle="modal" data-bs-target="#fonoteka">Запросить доступ к фонотеке</button>
                   
                    
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed music-library__block second-block" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <img src="<?php echo bloginfo( 'template_url' )?>/assets/img/music-library-2.png" alt="logo">
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="acc-block">
                        <h3 class="acc__title"><?php the_field('nazvanie_fonoteki_neosound', 2); ?></h3>
                        <div class="acc-block-2">
                            <a class="acc__link" href="<?php the_field('website_neosound', 2); ?>"><?php the_field('website_neosound'); ?></a>
                            <span class="acc__count"><?php the_field('number_of_tracks_neosound', 2); ?></span>
                        </div>
                    </div>
                        <span class="acc__text">Описание фонотеки</span>
                        <p class="acc__paragraph"><?php the_field('descript_fonoteki_neosound', 2); ?></p>
                          <button class="acc__btn btn-reset button" data-bs-toggle="modal" data-bs-target="#fonoteka">Запросить доступ к фонотеке</button>
                     
                      
                      </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed music-library__block third-block" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <img src="<?php echo bloginfo( 'template_url' )?>/assets/img/music-library-3.png" alt="logo">
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="acc-block">
                        <h3 class="acc__title"><?php the_field('nazvanie_fonoteki_soundscape', 2); ?></h3>
                        <div class="acc-block-2">
                            <a class="acc__link" href="<?php the_field('website_soundscape', 2); ?>"><?php the_field('website_soundscape'); ?></a>
                            <span class="acc__count"><?php the_field('number_of_tracks_soundscape', 2); ?></span>
                        </div>
                    </div>
                        <span class="acc__text">Описание фонотеки</span>
                        <p class="acc__paragraph"><?php the_field('descript_fonoteki_soundscape', 2); ?></p>
                          <button class="acc__btn btn-reset button" data-bs-toggle="modal" data-bs-target="#fonoteka">Запросить доступ к фонотеке</button>
                     
                      
                      </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFourth">
                      <button class="accordion-button collapsed music-library__block fourth-block" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                          <img src="<?php echo bloginfo( 'template_url' )?>/assets/img/music-library-4.png" alt="logo">
                      </button>
                    </h2>
                    <div id="collapseFourth" class="accordion-collapse collapse" aria-labelledby="headingFourth" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="acc-block">
                            <h3 class="acc__title"><?php the_field('nazvanie_fonoteki_adonys', 2); ?></h3>
                        <div class="acc-block-2">
                            <a class="acc__link" href="<?php the_field('website_adonys', 2); ?>"><?php the_field('website_adonys'); ?></a>
                            <span class="acc__count"><?php the_field('number_of_tracks_adonys', 2); ?></span>
                        </div>
                    </div>
                        <span class="acc__text">Описание фонотеки</span>
                        <p class="acc__paragraph"><?php the_field('descript_fonoteki_adonys', 2); ?></p>
                              <button class="acc__btn btn-reset button" data-bs-toggle="modal" data-bs-target="#fonoteka">Запросить доступ к фонотеке</button>
                         
                          
                          </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFivth">
                      <button class="accordion-button collapsed music-library__block fivth-block" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivth" aria-expanded="false" aria-controls="collapseFivth">
                          <img src="<?php echo bloginfo( 'template_url' )?>/assets/img/music-library-5.png" alt="logo">
                      </button>
                    </h2>
                    <div id="collapseFivth" class="accordion-collapse collapse" aria-labelledby="headingFivth" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="acc-block">
                            <h3 class="acc__title"><?php the_field('nazvanie_fonoteki_cinephonix', 2); ?></h3>
                        <div class="acc-block-2">
                            <a class="acc__link" href="<?php the_field('website_cinephonix', 2); ?>"><?php the_field('website_cinephonix'); ?></a>
                            <span class="acc__count"><?php the_field('number_of_tracks_cinephonix', 2); ?></span>
                        </div>
                    </div>
                        <span class="acc__text">Описание фонотеки</span>
                        <p class="acc__paragraph"><?php the_field('descript_fonoteki_cinephonix', 2); ?></p>
                              <button class="acc__btn btn-reset button" data-bs-toggle="modal" data-bs-target="#fonoteka">Запросить доступ к фонотеке</button>
                         
                          
                          </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                      <button class="accordion-button collapsed music-library__block six-block" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          <img src="<?php echo bloginfo( 'template_url' )?>/assets/img/music-library-6.png" alt="logo">
                      </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="acc-block">
                            <h3 class="acc__title"><?php the_field('nazvanie_fonoteki_squirkymusic', 2); ?></h3>
                        <div class="acc-block-2">
                            <a class="acc__link" href="<?php the_field('website_squirkymusic', 2); ?>"><?php the_field('website_squirkymusic'); ?></a>
                            <span class="acc__count"><?php the_field('number_of_tracks_squirkymusic', 2); ?></span>
                        </div>
                    </div>
                        <span class="acc__text">Описание фонотеки</span>
                        <p class="acc__paragraph"><?php the_field('descript_fonoteki_squirkysusic', 2); ?></p>
                              <button class="acc__btn btn-reset button" data-bs-toggle="modal" data-bs-target="#fonoteka">Запросить доступ к фонотеке</button>
                         
                          
                          </div>
                    </div>
                  </div>
              </div>
        </section>
        <section class="rules" id="rules">
            <div class="container">
                <h2 class="rules__title adv__title title">Правила приёма репертуара</h2>
                <div class="rules__block">
                    <span class="rules__text"><?php the_field('description_PPR', 2); ?></span>
                        <svg class="rules__icon" width="280" height="114" viewBox="0 0 280 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M114.82 97.6901C113.497 97.6901 112.09 97.6059 110.711 97.6901C108.488 97.8865 106.293 97.8584 104.126 97.2973C95.1769 95.0247 92.419 87.141 94.4734 79.7061C94.7266 78.7522 95.0925 77.7983 95.2895 76.8444C95.6553 75.1891 95.3457 74.4876 93.8542 73.702C93.0663 73.2812 92.1376 73.0568 91.2652 72.7762C88.423 71.8504 85.5525 71.0086 82.7665 69.9425C79.4458 68.6519 76.8005 66.3514 74.4929 63.686C72.2135 61.0207 70.4124 58.0467 68.8928 54.8764C67.8234 52.6319 67.9641 50.3313 68.2174 47.9746C68.33 47.0487 68.4707 46.1228 68.4425 45.2251C68.3581 43.5697 67.5139 42.4195 65.8817 41.9144C65.4033 41.7742 64.9249 41.6339 64.4183 41.5497C60.169 41.0447 55.9196 40.6239 51.614 41.0447C44.2409 41.7461 36.8397 42.4475 29.4667 43.0086C24.4857 43.4014 19.4484 43.4575 14.5517 42.3634C11.7095 41.7181 8.92346 40.7361 6.25003 39.5858C2.02882 37.7902 0.509182 34.1149 0.0307776 29.8503C0.0307776 29.7662 0.0307776 29.71 0.0307776 29.6258C-0.363202 23.2571 3.04191 18.4034 9.2893 16.6358C15.7055 14.8122 22.3188 14.1388 28.8757 13.3252C35.3764 12.5116 41.9333 12.0346 48.434 11.221C54.6533 10.4635 60.8444 9.4254 67.0636 8.58372C72.72 7.8262 78.4046 7.23706 84.0329 6.42343C97.6533 4.40339 111.33 4.40333 125.035 5.04862C133.309 5.44141 141.582 5.5537 149.799 4.23505C156.778 3.11281 163.758 3.98252 170.737 4.03864C178.701 4.09475 186.186 6.39536 193.841 8.1629C201.467 9.93044 208.559 13.1288 215.904 15.6538C218.802 16.6639 221.813 17.2811 224.768 18.1228C226.288 18.5436 227.413 17.9265 228.37 16.8603C229.496 15.6259 230.115 14.1389 230.368 12.4555C230.593 10.9966 230.987 9.53767 231.353 8.10681C231.916 5.89037 233.351 4.5717 235.603 4.1228C240.218 3.19695 244.833 2.24301 249.448 1.37327C251.84 0.92437 254.26 0.67189 256.624 0.166878C260.874 -0.730919 263.688 2.13084 264.082 5.46953C264.926 12.4836 266.671 19.3011 268.556 26.0907C270.048 31.5056 271.089 37.0327 272.243 42.5317C273.312 47.694 274.41 52.8283 275.282 58.0187C275.817 61.2451 276.154 64.5277 276.154 67.7822C276.126 76.9566 277.196 85.9346 279.503 94.8003C279.756 95.7542 279.869 96.7642 279.953 97.7462C280.319 101.337 278.518 103.89 275.001 104.76C273.819 105.041 272.637 105.293 271.427 105.406C266.671 105.882 261.915 106.359 257.159 106.78C253.106 107.117 249.561 105.967 246.55 103.161C245.002 101.702 243.313 100.355 241.737 98.9246C239.514 96.9045 237.038 96.3434 234.252 97.6059C231.719 98.7562 229.158 99.8224 226.682 101.029C220.491 104.031 213.962 105.658 207.152 106.135C198.456 106.752 189.76 106.752 181.064 106.247C176.787 105.995 172.509 105.826 168.232 105.63C167.81 105.63 167.36 105.63 166.966 105.49C163.223 104.367 159.818 105.546 156.384 106.893C151.938 108.632 147.492 110.371 142.933 111.774C137.473 113.486 131.845 114.412 126.048 113.822C122.446 113.458 119.463 111.999 117.183 109.249C115.861 107.65 114.988 105.742 114.876 103.61C114.791 101.73 114.876 99.8224 114.876 97.6059L114.82 97.6901ZM195.839 102.852C202.227 102.796 208.531 102.46 214.75 100.748C222.264 98.7001 228.961 94.8845 235.603 91.0127C236.081 90.7322 236.503 90.3113 236.841 89.8624C240.527 84.9526 242.582 79.6219 241.372 73.3093C240.64 69.5498 240.302 65.706 239.824 61.8904C239.092 56.0267 238.529 50.1629 236.981 44.4395C235.94 40.5397 235.124 36.5557 234.195 32.5998C233.886 31.225 233.52 29.8223 233.267 28.4475C233.042 27.2131 232.338 26.3433 231.241 25.8944C228.82 24.8844 226.428 23.6779 223.896 23.0607C216.973 21.3212 210.247 18.9925 203.493 16.6358C198.709 14.9805 193.897 13.2691 188.972 12.2591C181.008 10.6038 172.988 9.42542 164.827 9.03262C160.409 8.83624 156.131 9.06065 151.938 10.4073C147.858 11.6979 143.89 13.2972 139.837 14.6719C133.393 16.8323 127.146 19.3853 121.18 22.6118C116.621 25.0807 113.216 28.7561 109.81 32.5156C109.585 32.7681 109.388 33.0767 109.191 33.3854C108.741 34.199 108.713 35.0406 109.191 35.8262C109.557 36.4435 109.979 37.0327 110.458 37.5377C113.722 40.8203 115.439 44.5797 114.341 49.3212C114.004 50.8082 114.904 51.5938 116.452 51.3974C117.015 51.3133 117.606 51.201 118.084 50.9204C120.251 49.686 122.474 48.5357 124.472 47.0768C126.414 45.6459 128.412 44.5518 130.776 44.0467C131.817 43.8223 132.83 43.4856 133.899 43.2612C137.051 42.6159 139.5 40.8483 141.413 38.3233C142.257 37.201 142.905 35.9104 143.636 34.704C144.115 33.9184 144.565 33.1048 145.128 32.3754C145.803 31.5337 146.76 31.5337 147.661 31.9265C148.702 32.3754 148.561 33.2732 148.308 34.1148C148.026 35.0687 147.632 35.9946 147.323 36.9485C146.788 38.6319 146.225 40.3433 145.831 42.0547C145.494 43.5417 145.634 45.0287 146.451 46.3754C148.42 49.6299 152.529 51.0327 156.159 49.658C159.649 48.3393 162.125 45.8142 164.292 42.9525C167.275 39.0527 170.174 35.0688 173.1 31.1409C173.326 30.8603 173.551 30.5798 173.804 30.3553C174.62 29.71 175.774 29.6259 176.365 30.187C177.068 30.8603 176.843 31.6178 176.506 32.3473C176.252 32.8523 176.027 33.3854 175.718 33.8623C173.86 36.6399 172.059 39.4455 170.117 42.195C168.654 44.2431 167.331 46.3193 166.881 48.8443C165.924 54.1469 169.245 58.3554 174.592 58.664C175.295 58.692 176.027 58.7201 176.731 58.664C181.909 58.2992 187.115 58.2431 192.152 56.5317C198.625 54.3433 205.21 52.4636 211.739 50.4435C214.609 49.5457 217.451 48.6198 220.322 47.7501C222.01 47.2451 223.502 48.2832 223.389 49.8824C223.305 51.0888 222.376 51.5377 221.419 51.8743C216.382 53.6419 211.373 55.6059 206.251 57.0928C200.088 58.8604 193.813 60.2351 187.565 61.666C185.567 62.1149 183.485 62.2832 181.43 62.5077C179.235 62.7321 177.04 62.8724 174.817 63.0968C173.691 63.209 173.129 63.8263 173.213 64.696C173.297 65.7341 174.029 65.9025 174.873 65.9586C177.8 66.0989 180.727 66.4075 183.625 66.3794C189.535 66.2952 195.473 66.1269 201.383 65.8463C205.294 65.678 209.234 65.5096 213.005 64.3313C214.975 63.714 216.973 63.1249 218.971 62.6479C219.534 62.5076 220.181 62.7601 220.772 62.8443C220.631 63.4896 220.631 64.2471 220.294 64.7802C218.887 66.9405 216.72 68.0628 214.271 68.4836C204.366 70.2231 194.404 71.682 184.273 71.177C182.359 71.0928 180.417 71.0929 178.504 71.2332C175.324 71.4857 174.761 72.4396 175.943 75.3574C175.999 75.4977 176.055 75.6099 176.112 75.7502C177.631 79.5097 177.181 83.0167 174.536 86.131C173.297 87.5899 171.975 89.0207 170.568 90.2832C168.232 92.3874 165.784 94.3514 163.42 96.3995C162.21 97.4376 161.872 98.7562 162.322 100.047C162.801 101.422 163.983 101.506 165.108 101.534C167.894 101.646 170.68 101.702 173.438 101.758C175.577 101.814 177.716 101.758 179.854 101.899C185.201 102.207 190.52 102.6 195.867 102.965L195.839 102.852ZM84.4269 36.9204C87.6913 36.6679 90.3084 36.4435 92.9256 36.219C97.3719 35.8824 101.509 34.676 104.886 31.674C106.827 29.9345 108.516 27.8864 110.345 25.9786C112.822 23.3974 115.467 21.0407 118.703 19.3854C123.346 17.0286 128.102 14.9525 133.196 13.69C134.153 13.4375 135.11 13.1288 136.01 12.6799C136.404 12.4835 136.911 11.8663 136.826 11.5858C136.714 11.1369 136.207 10.6037 135.757 10.4915C134.293 10.1548 132.802 9.81817 131.339 9.79011C128.496 9.70594 125.654 9.87428 122.784 9.87428C110.148 9.95845 97.5689 10.7721 85.046 12.5677C81.9786 13.0166 79.0519 13.5777 76.491 15.5697C74.4648 17.1408 72.2135 17.0567 69.7933 16.1308C68.1048 15.4855 66.2475 15.0927 64.4183 14.9524C62.3077 14.8122 60.1127 14.8122 58.0302 15.205C54.006 15.9345 49.8411 16.215 46.5204 19.217C44.4942 21.0407 42.1585 21.1249 39.8509 19.4976C37.9373 18.1509 35.7985 17.8422 33.5191 18.2911C32.2527 18.5436 30.9863 18.7681 29.7481 19.0206C26.2586 19.7501 22.769 20.4795 19.2795 21.209C16.9719 21.686 14.6925 22.2471 12.7226 23.6499C10.6401 25.1088 9.59886 27.0166 9.627 29.5978C9.68328 32.5437 11.2592 34.3674 13.6794 35.6299C16.4935 37.0888 19.5609 37.9304 22.7128 37.9304C26.1179 37.9304 29.5511 37.5377 32.9562 37.5658C36.3613 37.5938 39.2318 36.5276 41.8208 34.4234C42.0459 34.2551 42.271 34.0867 42.4962 33.8903C43.65 32.8803 44.9445 32.7962 46.2671 33.4976C47.2802 34.0307 48.2089 34.732 49.222 35.209C50.2913 35.714 51.4451 36.2752 52.5708 36.3874C54.2593 36.5557 55.9759 36.3032 57.6644 36.2471C61.0132 36.1349 64.362 36.0507 67.7109 35.8824C69.7089 35.7702 71.6225 35.3774 73.3673 34.199C75.3653 32.8523 76.6598 33.1329 78.489 34.8443C79.1363 35.4335 79.9805 35.9665 80.8248 36.219C82.1756 36.6118 83.6108 36.7521 84.4269 36.8924V36.9204ZM260.986 80.8564C260.986 83.2131 260.902 85.5417 261.042 87.8984C261.099 88.9085 261.465 90.0027 262.027 90.8444C263.181 92.5558 265.038 92.2472 265.77 90.3113C265.995 89.7221 266.023 89.0487 266.023 88.4315C266.052 86.8604 266.08 85.2893 266.023 83.7462C265.883 80.5478 265.883 77.3494 265.432 74.179C265.01 71.149 264.11 68.2031 263.463 65.2291C263.153 63.7702 262.928 62.2832 262.703 60.8243C262.59 59.9826 262.759 59.197 263.716 59.0006C264.588 58.8323 264.982 59.4215 265.235 60.179C265.292 60.3754 265.376 60.5718 265.432 60.7963C266.53 65.0608 267.656 69.3253 267.909 73.7582C268.021 75.7502 268.134 77.7422 268.247 79.7061C268.331 81.2211 268.894 82.147 269.935 82.3434C270.948 82.5398 271.821 81.9225 272.243 80.2952C272.58 78.9205 272.805 77.4616 272.693 76.0868C271.849 66.5197 271.033 56.9525 269.119 47.5257C267.627 40.2311 265.798 32.9926 264.053 25.7261C263.209 22.191 262.252 18.712 261.408 15.1769C260.789 12.6519 259.185 10.9404 257.046 9.62178C253.444 7.40534 249.73 8.94849 248.942 13.1008C248.632 14.7561 248.604 16.5237 248.829 18.179C249.251 21.714 249.87 25.2211 250.489 28.7C251.84 36.3313 253.163 43.9626 255.527 51.3974C256.399 54.175 257.356 56.9525 258.059 59.7581C259.804 66.688 260.845 73.7021 261.042 80.8564H260.986ZM110.852 93.4536C111.527 93.4536 111.893 93.5097 112.259 93.4536C117.971 92.64 123.712 92.2471 129.312 90.6199C136.151 88.6279 142.117 85.177 147.689 80.8564C148.139 80.5197 148.505 80.0708 148.871 79.6219C149.659 78.5838 149.518 78.0227 148.28 77.5177C147.829 77.3213 147.295 77.2933 146.845 77.0688C145.409 76.3393 143.862 75.6941 142.567 74.7121C140.597 73.1971 139.443 71.0928 139.049 68.5678C138.712 66.3794 137.417 65.8744 135.532 67.0247C134.687 67.5297 133.843 68.0909 132.943 68.5117C129.115 70.3634 125.035 71.3173 120.842 71.8784C115.467 72.6079 110.092 73.2812 104.717 73.9265C102.494 74.179 101.087 75.3013 100.214 77.3213C99.0885 80.0147 98.8634 82.8483 99.1167 85.7101C99.37 88.684 102.719 92.8083 106.462 93.0888C108.038 93.2011 109.585 93.3413 110.824 93.4255L110.852 93.4536ZM250.968 76.3393C251.334 77.181 251.671 77.7702 251.812 78.3874C252.206 80.4917 252.487 82.5959 252.91 84.7001C253.219 86.2151 253.5 87.7862 254.063 89.2171C254.57 90.5638 255.977 90.7041 256.709 89.4697C257.3 88.4596 257.806 87.2251 257.778 86.1029C257.44 76.2552 256.343 66.5477 253.135 57.1489C251.418 52.1549 249.927 47.1048 249.251 41.8864C248.379 35.1529 246.578 28.6439 244.777 22.1349C244.129 19.7501 242.019 18.9925 239.936 20.3112C237.882 21.6298 237.01 23.6499 237.15 25.9505C237.263 27.7741 237.798 29.5697 238.192 31.3653C238.811 34.0587 239.542 36.724 240.161 39.4455C240.696 41.8022 241.175 44.1589 241.653 46.5437C242.356 49.9665 243.032 53.3613 243.679 56.7842C243.989 58.3834 244.186 60.0107 244.355 61.6379C244.945 66.8003 245.48 71.9346 246.071 77.0969C246.521 81.0528 247 84.9807 247.478 88.9366C247.506 89.2733 247.647 89.6379 247.788 89.9466C248.125 90.7602 248.745 91.2091 249.645 90.9846C250.461 90.7882 250.799 90.1711 250.743 89.3855C250.686 88.4596 250.517 87.5618 250.405 86.636C250.18 84.2231 249.898 81.8383 249.73 79.4255C249.673 78.4716 249.589 77.4335 250.94 76.3393H250.968ZM83.1324 41.6339C81.9223 41.6339 81.2188 41.718 80.5152 41.6339C78.5172 41.3814 77.3071 42.4194 76.3503 43.9906C74.5211 47.0206 73.9583 50.3033 75.1121 53.6139C77.082 59.2532 80.6841 63.6299 86.2561 66.1549C90.3084 67.9786 94.5578 69.185 98.9478 69.8583C101.537 70.2511 104.21 70.5878 106.799 70.3353C112.174 69.8023 117.521 68.9045 122.868 68.1189C123.853 67.9786 124.838 67.7261 125.767 67.4175C127.089 66.9686 127.511 65.706 126.808 64.4996C126.555 64.0788 126.189 63.7421 125.851 63.3774C123.909 61.3012 122.812 58.9445 123.121 56.0267C123.206 55.2411 123.093 54.4274 123.065 53.5297C119.772 54.5677 116.789 55.4655 113.835 56.4475C108.938 58.0467 103.901 58.9726 98.779 59.4495C93.8542 59.8984 89.2672 58.9445 85.1867 56.0267C80.9655 52.9686 79.9242 48.9846 82.0067 44.2151C82.3163 43.5137 82.5977 42.8122 83.0761 41.6619L83.1324 41.6339ZM153.092 82.3153C152.276 82.7361 151.769 82.9606 151.291 83.2692C149.743 84.2792 148.195 85.3173 146.648 86.3273C141.892 89.4696 137.136 92.5838 131.592 94.2392C129.706 94.8003 127.821 95.614 126.104 96.5679C124.838 97.2693 123.628 98.2793 122.671 99.3735C121.123 101.113 121.208 103.161 122.615 105.013C123.853 106.668 125.429 107.734 127.54 108.071C133.871 109.109 139.922 107.987 145.691 105.574C151.629 103.105 156.328 98.7843 160.69 94.155C161.9 92.8644 161.816 92.3875 160.127 91.7141C156.807 90.3955 154.921 87.8985 153.88 84.6159C153.683 83.9706 153.401 83.3253 153.064 82.3434L153.092 82.3153ZM95.0925 56.0548C97.0624 55.8023 99.0323 55.5217 101.002 55.2692C103.619 54.9325 105.927 53.8664 107.981 52.2672C109.923 50.7521 111.386 48.8443 110.936 46.2631C109.754 39.221 102.409 36.8363 98.0473 39.698C95.9649 41.0447 93.6573 42.0547 91.4622 43.205C90.3366 43.7942 89.0702 44.215 88.0571 44.9445C83.864 48.0306 84.061 50.9485 88.0571 53.7261C90.1114 55.1569 92.4753 56.0547 95.1206 56.0828L95.0925 56.0548ZM153.204 55.2411C152.642 55.2411 151.994 55.2411 151.375 55.3253C146.901 55.8584 144.227 58.3273 143.58 62.7601C143.327 64.5557 143.496 66.4355 143.665 68.2591C143.833 70.1389 144.959 71.5137 146.451 72.6079C148.955 74.4315 151.741 74.3193 154.64 73.9826C158.917 73.5337 161.281 70.9806 162.435 67.1369C163.138 64.8082 162.801 62.4516 161.816 60.2632C160.549 57.4295 158.579 55.4375 155.203 55.3814C154.555 55.3814 153.936 55.2691 153.204 55.213V55.2411ZM135.729 46.684C131.676 46.5437 128.609 48.3673 127.117 52.0427C126.076 54.5677 125.823 57.2612 127.68 59.5337C129.65 61.9465 132.295 63.0688 135.475 62.1991C136.376 61.9466 137.248 61.6379 138.093 61.2732C142.032 59.4776 143.777 55.9145 142.792 51.678C142.06 48.5077 140.259 46.9365 136.995 46.684C136.573 46.656 136.151 46.684 135.701 46.684H135.729ZM165.868 72.7481C159.086 73.3654 156.328 78.0788 158.157 84.2793C159.058 87.3935 162.97 88.8805 166.065 87.7863C168.851 86.8043 170.821 84.9245 172.087 82.3434C174.085 78.2472 170.483 72.664 165.896 72.7201L165.868 72.7481Z" fill="#1D1A31"/>
                            </svg>
                </div>
                    <button class="rules__btn button btn-reset" data-bs-toggle="modal" data-bs-target="#exampleModal">Связаться с нами</button>
                 
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal__header">
          <h5 class="modal__title" id="exampleModalLabel">Напишите нам</h5>
          <button type="button" class="modal__close btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal__body">
        <form class="modal__form needs-validation" action="#" method="post" novalidate>
        <div class="modal__flexbox">
                <div class="input-group has-validation">
                    <input type="text" class="modal__input form-control" placeholder="Имя*" required aria-describedby="inputGroupPrepend" name="username" id="validationCustomUsername">
                    <div class="invalid-feedback">
                        Заполните обязательное поле, пожалуйста
                    </div>
                </div>
                <div class="input-group has-validation">
                    <input type="text" class="modal__input form-control" placeholder="E-mail*" required aria-describedby="inputGroupPrepend" name="useremail" id="validationCustomEmail">
                    <div class="invalid-feedback">
                        Заполните обязательное поле, пожалуйста
                    </div>
                </div>
            <input type="text" class="modal__input" name="userheadr" id="headermess" placeholder="Тема обращения">
            </div>
            <textarea class="modal__textarea modal__input" placeholder="Сообщение" name="usermessage" id="usermessage"> </textarea>
            <button type="submit" class="modal__btn button btn-reset">Отправить</button>
          </form>
          
          
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="formsend" tabindex="-1" aria-labelledby="formsendLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal__header">
          <h5 class="modal__title" id="formsendLabel">Спасибо!</h5>
          <button type="button" class="modal__close btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal__body">
          <span class="modal__text"></span>
          <button class="modal__btn formsend__btn button btn-reset" data-bs-dismiss="modal" aria-label="Close">Хорошо</button>
        </div>
      </div>
    </div>
  </div>         
  <div class="modal fade" id="fonoteka" tabindex="-1" aria-labelledby="fonotekaLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content fonoteka-content">
        <div class="modal__header">
          <h5 class="modal__title" id="fonotekaLabel">Получить доступ к фонотеке</h5>
          <button type="button" class="modal__close btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal__body">
            <span class="fonoteka__text">Пожалуйста, заполните все поля для получения доступа к фонотеке</span>
          <form class="modal__form fonoteka__form  needs-validation" action="#" method="post" novalidate>
            
            <div class="input-group has-validation">
                <input type="text" class="modal__input form-control" name="username" placeholder="Имя*" required aria-describedby="inputGroupPrepend" id="validationCustomUsername1">
                <div class="invalid-feedback">
                    Заполните обязательное поле, пожалуйста
                </div>
            </div>
            <div class="input-group has-validation">
                <input type="text" class="modal__input form-control" name="userlastname" placeholder="Фамилия*" required aria-describedby="inputGroupPrepend" id="validationCustomUsersurname">
                <div class="invalid-feedback">
                    Заполните обязательное поле, пожалуйста
                </div>
            </div>
            <div class="input-group has-validation">
                <input type="text" class="modal__input form-control" name="usertel" placeholder="Телефон*" required aria-describedby="inputGroupPrepend" id="validationCustomUserlastname">
                <div class="invalid-feedback">
                    Заполните обязательное поле, пожалуйста
                </div>
            </div>
            <div class="input-group has-validation">
                <input type="text" class="modal__input form-control" name="usercompany" placeholder="E-mail*" required aria-describedby="inputGroupPrepend" id="validationCustomUserCompany">
                <div class="invalid-feedback">
                    Заполните обязательное поле, пожалуйста
                </div>
            </div>
            <div class="input-group has-validation">
                <input type="text" class="modal__input form-control" name="useractivity" placeholder="Род деятельности*" required aria-describedby="inputGroupPrepend" id="validationCustomUserWork">
                <div class="invalid-feedback">
                    Заполните обязательное поле, пожалуйста
                </div>
            </div>
            <div class="input-group has-validation">
                <input type="text" class="modal__input form-control" name="usercountry" placeholder="Страна*" required aria-describedby="inputGroupPrepend" id="validationCustomUserCountry">
                <div class="invalid-feedback">
                    Заполните обязательное поле, пожалуйста
                </div>
            </div>
            <div class="input-group has-validation">
                <input type="text" class="modal__input form-control" name="usersity" placeholder="Город*" required aria-describedby="inputGroupPrepend" id="validationCustomUserCity">
                <div class="invalid-feedback">
                    Заполните обязательное поле, пожалуйста
                </div>
            </div>
 
          
            <button type="submit" class="modal__btn modal__btn-new button btn-reset">Отправить</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>    

            </div>

        </section>
        <section class="news" id="news">
            <div class="container">
                <div class="news__title adv__title title">Новости</div>
                <!-- Slider main container -->
<div class="news__swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <!-- Начало цикла постов Новости-->
                      <?php  
                                        // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => 5,
                        'category_name'    => 'news',
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
            <img src="<?php the_post_thumbnail_url('news-thumb'); ?>" alt="photo">
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
<?php 
    get_footer();
?>