<?php get_header(); ?>

<!-- The Jumbotron banner containing title, and featured image as BG -->

 <section class="bg-1 text-center" style="background: url('http://localhost:8888/wordpress/wp-content/uploads/2017/01/Edited-IMG_7922.jpg') no-repeat center center fixed;">
<div class="jumbotron text-center">
   <h1><?php bloginfo( 'name' ); ?></h1> 
    <h4><?php bloginfo('description'); ?></h4>
        
</div>
</section>
 
<div class="container" >
    <div class="row">
        <div class="col-sm-8" id-"grid">

            
<!-- Posts -->

<div id="grid" class="container">
  <div id="posts">    
      <?php 
	 if ( have_posts() ) { 
	 while ( have_posts() ) : the_post();
	 ?>
    <div class="post">
      	 <?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('medium'); ?>
    </a>
<?php endif; ?>
      <br>
      <br>
      <strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong>
      <br>
      <small><?php the_date(); ?> by <?php the_author(); ?></small>
    </div>
       <?php
	 endwhile;
	 }
       ?>
	<nav>
	 <ul class="pager">
	 <li><?php next_posts_link('Previous'); ?></li>
	 <li><?php previous_posts_link('Next'); ?></li>
	 </ul>
	 </nav>

    	 </div><!-- /.blog-main -->
     </div>
</div>	
        
  
  </div>

</div>


<?php get_footer(); ?> 
