<?php 
    //$DATA->title
    //$DATA->subtitle
    //$DATA->form
?>
<section class="post-content position-relative">

    <div class="post-gate">
        <div class="gate-box text-center bkgd-img py-4 py-md-5 px-4 px-md-7 px-lg-8" style="background-image:url('/wp-content/themes/elevate/assets/images/mountain-bkgd.png');">
            <?php if (!empty($DATA->title)) : ?>
            <h4 class="text-white"><?php echo $DATA->title; ?></h4>
            <?php endif; ?>
            <?php if (!empty($DATA->subtitle)) : ?>
            <h6 class="h7 medium text-white"><?php echo $DATA->subtitle; ?></h6>
            <?php endif; ?>
            <div class="gate-form mt-3 mt-md-5">
                <?php echo $DATA->form; ?>
            </div>
        </div>
    </div>

	<div class="post-container gated container">	
		<div class="row">
			<div class="col-12 offset-lg-1 col-lg-10">
				<?php 
				
				Components\View::render('post', get_post_format()); 
				
				?>
			</div>
		</div>
	</div>
</section>