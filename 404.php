<?php
get_header();
?>

<section class="py-120 text-center">
    <div class="container">
        <p class="text-azul fw-bold mb-0" data-aos="fade-up" data-aos-duration="1000">
            Error 404
        </p>
        <h1 class="titulo-highlight mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            no encontrado
        </h1>
        <p class="mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            La página que buscas no existe o fue movida.<br />
            Pero aquí siempre hay algo bueno por descubrir.
        </p>
        <a
            href="<?php echo esc_url( home_url( '/' ) ); ?>"
            class="btn btn-primary rounded-pill"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="600"
            >Volver al inicio</a
        >
    </div>
</section>

<?php get_footer(); ?>
