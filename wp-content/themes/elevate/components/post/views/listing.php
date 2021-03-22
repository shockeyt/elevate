<section class="post-listings py-4 py-md-7">
	<div class="container">
		<!-- filter -->


		<div class="row post-listings-row">
			
			<?php while ( have_posts() ) : the_post();

				Components\View::render('post', 'item' );

			endwhile; ?>
		
		</div>
		<div class="row post-listings-pagination">
			<div class="col-12">
				<?php // Link Pages
				wp_link_pages();
				
				// Previous/next page navigation.
				the_posts_pagination(); ?>
			</div>
		</div>
	</div>
</section>