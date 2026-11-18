<?php get_header(); ?>
<main id="lab-main">
<section class="cma-hero" aria-labelledby="cma-title">
  <div class="cma-hero-copy">
    <p class="cma-eyebrow"><?php esc_html_e('CodeMonkeyArts / independent creative technology', 'codemonkeyarts'); ?></p>
    <h1 id="cma-title"><?php esc_html_e('Technology', 'codemonkeyarts'); ?><br><em><?php esc_html_e('with a pulse.', 'codemonkeyarts'); ?></em></h1>
    <p class="cma-intro"><?php esc_html_e('A little code. A little chaos. Tools for developing ideas, working with your own context, and making something unmistakably yours.', 'codemonkeyarts'); ?></p>
    <div class="cma-hero-actions"><a class="cma-action" href="#cma-projects"><?php esc_html_e('Enter the Lab', 'codemonkeyarts'); ?> <span aria-hidden="true">↘</span></a><a class="cma-text-link" href="https://github.com/codalanguez" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Explore the code', 'codemonkeyarts'); ?> ↗</a></div>
    <p class="cma-credit"><?php esc_html_e('Built by Coda Languez. All slightly haunted.', 'codemonkeyarts'); ?></p>
  </div>
  <div class="cma-console" aria-hidden="true">
    <div class="cma-console-top"><span>cma://signal-lab</span><span>○ ○ ●</span></div>
    <div class="cma-signal-art"><div class="cma-orbit cma-orbit-one"></div><div class="cma-orbit cma-orbit-two"></div><div class="cma-signal-core"><span>&gt;_</span></div><span class="cma-coordinate">ART / CODE<br>HUMAN / MACHINE</span><span class="cma-art-label">MAKE SOMETHING<br>STRANGE.</span></div>
    <div class="cma-console-bottom"><span>~/CodeMonkeyArts</span><span class="cma-signal-tag">CREATIVE SIGNAL</span></div>
  </div>
</section>
<div id="cma-projects" class="cma-section-label"><span><?php esc_html_e('The Lab', 'codemonkeyarts'); ?> / 01</span><span><?php esc_html_e('Tools, themes & experiments', 'codemonkeyarts'); ?></span></div>
<?php while (have_posts()) : the_post(); the_content(); wp_link_pages(); endwhile; ?>
</main>
<?php get_footer(); ?>
