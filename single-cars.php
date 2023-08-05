<?php get_header(); ?>
<?php
$image1 = '/wp-content/uploads/2023/08/profile.jpg';
$image2 = '/wp-content/uploads/2023/08/profile_pic-scaled.jpg';
?>
<section class="page-wrap">
    <div class="container">

        <h1><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail" />
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-6">
                <?php get_template_part('includes/section', 'cars'); ?>

                <?php wp_link_pages(); ?>
                (<!--nextpage-->);
            </div>
            <div class="col-lg-6">
                <ul>
                    <!-- <li>Color:<//?= get_post_meta($post->ID, 'Color', true); ?></li> -->
                    <li>Color: <?php the_field('color'); ?></li>
                    <li>Registration: <?php the_field('registration'); ?></li>
                </ul>
                <?php if (get_post_meta($post->ID, 'Registration', true)) : ?>
                    <ul>
                        <!-- <li>Registration:<? //= get_post_meta($post->ID, 'Registration', true); 
                                                ?></li> -->
                    </ul>
                <?php endif; ?>
                <!-- doesnt work maginfic slide, maybe because there is no repeater? -->
                <div class="gallery">
                    <a href="<?php echo $image1['sizes']['blog-large']; ?>">
                        <img src="<?php echo $image1['sizes']['blog-small']; ?>" alt="ja">
                    </a>
                    <a href="<?php echo $image2['sizes']['blog-large']; ?>">
                        <img src="<?php echo $image2['sizes']['blog-small']; ?>" alt="ja">
                    </a>
                </div>
            </div>
        </div>



    </div>
</section>

<?php get_footer(); ?>