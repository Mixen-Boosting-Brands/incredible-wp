        <footer
            class="section-azul section-wave wave-azul overflow-visible pt-60 pb-120 z-1"
        >
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-4 position-relative mb-4 mb-lg-0 text-center"
                    >
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri() .
                                    "/assets/images/roni-2@2x.png",
                            ); ?>"
                            alt=""
                            id="roni-2"
                            class="img-fluid"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="1000"
                        />
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <h1 data-aos="fade-up" data-aos-duration="1000">
                            <strong>Visítanos</strong>
                        </h1>
                        <ul class="list-unstyled">
                            <li
                                class="mb-3"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="200"
                            >
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa-solid fa-location-pin"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <address class="mb-0">
                                            Periférico de la Juventud 6506<br />
                                            Chihuahua, Chih. México
                                        </address>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="mb-3"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="400"
                            >
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa-solid fa-clock"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        Lun-Vie: 1:00 PM - 8:00 PM<br />
                                        Sáb-Dom: 12:00 PM - 8:00 PM
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="mb-3"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="600"
                            >
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa-solid fa-phone"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="tel:+526144222550"
                                            >+52 (614) 422 2550</a
                                        >
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <ul
                            class="social list-inline mb-5"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                        >
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/ipchih" target="_blank"
                                    ><i class="fa-brands fa-instagram"></i
                                ></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/@incrediblepizzachihuahua703" target="_blank"
                                    ><i class="fa-brands fa-youtube"></i
                                ></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/incrediblepizza_chihuahua" target="_blank"
                                    ><i class="fa-brands fa-instagram"></i
                                ></a>
                            </li>
                        </ul>
                        <ul
                            class="list-unstyled"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            <li class="mb-3">
                                <a
                                    class="btn btn-light rounded-pill"
                                    href="<?php echo esc_url(
                                        home_url("/paquetes/"),
                                    ); ?>"
                                >
                                    Ver paquetes
                                </a>
                            </li>
                            <li class="mb-3">
                                <a
                                    class="btn btn-light rounded-pill"
                                    href="<?php echo esc_url(
                                        home_url("/cumpleanos/"),
                                    ); ?>"
                                >
                                    Cumpleaños
                                </a>
                            </li>
                            <li class="mb-3">
                                <a
                                    class="btn btn-light rounded-pill"
                                    href="<?php echo esc_url(
                                        get_permalink(28),
                                    ); ?>"
                                >
                                    Preguntas frecuentes
                                </a>
                            </li>
                        </ul>
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
        </footer>

        <a
            href="https://wa.me/526144222550?text=<?php echo rawurlencode(
                "Hola, necesito información.",
            ); ?>"
            class="whatsapp"
            target="_blank"
            rel="noopener"
        >
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a>

        <div class="text-center py-3">
            <small>
                <a href="#" class="text-muted">Aviso de privacidad</a>. | Design
                by:
                <a href="https://mixen.mx/" target="_blank" class="text-muted">mixen.mx</a>
            </small>
        </div>

        <?php wp_footer(); ?>
    </body>
</html>
