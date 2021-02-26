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

    default:
        // Default is Generic Text wysiwyg
        // $section = new StdClass;
        // $section->row_index = get_row_index();
        // $section->text = get_sub_field('flex_text');
        // Components\View::render('flex-content', 'wysiwyg', $section);
        
        break;
} ?>