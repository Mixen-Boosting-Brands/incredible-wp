<?php
// Template para la página con slug "buffet" (page-buffet.php).
get_header();

$theme_uri = get_template_directory_uri();
?>

<!-- Hero -->
<section
    id="hero"
    style="
        background: url(<?php echo esc_url(
            $theme_uri . "/assets/images/bg-hero-buffet.png",
        ); ?>) no-repeat;
    "
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-auto text-center">
                <div>
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        Delicioso buffet
                    </h1>
                    <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        Pizza, pasta, ensaladas, postres y bebidas en un
                        solo lugar.<br />
                        <strong
                            >Ven con hambre... y quédate por la
                            experiencia.</strong
                        >
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

<!-- Todo lo que puedes disfrutar -->
<section class="py-60">
    <div class="container">
        <div class="row align-items-center">
            <div
                class="col-lg-4 mb-4 mb-lg-0 text-center"
                data-aos="fade-up"
                data-aos-duration="1000"
            >
                <!-- Carrusel de fotos del buffet -->
                <div
                    id="carrusel-buffet"
                    class="carousel slide rounded-4 overflow-hidden"
                    data-bs-ride="carousel"
                >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img
                                src="<?php echo esc_url(
                                    $theme_uri .
                                        "/assets/images/buffet-foto-pizza.png",
                                ); ?>"
                                class="img-fluid rounded-4"
                                alt="Buffet de pizza"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="<?php echo esc_url(
                                    $theme_uri .
                                        "/assets/images/buffet-foto-pizza.png",
                                ); ?>"
                                class="img-fluid rounded-4"
                                alt="Buffet de pizza"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="<?php echo esc_url(
                                    $theme_uri .
                                        "/assets/images/buffet-foto-pizza.png",
                                ); ?>"
                                class="img-fluid rounded-4"
                                alt="Buffet de pizza"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="<?php echo esc_url(
                                    $theme_uri .
                                        "/assets/images/buffet-foto-pizza.png",
                                ); ?>"
                                class="img-fluid rounded-4"
                                alt="Buffet de pizza"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="<?php echo esc_url(
                                    $theme_uri .
                                        "/assets/images/buffet-foto-pizza.png",
                                ); ?>"
                                class="img-fluid rounded-4"
                                alt="Buffet de pizza"
                            />
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carrusel-buffet"
                        data-bs-slide="prev"
                    >
                        <span
                            class="carousel-control-prev-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carrusel-buffet"
                        data-bs-slide="next"
                    >
                        <span
                            class="carousel-control-next-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
            <div
                class="col-lg-5 mb-4 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                <h2 class="fw-bold">Todo lo que puedes disfrutar</h2>
                <p>
                    Aquí no vienes a elegir solo una cosa. Vienes a
                    servirte, probar y repetir lo que más te gusta.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-2">🍕 Variedad de pizzas</li>
                    <li class="mb-2">🍝 Pastas y opciones calientes</li>
                    <li class="mb-2">🥗 Barra de ensaladas</li>
                    <li class="mb-2">🍰 Postres</li>
                    <li class="mb-2">🥤 Bebidas ilimitadas</li>
                </ul>
                <p><small>Aquí nadie se queda con hambre.</small></p>
            </div>
            <div
                class="col-lg-3 d-none d-lg-block text-center"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="400"
            >
                <!-- Mascota Roni versión chef -->
                <img
                    src="<?php echo esc_url(
                        $theme_uri . "/assets/images/roni-chef@2x.png",
                    ); ?>"
                    id="roni-chef"
                    class="img-fluid"
                    alt="Roni Chef"
                />
            </div>
        </div>
    </div>
</section>

<!-- Strip: Sirve. Disfruta. Repite. -->
<section class="section-amarillo py-30 overflow-hidden">
    <div class="marquee-track">
        <?php for ($i = 0; $i < 8; $i++): ?>
            <h2 class="fw-bold mb-0 marquee-item">
                Sirve. &nbsp;&nbsp; Disfruta. &nbsp;&nbsp; Repite.
                &nbsp;&nbsp; ★
            </h2>
        <?php endfor; ?>
    </div>
</section>

<!-- No es solo Buffet -->
<section class="py-60 text-center">
    <div class="container">
        <div
            class="mb-4 d-lg-flex align-items-center justify-content-center gap-4"
            data-aos="fade-up"
            data-aos-duration="1000"
        >
            <span class="fw-bold fs-2 text-azul">No es solo </span
            ><span class="titulo-highlight">Buffet</span
            ><span class="fw-bold fs-2 text-azul">
                es parte de todo el plan</span
            >
        </div>
        <p
            class="text-azul mb-1"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="600"
        >
            <strong>Mientras comes, puedes seguir disfrutando:</strong>
        </p>
        <p
            class="text-azul mb-5"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="800"
        >
            videojuegos, atracciones y momentos con tu familia.
        </p>
        <div class="row mb-5">
            <div
                class="col-lg-4 mb-4 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
            >
                <!-- Foto actividad 1: Go Karts -->
                <img
                    src="<?php echo esc_url(
                        $theme_uri . "/assets/images/buffet-actividad-1.png",
                    ); ?>"
                    class="img-fluid rounded-4"
                    alt=""
                />
            </div>
            <div
                class="col-lg-4 mb-4 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                <!-- Foto actividad 2: Arcade -->
                <img
                    src="<?php echo esc_url(
                        $theme_uri . "/assets/images/buffet-actividad-2.png",
                    ); ?>"
                    class="img-fluid rounded-4"
                    alt=""
                />
            </div>
            <div
                class="col-lg-4 mb-4 mb-lg-0"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="400"
            >
                <!-- Foto actividad 3: Laser / VR -->
                <img
                    src="<?php echo esc_url(
                        $theme_uri . "/assets/images/buffet-actividad-3.png",
                    ); ?>"
                    class="img-fluid rounded-4"
                    alt=""
                />
            </div>
        </div>
        <p class="mb-1" data-aos="fade-up" data-aos-duration="1000">
            Ven a comer... o <strong>quédate a vivirlo todo</strong>
        </p>
        <p
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
        >
            Convierte tu visita en un día completo con buffet, juegos y
            atracciones incluidas.
        </p>
        <div class="row justify-content-center mt-4">
            <div
                class="col-6 col-lg-2 mb-4 mb-lg-0 text-center"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="400"
            >
                <h4 class="text-azul fw-bold mb-0">Adulto</h4>
                <h1 class="text-rojo fw-bold mb-0">$285</h1>
                <small>(18 años en adelante)</small>
            </div>
            <div
                class="col-6 col-lg-2 text-center"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="600"
            >
                <h4 class="text-azul fw-bold mb-0">Niño</h4>
                <h1 class="text-rojo fw-bold mb-0">$230</h1>
                <small>(0 a 12 años)</small>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/banner-disfrutar'); ?>

<?php get_footer(); ?>
