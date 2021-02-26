

<?php if ( has_nav_menu( 'primary' )) : ?>

	<nav role="navigation" class="nav-desktop">

		<?php
			wp_nav_menu( array(
				'theme_location' 	=> 'primary',
				'menu_class'     	=> 'primary-menu'
				) );
		?>

	</nav>

<?php endif; ?>

<nav class="nav-mobile">

	<div id="mobile-menu">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>

</nav>		

<div class="mobile-menu">
	<div class="inner-mobile-menu">
		<?php
			wp_nav_menu( array(
				'theme_location' 	=> 'mobile',
				'menu_class'     	=> 'phone-menu'
				) );
		?>

		<?php 
			$address = get_field('address', 'option');
			$email = get_field('email', 'option');
			$linkedin = get_field('linkedin_link', 'option');
			$demo_btn = get_field('demo_button', 'option');
		?>
		<div class="contact-info px-5">
			<hr>
			<h6 class="h7 text-white pt-3">Contact Us</h6>
			<?php if (!empty($address)): ?>
			<p class="address text-white"><?php echo $address; ?></p>
			<?php endif; ?>
			<?php if (!empty($email)): ?>
			<div class="mb-2">
				<a href="mailto: <?php echo $email; ?>" class="email"><img class="d-inline-block mr-3" src="/wp-content/themes/elevate/assets/images/icons/envelope.svg" alt="email icon"><?php echo $email; ?></a>
			</div>
			<?php endif; ?>
			<?php if (!empty($linkedin)): ?>
			<div>
				<a class="social" target="_blank" href="<?php echo $linkedin; ?>"><i class="fab fa-linkedin" aria-hidden="true"></i>Connect</a>
			</div>
			<?php endif; ?>
		</div>
	</div>

	<?php if (!empty($demo_btn)): ?>
		<a href="<?php echo $demo_btn['url']; ?>" target="<?php echo $demo_btn['target'] ? $demo_btn['target'] : '_self'; ?>" class="demo-btn"><?php echo $demo_btn['title']; ?></a>
	<?php endif; ?>

</div>

