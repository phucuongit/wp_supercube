<?php
/*  Template Name: Page Form
    Template Post Type: page
*/
?>
<?php get_header(); ?>

<?php

while (have_posts()) : the_post(); ?>

    <div class="banner banner-page" style="<?php handle_bacground_header() ?>">
        <div class="container" id="banner_top">
            <div class="row">
                <h1 class="title_room"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
    <?php
    if (!empty(get_field('image_full_width'))) {
        ?>
        <img class="image_full_width" src="<?= get_field('image_full_width')['url'] ?>" alt="">
    <?php }
if (!empty(get_the_content())) {
    ?>
        <section class="block_how_to bg-black" id="form_section">
            <div class="container">
                <div class="row">
                    <div class="main col-12 text-center">
                        <?php
                        the_content();

                        ?>

                    </div>
                </div>
            </div>

        </section>

    <?php }
get_template_part('handle', 'slipcol');
endwhile; 
?>
</div>
</div>
</section>

<?php get_footer() ?>