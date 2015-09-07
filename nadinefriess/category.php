<?php get_header(); ?>

<div class="linie"></div>
<div id="mottobereich" class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h2><?php single_cat_title(); ?></h2>
	</div>
</div> <!-- Ende mottobereich -->
<div class="linie"></div>

<div class="row">
	<ul id="sitepost" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li class="kat-beitragstitel">
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
					<p class="entry-date">Veröffentlicht am <?php echo get_the_date('j.m.Y'); ?></p>
				</li>
				<?php
			endwhile;
		endif;
		?>
	</ul>
</div>
<?php get_footer(); ?>

