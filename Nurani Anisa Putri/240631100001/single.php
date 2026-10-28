
<?php get_header(); ?>

<main class="content-area">
    <div class="container content-layout">

        <div class="main-content">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article <?php post_class('single-post-content'); ?>>

                        <div class="post-meta">
                            Dipublikasikan pada
                            <?php echo esc_html(get_the_date()); ?>
                        </div>

                        <h1 class="section-title">
                            <?php the_title(); ?>
                        </h1>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="single-post-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>

                        <div class="post-navigation">
                            <?php
                            the_post_navigation(array(
                                'prev_text' => '← Artikel Sebelumnya: %title',
                                'next_text' => 'Artikel Berikutnya: %title →',
                            ));
                            ?>
                        </div>

                    </article>

                <?php endwhile; ?>

            <?php else : ?>

                <p>Artikel tidak ditemukan.</p>

            <?php endif; ?>

        </div>

        <?php get_sidebar(); ?>

    </div>
</main>

<?php get_footer(); ?>
