<?php
get_header();
?>

<section class="py-60">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h1 class="fw-bold text-azul mb-4" data-aos="fade-up" data-aos-duration="1000">
                        <?php the_title(); ?>
                    </h1>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="mb-4" data-aos="fade-up" data-aos-duration="1000">
                            <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid rounded-4' ) ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="text-start" data-aos="fade-up" data-aos-duration="1000">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>
