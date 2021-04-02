<?php
/**
 * The Single Template
 */

get_header();
	
	$hero = new StdClass;
	$hero->title = get_the_title();
	$hero->img = get_the_post_thumbnail_url();
	Components\View::render('content', 'hero-case-studies', $hero);
	
	while ( have_posts() ) : the_post();

		$activate = get_field('gate_content');

		$crumbs = new StdClass;
		$crumbs->link = '/case-studies';
		$crumbs->title = 'All Case Studies';
		$crumbs->date = get_the_date();
		$crumbs->cats = get_the_terms( get_the_ID(), 'case_study_cat' ); 
		$crumbs->gate = ($activate)? 'gate' : '';
		Components\View::render('post', 'breadcrumbs', $crumbs);

		if ($activate) {
			$message = get_field('gate_message');
			if ($message) {
				$gate = new StdClass;
				$gate->title = $message['title'];
				$gate->subtitle = $message['subtitle'];
				$gate->form = $message['form_code'];
			}
			Components\View::render('post', 'gate-case-study', $gate);

		} else {

			Components\View::render('post', 'container-case-study' );

			//flex
			if( have_rows('flex_components') ) {
				while ( have_rows('flex_components') ) : the_row();
					Components\View::render('content', 'flex-index');
				endwhile;
			};

			?>
			<div class="case-study-share">
				<div class="container">
					<div class="row">
						<div class="col-12 offset-lg-2 col-lg-8 my-5">
							<?php Components\View::render('post', 'share'); ?>
							<hr class="full-gray">
						</div>
					</div>
				</div>
			</div>
			<?php

			$section = new StdClass;
			$section->row_index = get_the_ID();
			$section->title = get_field('embedded_form_title');
			$section->form = get_field('embedded_form_code');
			if (!empty($section->form)) {
				Components\View::render('content', 'form', $section);
			}

		}	

	endwhile;

	if (!$activate){
		//related posts
		$related = array();
		global $post;
		$args = array(
			'post_type'              => 'case_study',
			'posts_per_page'         => 3,
			'post_status'            => 'publish',
			'post__not_in'			 => array( get_the_ID() )
		);
		$query = new WP_Query( $args );
		if( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$item = new StdClass;
				$item->img = get_the_post_thumbnail_url();
				$item->title = get_the_title();
				$item->link = get_the_permalink();
				array_push($related, $item);
			}
			wp_reset_postdata();
		}
		Components\View::render('post', 'related-case-study', $related);
	}
	
get_footer(); ?>