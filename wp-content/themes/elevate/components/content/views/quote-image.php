<?php 
    //$DATA->row_index
    //$DATA->quote
    //$DATA->q_color
    //$DATA->img
    //$DATA->offset
    $orientation = 'q_left';
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="quote-image pb-lg-7">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-10">
                <div class="row">
                    <div class="col-12 col-md-6 <?php echo($orientation == 'q_right')? 'col-lg-4 order-2 pl-lg-0 pr-lg-3' : 'col-lg-8 order-1 pl-lg-3 pr-lg-0'; ?> px-0">
                        <div class="quote anim-right <?php echo($DATA->q_color == 'green')? 'bg-light-green' : 'bg-light-gray'; ?> py-4 px-3 p-lg-5">
                            <h3 class="text-mid-green line-1"><?php echo $DATA->quote; ?></h3>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 <?php echo($orientation == 'q_right')? 'col-lg-8 order-1 pl-lg-3 pr-lg-0' : 'col-lg-4 order-2 pl-lg-0 pr-lg-3'; ?> px-0">
                        <div class="bkgd-img anim-left <?php echo($DATA->offset)? 'offset' : ''; ?>" style="background-image:url(<?php echo $DATA->img['url']; ?>);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>