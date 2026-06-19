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

    register_nav_menus(
        array(
            'primary' => __( 'Menú principal' ),
        )
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
 * Walker para el menú de WP: genera <li><a>...</a></li> simple para que
 * encaje con el markup de Bootstrap (list-inline-item / clase "anchor"),
 * sin las clases adicionales que agrega Walker_Nav_Menu por defecto.
 */
class Incredible_Nav_Walker extends Walker_Nav_Menu {
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $li_class   = ! empty( $args->li_class ) ? ' class="' . esc_attr( $args->li_class ) . '"' : '';
        $link_class = ! empty( $args->link_class ) ? ' class="' . esc_attr( $args->link_class ) . '"' : '';

        $output .= '<li' . $li_class . '>';
        $output .= '<a href="' . esc_url( $item->url ) . '"' . $link_class . '>';
        $output .= esc_html( $item->title );
        $output .= '</a>';
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}

/**
 * Fallback del menú móvil (#navmenu) mientras no se haya asignado un menú
 * de WP a la ubicación "primary" en Apariencia > Menús.
 */
function incredible_nav_fallback_mobile() {
    foreach ( incredible_get_nav_items() as $item ) {
        printf(
            '<li><a class="anchor" href="%s">%s</a></li>',
            esc_url( $item['url'] ),
            esc_html( $item['label'] )
        );
    }
}

/**
 * Fallback del menú de escritorio mientras no se haya asignado un menú
 * de WP a la ubicación "primary" en Apariencia > Menús.
 */
function incredible_nav_fallback_desktop() {
    foreach ( incredible_get_nav_items() as $item ) {
        printf(
            '<li class="list-inline-item"><a href="%s">%s</a></li>',
            esc_url( $item['url'] ),
            esc_html( $item['label'] )
        );
    }
}

/**
 * Links de respaldo del menú principal (mobile + desktop), usados por
 * incredible_nav_fallback_mobile()/incredible_nav_fallback_desktop() solo
 * mientras no exista un menú de WP asignado a la ubicación "primary".
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
