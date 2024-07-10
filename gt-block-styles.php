<?php
/**
 * Plugin Name:       My Block Styles
 * Plugin URI:        https://icodeforapurpose.com
 * Description:       Collection of my block styles for my sites
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Birgit Pauli-Haack
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gtbs
 *
 * @package Psl
 */


function gtbs_register_block_styles() { 

    wp_enqueue_style(
        'image-block-style',
        plugin_dir_url( __FILE__) . 'css/image-block-style.css',
        
    );

    register_block_style(
        'core/image',
        array(
            'name'         => 'gray-border',
            'label'        => __( 'Gray Border', 'gtbs' ),
            'style_handle' => 'image-block-style'
        )
    );

}
add_action( 'init', 'gtbs_register_block_styles' );