<?php
namespace Setup\PostTypes;

class CaseStudy
{
    /**
     * Registers CaseStudy Post Type
     */
    public static function register()
    {
        register_post_type( 'case_study',
            array(
                'labels' => array(
                    'name' => __( 'Case Studies', 'components-theme' ),
                    'singular_name' => __( 'Case Study', 'components-theme' ),
                    'all_items' => __( 'All Case Studies', 'components-theme' ),
                    'add_new' => __( 'Add New', 'components-theme' ),
                    'add_new_item' => __( 'Add New Case Study', 'components-theme' ),
                    'edit' => __( 'Edit', 'components-theme' ),
                    'edit_item' => __( 'Edit Case Study', 'components-theme' ),
                    'new_item' => __( 'New Case Study', 'components-theme' ),
                    'view_item' => __( 'View Case Study', 'components-theme' ),
                    'search_items' => __( 'Search Case Studies', 'components-theme' ),
                    'not_found' =>  __( 'Nothing found in the Database.', 'components-theme' ),
                    'not_found_in_trash' => __( 'Nothing found in Trash', 'components-theme' ),
                    'parent_item_colon' => ''
                ),
                'description' => __( 'Add Case Studies', 'components-theme' ),
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'show_ui' => true,
                'query_var' => true,
                'menu_position' => 9,
                'menu_icon' => 'dashicons-analytics',
                'rewrite'	=> array( 'slug' => 'case-study', 'with_front' => false ),
                'has_archive' => 'case-studies',
                'capability_type' => 'post',
                'hierarchical' => false,
                'show_in_rest' => true, //add gutenberg
                'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions')
            )
        );
    }
}
