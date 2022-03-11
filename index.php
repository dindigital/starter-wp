<?php get_header(); ?>

<main data-slideout-ignore class="main" role="main">
  <?php if (have_posts()): ?>
    <?php while (have_posts()):
    	the_post(); ?>

    <?php
    endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
