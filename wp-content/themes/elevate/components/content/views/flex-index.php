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

    default:
        // Default is Generic Text wysiwyg
        // $section = new StdClass;
        // $section->row_index = get_row_index();
        // $section->text = get_sub_field('flex_text');
        // Components\View::render('flex-content', 'wysiwyg', $section);
        
        break;
} ?>