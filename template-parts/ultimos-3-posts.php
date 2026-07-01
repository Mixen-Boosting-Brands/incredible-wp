<!-- Últimos 3 posts del blog -->
<div class="row g-4">
    <?php
    $incredible_latest_posts = new WP_Query([
        "post_type" => "post",
        "post_status" => "publish",
        "posts_per_page" => 3,
        "ignore_sticky_posts" => true,
    ]);

    if ($incredible_latest_posts->have_posts()):
        $incredible_card_delay = 0;
        while ($incredible_latest_posts->have_posts()):
            $incredible_latest_posts->the_post(); ?>
            <div
                class="col-lg-4"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="<?php echo esc_attr($incredible_card_delay); ?>"
            >
                <div class="card card-blog">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail("medium_large", [
                            "class" => "card-img-top",
                        ]); ?>
                    <?php else: ?>
                        <img
                            src="<?php echo esc_url(
                                $theme_uri . "/assets/images/blog-thumb-1.png",
                            ); ?>"
                            class="card-img-top"
                            alt="<?php the_title_attribute(); ?>"
                        />
                    <?php endif; ?>
                    <div class="card-body">
                        <div
                            class="card-meta d-flex align-items-center justify-content-between mb-3"
                        >
                            <small><?php echo esc_html(
                                incredible_get_primary_category(),
                            ); ?></small>
                            <a
                                href="<?php the_permalink(); ?>"
                                class="btn btn-primary rounded-pill"
                                >Leer más</a
                            >
                        </div>
                        <h3 class="card-title h5">
                            <?php the_title(); ?>
                        </h3>
                        <p class="card-text mb-0">
                            <small><?php echo esc_html(
                                wp_trim_words(get_the_excerpt(), 18),
                            ); ?></small>
                        </p>
                    </div>
                </div>
            </div>
            <?php $incredible_card_delay += 200;
        endwhile;
        wp_reset_postdata();
    else:
         ?>
        <div class="col-12 text-center">
            <p class="mb-0">Muy pronto nuevas publicaciones.</p>
        </div>
        <?php
    endif;
    ?>
</div>
