<?php 
    //$DATA->row_index
    //$DATA->frame_ipad
    //$DATA->frame_iphone
    //$DATA->right_text
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="sixty-forty-frames-text bg-white py-5 py-md-6">
    <div class="container">
        <div class="row">
            <div class="anim-right anim-load col-12 order-2 order-md-1 col-md-6 col-lg-8 mt-5 mt-md-0 position-relative">
                <?php if (!empty($DATA->frame_ipad)) : ?>
                <div class="ipad-frame position-relative">
                    <img src="/wp-content/themes/elevate/assets/images/ipad.png" alt="ipad frame">
                    <div class="frame-border">
                        <img src="<?php echo $DATA->frame_ipad['url']; ?>" alt="<?php echo $DATA->frame_ipad['alt']; ?>" class="ipad-img">
                    </div>
                </div>
                <?php endif; ?>
                <?php if (!empty($DATA->frame_iphone)) : ?>
                <div class="iphone-frame position-absolute z-index-1">
                    <img src="/wp-content/themes/elevate/assets/images/iphone.png" alt="iphone frame">
                    <div class="frame-border">
                        <img src="<?php echo $DATA->frame_iphone['url']; ?>" alt="<?php echo $DATA->frame_iphone['alt']; ?>" class="ipad-img">
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-12 order-1 order-md-2 col-md-6 col-lg-4">
                <div class="anim-up anim-load content text-center text-md-left px-4 pr-lg-5 py-lg-5 d-lg-rellax" data-rellax-speed="1">
                    <?php echo $DATA->right_text; ?>
                </div>
            </div>
        </div>
    </div>
</section>