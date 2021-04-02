<section class="related-posts py-5 pt-lg-6 pb-lg-8">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4 mb-lg-5">
                <h5 class="regular text-green cap">Related Stories</h5>
            </div>
        </div>
        <div class="row justify-content-center">    
            <?php 
            foreach ($DATA as $item) { 
                //$item->img
				//$item->title
				//$item->link     
            ?>
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <a href="<?php echo $item->link; ?>">
                        <div class="one-r-post bkgd-img" style="background-image:url(<?php echo $item->img; ?>);">
                            <div class="inner-reveal h-100">
                                <h6 class="text-white line-1"><?php echo $item->title; ?></h6>
                                <div class="goto bg-light-green">
                                    <img src="/wp-content/themes/elevate/assets/images/icons/arrow-right-green-lg.svg" alt="go to related post">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-5 mt-lg-6">
                <a href="/articles" class="btn btn-lightgreen">View All</a>
            </div>
        </div>
    </div>
</section>