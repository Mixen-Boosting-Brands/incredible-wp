<?php
get_header();

$theme_uri = get_template_directory_uri();
?>

<section class="pt-60 pb-30 text-center">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <p class="text-azul fw-bold mb-0" data-aos="fade-up" data-aos-duration="1000">
                <?php echo esc_html( incredible_get_primary_category() ); ?>
            </p>
            <h1 class="fw-bold text-azul mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <?php the_title(); ?>
            </h1>
            <p class="text-muted mb-5">
                <small>
                    <?php echo esc_html( get_the_date() ); ?>
                </small>
            </p>
        <?php endwhile; ?>
    </div>
</section>

<section class="pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="mb-5" data-aos="fade-up" data-aos-duration="1000">
                        <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded-4' ) ); ?>
                    </div>
                <?php endif; ?>

                <div data-aos="fade-up" data-aos-duration="1000">
                    <?php the_content(); ?>
                </div>

                <p class="mt-5 mb-0">
                    <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="btn btn-secondary rounded-pill"
                        >Volver al blog</a
                    >
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/banner-disfrutar'); ?>

<?php get_footer(); ?>
