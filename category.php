<?php get_header(); ?>

<div class="jumbotron text-center">
  <h1 style="color: #898989;">Articles</h1> 
        
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">

        <div class="col-sm-12">
              
            
<!-- Posts -->

<!-- <div id="grid" class="container"> -->
<div class="container" id="grid">
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
    <div class="post">
      <img src="http://placehold.it/600x400">
      <br>
      <br>
      <strong>Title Goes Here</strong>
      <br>
      <small>Category</small>
    </div>
    <div class="post">
      <img src="http://placehold.it/400x600">
      <br>
      <br>
      <strong>Title Goes Here</strong>
      <br>
      <small>Category</small>
    </div>
    <div class="post">
      <img src="http://placehold.it/600x400">
      <br>
      <br>
      <strong>Title Goes Here</strong>
      <br>
      <small>Category</small>
    </div>
    <div class="post">
      <img src="http://placehold.it/600x400">
      <br>
      <br>
      <strong>Title Goes Here</strong>
      <br>
      <small>Category</small>
    </div>
    <div class="post">
      <img src="http://placehold.it/600x400">
      <br>
      <br>
      <strong>Title Goes Here</strong>
      <br>
      <small>Category</small>
    </div>
    <div class="post">
      <img src="http://placehold.it/600x400">
      <br>
      <br>
      <strong>Title Goes Here</strong>
      <br>
      <small>Category</small>
    </div>
    <div class="post">
      <img src="http://placehold.it/600x400">
      <br>
      <br>
      <strong>Title Goes Here</strong>
      <br>
      <small>Category</small>
    </div>
    <div class="post">
      <img src="http://placehold.it/600x400">
      <br>
      <br>
      <strong>Title Goes Here</strong>
      <br>
      <small>Category</small>
    </div>
    <div class="post">
      <img src="http://placehold.it/600x400">
      <br>
      <br>
      <strong>Title Goes Here</strong>
      <br>
      <small>Category</small>
    </div>
    <div class="post">
      <img src="http://placehold.it/600x400">
      <br>
      <br>
      <strong>Title Goes Here</strong>
      <br>
      <small>Category</small>
    </div>
    <div class="post">
      <img src="http://placehold.it/600x400">
      <br>
      <br>
      <strong>Title Goes Here</strong>
      <br>
      <small>Category</small>
    </div>
  </div>
</div>
            
            
            
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
