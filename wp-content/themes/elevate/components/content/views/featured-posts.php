<?php 
    // $DATA->row_index
    // $DATA->title
    // $DATA->link
    // $DATA->feat_posts
    //     $p->title
    //     $p->link
    //     $p->image
?>
<section id="flex-section-<?php echo $DATA->row_index; ?>" class="featured-posts overflow-hidden py-5 py-md-6">
    <div class="container">
        <div class="row">
            <div class="anim-right col-12 text-center text-md-left mb-4 mb-md-0">
                <h1 class="text-green d-md-inline-block"><?php echo $DATA->title; ?></h1>
                <?php if (!empty($DATA->link)): ?>
                    <a href="<?php echo $DATA->link['url']; ?>" target="<?php echo $DATA->link['target'] ? $DATA->link['target'] : '_self'; ?>" class="basic-link d-inline-block ml-md-4"><?php echo $DATA->link['title']; ?></a>
                <?php endif; ?>
            </div>
            <div class="anim-up col-12 pb-5 pb-md-0 pt-md-6 position-relative">
                <div id="slider-count">
                    <span class="count"><span id="current-slide-count">01</span>/<?php echo(count($DATA->feat_posts) < 10)? '0'.count($DATA->feat_posts) : count($DATA->feat_posts); ?></span>
                    <span class="bar"></span>
                </div>
                <div id="slider-nav"></div>
                <div class="slide-container position-relative">
                    <div class="feat-posts-slider">
                        <?php foreach ($DATA->feat_posts as $p) { ?>
                        <div class="feat-post bkgd-img" style="background-image:url(<?php echo $p->image; ?>);">
                            <a class="d-block position-relative h-100" href="<?php echo $p->link; ?>">
                                <div class="title-area text-center text-md-left px-4 py-3">
                                    <h5 class="text-green mb-0"><?php echo $p->title; ?></h5>
                                    <img class="d-none d-md-inline-block" src="/wp-content/themes/elevate/assets/images/icons/arrow-right-green.svg" alt="right arrow icon">
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>