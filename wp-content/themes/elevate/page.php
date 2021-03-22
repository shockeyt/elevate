<?php
/**
 * Standard Page Template
 */

get_header();

	while ( have_posts() ) : the_post(); ?>
		<section class="green-bar bg-green py-6 pt-lg-6 pb-lg-7"></section>
		<section class="default-page py-6 py-md-7">
			<div class="container">
				<div class="row">
					<div class="col-12 offset-md-1 col-md-10">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>

	<?php endwhile;

	if( have_rows('flex_components') ) {
		while ( have_rows('flex_components') ) : the_row();
			Components\View::render('content', 'flex-index');
		endwhile;
	};

get_footer(); ?>