<?php //$DATA->f_id ?>
<section class="post-listings py-4 py-md-7">
				
	<?php 
	$count = 0;
	while ( have_posts() ) : the_post();
		if (get_the_ID() !== $DATA->f_id) {
			$count++;
			if ($count == 3) {
				//insert carousel in-between listings
				if (!empty($DATA->items)) {
					Components\View::render('content', 'carousel-archive', $DATA);
				}
				
			}
			?>
			<div class="container">
				<div class="row post-listings-row"> 
					<?php Components\View::render('post', 'item' ); ?>
				</div>
			</div>
		<?php	
		}
	endwhile; ?>
		
	
	<!-- pagination -->
	<div class="container">
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