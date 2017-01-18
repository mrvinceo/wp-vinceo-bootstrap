<?php get_header(); ?>

<!-- The Jumbotron banner containing title, and featured image as BG -->
<div class="bg"></div>

<div class="jumbotron text-center">
    <div class="slide-bg">
            <?php get_template_part('parts/slider'); ?>
    </div>
  <h1><?php the_title(); ?> Frontpage</h1> 
    <h4><?php get_the_author(); ?></h4>
        
</div>
    

<div class="container">
    
    <div class="row">
        
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
     </div>
</div>	
        
        <header id="header" class="container">
  <h1>Bootstrap 3 + Masonry 3</h1>
  <p class="lead">
    This is deployed with the <code>#grid</code> div fluid (that is, it has no Bootstrap <code>.container</code> class). To make it fixed simply add the <code>.container</code> class to it. Use the media queries in <strong>style.css</strong> to change
    the grid's post widths and margins.
  </p>
  <hr>
</header>


<!-- Posts -->

<!-- <div id="grid" class="container"> -->
<div class="container" id="grid">
  <div id="posts">
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
<?php get_footer(); ?> 
