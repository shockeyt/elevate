<?php 
    // $DATA->row_index
    // $DATA->bkgd_img
    // $DATA->title
    // $DATA->description
    // $DATA->items
    //     $item->icon
    //     $item->title
    //     $item->text
    // $DATA->tagline
    // $DATA->feat_img
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="process-section bg-bkgd-gray pb-lg-5">
    <div class="bkgd-img pt-5 pt-md-6 py-lg-6" style="background-image:url(<?php echo $DATA->bkgd_img['url']; ?>);">
        <div class="container position-relative z-index-1">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="text-center text-lg-left text-white mb-3 mb-lg-4"><?php echo $DATA->title; ?></h1>
                    <div class="text-center text-lg-left content mb-4 mb-lg-6"><?php echo $DATA->description; ?></div>
                    <?php foreach ($DATA->items as $item) { ?>
                        <div class="icon-module mb-3 mb-lg-5 px-4 pl-lg-0 pr-lg-5">
                            <img class="mx-auto mb-2 mb-lg-0 mr-lg-4" src="<?php echo $item->icon['url']; ?>" alt="<?php echo $item->icon['alt']; ?>">
                            <div class="module-text text-center text-lg-left">
                                <h5 class="text-white"><?php echo $item->title; ?></h5>
                                <p class="text-white small mb-0"><?php echo $item->text; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-12 col-lg-5 mt-5 mt-lg-0 px-0 px-lg-3 position-relative">
                    <div class="d-none d-lg-block tagline mt-lg-3 ml-lg-5">
                        <h5 class="text-light-green regular"><?php echo $DATA->tagline; ?></h5>
                    </div>
                    <div class="feat-img <?php echo(!empty($DATA->tagline))? 'w-tag' : ''; ?>">
                        <img src="<?php echo $DATA->feat_img['url']; ?>" alt="<?php echo $DATA->feat_img['alt']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>