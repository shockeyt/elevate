<?php 
    //$DATA->row_index
    //$DATA->text
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="wysiwyg <?php echo($DATA->row_index == 1)? 'anim-up anim-load' : 'anim-up'; ?>">
    <div class="container"> 
        <div class="row">
            <div class="col-12 offset-lg-2 col-lg-8 my-5">
                <div class="content">
                    <?php echo $DATA->text; ?>
                </div>
            </div>
        </div>
    </div>
</section>