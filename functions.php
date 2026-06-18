<?php
/**
 * Funciones y configuración del theme Incredible.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'INCREDIBLE_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function incredible_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support(
        'html5',
        array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' )
    );
}
add_action( 'after_setup_theme', 'incredible_setup' );

/**
 * Encolar estilos y scripts.
 */
function incredible_scripts() {
    wp_enqueue_style( 'incredible-style', get_stylesheet_uri(), array(), INCREDIBLE_VERSION );

    wp_enqueue_style(
        'incredible-app',
        get_template_directory_uri() . '/assets/css/styles.css',
        array(),
        filemtime( get_template_directory() . '/assets/css/styles.css' )
    );

    wp_enqueue_script(
        'incredible-app',
        get_template_directory_uri() . '/assets/js/app.bundle.js',
        array(),
        filemtime( get_template_directory() . '/assets/js/app.bundle.js' ),
        array(
            'in_footer' => true,
            'strategy'  => 'defer',
        )
    );
}
add_action( 'wp_enqueue_scripts', 'incredible_scripts' );

/**
 * Links del menú principal (mobile + desktop), compartidos en header.php.
 *
 * El sitio espera una página con cada uno de estos slugs (buffet, paquetes,
 * cumpleanos, eventos, juegos, blog) ya que cada una usa su propio
 * page-{slug}.php.
 */
function incredible_get_nav_items() {
    return array(
        array(
            'label' => 'Buffet',
            'url'   => home_url( '/buffet/' ),
        ),
        array(
            'label' => 'Paquetes',
            'url'   => home_url( '/paquetes/' ),
        ),
        array(
            'label' => 'Cumpleaños',
            'url'   => home_url( '/cumpleanos/' ),
        ),
        array(
            'label' => 'Eventos',
            'url'   => home_url( '/eventos/' ),
        ),
        array(
            'label' => 'Juegos',
            'url'   => home_url( '/juegos/' ),
        ),
        array(
            'label' => 'Blog',
            'url'   => home_url( '/blog/' ),
        ),
    );
}

/**
 * Nombre de la primera categoría asignada a un post (usado en las cards del blog).
 */
function incredible_get_primary_category( $post_id = null ) {
    $post_id    = $post_id ? $post_id : get_the_ID();
    $categories = get_the_category( $post_id );

    if ( empty( $categories ) ) {
        return __( 'Blog' );
    }

    return $categories[0]->name;
}
