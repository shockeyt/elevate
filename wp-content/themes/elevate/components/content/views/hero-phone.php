<?php  
    //$DATA->row_index
    //$DATA->bkgd_img
    //$DATA->headline
    //$DATA->subheadline
    //$DATA->phone_img
?>
<section class="hero-phone position-relative bkgd-img" style="background-image:url(<?php echo $DATA->bkgd_img['url']; ?>);">
    <div class="headline-section pt-4 pb-5 px-3 p-md-5 text-center text-md-left">
        <h1 class="text-white mb-3"><?php echo($DATA->headline)? $DATA->headline : get_the_title(); ?></h1>
        <?php if (!empty($DATA->subheadline)): ?>
            <h6 class="text-white line-1"><?php echo $DATA->subheadline; ?></h6>
        <?php endif; ?>
    </div>
    <?php if (!empty($DATA->phone_img)): ?>
        <div class="phone-section">
            <img src="<?php echo $DATA->phone_img['url']; ?>" alt="<?php echo $DATA->phone_img['alt']; ?>">
        </div>
    <?php endif; ?>
</section>