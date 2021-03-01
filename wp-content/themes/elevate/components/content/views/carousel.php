<?php 
    // $DATA->row_index
    // $DATA->items
    //     $item->bkgd_img
    //     $item->headline
    //     $item->subheadline
    //     $item->link
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="carousel">
    <div class="carousel-slider">
        <?php foreach ($DATA->items as $item) { ?>
        <div class="slide bkgd-img" style="background-image:url(<?php echo $item->bkgd_img['url']; ?>);">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 h-100">
                        <div class="slide-content text-center">
                            <img class="mx-auto mb-3" src="/wp-content/themes/elevate/assets/images/icons/mountains-red.svg" alt="mountains icon">
                            <h3 class="text-white cap"><?php echo $item->headline; ?></h3>
                            <h5 class="text-white medium"><?php echo $item->subheadline; ?></h5>
                            <?php if (!empty($item->link)): ?>
                                <a href="<?php echo $item->link['url']; ?>" target="<?php echo $item->link['target'] ? $item->link['target'] : '_self'; ?>" class="btn-outline mt-4"><?php echo $item->link['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>