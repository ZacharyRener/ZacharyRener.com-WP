<?php

function remove_default_block_patterns() {
    remove_theme_support('core-block-patterns');
}

add_action('after_setup_theme', 'remove_default_block_patterns');
