<?php 
/**
* Template Name: Generic Layout
*/
?>

<?php if ( have_posts() ) : // check if the Page or Post Type has data to show ?>
    <?php while ( have_posts() ) : the_post(); // loop through the data ?>
        <section class="template generic layout">

            <?php if( have_rows('generic_layout') ): // check if the flexible content field name Generic Layout has rows of data ?>
                <?php while ( have_rows('generic_layout') ) : the_row(); // loop through the rows of data ?>
                
                    <?php if( get_row_layout() == 'hero_banner_row_layout' ): // check if the page has a  hero_banner_row_layout with information ?>
                        
                        <?php get_template_part('templates/layouts/hero-banner-row-layout'); ?>

                    <?php elseif ( get_row_layout() == 'text_row_layout'): // check if the page has a text row layout with information ?>
                        
                        <?php get_template_part('templates/layouts/text-row-layout'); ?>

                    <?php elseif ( get_row_layout() == 'cards_row_layout'): // check if the page has a cards row layout with information ?>
                        
                        <?php get_template_part('templates/layouts/cards-row-layout'); ?>

                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else : // no layouts found ?>
                <h1>This page is missing data</h1>
                <p>To populate this page, download ACF Pro and include some data</p>
            <?php endif; ?>

        </section>
    <?php endwhile; ?>
<?php endif; ?>