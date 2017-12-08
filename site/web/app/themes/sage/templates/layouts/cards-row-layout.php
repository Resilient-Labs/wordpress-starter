<section class="card-section">
    <div class="card-row">
        <?php if (have_rows('card') ): // check if the repeater field named Card has rows of data ?>

            <?php while ( have_rows('card') ) : the_row(); // loop through the rows of data ?>
                <?php get_template_part('templates/components/card'); ?>
            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</section>