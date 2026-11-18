<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#lab-main"><?php esc_html_e('Skip to content', 'codemonkeyarts'); ?></a>
<?php cma_social_bar(); ?>
<header class="site-head"><div class="site-bar">
<a class="site-mark" aria-label="<?php esc_attr_e('CodeMonkeyArts home', 'codemonkeyarts'); ?>" href="<?php echo esc_url(home_url('/')); ?>"><span class="cma-wordmark" data-text="CodeMonkeyArts" aria-hidden="true"><?php esc_html_e('CodeMonkeyArts', 'codemonkeyarts'); ?></span><small aria-hidden="true"><?php esc_html_e('CREATIVE TECHNOLOGY / SLIGHTLY HAUNTED', 'codemonkeyarts'); ?></small></a>
<nav class="site-nav" aria-label="<?php esc_attr_e('Main', 'codemonkeyarts'); ?>">
<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'fallback_cb' => 'cma_default_navigation', 'depth' => 1)); ?>
<a href="https://codalanguez.com/">Coda Languez ↗</a>
</nav></div><div class="cma-systembar"><span>01 / <?php esc_html_e('THE LAB', 'codemonkeyarts'); ?></span><span><?php esc_html_e('CODE · TOOLS · EXPERIMENTS', 'codemonkeyarts'); ?></span><button class="cma-motion" type="button" aria-pressed="false" hidden><?php esc_html_e('Effects', 'codemonkeyarts'); ?></button></div></header>
