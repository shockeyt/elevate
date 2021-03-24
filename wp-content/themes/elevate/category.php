<?php
/**
 * The template for displaying category pages
 */

get_header();

	if ( have_posts() ) :

        $tax_object = $wp_query->get_queried_object();
        $hero = new StdClass;
        $hero->title = $tax_object->name;
        $post_id = get_option( 'page_for_posts' );
        $hero->img = get_the_post_thumbnail_url($post_id);
	    Components\View::render('content', 'hero-posts', $hero);

        ?>
        <section class="post-listings py-4 py-md-7">
				
            <?php 
            while ( have_posts() ) : the_post();
            ?>
                <div class="container">
                    <div class="row post-listings-row"> 
                        <?php Components\View::render('post', 'item' ); ?>
                    </div>
                </div>
            <?php 
            endwhile; ?>
            
        </section>
        <?php

	else :
		
		Components\View::render('post', 'empty' );

	endif;

get_footer(); ?>
