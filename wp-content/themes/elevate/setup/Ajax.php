<?php
namespace Setup;

class Ajax
{
    /**
     * Initialization
     * This method should be run from functions.php
     */
    public static function init()
    {
        add_action('wp_ajax_get_posts', array(__CLASS__, 'get_posts') );
        add_action('wp_ajax_nopriv_get_posts', array(__CLASS__, 'get_posts') );
        add_action('wp_ajax_get_tax', array(__CLASS__, 'get_tax') );
        add_action('wp_ajax_nopriv_get_tax', array(__CLASS__, 'get_tax') );
    }

    public static function get_posts() {
        //$_POST['cat'];
        //$_POST['search'];

        global $post;
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => -1,
        );

        //filter by category
        if ( !empty($_POST['cat']) ) {
            $args['category_name'] = $_POST['cat'];
        }

        //filter by search
        if ( !empty($_POST['search']) ) {
            $args['s'] = $_POST['search'];
        }

        $query = new \WP_Query( $args );
        if( $query->have_posts() ) :
            $count = 0;
            while ( $query->have_posts() ) :
                $query->the_post();
                ?>
                <div class="container">
                    <div class="row post-listings-row"> 
                        <?php \Components\View::render('post', 'item' ); ?>
                    </div>
                </div>
                <?php
            endwhile;	
            wp_reset_postdata();
        endif;

        die();
    }

    public static function get_tax() {
        //$_POST['cat'];
        //$_POST['search'];

        global $post;
        $args = array(
            'post_type'         => 'case_study',
            'posts_per_page'    => -1,
        );

        //filter by tax category
        if ( !empty($_POST['cat']) ) {
            $args['tax_query'] = array(
                'relation' => 'AND'
            );
        }
        //cats
        if (!empty($_POST['cat'])) {
            $cat = array(
                array(
                    'taxonomy' => 'case_study_cat',
                    'field'    => 'slug',
                    'terms'    => array( $_POST['cat'] )
                )
            );
            array_push($args['tax_query'], $cat);
        } 

        //filter by search
        if ( !empty($_POST['search']) ) {
            $args['s'] = $_POST['search'];
        }

        $query = new \WP_Query( $args );
        if( $query->have_posts() ) :
            $count = 0;
            while ( $query->have_posts() ) :
                $query->the_post();
                ?>
                <div class="container">
                    <div class="row post-listings-row"> 
                        <?php \Components\View::render('post', 'item' ); ?>
                    </div>
                </div>
                <?php
            endwhile;	
            wp_reset_postdata();
        endif;

        die();
    }
}
