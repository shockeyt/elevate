<?php 
    //$DATA->name
    //$DATA->link
    //$DATA->image
    //$DATA->excerpt
?>
<div class="featured-item">
    <div class="bkgd-img" style="background-image:url(<?php echo $DATA->image; ?>);">
        <div class="d-none d-md-block container-fluid">
            <div class="row">
                <div class="listing-content col-12 col-md-8 col-lg-4 mt-md-5 mb-md-7">
                    <a href="<?php echo $DATA->link; ?>">
                        <div class="row">
                            <div class="col-12">
                                <div class="listing-item-content py-4 px-3 py-md-5">
                                    <h5 class="text-green bold mb-3"><?php echo $DATA->name; ?></h5>
                                    <div class="content mb-4">
                                        <?php echo $DATA->excerpt; ?>
                                    </div>
                                    <button class="btn btn-outline-green">Read more</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile content -->
    <div class="d-md-none container-fluid">
        <div class="row">
            <div class="listing-content col-12">
                <a href="<?php echo $DATA->link; ?>">
                    <div class="row">
                        <div class="col-12">
                            <div class="listing-item-content pt-5 pb-4 px-3 p-md-5">
                                <h5 class="text-green bold mb-3"><?php echo $DATA->name; ?></h5>
                                <div class="content mb-4">
                                    <?php echo $DATA->excerpt; ?>
                                </div>
                                <button class="btn btn-outline-green">Read more</button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>