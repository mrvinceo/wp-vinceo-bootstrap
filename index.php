<?php get_header(); ?>
<!-- The Jumbotron banner containing title, and featured image as BG -->
<?php
$thumbnail = get_the_post_thumbnail_url();
$post_date = the_date();
$author = the_author();
?>
 <section class="bg-1 text-center" style="background: url('<?php echo $thumbnail; ?>') no-repeat center center fixed; background-size:cover;">

<div class="jumbotron text-center">
<h1>
<?php the_title(); ?>

</h1>
        
</div>
</section>
    

<div class="container">
    
    <div class="row">
        
        
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
    <?php 
	 if ( have_posts() ) { 
	 while ( have_posts() ) : the_post();
	 ?>
	 <div class="blog-post">
<!--	 <h2 class="blog-post-title"><?php the_title(); ?></h2> -->
	 <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
	 <?php the_content(); ?>
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
      <?php get_sidebar(); ?>
     </div>
</div>	
<?php get_footer(); ?> 
