<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link
            rel="icon"
            type="image/png"
            href="<?php echo esc_url( get_template_directory_uri() . '/favicon-96x96.png' ); ?>"
            sizes="96x96"
        />
        <link
            rel="icon"
            type="image/svg+xml"
            href="<?php echo esc_url( get_template_directory_uri() . '/favicon.svg' ); ?>"
        />
        <link
            rel="shortcut icon"
            href="<?php echo esc_url( get_template_directory_uri() . '/favicon.ico' ); ?>"
        />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url( get_template_directory_uri() . '/apple-touch-icon.png' ); ?>"
        />
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?>" />
        <link
            rel="manifest"
            href="<?php echo esc_url( get_template_directory_uri() . '/site.webmanifest' ); ?>"
        />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img
                        class="logo img-fluid"
                        alt="<?php bloginfo( 'name' ); ?>"
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo@2x.png' ); ?>"
                        data-theme-light="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo@2x.png' ); ?>"
                        data-theme-dark="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo@2x.png' ); ?>"
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <?php foreach ( incredible_get_nav_items() as $i => $item ) : ?>
                            <li>
                                <a
                                    class="anchor"
                                    id="btn-nav-<?php echo esc_attr( $i + 1 ); ?>"
                                    href="<?php echo esc_url( $item['url'] ); ?>"
                                    ><?php echo esc_html( $item['label'] ); ?></a
                                >
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <ul class="list-unstyled">
                    <li>
                        <a href="#" class="btn btn-primary rounded-pill mb-3"
                            >Únete al club</a
                        >
                    </li>
                    <li>
                        <a href="#" class="btn btn-primary rounded-pill"
                            >Reservar</a
                        >
                    </li>
                </ul>
            </div>
        </div>

        <header id="navbar" class="rounded-pill">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-xl-3 my-auto">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img
                                id="logo-navbar"
                                class="logo img-fluid"
                                alt="<?php bloginfo( 'name' ); ?>"
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo@2x.png' ); ?>"
                                data-theme-light="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo@2x.png' ); ?>"
                                data-theme-dark="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo@2x.png' ); ?>"
                            />
                        </a>
                    </div>
                    <div class="col-lg-6 d-none d-xl-block my-auto text-center">
                        <nav>
                            <ul class="list-inline mb-0">
                                <?php foreach ( incredible_get_nav_items() as $item ) : ?>
                                    <li class="list-inline-item">
                                        <a href="<?php echo esc_url( $item['url'] ); ?>">
                                            <?php echo esc_html( $item['label'] ); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 col-xl-3 my-auto text-end">
                        <ul class="list-inline mb-0 d-none d-xl-block">
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-primary rounded-pill"
                                    >Únete al club</a
                                >
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn btn-primary rounded-pill"
                                    >Reservar</a
                                >
                            </li>
                        </ul>
                        <a
                            id="mburger"
                            class="d-xl-none"
                            href="javascript:void(0)"
                        >
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
