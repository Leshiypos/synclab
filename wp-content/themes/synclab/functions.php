<?php
    add_action('wp_enqueue_scripts', 'childhood_scripts');

        function childhood_scripts(){
            wp_enqueue_style('synclab-style', get_stylesheet_uri());
            wp_enqueue_style('synclab-style-normalize', get_template_directory_uri().'/assets/style/normalize.min.css');
            wp_enqueue_style('synclab-style-media', get_template_directory_uri().'/assets/style/media.css'); //Подключаем стили
            
            wp_enqueue_script( 'synclab-scripts', get_template_directory_uri().'/assets/js/index.js', array('jquery'), null, true );
            wp_enqueue_script( 'ajaxgoogle-scripts', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), null, true );
            wp_enqueue_script( 'swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true );


            
            //Начало подключения файлов и скриптов для фильтров на странице продукции
            wp_register_script( 'filter', get_stylesheet_directory_uri() . '/assets/js/tags.js', array( 'jquery' ), time(), true );
            wp_enqueue_script( 'filter' );
            wp_localize_script( 'filter', 'true_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) ); //получаем URL обработчика AJAX в WordPress и отправляем в JS файл
            //Окончание подключения файлов и скриптов для фильтров на странице продукции
            //подключаем ajax к форме
            wp_localize_script( 'synclab-scripts', 'true_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
        }

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );//включает возможность добавления меню в тему


    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attr', 10, 3);
    function filter_nav_menu_link_attr ($atts, $item, $args){
            if ($args->menu === 'main'){
                $atts['class'] = 'header__link';
                
                if ($item -> current ){
                    $atts['class'] .= ' active';
                }
            }
            return $atts;

    }
    //Создаем кастомные размеры
    if ( function_exists( 'add_image_size' ) ) {
        // Кадрирование изображения
        add_image_size( 'film-thumb', 283, 424, true );
        add_image_size( 'single-img', 480, 600, true );
        add_image_size( 'other-thumb', 383, 254, true );
        add_image_size( 'news-thumb', 483, 389, true );
        add_image_size( 'singl-video', 1280, 720, true );
    }


 //Функция хлебные крошки
 function get_breadcrumb() {
    echo '<a href="'.home_url().'" class="advertising__link" rel="nofollow">Главная</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#47;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#47;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#47;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}  
 // Окончание Функции хлебные крошки

 //Функция хлебные крошки для отдельных архивов
 function get_breadcrumb_archive() {
    echo '<a href="'.home_url().'" class="advertising__link" rel="nofollow">Главная</a> &nbsp;&nbsp;/&nbsp;&nbsp;<a href="'.get_page_link(9).'">Наши работы</a> ';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#47;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#47;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#47;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}  
 // Окончание Функции хлебные крошки крошки для отдельных архивов


 //Функция фильтра категории
    add_action( 'wp_ajax_myfilter', 'true_filter_function' ); 
    add_action( 'wp_ajax_nopriv_myfilter', 'true_filter_function' );
 
function true_filter_function(){
	$args = array(
        'numberposts' => -1,
        'category_name'    => $_POST[ 'name' ],
        'tag'          => $_POST[ 'tagname' ],
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'post',
        'suppress_filters' => true,
	);
    $iter=$_POST[ 'iter' ];
    $count=0;
	query_posts( $args );
    
	if ( have_posts() ) {
      	while ( have_posts() ) : the_post();
          $categories = get_the_category(); // Внутри цикла
          $cat_id = $categories[0]->cat_ID; // ID самой категории
          if (($cat_id == 4 ) or ($cat_id == 15 ) or ($cat_id == 16 ) or ($cat_id == 17 )) { $size = 'film-thumb'; $yer='yer_serial';} else { $size = 'other-thumb'; $yer='yer';}

          echo '<a href="'; the_permalink(); echo'" class="project__link adv__block">';
          echo '<div class="adv__hover-block">';
          echo '<img src="'; the_post_thumbnail_url($size); echo '" alt="photo">';
          echo '<svg class="hover-icon"  width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">';
          echo '<path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM41.6538 34.7972C41.2633 34.4067 41.2633 33.7735 41.6538 33.383L45.5429 29.4939C45.9334 29.1034 46.5666 29.1034 46.9571 29.4939L62.867 45.4038L66.7561 49.2929C67.1466 49.6834 67.1466 50.3166 66.7561 50.7071L62.867 54.5962L46.9571 70.5061C46.5666 70.8966 45.9334 70.8966 45.5429 70.5061L41.6538 66.617C41.2633 66.2265 41.2633 65.5933 41.6538 65.2028L56.8566 50L41.6538 34.7972Z" fill="#F7F7F7" fill-opacity="0.85"/>';
          echo '</svg>';      
          echo '</div>';
          echo '<h3 class="adv__subtitle">«'; the_title(); echo '»</h3>';
          if ($cat_id == 4 ){echo '<span class="movies__season">'; the_field('season'); echo '</span>';}
          echo '<span class="adv__year">'; the_field($yer);echo '</span>';
          echo '</a>';
          $count++;
		endwhile;
	} else {
		echo '<span class="project__error">По вашему запросу ничего не найдено, попробуйте уменьшить количество выбранных фильтров</span>';
        echo '<img class="project__error-img" src="'.get_template_directory_uri().'/assets/img/error.png" alt="error">';
	}
    echo '<span class="count_post_'.$iter.'" data-cont-post="'.$count.'"></span>';
	wp_die();
} 
//Конец функции фильтра категории
// Начала функции обработчика отправки формы Правила приема репертуара

add_action( 'wp_ajax_sendformmain', 'send_form_function' ); 
add_action( 'wp_ajax_nopriv_sendformmain', 'send_form_function' );

function send_form_function(){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $header = $_POST['header'];
    $message = $_POST['message'];
    $headerinmail = "Заявка с сайта SyncLab по теме $header";
    $email_in = get_option('admin_email');
    // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
    $mes = "Имя: $name \nE-mail: $email \nТема: $header \nТекст: $message";
    // Пытаемся отправить письмо по заданному адресу
    // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
    $send = wp_mail($email_in, $headerinmail, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
    // Если отправка прошла успешно — так и пишем
    if ($send == 'true') {
        echo 'Мы получили ваше сообщение и вернемся с ответом в ближайшее время';
    }
    // Если письмо не ушло — выводим сообщение об ошибке
    else {echo "Ой, что-то пошло не так";}
    wp_die();
}

// Начала функции обработчика отправки формы Правила приема репертуара

add_action( 'wp_ajax_sendformmainnew', 'send_form_function_new' ); 
add_action( 'wp_ajax_nopriv_sendformmainnew', 'send_form_function_new' );

function send_form_function_new(){
    $name = $_POST['name'];
    $email = "No_email";
    $lastname=$_POST['surname'];
    $tel= $_POST['usertel'];
    $company=$_POST['usercompany'];
    $activity=$_POST['useractivity'];
    $country= $_POST['usercountry'];
    $headerinmail = "Заявка на получение доступа к библиотеке с сайта SyncLab";
    $email_in = get_option('admin_email');
    // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
    $mes = "$headerinmail \nИмя: $name \nФамилия: $lastname \nТелефон: $tel \nE-mail : $company \nДеятельность : $activity \nСтрана : $country";
    // Пытаемся отправить письмо по заданному адресу
    // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
    $send = wp_mail($email_in, $headerinmail, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
    // Если отправка прошла успешно — так и пишем
    if ($send == 'true') {echo "Мы получили ваше сообщение и вернемся с ответом в ближайшее время";}
    // Если письмо не ушло — выводим сообщение об ошибке
    else {echo "Ой, что-то пошло не так";}
    wp_die();
}


?>