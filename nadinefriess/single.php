<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="linie"></div>
        <div class="message row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>

        <div class="linie"></div>

        <div id="textbereich" class="row">
            <div class="content col-xs-12 col-sm-8 col-md-7 col-lg-8">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-responsive">

                <div id="blogpost">
                    <?php the_content(); ?>
                </div>
                <?php
            endwhile;
        endif;
        ?>
        <!-- <div class="linie-xs visible-xs"></div>-->
    </div>


    <div id="seitenleiste" class="hidden-xs col-xs-12 col-sm-4 col-md-5 col-lg-4">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>