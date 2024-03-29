<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <p><?php echo get_the_date('d/m/Y h:i:s'); ?></p>


        <?php the_content(); ?>
        <?php the_author(); ?>

        <?php
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        echo $fname . ' ' . $lname;
        ?>
        <p>Created by:<?php echo $fname ?></p>

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


        <?php comments_template(); ?>

<?php endwhile;
else : endif; ?>