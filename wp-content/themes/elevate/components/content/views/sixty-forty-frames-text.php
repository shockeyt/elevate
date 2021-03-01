<?php 
    //$DATA->row_index
    //$DATA->frame_ipad
    //$DATA->frame_iphone
    //$DATA->right_text
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="sixty-forty-frames-text bg-white py-5 py-md-6">
    <div class="container">
        <div class="row">
            <div class="col-12 order-2 order-md-1 col-md-6 col-lg-8 mt-5 mt-md-0">
                frames here
            </div>
            <div class="col-12 order-1 order-md-2 col-md-6 col-lg-4">
                <div class="content text-center text-md-left px-4 pr-lg-5">
                    <?php echo $DATA->right_text; ?>
                </div>
            </div>
        </div>
    </div>
</section>