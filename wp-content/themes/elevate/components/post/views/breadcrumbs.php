<?php 
    //$DATA->link
    //$DATA->title
    //$DATA->date
    //$DATA->cats
?>
<section class="breadcrumbs position-relative py-4 py-lg-5">
    <a href="<?php echo $DATA->link; ?>" class="back-link ml-3 mb-3 ml-lg-4"><?php echo $DATA->title; ?></a>
    <div class="container">
        <div class="row">
            <div class="col-12 offset-lg-2 col-lg-8">
                <p class="d-inline-block text-gray medium mb-2"><?php echo $DATA->date; ?></p>
                <?php if (!empty($DATA->cats)){
                    foreach ($DATA->cats as $cat) { ?>
                        <span class="d-inline-block mx-1 text-gray medium">.</span>
                        <p class="d-inline-block text-gray medium mb-2"><?php echo $cat->name; ?></p>
                    <?php }
                } ?>
                <hr class="ml-0 d-lg-none">
            </div>
        </div>
    </div>
</section>