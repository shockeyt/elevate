<?php 
    $text = \Setup\Helpers::custom_excerpt(get_the_excerpt(), 170);
?>
<div class="listing-item col-12 offset-lg-1 col-lg-10 mb-md-6">
    <a href="<?php echo get_the_permalink(); ?>">
    <div class="row">
        <div class="col-12 col-md-6 bkgd-img" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
        <div class="col-12 col-md-6">
            <div class="listing-item-content py-4 px-3 p-md-5">
                <div class="mb-3">
                    <p class="small text-gray d-inline-block mb-0"><?php echo get_the_date(); ?></p><?php echo(!empty(get_the_category()[0]))? '<span class="divider mx-2"></span><p class="small text-gray d-inline-block mb-0">'.get_the_category()[0]->name.'</p>' : ''; ?>
                </div>
                <h6 class="text-green bold mb-3"><?php echo get_the_title(); ?></h6>
                <div class="content mb-4">
                    <?php echo $text; ?>
                </div>
                <button class="btn btn-outline-green">Read more</button>
            </div>
        </div>
    </div>
    </a>
</div>