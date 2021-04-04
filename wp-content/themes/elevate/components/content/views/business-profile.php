<?php 
    // $DATA->row_index
    // $DATA->industry
    // $DATA->data_l
    //         $item->title
    //         $item->items_l
    //             $i
    // $DATA->data_r
    //         $item->title
    //         $item->items_r
    //             $i
    // $DATA->img
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="business-profile">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-lg-1 col-lg-7 px-0 pl-md-3">
                <div class="profile bg-light-gray px-3 pl-md-4 pr-md-5 pt-4 pt-md-5 pb-6 pl-lg-5">
                    <div class="inner-profile anim-right">
                        <h6 class="semibold text-green">Business Profile</h6>
                        <h6 class="h7 text-green">Industry:</h6>
                        <p><?php echo $DATA->industry; ?></p>
                        <h6 class="semibold text-green mt-md-6">Data Connectors</h6>
                        <div class="d-connectors">
                            <?php if (!empty($DATA->data_l)) : ?>
                            <div class="d-left mr-5 mr-md-3 mr-lg-7">
                                <?php foreach ($DATA->data_l as $item) { ?>
                                    <h6 class="h7 text-green"><?php echo $item->title; ?></h6>
                                    <?php foreach ($item->items_l as $i) { ?>
                                        <p class="ml-3 mb-2"><?php echo $i; ?></p>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <?php endif; ?>
                            <?php if (!empty($DATA->data_r)) : ?>
                            <div class="d-right">
                                <?php foreach ($DATA->data_r as $item) { ?>
                                    <h6 class="h7 text-green"><?php echo $item->title; ?></h6>
                                    <?php foreach ($item->items_r as $i) { ?>
                                        <p class="ml-3 mb-2 ml-lg-0"><?php echo $i; ?></p>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 px-0 pr-md-3">
                <div class="img-w-offset-bkgd position-relative pb-5 pb-md-0 h-100 anim-left">
                    <div class="bkgd-img mr-3 anim-up" style="background-image:url(<?php echo $DATA->img['url']; ?>);"></div>
                    <div class="offset-bkgd bg-light-green"></div>
                </div>
            </div>
        </div>
    </div>
</section>