
<?php get_header(); ?>

<div class="linie"></div>


<div id="mottobereich" class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2><?php bloginfo('description'); ?></h2>
    </div>
</div> <!-- Ende mottobereich -->

<div class="linie"></div>

<div id="diabereich" class="slideshow row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="60000" data-wrap="true">

        <!-- Wrapper for slides -->
        <div id="carousel" class="carousel-inner">
            <div class="item active">
                <?php $the_query = new WP_Query('showposts=1'); ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="carousel-dia col-xs-12 col-sm-8 col-md-7 col-lg-8">
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img-responsive">
                        <!-- das was vorher functionierte-->
                        <!--<?php echo the_post_thumbnail($_post->ID, array(750, 300)); ?>-->
                    </div>
                    <div class="carousel-diatext col-xs-12 col-sm-4 col-md-5 col-lg-4">
                        <ul class="diatext">
                            <li class="diatitel">
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </li>
                            <li><?php the_excerpt(__('(more…)')); ?>
                                <a href="<?php echo get_permalink(); ?>"></a>
                            </li>
                        </ul>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="item">
                <?php $the_query = new WP_Query('showposts=1&offset=1'); ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="carousel-dia col-xs-12 col-sm-8 col-md-7 col-lg-8">
                        <!-- das was vorher functionierte-->
                        <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?> ">
                    </div>
                    <div class="carousel-diatext col-xs-12 col-sm-4 col-md-5 col-lg-4">
                        <ul class="diatext">
                            <li class="diatitel">
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </li>
                            <li><?php the_excerpt(__('(more…)')); ?>
                                <a href="<?php echo get_permalink(); ?>"></a>
                            </li>
                        </ul>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="item">
                <?php $the_query = new WP_Query('showposts=1&offset=2'); ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="carousel-dia col-xs-12 col-sm-8 col-md-7 col-lg-8">
                        <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?> ">
                    </div>
                    <div class="carousel-diatext col-xs-12 col-sm-4 col-md-5 col-lg-4">
                        <ul class="diatext">
                            <li class="diatitel">
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </li>
                            <li><?php the_excerpt(__('(more…)')); ?>
                                <a href="<?php echo get_permalink(); ?>"></a>
                            </li>
                        </ul>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <!-- Controls -->
        <div id="slide-controls" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-circle-arrow-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-circle-arrow-right"></span>
            </a>
        </div>
        <!-- Contorls for slides -->

    </div>
</div>

<div class="linie"></div>

<div id="beitragsbereich" class="row">

    <div id="beitraege" class="col-xs-12 col-sm-8 col-md-7 col-lg-8">
        <?php $the_query = new WP_Query('offset=1'); ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="thumb hidden-xs hidden-sm col-sm-4 col-md-4 col-lg-3">
                <?php echo get_the_post_thumbnail($_post->ID, array(150, 150)) ?>
            </div>

            <div class="beitragstext col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <ul>
                    <li class="beitragstitel">
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                    </li>
                    <li><?php the_excerpt(__('(more…)')); ?>
                        <a href="<?php echo get_permalink(); ?>"></a>
                    </li>
                </ul>
            </div>
            <div class="clearfix visble-md"></div><!-- clearfix für Umbruch der Thumbs -->
        <?php endwhile; ?>
    </div>

    <div id="seitenleiste" class="hidden-xs col-xs-12 col-sm-4 col-md-5 col-lg-4">
        <?php get_sidebar(); ?>
    </div>
</div> <!-- Ende textbereich -->

<?php get_footer(); ?>
