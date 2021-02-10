<?php
/*
 * Template Name: single
 * Template Post Type: post, page
 */

?>
<?php get_header('custom');?>


<section class="single">

	<div data-aos="fade-up">

		<?php if (have_posts()) : while(have_posts()) : the_post();?>

			<h4>Bekijk ook</h4>

			<?php if ( function_exists( 'wpsp_display' ) ) wpsp_display( 155 ); ?>

	 	<?php endwhile; endif;?>
	</div>

	<div data-aos="fade-up">

		<?php if (have_posts()) : while(have_posts()) : the_post();?>

			<article data-aos="fade-up">
				<h1><?php the_title(); ?></h1>
				<h3><?php the_field('work_organisation');?></h3>
				<h4><?php the_field('work_desc');?></h4>

				<img src="<?php the_field('work_img');?>" alt="<?php the_field('work_alt');?>">
			</article>

		<?php endwhile; endif;?>
		<?php if( have_rows('work_item') ): while ( have_rows('work_item') ) : the_row();?>

			<article data-aos="fade-up">
        		<?php the_sub_field('work_item_field');?>
        	</article>

    			<?php endwhile; else : echo 'Oeps... Er ging iets mis!'; endif; ?>
	</div>

</section>

<?php get_footer();?>