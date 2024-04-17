<?php

function my_custom_allowed_block_types($allowed_blocks, $editor_context) {
    return array(
        'core/paragraph',    // Core Paragraph Block
        'core/button',       // Core Button Block
        'core/buttons',      // Core Buttons Block (container for multiple button blocks)
        'core/columns',      // Core Columns Block
        'core/column',       // Core Column Block (individual columns inside the Columns block)
        'core/spacer',       // Core Spacer Block
        'core/shortcode',    // Core Shortcode Block
        'core/heading',      // Core Heading Block
        'core/list',         // Core List Block
        'core/quote',        // Core Quote Block

		'zr/header',         // Custom Header Block
		'zr/post-grid',      // Custom Post Grid Block
    );
}

add_filter('allowed_block_types_all', 'my_custom_allowed_block_types', 10, 2);
