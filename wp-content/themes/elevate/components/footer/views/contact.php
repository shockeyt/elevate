<div class="col-12 col-md-6 offset-lg-2 col-lg-3 pt-lg-6">
    <?php 
        $address = get_field('address', 'option');
        $email = get_field('email', 'option');
        $linkedin = get_field('linkedin_link', 'option');
        $demo_btn = get_field('demo_button', 'option');
    ?>
    <div class="contact-info px-4 px-lg-0">
        <h6 class="h7 text-white">Contact Us</h6>
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