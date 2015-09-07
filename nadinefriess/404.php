<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="linie"></div>
		<div id="mottobereich" class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h2><?php the_title(); ?></h2>
			</div>
		</div> <!-- Ende mottobereich -->

		<div class="linie"></div>

		<div id="sitepost" class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php
				the_content();
				?>
			</div>
		</div>

		<?php
	endwhile;
endif;
?>

<?php get_footer(); ?>