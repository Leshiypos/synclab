<?php 
    get_header();
?>
<?php
$category = get_queried_object(); //Определяем ИД и имя категории
$current_cat_id = $category->term_id;
$current_cat_name = $category->name;
$field_sort='';

if (($current_cat_id == 3) || ($current_cat_id == 24)){
    $slag = 'advertising';
} elseif ($current_cat_id == 4){
    $slag = 'series_and_films';
    $class_grid='movies__socket ';
    $field_sort='yer_serial';
} elseif ($current_cat_id == 5){
    $slag = 'music_prodaction';
}elseif ($current_cat_id == 6){
    $slag = 'news';
} else{
    $slag = 'series_and_films';
    $class_grid='movies__socket ';
}
?> 


<?php   
if(($current_cat_id == 3) || ($current_cat_id == 5) || ($current_cat_id == 24)){
    $field_sort = 'yer';
} elseif (($current_cat_id == 4) || ($current_cat_id == 15) || ($current_cat_id == 16) || ($current_cat_id == 17)){
    $field_sort = 'yer_serial';
}


                                                                    //Сортировка по произвольному полю yer_serial;
    global $query_string;                                                //вызываем глобальную переменную с запроса постов
    $args = 'order=DESC';    //Состовляем дополнительный запрос на сортировку по произвольному полю
    query_posts( $query_string.'&'.$args );                                 //Формируем запрос на вывод постов
?>
 <main>
        <section class="advertising">
            <div class="container">
                    <div class="advertising__bread-crumbs"> 
                        <?php 
                        if ($current_cat_id == 6){
                            get_breadcrumb();
                        } else                        
                        {
                            get_breadcrumb_archive();
                            } ?>
                    </div>
                <h1 class="advertising__title"><?php echo $current_cat_name; ?></h1>
                <div class="<?php if(isset($class_grid)){echo $class_grid;}?>adv__socket">

                <!-- Начало цикла постов -->
                <?php
		            while ( have_posts() ) :
			            the_post();
                            get_template_part( 'template-parts/archive-'.$slag, get_post_type() );
                    endwhile; // End of the loop.
                    wp_reset_query(  );
		        ?>
                <!-- Окончание цикла постов -->

                </div>
            </div>
        </section>

    </main>
<?php 
    get_footer();
?>