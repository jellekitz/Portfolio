<?php get_header();?>

	<section id="wiebenik" data-aos="fade-up">
		<div>
			<h3>Wie ben ik?</h3>
			<h1>Jelle Kitzen</h1>
			<p>Ik ben een allround digital interactive designer die zich gespecialiseerd heeft in front-end development, maar geef me gerust een design challenge want ik vind alles leuk!</p>
			<a href="#watmaakik">wat maak ik?</a><a href="#contact">contact</a>
		</div>
		<img src="<?php bloginfo('template_url'); ?>/icons/JelleKitzen2.png" alt="Jelle Kitzen">
	</section>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<section id="watdoeik">
		<div class="background_color-div">
			<h3>Wat doe ik?</h3>
			<h2 data-aos="fade-up">Ik ontwerp en realiseer digitale interactieve producten</h2>

			<div>

				<?php $post_object = get_field('spec_add'); if ($post_object): ?>
                	<?php foreach($post_object as $post): ?>
                    	<?php setup_postdata($post); ?>

		
						<article data-aos="fade-up">
							<img src="<?php the_field('spec_icon'); ?>" alt="<?php the_field('spec_icon_alt'); ?>">
							<h3><?php the_field('spec_title'); ?></h3>
							<p><?php the_field('spec_text'); ?></p>
						</article>

					<?php endforeach; ?>

            			<?php wp_reset_postdata(); ?>

            	<?php endif; ?>

        	</div>
        </div>
	</section>

<?php endwhile; endif; ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<main id="watmaakik" data-aos="fade-up">
		<h3>Wat maak ik?</h3>
		<h2>Moois!</h2>
		<div>

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

		</div>
		<a href="<?php the_field('link_for_overview');?>">Al mijn werk bekijken</a>
	</main>

<?php endwhile; endif; ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<section id="roadmap" data-aos="fade-up">
		<h3 data-aos="fade-up">Waar kom ik vandaan?</h3>
		<h2 data-aos="fade-up">Mijn roadmap</h2>

			<?php $post_object = get_field('organisation_add'); if ($post_object): ?>
                <?php foreach($post_object as $post): ?>
                    <?php setup_postdata($post); ?>

					<article data-aos="fade-up">
						<div>
							<img src="<?php the_field('organisation_icon'); ?>" alt="">
							<h4><?php the_field('organisation_title');?></h4>
						</div>
						<div>
							<h5><?php the_field('organisation_year');?></h5>
							<h6><?php the_field('organisation_status'); ?></h6>
						</div>
						<p><?php the_field('organisation_text');?></p>
						<a href="<?php the_field('organisation_link');?>"><?php the_field('organisation_button');?></a>
					</article>

				<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

			<?php endif; ?>

	</section>

<?php endwhile; endif; ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<section id="contact" data-aos="fade-up">
		<div>
			<h3>Neem contact op!</h3>
			<h2>Samen werken? Of gewoon even op de koffie?</h2>
		</div>
		<div>
			<div>
				<img src="<?php the_field('contact_tel_icon', 'option'); ?>" alt="">
				<p><?php the_field('contact_tel_label','option');?></p>
			</div>
			<div>
				<img src="<?php the_field('contact_mail_icon', 'option'); ?>" alt="">
				<p><?php the_field('contact_mail_label','option');?></p>
			</div>
		</div>

		<div>
			<h4>Of stuur gewoon meteen even een mailtje!</h4>
			<div>
				<?php the_content();?>
			</div>
		</div>
	</section>

<?php endwhile; endif; ?>

<?php get_footer();?>
