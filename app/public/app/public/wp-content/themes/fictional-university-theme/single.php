<?php

while (have_posts()) {
  # code...
  the_post();?>
  <h1>Esto es una pagina no un post</h1>
  <h2>
    <?php the_title(); ?>
  </h2>
  <?php the_content(); ?>
<?php }
?>
