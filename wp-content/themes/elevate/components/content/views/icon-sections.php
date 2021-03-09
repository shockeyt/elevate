<?php 
    // $DATA->row_index
    // $DATA->title
    // $DATA->items
    //     $item->icon
    //     $item->headline
    //     $item->text
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="icon-sections bg-green py-5 py-md-7">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-lg-left anim-right">
                <h1 class="text-white mb-5 mb-lg-6"><?php echo $DATA->title; ?></h1>
            </div>
            <?php foreach ($DATA->items as $item) { ?>
            <div class="col-6 anim-up">
                <div class="icon-section mb-4 pr-lg-2">
                    <img class="mb-2 mx-auto mr-lg-4" src="<?php echo $item->icon['url']; ?>" alt="<?php echo $item->icon['alt']; ?>">
                    <div class="text text-center text-lg-left">
                        <h5 class="text-white mb-2"><?php echo $item->headline; ?></h5>
                        <p class="text-white"><?php echo $item->text; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>