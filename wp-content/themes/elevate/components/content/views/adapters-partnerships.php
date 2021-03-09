<?php 
    // $DATA->row_index
    // $DATA->adapter_content
    // $DATA->adapters
    //         $item->img
    // $DATA->partner_content
    // $DATA->partners
    //         $item->img
    // $DATA->see_all_link
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="adapters-partnerships bg-bkgd-gray py-5 py-md-6">
    <div class="container">
        <div class="row">
            <div class="anim-up col-12 text-center mb-5 mb-lg-6">
                <h2>Adapters & Partnerships</h2>
                <hr>
            </div>
            <div class="anim-right col-12 col-lg-4">
                <div class="content text-center text-lg-left">
                    <?php echo $DATA->adapter_content; ?>
                </div>
            </div>
            <div class="anim-left col-12 col-lg-8 pt-3 pb-3 pt-md-6 pb-md-6 pt-lg-10 pb-lg-10">
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
        <div class="row">
            <div class="col-12">
                <hr class="full-white">
            </div>
            <?php if (!empty($DATA->partner_content)): ?>
                <div class="anim-right col-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 my-5 my-md-6">
                    <div class="content text-center">
                        <?php echo $DATA->partner_content; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="row partners-row">
            <?php 
            if (!empty($DATA->partners)){ 
                foreach ($DATA->partners as $p) {
            ?>
            <div class="anim-up col-6 col-md-4 col-lg-3 mb-4 mb-md-5">
                <div class="one-logo">
                    <img src="<?php echo $p->img['url']; ?>" alt="<?php echo $p->img['alt']; ?>">
                </div>
            </div>
            <?php 
                }
            } ?>
        </div>
        <?php if (!empty($DATA->see_all_link)): ?>
            <div class="row mb-5 mb-md-7">
                <div class="col-12 text-center">
                    <a href="<?php echo $DATA->see_all_link['url']; ?>" target="<?php echo $DATA->see_all_link['target'] ? $DATA->see_all_link['target'] : '_self'; ?>" class="btn-outline txt-black mt-4"><?php echo $DATA->see_all_link['title']; ?></a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>