<header class="singleheader">
<?php get_header(); ?>
</header>

<?php $results = get_terms('title');
if ($results) {
   foreach ($results as $result) {
      echo $result->term_id.' '.$result->name.'<br />';
   }
} ?>

   
    <article class="post">

      <div class="contenusingle">
        <div class="cattime">
            <p><?php the_time( get_option( 'date_format' ) ); ?> </p>
            <p><?php $categories= get_field('categories');?></p>
            <p><img class="cutelry" src="<?php bloginfo('template_url'); ?>/assets/svg/cutelry.svg" alt="cutelry"witdh="25px" height="25px"><?php echo $categories ->name;?></p>
        </div>
          <h1><?php the_title(); ?></h1>
          <p><?php the_field('description');?></p>
      
          <div class="singleinstructions">
      
          
    </article>
   
    <img class="hachureblanctop" src="<?php bloginfo('template_url'); ?>/assets/images/hachure-blanches-top.png" alt="hachureblanctop">
    <img class="imgrecettes" src="<?php the_field('dev_restaurant_images'); ?>" />
    
      
          <div class="post__meta">
        
              
          <h1>Ingrédients</h1>
          <ul> 
          
            
              <?php 
                  the_field('ingredients');
                  

              ?>
            
          </ul>
          <h1>Instructions</h1>
          <p>
            <?php the_field('preparations'); ?>
          </p>

                  
            
          
         
            
      </div>
    </div>
      <?php
      $posts = get_field('Recettes');
      if( $posts ): ?>
      <ul>
      <?php foreach( $posts as $post): ?>
      <?php setup_postdata($post); ?>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      <?php endforeach; ?>
      </ul>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
              

            <div class="post__content">
              <?php the_content(); ?>
            </div>
          
          
    

  
<?php get_footer(); ?>