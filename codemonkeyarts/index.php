<?php get_header(); ?>
<main id="lab-main">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article <?php post_class('lab-entry'); ?>>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php if (is_singular()) { the_content(); } else { the_excerpt(); } ?>
</article>
<?php endwhile; the_posts_navigation(); else : ?>
<div class="lab-entry"><h1><?php esc_html_e('Nothing here yet.', 'codemonkeyarts'); ?></h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Return to The Lab', 'codemonkeyarts'); ?></a></div>
<?php endif; ?>
</main>
<?php get_footer(); ?>
