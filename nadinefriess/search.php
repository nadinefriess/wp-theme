<?php get_header(); ?>

<div class="linie"></div>
<div class="message row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2>Suchergebnisse</h2>
    </div>
    <!--Soll der Suchbegriff in der massage row angezeigt werden, dann komentiere die folgende Zeile ein:
    <p class="info">Suchergebnisse f&uuml;r <strong><?php echo $s ?></strong></p>-->
</div>
<div class="linie"></div>

<?php if (have_posts()) : ?>
    <div id="textbereich" class="row">
        <div class="content col-xs-12 col-sm-8 col-md-7 col-lg-8">
            <?php while (have_posts()) : the_post(); ?>
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(__('(more…)')); ?>
                <a href="<?php echo get_permalink(); ?>"></a>
            <?php endwhile; ?>
        </div>

        <!-- Pagination?

        <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') || previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>-->
    <?php else : ?>
        <div id="textbereich" class="row">
            <div class="content col-xs-12 col-sm-8 col-md-7 col-lg-8">
                <h3>Leider nichts gefunden</h3>
            </div>
        <?php endif; ?>


        <div id="seitenleiste" class="hidden-xs col-xs-12 col-sm-4 col-md-5 col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php get_footer(); ?>