<?php switch (get_row_layout()) {
    case 'hero_w_phone':
        $prefix = 'hero_w_phone_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->bkgd_img = get_sub_field($prefix.'background_image');
        $section->headline = get_sub_field($prefix.'headline');
        $section->subheadline = get_sub_field($prefix.'subheadline');
        $section->phone_img = get_sub_field($prefix.'phone_image');
        Components\View::render('content', 'hero-phone', $section);

        break;

    case '6040_frames_&_text':
        $prefix = '6040_frames_&_text_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->frame_ipad = get_sub_field($prefix.'ipad_frame_image');
        $section->frame_iphone = get_sub_field($prefix.'iphone_frame_image');
        $section->right_text = get_sub_field($prefix.'right_text');
        Components\View::render('content', 'sixty-forty-frames-text', $section);

        break;

    case 'icon_sections':
        $prefix = 'icon_sections_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->title = get_sub_field($prefix.'section_title');
        $section->items = array();
        if( have_rows($prefix.'sections_icons') ):
            while ( have_rows($prefix.'sections_icons') ) : the_row();
                $item = new StdClass;
                $item->icon = get_sub_field('icon');
                $item->headline = get_sub_field('headline');
                $item->text = get_sub_field('description');
                array_push($section->items, $item);
            endwhile;
        endif;
        Components\View::render('content', 'icon-sections', $section);

        break;

    case 'product_modules':
        $prefix = 'product_modules_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->title = get_sub_field($prefix.'section_title');
        $section->subtitle = get_sub_field($prefix.'section_subtitle');
        $section->link = get_sub_field($prefix.'view_all_link');
        $section->img = get_sub_field($prefix.'featured_image');
        $section->items = array();
        if( have_rows($prefix.'modules') ):
            while ( have_rows($prefix.'modules') ) : the_row();
                $item = new StdClass;
                $item->icon = get_sub_field('icon');
                $item->headline = get_sub_field('headline');
                $item->text = get_sub_field('description');
                $item->link = get_sub_field('link');
                array_push($section->items, $item);
            endwhile;
        endif;
        Components\View::render('content', 'product-modules', $section);

        break;

    case 'carousel':
        $prefix = 'carousel_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->items = array();
        if( have_rows($prefix.'carousel') ):
            while ( have_rows($prefix.'carousel') ) : the_row();
                $item = new StdClass;
                $item->bkgd_img = get_sub_field('background_image');
                $item->headline = get_sub_field('headline');
                $item->subheadline = get_sub_field('subheadline');
                $item->link = get_sub_field('link');
                array_push($section->items, $item);
            endwhile;
        endif;
        Components\View::render('content', 'carousel', $section);

        break;

    case 'adapters_&_partnerships':
        $prefix = 'adapters_&_partnerships_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->adapter_content = get_sub_field($prefix.'certified_adapters_content');
        $section->adapters = array();
        if( have_rows($prefix.'adapter_companies') ):
            while ( have_rows($prefix.'adapter_companies') ) : the_row();
                $item = new StdClass;
                $item->img = get_sub_field('company_logo');
                $item->link = get_sub_field('company_link');
                array_push($section->adapters, $item);
            endwhile;
        endif;
        $section->partner_content = get_sub_field($prefix.'partnership_content');
        $section->partners = array();
        if( have_rows($prefix.'partnership_companies') ):
            while ( have_rows($prefix.'partnership_companies') ) : the_row();
                $item = new StdClass;
                $item->img = get_sub_field('company_logo');
                array_push($section->partners, $item);
            endwhile;
        endif;
        $section->see_all_link = get_sub_field($prefix.'see_all_link');
        Components\View::render('content', 'adapters-partnerships', $section);

        break;

    case 'process_section':
        $prefix = 'process_section_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->bkgd_img = get_sub_field($prefix.'background_image');
        $section->title = get_sub_field($prefix.'section_title');
        $section->description = get_sub_field($prefix.'section_description');
        $section->items = array();
        if( have_rows($prefix.'icon_modules') ):
            while ( have_rows($prefix.'icon_modules') ) : the_row();
                $item = new StdClass;
                $item->icon = get_sub_field('icon');
                $item->title = get_sub_field('title');
                $item->text = get_sub_field('text');
                array_push($section->items, $item);
            endwhile;
        endif;
        $section->tagline = get_sub_field($prefix.'featured_tagline');
        $section->feat_img = get_sub_field($prefix.'featured_image');
        $section->offset = get_sub_field($prefix.'offset_featured_image');
        Components\View::render('content', 'process-section', $section);

        break; 
        
    case 'form':
        $prefix = 'form_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->title = get_sub_field($prefix.'section_title');
        $section->form = get_sub_field($prefix.'form_code');
        Components\View::render('content', 'form', $section);    

        break; 

    case 'featured_posts':
        $prefix = 'featured_posts_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->title = get_sub_field($prefix.'section_title');
        $section->link = get_sub_field($prefix.'view_all_link');
        $section->feat_posts = array();
        $post_type = get_sub_field($prefix.'chose_post_type');
        $custom = get_sub_field($prefix.'custom_curate');
        if ($custom) {
            $custom_posts = get_sub_field($prefix.'custom_featured_posts');
        } else {
            global $post;
            $args = array(
                'post_type'              => $post_type,
                'posts_per_page'         => 6,
                'post_status'            => 'publish'
            );
            $query = new WP_Query( $args );
            if( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    $p = new StdClass;
                    $p->title = get_the_title();
                    $p->link = get_the_permalink();
                    $p->image = get_the_post_thumbnail_url();
                    array_push($section->feat_posts, $p);
                }
                wp_reset_postdata();
            }
        }
        Components\View::render('content', 'featured-posts', $section);    

        break; 

    case 'business_profile':
        $prefix = 'business_profile_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->industry = get_sub_field($prefix.'industry');
        $section->data_l = array();
        if( have_rows($prefix.'data_connectors_left') ):
            while ( have_rows($prefix.'data_connectors_left') ) : the_row();
                $item = new StdClass;
                $item->title = get_sub_field('title');
                $item->items_l = array();
                if( have_rows('items_l') ):
                    while ( have_rows('items_l') ) : the_row();
                        $i = get_sub_field('item');
                        array_push($item->items_l, $i);
                    endwhile;
                endif;
                array_push($section->data_l, $item);
            endwhile;
        endif;
        $section->data_r = array();
        if( have_rows($prefix.'data_connectors_right') ):
            while ( have_rows($prefix.'data_connectors_right') ) : the_row();
                $item = new StdClass;
                $item->title = get_sub_field('title');
                $item->items_r = array();
                if( have_rows('items_r') ):
                    while ( have_rows('items_r') ) : the_row();
                        $i = get_sub_field('item');
                        array_push($item->items_r, $i);
                    endwhile;
                endif;
                array_push($section->data_r, $item);
            endwhile;
        endif;
        $section->img = get_sub_field($prefix.'profile_image');
        Components\View::render('content', 'business-profile', $section);

        break;    
    
    case 'quote_&_image':
        $prefix = 'quote_&_image_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->quote = get_sub_field($prefix.'quote');
        $section->q_color = get_sub_field($prefix.'quote_color');
        $section->img = get_sub_field($prefix.'q_image');
        $section->offset = get_sub_field($prefix.'offset_image');
        Components\View::render('content', 'quote-image', $section);

        break; 

    case 'full_image':   
        $prefix = 'full_image_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->img = get_sub_field($prefix.'full_img');
        Components\View::render('content', 'full-image', $section);
        
        break; 

    case 'video': 
        $prefix = 'video_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->video = get_sub_field($prefix.'embed_video');
        Components\View::render('content', 'video', $section);
        
        break;   

    default:
        // Default is Generic Text wysiwyg
        $prefix = 'content_section_';
        $section = new StdClass;
        $section->row_index = get_row_index();
        $section->text = get_sub_field($prefix.'flex_text');
        Components\View::render('content', 'wysiwyg', $section);
        
        break;
} ?>