<?php
// Template para la página con slug "blog" (page-blog.php).
get_header();

$theme_uri = get_template_directory_uri();
?>

<!-- Hero -->
<section
    id="hero"
    style="background: url(<?php echo esc_url( $theme_uri . '/assets/images/bg-hero-blog.png' ); ?>) no-repeat"
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-auto text-center">
                <div>
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        Todo Incredible
                    </h1>
                    <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        <strong>Descubre recomendaciones</strong>,
                        eventos, actividades y todo lo<br />
                        que puedes vivir en
                        <strong>Incredible Pizza Chihuahua</strong>.
                    </p>
                    <ul class="list-inline mt-4 mt-xl-5 mb-0">
                        <li
                            class="list-inline-item"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                        >
                            <a
                                href="<?php echo esc_url( home_url( '/paquetes/' ) ); ?>"
                                class="btn btn-secondary rounded-pill"
                                >Ver paquetes</a
                            >
                        </li>
                        <li
                            class="list-inline-item"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="600"
                        >
                            <a
                                href="#"
                                class="btn btn-primary rounded-pill"
                                >Reservar</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sigue descubriendo -->
<section id="sigue-descubriendo" class="pt-60 text-center">
    <div class="container">
        <p
            id="text-aux-1"
            class="text-azul fw-bold mb-0"
            data-aos="fade-up"
            data-aos-duration="1000"
        >
            Sigue
        </p>
        <h1
            class="titulo-highlight mb-4"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
        >
            descubriendo
        </h1>
    </div>
</section>

<!-- Un día completo en Incredible Pizza -->
<section class="pb-60">
    <div class="container">
        <img
            src="<?php echo esc_url( $theme_uri . '/assets/images/blog-foto-portada.png' ); ?>"
            class="img-fluid rounded-4 mb-5"
            alt="Un día completo en Incredible Pizza"
            data-aos="fade-up"
            data-aos-duration="1000"
        />
        <h1
            class="text-azul fw-bold text-center mb-4"
            data-aos="fade-up"
            data-aos-duration="1000"
        >
            Un día completo en Incredible Pizza
        </h1>

        <p data-aos="fade-up" data-aos-duration="1000">
            <strong>Mucho más que pizza y videojuegos.</strong>
        </p>
        <p data-aos="fade-up" data-aos-duration="1000">
            Hay lugares para comer, lugares para jugar... y lugares
            donde puedes pasar horas haciendo ambas cosas.
        </p>
        <p data-aos="fade-up" data-aos-duration="1000">
            En Incredible Pizza Chihuahua, la experiencia cambia por
            completo porque todo está en un solo lugar: buffet
            ilimitado, videojuegos, atracciones y espacios para convivir
            con amigos o familia.
        </p>

        <p data-aos="fade-up" data-aos-duration="1000">
            <strong>Diversión para todos.</strong>
        </p>
        <p data-aos="fade-up" data-aos-duration="1000">
            Mientras unos están en los Go Karts, otros juntan tickets en
            arcade o prueban experiencias VR. Aquí siempre hay algo
            pasando y cada quien vive el día a su manera.
        </p>

        <p data-aos="fade-up" data-aos-duration="1000">
            <strong>Comer también es parte del plan.</strong>
        </p>
        <p data-aos="fade-up" data-aos-duration="1000">
            Después de jugar, el buffet se vuelve parte favorita de la
            visita. Pizza, pasta, bebidas y más opciones para recargar
            energía y seguir disfrutando.
        </p>

        <p data-aos="fade-up" data-aos-duration="1000">
            <strong>Un plan que funciona para todos.</strong>
        </p>
        <p class="mb-5" data-aos="fade-up" data-aos-duration="1000">
            Ya sea una salida familiar, una tarde con amigos o una
            celebración especial, Incredible combina comida y
            entretenimiento en una experiencia completa.
        </p>

        <!-- Últimos 3 posts del blog -->
        <div class="row g-4">
            <?php
            $incredible_latest_posts = new WP_Query(
                array(
                    'post_type'           => 'post',
                    'post_status'         => 'publish',
                    'posts_per_page'      => 3,
                    'ignore_sticky_posts' => true,
                )
            );

            if ( $incredible_latest_posts->have_posts() ) :
                $incredible_card_delay = 0;
                while ( $incredible_latest_posts->have_posts() ) :
                    $incredible_latest_posts->the_post();
                    ?>
                    <div
                        class="col-lg-4"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="<?php echo esc_attr( $incredible_card_delay ); ?>"
                    >
                        <div class="card card-blog">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'medium_large', array( 'class' => 'card-img-top' ) ); ?>
                            <?php else : ?>
                                <img
                                    src="<?php echo esc_url( $theme_uri . '/assets/images/blog-thumb-1.png' ); ?>"
                                    class="card-img-top"
                                    alt="<?php the_title_attribute(); ?>"
                                />
                            <?php endif; ?>
                            <div class="card-body">
                                <div
                                    class="card-meta d-flex align-items-center justify-content-between mb-3"
                                >
                                    <small><?php echo esc_html( incredible_get_primary_category() ); ?></small>
                                    <a
                                        href="<?php the_permalink(); ?>"
                                        class="btn btn-primary rounded-pill"
                                        >Leer más</a
                                    >
                                </div>
                                <h3 class="card-title h5">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="card-text mb-0">
                                    <small><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $incredible_card_delay += 200;
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="col-12 text-center">
                    <p class="mb-0">Muy pronto nuevas publicaciones.</p>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Banner: disfrutar -->
<section id="banner-2" class="py-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <p
                    id="text-aux-1"
                    class="mb-0"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                >
                    Tu única tarea es
                </p>
                <h1
                    data-aos="fade-in"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                >
                    disfrutar
                </h1>
                <p
                    id="text-aux-2"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Aquí no te preocupes por nada.
                </p>
                <a
                    class="btn btn-light rounded-pill"
                    href="#"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="600"
                    >Cotizar evento</a
                >
            </div>
        </div>
    </div>
    <div
        id="banner-pizza-1"
        class="d-none d-md-block"
        data-aos="fade-right"
        data-aos-duration="1000"
        data-aos-delay="800"
    ></div>
    <div
        id="banner-pizza-2"
        class="d-none d-md-block"
        data-aos="fade-left"
        data-aos-duration="1000"
        data-aos-delay="800"
    ></div>
</section>

<?php get_footer(); ?>
