<?php
if (!defined('ABSPATH')) { exit; }
add_action('after_setup_theme', function () {
    load_theme_textdomain('codemonkeyarts', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', array('search-form', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array('primary' => __('Lab navigation', 'codemonkeyarts')));
});
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('lab-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', array(), '1.0.0');
    wp_enqueue_style('lab-shell', get_template_directory_uri() . '/assets/lab.css', array('lab-fonts'), filemtime(get_template_directory() . '/assets/lab.css'));
    wp_enqueue_style('cma-signal', get_template_directory_uri() . '/assets/signal.css', array('lab-shell'), filemtime(get_template_directory() . '/assets/signal.css'));
    wp_enqueue_script('cma-signal', get_template_directory_uri() . '/assets/signal.js', array(), filemtime(get_template_directory() . '/assets/signal.js'), true);
});
function cma_default_navigation() {
    $links = array('/' => __('The Lab', 'codemonkeyarts'), '/mechape/' => __('MechApe', 'codemonkeyarts'), '/haunted-tech/' => __('Haunted Tech', 'codemonkeyarts'), '/signal-lab/' => __('Signal Lab', 'codemonkeyarts'));
    foreach ($links as $path => $label) {
        $current = ($path === '/' && is_front_page()) || ($path !== '/' && is_page(trim($path, '/')));
        printf('<a href="%s"%s>%s</a>', esc_url(home_url($path)), $current ? ' aria-current="page"' : '', esc_html($label));
    }
}
function cma_social_bar() {
    $links = json_decode('[{"name": "GitHub", "url": "https://github.com/codalanguez", "icon": "github"}, {"name": "Payhip", "url": "https://payhip.com/CodaLanguezLabs", "icon": "payhip"}, {"name": "Civitai", "url": "https://civitai.com/user/CodeMonkeyArts", "icon": "civitai"}, {"name": "Substack", "url": "https://substack.com/@codalanguez", "icon": "substack"}, {"name": "Threads", "url": "https://www.threads.com/@codalanguez", "icon": "threads"}]', true);
    $icons = json_decode('{"github": "<i class=\\"lab-brand-icon\\" aria-hidden=\\"true\\">&#xf09b;</i>", "threads": "<i class=\\"lab-brand-icon\\" aria-hidden=\\"true\\">&#xe618;</i>", "payhip": "<svg viewBox=\\"0 0 24 24\\" aria-hidden=\\"true\\"><path opacity=\\".55\\" d=\\"M12 5.3l1.4-1.4a6.3 6.3 0 0 1 8.9 8.9l-1.2 1.2z\\"/><path fill-rule=\\"evenodd\\" d=\\"M12 5.3L10.6 4A6.3 6.3 0 0 0 1.7 12.9L12 23.2l9.1-9.2zM3.7 5.3c0-.4.3-.7.7-.7h3.1c.4 0 .7.3.7.7v3.1c0 .4-.3.7-.7.7H4.4a.7.7 0 0 1-.7-.7z\\"/></svg>", "civitai": "<svg viewBox=\\"-1 0 22.7 22.7\\" aria-hidden=\\"true\\"><path d=\\"M10.2,4.7l5.9,3.4V15l-5.9,3.4L4.2,15V8.1L10.2,4.7 M10.2,1.6l-8.7,5v10l8.7,5l8.7-5v-10C18.8,6.6,10.2,1.6,10.2,1.6z\\"/><path d=\\"M11.8,12.4l-1.7,1l-1.7-1v-1.9l1.7-1l1.7,1h2.1V9.3l-3.8-2.2L6.4,9.3v4.3l3.8,2.2l3.8-2.2v-1.2H11.8z\\"/></svg>", "substack": "<svg viewBox=\\"0 0 24 24\\" aria-hidden=\\"true\\"><path d=\\"M22.539 8.242H1.46V5.406h21.08v2.836zM1.46 10.812V24L12 18.11 22.54 24V10.812H1.46zM22.54 0H1.46v2.836h21.08V0z\\"/></svg>"}', true);
    echo '<div class="lab-socialbar"><div class="lab-social-inner"><span class="lab-social-caption">' . esc_html__('CONNECT / CODEMONKEYARTS', 'codemonkeyarts') . '</span><nav class="lab-social-links" aria-label="' . esc_attr__('Lab social links', 'codemonkeyarts') . '">';
    foreach ($links as $link) {
        // Icon markup is fixed theme source, never supplied by visitors or options.
        printf('<a href="%s" target="_blank" rel="noopener noreferrer">%s<span>%s</span></a>', esc_url($link['url']), $icons[$link['icon']], esc_html($link['name']));
    }
    echo '</nav></div></div>';
}
