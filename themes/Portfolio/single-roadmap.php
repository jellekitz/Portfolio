<?php
/*
 * Template Name: roadmap
 * Template Post Type: post, page
 */
?>
<?php get_header('custom');?>


<section class="single">

	<div data-aos="fade-up">

		<?php if (have_posts()) : while(have_posts()) : the_post();?>

			<h4>Bekijk ook</h4>

			<?php if ( function_exists( 'wpsp_display' ) ) wpsp_display( 166 ); ?>

	 	<?php endwhile; endif;?>
	</div>

	<div data-aos="fade-up">

		<?php if (have_posts()) : while(have_posts()) : the_post();?>

			<article class="icon" data-aos="fade-up">
				<div>
					<img src="<?php the_field('organisation_icon'); ?>" alt="">
					<h1><?php the_field('organisation_title');?></h1>
				</div>
				<div>
					<h3><?php the_field('organisation_year');?></h3>
					<h4><?php the_field('organisation_status'); ?></h4>
				</div>
			</article>

		<?php endwhile; endif;?>
		<?php if( have_rows('roadmap_item') ): while ( have_rows('roadmap_item') ) : the_row();?>

			<article data-aos="fade-up">
        		<?php the_sub_field('roadmap_item_field');?>
        	</article>

    			<?php endwhile; else : echo 'Oeps... Er ging iets mis!'; endif; ?>
	</div>

</section>

<?php get_footer();?>