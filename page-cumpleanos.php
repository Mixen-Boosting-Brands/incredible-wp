<?php
// Template para la página con slug "cumpleanos" (page-cumpleanos.php).
get_header();

$theme_uri = get_template_directory_uri();
?>

<!-- Hero -->
<section
    id="hero"
    style="
        background: url(<?php echo esc_url(
            $theme_uri . "/assets/images/bg-hero-cumpleanos.png",
        ); ?>)
            no-repeat;
    "
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-auto text-center">
                <div>
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        Celebra en grande
                    </h1>
                    <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        <strong>
                            La fiesta más completa de Chihuahua, en un
                            solo lugar.
                        </strong>
                        <br />
                        Todo incluido: comida, juegos, animador y
                        diversión sin parar.
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

<!-- La fiesta que todos van a recordar -->
<section id="fiesta-recordar" class="py-60">
    <div class="container">
        <div class="row align-items-center">
            <div
                class="col-lg-7 mb-4 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
            >
                <p id="text-aux-1" class="text-azul fw-bold mb-0">
                    La fiesta que todos van a
                </p>
                <h1 class="titulo-highlight">recordar</h1>

                <h1 class="fw-bold">Nos encargamos de todo</h1>
                <p>Comida, juegos, animación y diversión.</p>
                <ul>
                    <li>Mínimo 15 invitados</li>
                    <li>Animador incluido</li>
                    <li>Buffet + juegos</li>
                    <li>Opciones como Glow Party</li>
                </ul>

                <p class="mb-1"><strong>Hazla a tu manera</strong></p>
                <p class="mb-0">
                    Añade decoración | Recuerdos | Dulces | Más extras.
                </p>
            </div>
            <div
                class="col-lg-5"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                <!-- Foto: actualizar src -->
                <img
                    src="<?php echo esc_url(
                        $theme_uri .
                            "/assets/images/cumpleanos-foto-trampolin.png",
                    ); ?>"
                    class="img-fluid rounded-4"
                    alt="Celebra en Incredible Pizza"
                />
            </div>
        </div>
    </div>
</section>

<!-- ¿Qué incluyen todos? -->
<section
    id="banner-cumple"
    class="section-wave wave-azul overflow-visible text-center text-white pt-60 pb-120 z-1"
    style="
        background: url(<?php echo esc_url(
            $theme_uri . "/assets/images/bg-cumpleanos-incluye.png",
        ); ?>)
            no-repeat #406eac;
        background-size: cover;
        background-position: center;
    "
    data-aos="fade-up"
    data-aos-duration="1000"
>
    <div class="container">
        <h2 class="fw-bold mb-5">¿Qué incluyen todos?</h2>
        <div class="row g-4">
            <div class="col-6 col-lg-3">
                <p class="fw-bold mb-0">
                    Cumpleañero disfruta<br />gratis
                </p>
            </div>
            <div class="col-6 col-lg-3">
                <p class="fw-bold mb-0">Animador<br />exclusivo</p>
            </div>
            <div class="col-6 col-lg-3">
                <p class="fw-bold mb-0">Invitación<br />digital</p>
            </div>
            <div class="col-6 col-lg-3">
                <p class="fw-bold mb-0">Decoración<br />básica</p>
            </div>
            <div class="col-6 col-lg-4">
                <p class="fw-bold mb-0">Bolsita<br />de dulces</p>
            </div>
            <div class="col-6 col-lg-4">
                <p class="fw-bold mb-0">Foto para<br />el festejado</p>
            </div>
            <div class="col-12 col-lg-4">
                <p class="fw-bold mb-0">Dinámicas<br />con premios</p>
            </div>
        </div>
    </div>

    <!-- Mascotas: actualizar src -->
    <img
        id="roni-cumple-1"
        src="<?php echo esc_url(
            $theme_uri . "/assets/images/roni-cumpleanos-1@2x.png",
        ); ?>"
        class="img-fluid d-none d-lg-block"
        alt="Roni"
        data-aos="fade-right"
        data-aos-duration="1000"
        data-aos-delay="200"
    />
    <img
        id="roni-cumple-2"
        src="<?php echo esc_url(
            $theme_uri . "/assets/images/roni-cumpleanos-2@2x.png",
        ); ?>"
        class="img-fluid d-none d-lg-block"
        alt="Roni"
        data-aos="fade-left"
        data-aos-duration="1000"
        data-aos-delay="200"
    />

    <svg
        class="wave"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 120"
        preserveAspectRatio="none"
    >
        <path
            fill="#fff"
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

<!-- Elige el paquete para tu fiesta -->
<section class="pt-60 pb-30">
    <div class="container">
        <div class="pricing-wrapper text-center">
            <h1
                class="fw-bold mb-1"
                data-aos="fade-up"
                data-aos-duration="1000"
            >
                Elige el paquete para tu fiesta
            </h1>
            <p
                class="mb-5"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100"
            >
                Todo incluido. Tú eliges el nivel de la fiesta.
            </p>

            <div class="row g-4 g-lg-5 mb-4">
                <!-- Paquete Súper -->
                <div
                    class="col-lg-4 d-flex"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    <div class="pricing-card rounded-5">
                        <p class="pricing-title">Súper</p>
                        <h1 class="pricing-price">$399</h1>
                        <p class="pricing-label text-muted">
                            Precio por niño
                        </p>
                        <ul class="list-unstyled pricing-features">
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                1 hora de videojuegos.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                3 atracciones.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                $500 en juegos.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                Buffet y bebidas ilimitadas.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                1.5 horas de animador exclusivo.
                            </li>
                        </ul>
                        <a href="https://registro.incrediblepizzachihuahua.com/app/" class="btn btn-info rounded-pill"
                            >Lo quiero</a
                        >
                    </div>
                </div>

                <!-- Paquete Increíble (destacado) -->
                <div
                    class="col-lg-4 d-flex"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <div
                        class="pricing-card pricing-featured rounded-5"
                    >
                        <p class="pricing-title">Increíble</p>
                        <h1 class="pricing-price">$499</h1>
                        <p class="pricing-label text-muted">
                            Precio por niño
                        </p>
                        <ul class="list-unstyled pricing-features">
                            <li>
                                <i
                                    class="fa-solid fa-star text-amarillo"
                                ></i>
                                3 horas de videojuegos.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-star text-amarillo"
                                ></i>
                                6 atracciones.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-star text-amarillo"
                                ></i>
                                $600 en juegos.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-star text-amarillo"
                                ></i>
                                Buffet y bebidas ilimitadas.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-star text-amarillo"
                                ></i>
                                1.5 horas de animador exclusivo.
                            </li>
                        </ul>
                        <a
                            href="https://registro.incrediblepizzachihuahua.com/app/"
                            class="btn btn-secondary rounded-pill"
                            >Lo quiero</a
                        >
                    </div>
                </div>

                <!-- Paquete Increíble Plus -->
                <div
                    class="col-lg-4 d-flex"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                >
                    <div class="pricing-card rounded-5">
                        <p class="pricing-title">Increíble Plus</p>
                        <h1 class="pricing-price">$639</h1>
                        <p class="pricing-label text-muted">
                            Precio por niño
                        </p>
                        <ul class="list-unstyled pricing-features">
                            <li>
                                <i
                                    class="fa-solid fa-crown text-rojo"
                                ></i>
                                Videojuegos ilimitados.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-crown text-rojo"
                                ></i>
                                Atracciones ilimitadas.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-crown text-rojo"
                                ></i>
                                $700 en juegos.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-crown text-rojo"
                                ></i>
                                Buffet y bebidas ilimitadas.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-crown text-rojo"
                                ></i>
                                1.5 horas de animador exclusivo.
                            </li>
                        </ul>
                        <a href="https://registro.incrediblepizzachihuahua.com/app/" class="btn btn-primary rounded-pill"
                            >Lo quiero</a
                        >
                    </div>
                </div>
            </div>

            <small class="text-muted d-block mt-60 mb-0">
                <strong
                    >Lunes a viernes a partir de las 3:00 p.m.</strong
                ><br />
                Aplica restricciones en promociones 2x1 y convenios, los
                precios están sujetos a cambios sin previo aviso.
            </small>

            <img
                src="<?php echo esc_url(
                    $theme_uri . "/assets/images/roni-paquetes@2x.png",
                ); ?>"
                class="pricing-mascot img-fluid d-none d-lg-block"
                alt="Roni"
            />
        </div>
    </div>
</section>

<!-- Glow Party -->
<section
    id="banner-glow"
    class="py-60 text-center"
    style="
        background: url(<?php echo esc_url(
            $theme_uri . "/assets/images/bg-cumpleanos-glow.png",
        ); ?>)
            no-repeat #1b1340;
        background-size: cover;
        background-position: center;
    "
>
    <div class="container">
        <h1 data-aos="fade-up" data-aos-duration="1000">Glow Party</h1>

        <div
            class="row g-4 justify-content-center mb-4"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
        >
            <!-- Incredible Glow -->
            <div class="col-lg-5 d-flex">
                <div
                    class="pricing-card pricing-card-glow rounded-5 text-start"
                >
                    <div class="row mb-4">
                        <div class="col-7">
                            <p class="pricing-title mb-3">
                                Incredible Glow
                            </p>
                            <a
                                href="https://registro.incrediblepizzachihuahua.com/app/"
                                class="btn btn-info rounded-pill"
                                >Lo quiero</a
                            >
                        </div>
                        <div class="col-5 text-end">
                            <h1 class="pricing-price mb-1">$591</h1>
                            <p class="pricing-label mb-0">
                                Precio por niño<br />
                                Adultos $285
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <ul
                                class="list-unstyled pricing-features mb-0"
                            >
                                <li>
                                    <i
                                        class="fa-solid fa-circle-check text-info"
                                    ></i>
                                    3 horas de videojuegos.
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-circle-check text-info"
                                    ></i>
                                    6 atracciones.
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-circle-check text-info"
                                    ></i>
                                    $600 en juegos.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul
                                class="list-unstyled pricing-features mb-0"
                            >
                                <li>
                                    <i
                                        class="fa-solid fa-circle-check text-info"
                                    ></i>
                                    Buffet y bebidas ilimitadas.
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-circle-check text-info"
                                    ></i>
                                    Animador exclusivo.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plus Glow -->
            <div class="col-lg-5 d-flex">
                <div
                    class="pricing-card pricing-card-glow rounded-5 text-start"
                >
                    <div class="row mb-4">
                        <div class="col-7">
                            <p class="pricing-title mb-3">Plus Glow</p>
                            <a
                                href="https://registro.incrediblepizzachihuahua.com/app/"
                                class="btn btn-primary rounded-pill"
                                >Lo quiero</a
                            >
                        </div>
                        <div class="col-5 text-end">
                            <h1 class="pricing-price mb-1">$729</h1>
                            <p class="pricing-label mb-0">
                                Precio por niño<br />
                                Adultos $285
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <ul
                                class="list-unstyled pricing-features mb-0"
                            >
                                <li>
                                    <i
                                        class="fa-solid fa-crown text-rojo"
                                    ></i>
                                    Videojuegos ilimitados.
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-crown text-rojo"
                                    ></i>
                                    Atracciones ilimitadas.
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-crown text-rojo"
                                    ></i>
                                    $700 en juegos.
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul
                                class="list-unstyled pricing-features mb-0"
                            >
                                <li>
                                    <i
                                        class="fa-solid fa-crown text-rojo"
                                    ></i>
                                    Buffet y bebidas ilimitadas.
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-crown text-rojo"
                                    ></i>
                                    Animador exclusivo.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <small
            class="text-white d-block mt-4 mb-0"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="400"
        >
            Todos nuestros paquetes incluyen: barra de snacks, retos
            divertidos, decoración neón incluida, cumpleañero disfruta
            gratis, animador exclusivo, invitación digital, bolsita de
            dulces para el cumpleañero, foto de regalo para el
            cumpleañero, 1 giro de ruleta de premios al cumpleañero.
        </small>
    </div>
</section>

<!-- Paquete Premium (ola al fondo) -->
<section
    id="banner-premium"
    class="pt-60 pb-120 position-relative section-wave overflow-visible"
    style="
        background: url(<?php echo esc_url(
            $theme_uri . "/assets/images/bg-cumpleanos-premium.png",
        ); ?>)
            no-repeat #fbda1f;
        background-size: cover;
        background-position: center;
    "
>
    <div class="container">
        <div
            class="row align-items-center mb-5"
            data-aos="fade-up"
            data-aos-duration="1000"
        >
            <div class="col-12 mb-4 mb-lg-0 text-center">
                <p
                    class="mb-3 d-flex align-items-center justify-content-center gap-2"
                >
                    <span class="fw-bold fs-2">Paquete</span>
                    <span class="titulo-highlight">Premium</span>
                </p>
            </div>
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled pricing-features mb-0">
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                Videojuegos ilimitados.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                Atracciones ilimitadas.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                $700 en juegos.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled pricing-features mb-0">
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                Buffet y bebidas ilimitadas.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                1.5 horas de animador exclusivo.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 text-lg-end text-center">
                <h1 class="pricing-price mb-1">$11,443</h1>
                <p class="pricing-label mb-0">
                    Para 15 niños<br />
                    Adultos $285 | Niño extra $762
                </p>
            </div>
        </div>

        <div
            class="row align-items-center"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
        >
            <div class="col-lg-7 mb-4 mb-lg-0">
                <p class="fw-bold mb-3">
                    Upgrade disponible:
                    <span
                        class="titulo-highlight"
                        style="font-size: 2rem"
                        >Glow Party</span
                    >
                </p>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled pricing-features mb-0">
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                Iluminación Glow.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                Ambientación especial.
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled pricing-features mb-0">
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                Kit neon para niños.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                Área decorada.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 text-lg-end text-center">
                <h1 class="pricing-price mb-1">$12,239</h1>
                <p class="pricing-label mb-0">
                    Para 15 niños<br />
                    Adultos $285 | Niño extra $815
                </p>
            </div>
        </div>

        <div
            class="row"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="400"
        >
            <div class="col-12 text-center">
                <small class="text-muted d-block mt-5 mb-0">
                    <strong
                        >Sábado y domingo a partir de las 2:00
                        p.m.</strong
                    ><br />
                    Aplica restricciones en promociones 2x1 y convenios,
                    los precios están sujetos a cambios sin previo
                    aviso.
                </small>
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
            fill="#e23b31"
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
