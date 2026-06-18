<?php
get_header();

$theme_uri = get_template_directory_uri();
?>

<section
    id="hero"
    style="background: url(<?php echo esc_url( $theme_uri . '/assets/images/bg-hero-1.png' ); ?>) no-repeat"
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-auto text-center">
                <div>
                    <h3
                        class="mb-0"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        <span class="badge text-bg-info rounded-pill">
                            ¡Diversión en un solo lugar!
                        </span>
                    </h3>
                    <h1
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        Come y juega
                    </h1>
                    <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="400"
                    >
                        Buffet ilimitado + atracciones increíbles +
                        videojuegos<br />
                        <strong
                            >¡La experiencia más completa de
                            Chihuahua!</strong
                        >
                    </p>
                    <ul class="list-inline mt-4 mt-xl-5 mb-0">
                        <li
                            class="list-inline-item"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="600"
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
                            data-aos-delay="800"
                        >
                            <a
                                href="<?php echo esc_url( home_url( '/cumpleanos/' ) ); ?>"
                                class="btn btn-primary rounded-pill"
                                >Ver cumpleaños</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    id="caracteristicas"
    class="section-amarillo section-wave wave-amarillo overflow-visible pt-60 pb-120 z-1"
>
    <div class="container">
        <div class="row">
            <div
                class="col-lg-3 position-relative mb-4 mb-lg-0 text-center"
            >
                <img
                    src="<?php echo esc_url( $theme_uri . '/assets/images/roni-1@2x.png' ); ?>"
                    alt=""
                    id="roni-1"
                    class="img-fluid"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="1000"
                />
            </div>
            <div class="col-lg-9 my-auto text-center">
                <p
                    class="mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    Vienes a competir, reír, ganar premios y vivir una
                    experiencia completa.<br />
                    <strong
                        >Incredible Pizza combina el buffet más variado
                        de Chihuahua con las mejores atracciones en un
                        solo lugar.</strong
                    >
                </p>
                <div class="row">
                    <div
                        class="col-6 col-lg-3"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        <h1 class="mb-0">
                            +100<br />
                            Juegos
                        </h1>
                        <p>y atracciones</p>
                    </div>
                    <div
                        class="col-6 col-lg-3"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="400"
                    >
                        <h1 class="mb-0">
                            Buffet<br />
                            ilimitado
                        </h1>
                        <p>para todas las edades</p>
                    </div>
                    <div
                        class="col-6 col-lg-3"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="600"
                    >
                        <h1 class="mb-0">
                            Experiencia<br />
                            completa
                        </h1>
                        <p>sin complicaciones</p>
                    </div>
                    <div
                        class="col-6 col-lg-3"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="800"
                    >
                        <h1 class="mb-0">
                            Seguridad<br />
                            y control
                        </h1>
                        <p>para toda la familia</p>
                    </div>
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

<section id="experiencia" class="py-60">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p
                    id="text-aux-1"
                    class="text-azul mb-0"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    <strong>Una experiencia</strong>
                </p>
                <h1
                    class="titulo-highlight"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Completa
                </h1>
                <p
                    id="text-aux-2"
                    class="text-azul"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                >
                    <strong>sin tener que ir a otro lugar</strong>
                </p>
            </div>
        </div>
        <div class="row">
            <div
                class="col-lg-4 mb-3 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
            >
                <div class="card text-center">
                    <a href="<?php echo esc_url( home_url( '/paquetes/' ) ); ?>">
                        <img
                            src="<?php echo esc_url( $theme_uri . '/assets/images/thumb-paquetes.png' ); ?>"
                            class="card-img-top"
                            alt="Paquetes"
                        />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            Ven hoy. Come y juega.
                        </h5>
                        <a
                            href="<?php echo esc_url( home_url( '/paquetes/' ) ); ?>"
                            class="btn btn-secondary rounded-pill"
                            >Ver paquetes</a
                        >
                    </div>
                </div>
            </div>
            <div
                class="col-lg-4 mb-3 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                <div class="card text-center">
                    <a href="<?php echo esc_url( home_url( '/cumpleanos/' ) ); ?>">
                        <img
                            src="<?php echo esc_url( $theme_uri . '/assets/images/thumb-cumpleanos.png' ); ?>"
                            class="card-img-top"
                            alt="Cumpleaños"
                        />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            Cumpleaños increíble.
                        </h5>
                        <a
                            href="<?php echo esc_url( home_url( '/cumpleanos/' ) ); ?>"
                            class="btn btn-secondary rounded-pill"
                            >Ver cumpleaños</a
                        >
                    </div>
                </div>
            </div>
            <div
                class="col-lg-4 mb-3 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="400"
            >
                <div class="card text-center">
                    <a href="<?php echo esc_url( home_url( '/eventos/' ) ); ?>">
                        <img
                            src="<?php echo esc_url( $theme_uri . '/assets/images/thumb-eventos.png' ); ?>"
                            class="card-img-top"
                            alt="Eventos"
                        />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Eventos en equipo.</h5>
                        <a
                            href="<?php echo esc_url( home_url( '/eventos/' ) ); ?>"
                            class="btn btn-secondary rounded-pill"
                            >Ver eventos</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="banner-1" class="py-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h1 data-aos="fade-up" data-aos-duration="1000">
                    <span class="text-amarillo">La fiesta</span> que
                    todos van a recordar
                </h1>
                <h2
                    class="mb-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <strong>Nosotros nos encargamos de todo:</strong
                    ><br />
                    comida, juegos, animación y diversión.
                </h2>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                >
                    Mínimo 15 invitados | Animador incluido | Buffet +
                    juegos<br />
                    Opciones como Glow Party
                </p>
                <a
                    class="btn btn-secondary rounded-pill"
                    href="<?php echo esc_url( home_url( '/cumpleanos/' ) ); ?>"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="600"
                    >Cumpleaños</a
                >
            </div>
        </div>
    </div>
    <div
        id="banner-roni-1"
        class="d-none d-lg-block"
        data-aos="fade-right"
        data-aos-duration="1000"
        data-aos-delay="800"
    ></div>
    <div
        id="banner-roni-2"
        class="d-none d-lg-block"
        data-aos="fade-left"
        data-aos-duration="1000"
        data-aos-delay="800"
    ></div>
</section>

<section class="py-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card text-bg-dark rounded-5 mb-5 mb-lg-0">
                    <img
                        src="<?php echo esc_url( $theme_uri . '/assets/images/bg-card-1.png' ); ?>"
                        class="card-img"
                        alt=""
                    />
                    <div class="card-img-overlay">
                        <h1 class="card-title">
                            La diversión empieza aquí
                        </h1>
                        <h3 class="card-text">
                            Más de 100 juegos, VR, Go Karts y atracciones que no encuentras en otro lugar.
                        </h3>
                        <p class="card-text">
                            <small>Diversión para todas las edades en una sola visita.</small>
                        </p>
                        <a
                            href="<?php echo esc_url( home_url( '/juegos/' ) ); ?>"
                            class="btn btn-secondary rounded-pill"
                            >Ver juegos</a
                        >
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card text-bg-dark rounded-5">
                    <img
                        src="<?php echo esc_url( $theme_uri . '/assets/images/bg-card-2.png' ); ?>"
                        class="card-img"
                        alt=""
                    />
                    <div class="card-img-overlay">
                        <h1 class="card-title">
                            La diversión empieza aquí
                        </h1>
                        <h3 class="card-text">
                            Buffet ilimitado con pizza,
                            pasta, ensaladas y postres
                            para todos.
                        </h3>
                        <p class="card-text">
                            <small>Aquí nadie se queda con hambre.</small>
                        </p>
                        <a
                            href="<?php echo esc_url( home_url( '/buffet/' ) ); ?>"
                            class="btn btn-secondary rounded-pill"
                            >Ver buffet</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
