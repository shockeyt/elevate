<section class="post-content">
	<div class="post-container container">	
		<div class="row">
			<div class="col-12 offset-lg-1 col-lg-10">
				<?php 
				
				Components\View::render('post', get_post_format()); 
				
				?>
			</div>
		</div>
	</div>
</section>