<?php
// Template para la página con slug "eventos" (page-eventos.php).
get_header();

$theme_uri = get_template_directory_uri();
?>

<!-- Hero -->
<section
    id="hero"
    style="
        background: url(<?php echo esc_url(
            $theme_uri . "/assets/images/bg-hero-eventos.png",
        ); ?>) no-repeat;
    "
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-auto text-center">
                <div>
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        Eventos que se viven
                    </h1>
                    <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        <strong>
                            Convivencias, graduaciones, team building y
                            eventos privados
                        </strong>
                        <br />
                        con buffet, juegos y atracciones en un solo
                        lugar.
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

<!-- Un lugar pensado para grupos grandes -->
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
                        $theme_uri . "/assets/images/eventos-foto-grupo.png",
                    ); ?>"
                    class="img-fluid rounded-4"
                    alt="Grupos en Incredible Pizza"
                />
            </div>
            <div
                class="col-lg-5 mb-4 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                <h2 class="fw-bold">
                    Un lugar pensado<br />para grupos grandes
                </h2>
                <p>
                    En Incredible Pizza Chihuahua combinamos comida,
                    entretenimiento y espacios amplios para crear
                    eventos más dinámicos y memorables.
                </p>
                <p class="mb-1"><strong>Ideal para:</strong></p>
                <ul>
                    <li>Empresas</li>
                    <li>Escuelas</li>
                    <li>Equipos deportivos</li>
                    <li>Iglesias y asociaciones</li>
                    <li>Graduaciones</li>
                    <li>Eventos privados</li>
                </ul>
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
                        $theme_uri . "/assets/images/roni-eventos@2x.png",
                    ); ?>"
                    id="roni-eating"
                    class="img-fluid"
                    alt="Roni"
                />
            </div>
        </div>
    </div>
</section>

<!-- Marquee: Así se viven los eventos en Incredible Pizza -->
<section class="section-amarillo py-30 overflow-hidden">
    <div class="marquee-track">
        <?php for ($i = 0; $i < 8; $i++): ?>
            <h2 class="fw-bold mb-0 marquee-item">
                Así se viven los eventos en Incredible Pizza &nbsp;&nbsp; ★
            </h2>
        <?php endfor; ?>
    </div>
</section>

<!-- Video: embed YouTube -->
<section style="background-color: #000" class="py-5">
    <div class="container">
        <!-- Reemplazar src con la URL del embed de YouTube:
             https://www.youtube.com/embed/VIDEO_ID -->
        <div
            class="ratio ratio-16x9"
            data-aos="fade-up"
            data-aos-duration="1000"
        >
            <iframe src="https://www.youtube.com/embed/Wj0UUsICTAA?si=gc_c73qBfd8CvNt1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>

<!-- Tipos de Eventos (ola amarilla al fondo) -->
<section id="tipos-eventos" class="pt-60 pb-120 text-center section-wave overflow-visible">
    <div class="container">
        <p
            id="text-aux-1"
            class="text-azul fw-bold mb-0"
            data-aos="fade-up"
            data-aos-duration="1000"
        >
            Tipos de
        </p>
        <h1
            class="titulo-highlight mb-4"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
        >
            Eventos
        </h1>
        <div class="row g-4">
            <div
                class="col-lg-4 d-flex"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                <div
                    class="section-azul rounded-5 p-4 h-100 text-start"
                >
                    <h5 class="fw-bold mb-60">Escolares</h5>
                    <p class="mb-0">
                        Graduaciones, excursiones y convivencias con
                        buffet y juegos para todos.
                    </p>
                </div>
            </div>
            <div
                class="col-lg-4 d-flex"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="400"
            >
                <div
                    class="section-rojo rounded-5 p-4 h-100 text-start"
                >
                    <h5 class="fw-bold mb-60">Empresariales</h5>
                    <p class="mb-0">
                        Team building, posadas e integraciones fuera de
                        lo común.
                    </p>
                </div>
            </div>
            <div
                class="col-lg-4 d-flex"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="600"
            >
                <div
                    class="section-amarillo rounded-5 p-4 h-100 text-start"
                >
                    <h5 class="fw-bold mb-60">Privados</h5>
                    <p class="mb-0">
                        Celebraciones y reuniones para grupos de todas
                        las edades.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <svg
        class="wave"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 120"
        preserveAspectRatio="none"
    >
        <path
            fill="#fbda1f"
            d="M0,64
               C60,120 180,120 240,64
               S420,8 480,64
               S660,120 720,64
               S900,8 960,64
               S1140,120 1200,64
               S1380,8 1440,64
               L1440,120
               L0,120
               Z"
        ></path>
    </svg>
</section>

<!-- Todo listo para tu evento -->
<section class="section-amarillo py-60">
    <div class="container">
        <div class="row align-items-center">
            <div
                class="col-lg-3 text-center mb-4 mb-lg-0 d-none d-lg-block"
                data-aos="fade-right"
                data-aos-duration="1000"
            >
                <!-- Mascota: actualizar src -->
                <img
                    src="<?php echo esc_url(
                        $theme_uri . "/assets/images/roni-eventos-stats@2x.png",
                    ); ?>"
                    class="img-fluid"
                    alt="Roni"
                />
            </div>
            <div class="col-lg-9 text-center">
                <h2
                    class="font-alkaline fw-bold mb-4"
                    style="font-size: clamp(2.5rem, 5vw, 4rem)"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    Todo listo para tu evento
                </h2>
                <div class="row g-4 mb-4">
                    <div
                        class="col-6 col-lg-3 text-center"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <h3 class="fw-bold mb-0">
                            +100<br />
                            Juegos
                        </h3>
                        <p class="mb-0">
                            <small>y atracciones</small>
                        </p>
                    </div>
                    <div
                        class="col-6 col-lg-3 text-center"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        <h3 class="fw-bold mb-0">
                            Buffet<br />
                            ilimitado
                        </h3>
                        <p class="mb-0">
                            <small
                                >para todas las edades</small
                            >
                        </p>
                    </div>
                    <div
                        class="col-6 col-lg-3 text-center"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="300"
                    >
                        <h3 class="fw-bold mb-0">
                            +5,000<br />
                            metros²
                        </h3>
                        <p class="mb-0">
                            <small>de diversión</small>
                        </p>
                    </div>
                    <div
                        class="col-6 col-lg-3 text-center"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="400"
                    >
                        <h3 class="fw-bold mb-0">
                            +1,000<br />
                            personas
                        </h3>
                        <p class="mb-0">
                            <small>por turno</small>
                        </p>
                    </div>
                </div>
                <div class="row g-4">
                    <div
                        class="col-6 col-lg-4 text-center"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <h4 class="fw-bold mb-0">
                            Espacios<br />
                            privados
                        </h4>
                        <small>disponibles</small>
                    </div>
                    <div
                        class="col-6 col-lg-4 text-center"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        <h4 class="fw-bold mb-0">Facturación</h4>
                        <small>para empresas</small>
                    </div>
                    <div
                        class="col-6 col-lg-4 text-center"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="300"
                    >
                        <h4 class="fw-bold mb-0">
                            Audio y<br />
                            proyección
                        </h4>
                        <small>en área de cine</small>
                    </div>
                </div>
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
