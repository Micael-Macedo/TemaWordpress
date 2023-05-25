<?php get_header();  ?>
<div class="container pt-5">
    <div class="row">
        <div class="col-sm-8">
            <?php
                if( have_post()) : while( have_post()) : the_post();?>
            <h1><?php the_title(); ?></h1>
            <div>
                <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="col-sm-4">
            <?php

            ?>
        </div>
    </div>
</div>
<?php get_footer();  ?>