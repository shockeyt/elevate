<?php 
    //$DATA->row_index
    //$DATA->img 
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="full-image <?php echo($DATA->row_index == 1)? 'anim-up anim-load' : 'anim-up'; ?>">
    <div class="container">
        <div class="row">
            <div class="col-12 px-0 px-lg-3">
                <div class="bkgd-img" style="background-image:url(<?php echo $DATA->img['url']; ?>);"></div>
            </div>
        </div>
    </div>
</section>