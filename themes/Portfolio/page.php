<?php get_header('custom');?>



<section class="page">

<main id="watmaakik" data-aos="fade-up">

	<h1><?php the_title(); ?></h1>

	<div>

	<?php if (have_posts()) : while(have_posts()) : the_post();?>

		<?php the_content();?>

			<?php $post_object = get_field('work_add'); if ($post_object): ?>
                <?php foreach($post_object as $post): ?>
                    <?php setup_postdata($post); ?>

						<a data-aos="fade-up" href="<?php the_field('work_link');?>">
							<article>
								<header>
									<h4><?php the_field('work_title');?></h4>
								</header>
								<div style="background-image: url('<?php the_field('work_img'); ?>');">
									
								</div>
								<footer>
									<h5><?php the_field('work_desc');?></h4>
									<h6><?php the_field('work_organisation');?></h5>
								</footer>
							</article>
						</a>

				<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

			<?php endif; ?>

	<?php endwhile; endif;?>

	</div>

</main>

</section>



<?php get_footer();?>