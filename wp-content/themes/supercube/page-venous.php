<?php
/*  
    Template Name: page venous
    Template Post Type: page
*/
?>
<?php get_header(); ?>
   
<?php

while (have_posts()) : the_post(); ?>

    <div class="banner banner-page" style="background: linear-gradient(#003651, #004a6f, #00689c); ">
        <div class="container" id="banner_top">
            <div class="row">
                <h1 class="title_room"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
<?php
    if(!empty(get_the_content())){
?>
    <section class="block_how_to container-fluid page_default" >
        <div class="row">
            <?php 
                the_content();
            ?>
        </div>
    </section>
    
<?php }

    // check if the flexible content field has rows of data
    if (have_rows('button_bottom')) : ?>
        <section id="button-room">
            <div class="container-fluid">
                <div class="row">
                    <?php
                            // loop through the rows of data
                            $id = 0;
                            while (have_rows('button_bottom')) : the_row(); ?>

                                <div class="col-12 bottom_service_ft  hvr-shutter-out-horizontal f-w-600 text-center" style="background: <?php the_sub_field('background') ?>">
                                    <a class="f-t-b" href="<?php the_sub_field('href'); ?>" id="block-service-<?= $id ?>"><?php the_sub_field('content'); ?></a>
                                </div>
                                <style>
                                    #button-room .row .bottom_service_ft:hover a#block-service-<?= $id ?> {
                                        color: <?php the_sub_field('background');
                                                ?> !important;
                                    }
                                </style>
                                <?php $id++; ?>
                            <?php

                        endwhile;

                    else :

                    // no layouts found

                    endif;
                    ?>

    <?php endwhile; // End of the loop.?>
        </div>
    </div>
</section>

<?php get_footer() ?>