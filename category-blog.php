<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <h1>This IS CATEGORY BLOG template!</h1>
        <?php get_template_part('includes/section', 'archive'); ?>

        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>


    </div>
</section>




<?php get_footer(); ?>