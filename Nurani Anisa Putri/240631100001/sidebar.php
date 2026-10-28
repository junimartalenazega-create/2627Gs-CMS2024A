
<aside class="sidebar">

    <?php if (is_active_sidebar('sidebar-1')) : ?>

        <?php dynamic_sidebar('sidebar-1'); ?>

    <?php else : ?>

        <section class="widget">
            <h2 class="widget-title">Tentang Blog</h2>
            <p>
                Selamat datang di ruang cerita Ninis.
                Tempat berbagi pengalaman, inspirasi,
                dan cerita sehari-hari.
            </p>
        </section>

        <section class="widget">
            <h2 class="widget-title">Artikel Terbaru</h2>

            <ul>
                <?php
                $sidebar_posts = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5,
                    'post_status'    => 'publish',
                ));
                ?>

                <?php while ($sidebar_posts->have_posts()) : ?>
                    <?php $sidebar_posts->the_post(); ?>

                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </li>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
            </ul>
        </section>

    <?php endif; ?>

</aside>
