<?php get_header(); ?>
<main id="lab-main">
<?php while (have_posts()) : the_post();
    $has_heading = preg_match('/<h1\b/i', get_post_field('post_content', get_the_ID()));
    if (!$has_heading) { the_title('<h1 class="lab-page-title">', '</h1>'); }
    $portfolio = is_front_page() || is_page(array('lab', 'mechape', 'haunted-tech'));
    if (!$portfolio) { echo '<div class="lab-plain-content">'; }
    the_content();
    wp_link_pages();
    if (!$portfolio) { echo '</div>'; }
endwhile; ?>
</main>
<?php get_footer(); ?>
