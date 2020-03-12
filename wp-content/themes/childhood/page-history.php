<?php 
/* Template Name: Наша история */
?>

<?php 
    get_header();
?>

        <div class="aboutus">
            <div class="container">
                <h1 class="title"><?php the_field('our_story_title'); ?></h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('ttl_first_paragraph_story'); ?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('first_paragraph_story'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('first_paragraph_img_story'); ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('second_paragraph_img_story'); ?>">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('ttl_second_paragraph_story'); ?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('second_paragraph_story'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field('ttl_therd_paragraph_story'); ?>
                        </div>
                        <div class="aboutus__text">
                        <?php the_field('third_paragraph_story'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field('third_paragraph_img_story'); ?>">
                    </div>
                </div>
            </div>
        </div>

<?php
    get_footer();
?>