<?php 
    // $DATA->row_index
    // $DATA->title
    // $DATA->subtitle
    // $DATA->link
    // $DATA->img
    // $DATA->items
    //         $item->icon
    //         $item->headline
    //         $item->text
    //         $item->link
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="product-modules py-5 py-md-6">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 offset-md-2 col-md-8 offset-lg-3 col-lg-6 text-center">
                <h1><?php echo $DATA->title; ?></h1>
                <hr>
                <h6 class="h7 d-none d-md-block"><?php echo $DATA->subtitle; ?></h6>
                <?php if (!empty($DATA->link)): ?>
                    <a href="<?php echo $DATA->link['url']; ?>" target="<?php echo $DATA->link['target'] ? $DATA->link['target'] : '_self'; ?>" class="chevron-link"><?php echo $DATA->link['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <?php foreach ($DATA->items as $item) { ?>
            <div class="col-12 col-md-6 mb-4 mb-md-5">
                <div class="product-section text-center text-md-left">
                    <div class="icon-headline mb-md-4">
                        <img class="mx-auto ml-md-0 mr-md-3" src="<?php echo $item->icon['url']; ?>" alt="<?php echo $item->icon['alt']; ?>">
                        <h5 class="mb-md-0"><?php echo $item->headline; ?></h5>
                    </div>
                    <p><?php echo $item->text; ?></p>
                    <?php if (!empty($item->link)): ?>
                        <a href="<?php echo $item->link['url']; ?>" target="<?php echo $item->link['target'] ? $item->link['target'] : '_self'; ?>" class="chevron-link"><?php echo $item->link['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php } ?>

            <?php if (!empty($DATA->img)): ?>
            <div class="col-12 col-md-6">
                <div class="img-w-offset-bkgd position-relative pt-5">
                    <div class="bkgd-img" style="background-image:url(<?php echo $DATA->img['url']; ?>);"></div>
                    <div class="offset-bkgd bg-light-green"></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>