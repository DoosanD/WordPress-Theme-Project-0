<div class="Blog-holder row">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="col-md-6 p-0">
                <div class="card m-3">
                    <div class="card-body">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <a class="btn btn-success" href="<?php the_permalink() ?>">Read More</a>
                    </div>
                </div>
            </div>
    <?php endwhile;
    else : endif; ?>

</div>