<?php get_header(); ?>

<div class="jumbotron text-center">
    <div class="slide-bg">
            <?php get_template_part('parts/slider'); ?>
    </div>
  <h1>Articles</h1> 
        
</div>

   

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
      <?php get_sidebar(); ?>
        <div class="col-sm-8">
      <?php 
	 if ( have_posts() ) { 
	 while ( have_posts() ) : the_post();
	 ?>
	 <div class="blog-post">
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	 <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
         // check if the post has a Post Thumbnail assigned to it.
     <?php 
      if ( has_post_thumbnail() ) {
	   the_post_thumbnail();
      } 
       the_content();
      ?>
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>
	 </div><!-- /.blog-post -->
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
<?php get_footer(); ?> 
