<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <p><?php echo get_the_date('d/m/Y h:i:s'); ?></p>


        <?php the_content(); ?>
        <?php the_author(); ?>



        <?php
        $tags = get_the_tags();
        foreach ($tags as $tag) : ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="btn btn-warning">
                <?php echo $tag->name; ?>
            </a>
        <?php endforeach; ?>


        <?php
        $categories = get_the_category();
        foreach ($categories as $cat) : ?>
            <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a>

        <?php endforeach; ?>




<?php endwhile;
else : endif; ?>