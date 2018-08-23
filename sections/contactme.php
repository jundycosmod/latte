<?php
$latte_contactme_title = get_theme_mod('latte_contactme_title', __('Contact Me', 'latte'));
$latte_contactme_subtitle = get_theme_mod('latte_contactme_subtitle', __('Keep in Touch!', 'latte'));
?>

		<section class="contactme" id="contactme">
			<div class="container">
				<div class="row">
				<?php if (!empty($latte_contactme_title) || !empty($latte_contactme_subtitle) || is_customize_preview()): ?>
					<header data-sr="ease-in-out wait 0.25s" class="contactme-header">
					<?php if (!empty($latte_contactme_title) || is_customize_preview()): ?>
						<h2><?php echo esc_html($latte_contactme_title); ?></h2>
					<?php endif;?>
					<?php if (!empty($latte_contactme_subtitle) || is_customize_preview()): ?>
						<h3><?php echo esc_html($latte_contactme_subtitle); ?></h3>
					<?php endif;?>
					</header>
				<?php endif;?>
					<div class="col-md-12">
					<?php
if (is_active_sidebar('contactme-widgets')):
	dynamic_sidebar('contactme-widgets');
else:
	the_widget('latte_contactme_widget', array(
		'title' => esc_html__('HTML', 'latte'),
		'type' => 0,
		'icon' => 'fa-html5',
		'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
	));
	the_widget('latte_contactme_widget', array(
		'title' => esc_html__('CSS', 'latte'),
		'type' => 0,
		'icon' => 'fa-css3',
		'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
	));
	the_widget('latte_contactme_widget', array(
		'title' => esc_html__('WordPress', 'latte'),
		'type' => 0,
		'icon' => 'fa-wordpress',
		'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
	));
	the_widget('latte_contactme_widget', array(
		'title' => esc_html__('Linux', 'latte'),
		'type' => 0,
		'icon' => 'fa-linux',
		'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
	));
	the_widget('latte_contactme_widget', array(
		'title' => esc_html__('SEO', 'latte'),
		'type' => 0,
		'icon' => 'fa-search',
		'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
	));
	the_widget('latte_contactme_widget', array(
		'title' => esc_html__('Writing', 'latte'),
		'type' => 0,
		'icon' => 'fa-pencil',
		'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'latte'),
	));
endif;
?>
					</div>
				</div>
			</div>
		</section>
