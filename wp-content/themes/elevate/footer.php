		<footer class="bg-green pb-4 pt-lg-4 pb-lg-6">
			<div class="container">
				<div class="row">
					<?php Components\View::render('footer','info'); ?>
					<?php Components\View::render('footer','contact'); ?>
					<?php Components\View::render('footer','nav'); ?>
					<?php //Components\View::render('footer','legal'); ?>	
				</div>
			</div>		
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>