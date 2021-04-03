<?php 
    //$DATA->row_index
    //$DATA->title
    //$DATA->form 
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="form bg-bkgd-gray py-5 py-md-6">
    <div class="container">
        <div class="row">
            <div class="anim-right col-12 text-center text-md-left">
                <?php if (isset($DATA->case_study) && !empty($DATA->case_study)) { ?>
                <h5 class="text-green"><?php echo $DATA->title; ?></h5>
                <?php } else { ?>
                <h1 class="text-green"><?php echo $DATA->title; ?></h1>
                <?php } ?>
            </div>
            <div class="col-12 mt-5">
                <?php echo $DATA->form; ?>
            </div>
        </div>
    </div>
</section>