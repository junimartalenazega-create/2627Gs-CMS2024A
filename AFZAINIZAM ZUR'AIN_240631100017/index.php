<?php
/**
 * Template utama tema (fallback untuk semua tampilan).
 *
 * @package Tema_Saya
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#konten"><?php esc_html_e( 'Lewati ke konten', 'tema-saya' ); ?></a>

<header class="site-header">
	<div class="container header-inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</p>
				<?php if ( get_bloginfo( 'description' ) ) : ?>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				<?php endif; ?>
			<?php endif; ?>
		</div>

		<nav class="main-navigation" aria-label="<?php esc_attr_e( 'Menu Utama', 'tema-saya' ); ?>">
			<button class="menu-toggle" aria-expanded="false"><?php esc_html_e( 'Menu', 'tema-saya' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'fallback_cb'    => false,
				'depth'          => 2,
			) );
			?>
		</nav>
	</div>
</header>

<main id="konten" class="site-content">
	<div class="container">
		<div class="content-grid <?php echo is_active_sidebar( 'sidebar-1' ) ? 'has-sidebar' : ''; ?>">

			<div class="primary">
				<?php if ( is_archive() ) : ?>
					<header class="archive-header">
						<?php the_archive_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
					</header>
				<?php elseif ( is_search() ) : ?>
					<header class="archive-header">
						<h1 class="entry-title">
							<?php printf( esc_html__( 'Hasil pencarian: %s', 'tema-saya' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
						</h1>
					</header>
				<?php endif; ?>

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>

							<?php if ( has_post_thumbnail() ) : ?>
								<a class="post-thumbnail" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'large' ); ?>
								</a>
							<?php endif; ?>

							<header>
								<?php if ( is_singular() ) : ?>
									<h1 class="entry-title"><?php the_title(); ?></h1>
								<?php else : ?>
									<h2 class="entry-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
								<?php endif; ?>

								<?php if ( 'post' === get_post_type() ) : ?>
									<div class="entry-meta"><?php tema_saya_entry_meta(); ?></div>
								<?php endif; ?>
							</header>

							<div class="entry-content">
								<?php
								if ( is_singular() ) {
									the_content();
									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Halaman:', 'tema-saya' ),
										'after'  => '</div>',
									) );
								} else {
									the_excerpt();
									?>
									<a class="read-more" href="<?php the_permalink(); ?>">
										<?php esc_html_e( 'Baca selengkapnya', 'tema-saya' ); ?>
									</a>
									<?php
								}
								?>
							</div>

							<?php if ( is_singular( 'post' ) ) : ?>
								<footer class="entry-footer">
									<?php the_tags( esc_html__( 'Tag: ', 'tema-saya' ), ', ' ); ?>
								</footer>
							<?php endif; ?>
						</article>
					<?php endwhile; ?>

					<?php if ( is_singular( 'post' ) ) : ?>
						<?php the_post_navigation(); ?>
					<?php else : ?>
						<div class="pagination">
							<?php
							the_posts_pagination( array(
								'mid_size'  => 2,
								'prev_text' => esc_html__( '&laquo; Sebelumnya', 'tema-saya' ),
								'next_text' => esc_html__( 'Berikutnya &raquo;', 'tema-saya' ),
							) );
							?>
						</div>
					<?php endif; ?>

					<?php
					if ( is_singular() && ( comments_open() || get_comments_number() ) ) {
						comments_template();
					}
					?>

				<?php else : ?>

					<article class="entry">
						<h1 class="entry-title"><?php esc_html_e( 'Tidak ada konten ditemukan', 'tema-saya' ); ?></h1>
						<p><?php esc_html_e( 'Maaf, tidak ada yang cocok. Coba cari dengan kata kunci lain.', 'tema-saya' ); ?></p>
						<?php get_search_form(); ?>
					</article>

				<?php endif; ?>
			</div>

			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<aside class="sidebar" aria-label="<?php esc_attr_e( 'Sidebar', 'tema-saya' ); ?>">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</aside>
			<?php endif; ?>

		</div>
	</div>
</main>

<footer class="site-footer">
	<div class="container">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'footer',
			'container'      => false,
			'fallback_cb'    => false,
			'depth'          => 1,
		) );
		?>
		<p>
			&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
			<?php esc_html_e( 'Didukung oleh WordPress.', 'tema-saya' ); ?>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
