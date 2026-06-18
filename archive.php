<?php
get_header();

$theme_uri = get_template_directory_uri();
?>

<section class="pt-60 pb-30 text-center">
    <div class="container">
        <p class="text-azul fw-bold mb-0" data-aos="fade-up" data-aos-duration="1000">
            Blog
        </p>
        <h1 class="titulo-highlight mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <?php the_archive_title(); ?>
        </h1>
        <?php if ( get_the_archive_description() ) : ?>
            <div class="archive-description">
                <?php the_archive_description(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="pb-60">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <div class="row g-4">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card card-blog">
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium_large', array( 'class' => 'card-img-top' ) ); ?>
                                <?php else : ?>
                                    <img
                                        src="<?php echo esc_url( $theme_uri . '/assets/images/blog-thumb-1.png' ); ?>"
                                        class="card-img-top"
                                        alt="<?php the_title_attribute(); ?>"
                                    />
                                <?php endif; ?>
                            </a>
                            <div class="card-body">
                                <div class="card-meta d-flex align-items-center justify-content-between mb-3">
                                    <small><?php echo esc_html( incredible_get_primary_category() ); ?></small>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded-pill"
                                        >Leer más</a
                                    >
                                </div>
                                <h3 class="card-title h5">
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <p class="card-text mb-0">
                                    <small><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                ?>
            </div>

            <nav class="mt-5">
                <?php
                the_posts_pagination(
                    array(
                        'mid_size'  => 2,
                        'prev_text' => __( '« Anterior' ),
                        'next_text' => __( 'Siguiente »' ),
                    )
                );
                ?>
            </nav>
        <?php else : ?>
            <p class="text-center mb-0">No se encontraron publicaciones.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
