
<?php get_header(); ?>

<main class="content-area">
    <div class="container">

        <section class="posts-section">

            <div class="section-heading">
                <h1 class="section-title">
                    <?php the_archive_title(); ?>
                </h1>

                <div class="section-description">
                    <?php the_archive_description(); ?>
                </div>
            </div>

            <?php if (have_posts()) : ?>

                <div class="posts-grid">

                    <?php while (have_posts()) : the_post(); ?>

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

                <nav class="pagination" aria-label="Navigasi halaman">
                    <?php
                    the_posts_pagination(array(
                        'prev_text' => '← Sebelumnya',
                        'next_text' => 'Berikutnya →',
                    ));
                    ?>
                </nav>

            <?php else : ?>

                <p>Belum ada artikel dalam arsip ini.</p>

            <?php endif; ?>

        </section>

    </div>
</main>

<?php get_footer(); ?>
