<?php
/*
Template Names: Recettes */

// use AC\Helper\Strings;

use AC\Helper\Strings;

?>


<div class ="contenupage">
  <?php get_header(); ?>
  <div class="title">
    <h3 >The Chief Selection</h3>
    <h1>RECIPES BLOG</h1>
    <a class="checkmenu" href="http://localhost/premierWordpress/menu/">--- Check our Menu</a>
  </div>
</div>
<img class="hachuregrisetop" src="<?php bloginfo('template_url'); ?>/assets/images/hachures-grises-top.png" alt="hachures">
  <!-- <h1>PAGE RECETTES</h1> -->
  <div class="listcategories">
  <?php $categoriesquery= wp_list_categories( 'hide_empty=0' ); ?>
  <div><?php echo $categoriesquery ;?></div>
</div>
  
  <?php $loop = new WP_Query( array( 'post_type' => 'recettes', 'posts_per_page' => 5, 'paged' => $paged) ); ?>

  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="recettes">
  <div class="recettescontenu">
    <p><?php the_time( get_option( 'date_format' ) ); ?> </p>
    <h4><?php $categories= get_field('categories');?></h4>
    <img class="cutelry" src="<?php bloginfo('template_url'); ?>/assets/svg/cutelry.svg" alt="cutelry"witdh="25px" height="25px"><?php echo $categories ->name;?>
    <?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
    <p class="recipiesdescription"><?php echo the_field('description');?> </p>
  </div>
  <div>
    <img class="imagesrecettes" src="<?php the_field('dev_restaurant_images'); ?>" />
  </div>
</div>
  <?php $posts = get_field('Recettes');

 if( $posts ): ?>
 
 <ul>
  <?php foreach( $posts as $post): ?>
  <?php setup_postdata($post); ?>
  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  <?php endforeach; ?>
 </ul>

 <?php wp_reset_postdata(); ?>
 <?php endif; ?>
 <div class="entry-content">


 </div>

  <?php endwhile ; ?>
  <p class="pageselect"><?php wp_pagenavi( array( 'query' => $loop ) ); ?></p>
  <?php the_content() ; ?>
  <?php get_footer(); ?>
  