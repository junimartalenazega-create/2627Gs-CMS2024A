
<?php get_header(); ?>

<main class="content-area">
    <div class="container">

        <section class="posts-section">

            <div class="section-heading">
                <h1 class="section-title">
                    <?php
                    if (is_home()) {
                        echo esc_html('Cerita Terbaru');
                    } else {
                        echo esc_html(wp_get_document_title());
                    }
                    ?>
                </h1>

                <p class="section-description">
                    Temukan cerita dan inspirasi terbaru dari Ninis.
                </p>
            </div>

            <?php if (have_posts()) : ?>

                <div class="posts-grid">

                    <?php while (have_posts()) : the_post(); ?>

                        <article <?php post_class('post-card'); ?>>

                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            <?php endif; ?>

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

                <nav class="pagination" aria-label="Navigasi halaman">
                    <?php
                    the_posts_pagination(array(
                        'prev_text' => '← Sebelumnya',
                        'next_text' => 'Berikutnya →',
                    ));
                    ?>
                </nav>

            <?php else : ?>

                <p>Belum ada artikel yang dapat ditampilkan.</p>

            <?php endif; ?>

        </section>

    </div>
</main>

<?php get_footer(); ?>
