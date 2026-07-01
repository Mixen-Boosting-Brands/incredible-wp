<?php
// Template para la página con slug "juegos" (page-juegos.php).
get_header();

$theme_uri = get_template_directory_uri();
?>

<!-- Hero -->
<section
    id="hero"
    style="
        background: url(<?php echo esc_url(
            $theme_uri . "/assets/images/bg-hero-juegos.png",
        ); ?>) no-repeat;
    "
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-auto text-center">
                <div>
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        Nivel incredible
                    </h1>
                    <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        Go Karts, VR, videojuegos, premios y
                        experiencias para todas las edades.<br />
                        <strong>La diversión comienza aquí.</strong>
                    </p>
                    <ul class="list-inline mt-4 mt-xl-5 mb-0">
                        <li
                            class="list-inline-item"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                        >
                            <a
                                href="<?php echo esc_url(
                                    home_url("/paquetes/"),
                                ); ?>"
                                class="btn btn-secondary rounded-pill"
                                >Ver paquetes</a
                            >
                        </li>
                        <!-- li
                            class="list-inline-item"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="600"
                        >
                            <a
                                href="<php echo esc_url( home_url( '/paquetes/' ) ); ?>"
                                class="btn btn-primary rounded-pill"
                                >Reservar</a
                            >
                        </li -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Los Favoritos de Incredible -->
<section class="py-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div
                    class="text-center mb-5 d-lg-flex align-items-center justify-content-center gap-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    <span class="fw-bold fs-2 text-azul">Los </span
                    ><span class="titulo-highlight">Favoritos</span
                    ><span class="fw-bold fs-2 text-azul"> de Incredible</span>
                </div>
            </div>
        </div>

        <div class="row g-4 text-center">
            <!-- Top Gun -->
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1000"
            >
                <img
                    src="<?php echo esc_url(
                        $theme_uri . "/assets/images/juego-topgun.png",
                    ); ?>"
                    class="img-fluid rounded-4 mb-3 w-100"
                    alt="Top Gun"
                />
                <h3 class="text-azul fw-bold mb-4">Top Gun</h3>
                <p class="text-azul mb-1">
                    Listo para despegar.
                </p>
                <small class="text-azul">
                    Velocidad, adrenalina y acción en cada
                    partida.
                </small>
            </div>

            <!-- Godzilla -->
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                <img
                    src="<?php echo esc_url(
                        $theme_uri . "/assets/images/juego-godzilla.png",
                    ); ?>"
                    class="img-fluid rounded-4 mb-3 w-100"
                    alt="Godzilla"
                />
                <h3 class="text-azul fw-bold mb-4">Godzilla</h3>
                <p class="text-azul mb-1">
                    Enfrenta al gigante.
                </p>
                <small class="text-azul">
                    Una experiencia intensa en pantalla gigante.
                </small>
            </div>

            <!-- VR Experience -->
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="400"
            >
                <img
                    src="<?php echo esc_url(
                        $theme_uri . "/assets/images/juego-vr.png",
                    ); ?>"
                    class="img-fluid rounded-4 mb-3 w-100"
                    alt="VR Experience"
                />
                <h3 class="text-azul fw-bold mb-4">VR Experience</h3>
                <p class="text-azul mb-1">
                    Vívelo de verdad.
                </p>
                <small class="text-azul">
                    Mundos virtuales que reaccionan a cada
                    movimiento.
                </small>
            </div>

            <!-- Go Karts -->
            <div
                class="col-6 col-lg-3"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="600"
            >
                <img
                    src="<?php echo esc_url(
                        $theme_uri . "/assets/images/juego-gokarts.png",
                    ); ?>"
                    class="img-fluid rounded-4 mb-3 w-100"
                    alt="Go Karts"
                />
                <h3 class="text-azul fw-bold mb-4">Go Karts</h3>
                <p class="text-azul mb-1">
                    La curva decide todo.
                </p>
                <small class="text-azul">
                    Compite, acelera y reta a tus amigos en la
                    pista.
                </small>
            </div>
        </div>
    </div>
</section>

<!-- Mucho más que videojuegos -->
<section class="py-60">
    <div class="container">
        <div class="row align-items-center">
            <div
                class="col-lg-4 mb-4 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
            >
                <!-- Foto: actualizar src -->
                <img
                    src="<?php echo esc_url(
                        $theme_uri . "/assets/images/juegos-foto-arcade.png",
                    ); ?>"
                    class="img-fluid rounded-4"
                    alt="Arcade Incredible Pizza"
                />
            </div>
            <div
                class="col-lg-5 mb-4 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                <h2 class="fw-bold">Mucho más<br />que videojuegos</h2>
                <ul>
                    <li>+100 juegos y atracciones</li>
                    <li>Tickets y premios</li>
                    <li>Experiencias VR</li>
                    <li>Go Karts</li>
                    <li>Diversión para todas las edades</li>
                </ul>
                <p class="mt-3 mb-0">
                    Vienes por una partida...<br />
                    <strong>Terminas quedándote horas.</strong>
                </p>
            </div>
            <div
                class="col-lg-3 d-none d-lg-block text-center"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="400"
            >
                <!-- Mascota: actualizar src -->
                <img
                    src="<?php echo esc_url(
                        $theme_uri . "/assets/images/roni-kart@2x.png",
                    ); ?>"
                    id="roni-kart"
                    class="img-fluid"
                    alt="Roni en Go Kart"
                />
            </div>
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
