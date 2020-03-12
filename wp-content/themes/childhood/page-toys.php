<?php 
/* Template Name: Игрушки */
?>

<?php 
    get_header();
?>

        <div class="toys">
            <div class="container">
                <h2 class="subtitle"><?php the_field('toys_ttl-1'); ?></h2>
                <div class="toys__wrapper">

                <?php 
                
                    // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => -1, //Значение выводит все слайды
                        'category_name'    => 'soft_toys',//Устанавливаем категорию
                        'orderby'     => 'date',
                        'order'       => 'ASC',//Прямой это ASC
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        // формат вывода the_title() ...
                ?>

                <div class="toys__item" style="background-image: url(<?php 
                
                if( has_post_thumbnail() ){
                    the_post_thumbnail_url();
                } else {
                    echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                }
                 
                
                ?>)">
                    <div class="toys__item-info">
                        <div class="toys__item-title"><?php the_title(); ?></div>
                        <div class="toys__item-descr">
                            <?php the_field('toys_descr'); ?>                            
                        </div>
                        <div class="minibutton toys__trigger">Подробнее</div>
                    </div>
                </div>
                <?php
                    }

                    wp_reset_postdata(); // сброс
                
                ?>

                </div>


                <h2 class="subtitle"><?php the_field('toys_ttl-2'); ?></h2>
                <div class="toys__wrapper">

                <?php
                // параметры по умолчанию
                    $posts = get_posts( array(
                    'numberposts' => -1, //Значение выводит все слайды
                    'category_name' => 'edu_toys', //Устанавливаем категорию
                    'orderby' => 'date', //Сортируем по дате добавления
                    'order' => 'ASC',//Прямой это ASC
                    'post_type' => 'post', //Публикуем, а не получаем
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                    foreach( $posts as $post ){
                    setup_postdata($post);
                ?>
                <!-- Тут код -->
                <div class="toys__item" style="background-image: url(<?php 

                    if( has_post_thumbnail() ){
                        the_post_thumbnail_url();
                    } else {
                        echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                    } 
                
                ?>)">
                        <div class="toys__item-info">
                            <div class="toys__item-title"><?php the_title(); ?></div>
                            <div class="toys__item-descr">
                            <?php the_field('toys_descr'); ?>    
                            </div>
                            <div class="minibutton toys__trigger">Подробнее</div>
                        </div>
                    </div>

                <?php
                }
                wp_reset_postdata(); // сброс
                ?>

                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="toys__alert">
                            <span><?php the_field('toys_descr-weight'); ?></span> <?php the_field('toys_descr'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    get_footer();
?>