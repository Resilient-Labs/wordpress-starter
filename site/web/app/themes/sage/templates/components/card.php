<div class="card">
    <div class="card-media-wrapper">
        <?php if ( get_sub_field('image') ): ?>
            <img src="<?php the_sub_field('image'); ?>" />
        <?php endif; ?>
        <?php if (get_sub_field('cta')) : ?>
            <a class="button" href="<?php echo get_sub_field('cta')['url']; ?>">
                <?php echo get_sub_field('cta')['title']; ?>
            </a>
        <?php endif; ?>
    </div>
    <div class="card-content-wrapper">
    <?php if ( get_sub_field('content') ): ?>
        <?php the_sub_field('content'); ?>
    <?php endif; ?>
    </div>
</div>