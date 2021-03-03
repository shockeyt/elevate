<?php 
    // $DATA->row_index
    // $DATA->adapter_content
    // $DATA->adapters
    //         $item->img
    // $DATA->partner_content
    // $DATA->partners
    //         $item->featured_image
    // $DATA->see_all_link
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="adapters-partnerships bg-bkgd-gray py-5 py-md-6">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5 mb-lg-6">
                <h2>Adapters & Partnerships</h2>
                <hr>
            </div>
            <div class="col-12 col-lg-4">
                <div class="content text-center text-lg-left">
                    <?php echo $DATA->adapter_content; ?>
                </div>
            </div>
            <div class="col-12 col-lg-8 pt-3 pb-3 pt-md-6 pb-md-6 pt-lg-10 pb-lg-9">
                <div class="wheel-container">
                    <div class="adapter-wheel">
                        <div class="wheel">
                            <img src="/wp-content/themes/elevate/assets/images/elevate-logo-dark.svg" alt="elevate logo">
                        </div>

                        <?php
                        //logos
                        $l = 0;
                        foreach ($DATA->adapters as $logo) {
                            if (!empty($logo->img)){
                                $l++;                      
                        ?>    
                            <img src="<?php echo $logo->img['url']; ?>" alt="<?php echo $logo->img['alt']; ?>" class="logo logo-<?php echo $l; ?>">
                        <?php 
                            }
                        } ?>

                        <?php 
                        //spokes
                        $s = 0;
                        foreach ($DATA->adapters as $spk) {
                            if (!empty($spk->img)){
                                $s++;
                        ?>    
                            <div class="spoke spoke-<?php echo $s; ?>"></div>
                        <?php 
                            }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>