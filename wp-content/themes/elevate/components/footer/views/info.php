<div class="col-12 col-lg-3">
    <div class="pt-5 pb-4 px-4 px-lg-0">
        <div class="mb-4">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="/wp-content/themes/elevate/assets/images/elevate-logo.svg" alt="elevate">
            </a>
        </div>
        <?php $mission = get_field('mission_statement', 'option'); ?>
        <p class="mission-statement text-white"><?php echo $mission; ?></p>
    </div>
</div>