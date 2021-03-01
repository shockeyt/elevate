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

    default:
        // Default is Generic Text wysiwyg
        // $section = new StdClass;
        // $section->row_index = get_row_index();
        // $section->text = get_sub_field('flex_text');
        // Components\View::render('flex-content', 'wysiwyg', $section);
        
        break;
} ?>