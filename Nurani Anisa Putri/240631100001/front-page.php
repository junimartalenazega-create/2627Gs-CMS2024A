
<?php get_header(); ?>

<main class="content-area">

    <section class="hero">
        <div class="container">
            <span class="hero-label">Ruang Cerita Ninis</span>

            <h1>Halo, Selamat Datang di Blogku!</h1>

            <p>
                Tempat berbagi cerita, pengalaman, inspirasi,
                dan hal-hal sederhana yang berarti.
            </p>

            <a class="button" href="#artikel-terbaru">
                Jelajahi Artikel
            </a>
        </div>
    </section>

    <section class="posts-section" id="artikel-terbaru">
        <div class="container">

            <div class="section-heading">
                <h2 class="section-title">Cerita Terbaru</h2>
                <p class="section-description">
                    Temukan cerita dan inspirasi terbaru dari Ninis.
                </p>
            </div>

            <?php
            $latest_posts = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'post_status'    => 'publish',
            ));
            ?>

            <?php if ($latest_posts->have_posts()) : ?>

                <div class="posts-grid">

                    <?php while ($latest_posts->have_posts()) : ?>
                        <?php $latest_posts->the_post(); ?>

                        <article <?php post_class('post-card'); ?>>

                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>
                            </a>

                            <div class="post-card-content">

                                <div class="post-meta">
                                    <?php echo esc_html(get_the_date()); ?>
                                </div>

                                <h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <div class="post-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>

                                <a class="read-more"
                                   href="<?php the_permalink(); ?>">
                                    Baca Selengkapnya →
                                </a>

                            </div>
                        </article>

                    <?php endwhile; ?>

                </div>

            <?php else : ?>

                <p>
                    Belum ada artikel. Silakan tambahkan postingan
                    melalui Dashboard WordPress.
                </p>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
