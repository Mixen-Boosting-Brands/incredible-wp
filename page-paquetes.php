<?php
// Template para la página con slug "paquetes" (page-paquetes.php).
get_header();

$theme_uri = get_template_directory_uri();
?>

<!-- Hero -->
<section
    id="hero"
    style="
        background: url(<?php echo esc_url(
            $theme_uri . "/assets/images/bg-hero-paquetes.png",
        ); ?>) no-repeat;
    "
>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-auto text-center">
                <div>
                    <h1 data-aos="fade-up" data-aos-duration="1000">
                        Juega a tu manera
                    </h1>
                    <p
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        <strong>
                            Buffet, juegos y atracciones en un solo
                            plan.
                        </strong>
                        <br />
                        Solo decide hasta dónde quieres llevar la
                        experiencia.
                    </p>
                    <ul class="list-inline mt-4 mt-xl-5 mb-0">
                        <li
                            class="list-inline-item"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                        >
                            <a
                                href="#paquetes"
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

<!-- Elige tu paquete -->
<section id="paquetes" class="pt-60 pb-30">
    <div class="container">
        <div class="pricing-wrapper text-center">
            <h1
                class="fw-bold mb-1"
                data-aos="fade-up"
                data-aos-duration="1000"
            >
                Elige tu paquete
            </h1>
            <p
                class="mb-5"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100"
            >
                Buffete incluido en todos los paquetes
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
                            Precio por persona
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
                                2 atracciones.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                $400 en juegos.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-circle-check text-success"
                                ></i>
                                Buffet y bebidas ilimitadas.
                                <small
                                    >(Refresco: 355 ml. / Café: 284
                                    ml.)</small
                                >
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
                            Precio por persona
                        </p>
                        <ul class="list-unstyled pricing-features">
                            <li>
                                <i
                                    class="fa-solid fa-star text-amarillo"
                                ></i>
                                2 horas de videojuegos.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-star text-amarillo"
                                ></i>
                                4 atracciones.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-star text-amarillo"
                                ></i>
                                $500 en juegos.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-star text-amarillo"
                                ></i>
                                Buffet y bebidas ilimitadas.
                                <small
                                    >(Refresco: 355 ml. / Café: 284
                                    ml.)</small
                                >
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
                            Precio por persona
                        </p>
                        <ul class="list-unstyled pricing-features">
                            <li>
                                <i
                                    class="fa-solid fa-crown text-rojo"
                                ></i>
                                3 horas de videojuegos.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-crown text-rojo"
                                ></i>
                                8 atracciones.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-crown text-rojo"
                                ></i>
                                $600 en juegos.
                            </li>
                            <li>
                                <i
                                    class="fa-solid fa-crown text-rojo"
                                ></i>
                                Buffet y bebidas ilimitadas.
                                <small
                                    >(Refresco: 355 ml. / Café: 284
                                    ml.)</small
                                >
                            </li>
                        </ul>
                        <a href="https://registro.incrediblepizzachihuahua.com/app/" class="btn btn-primary rounded-pill"
                            >Lo quiero</a
                        >
                    </div>
                </div>
            </div>

            <small class="text-muted d-block mt-60 mb-0">
                Aplica restricciones en promociones 2x1 y convenios,<br />
                losprecios están sujetos a cambios sin previo aviso.
            </small>

            <!-- Mascota: actualizar src -->
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

<!-- No lo pienses tanto -->
<section class="py-60 text-center">
    <div class="container">
        <p
            class="text-azul fw-bold mb-0"
            data-aos="fade-up"
            data-aos-duration="1000"
        >
            No lo pienses tanto...
        </p>
        <h1
            class="titulo-highlight mb-0"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200"
        >
            ven a disfrutarlo
        </h1>
        <p
            class="text-azul fw-bold"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="400"
        >
            Es un día completo donde comes, juegas, compites y repites.
        </p>
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
