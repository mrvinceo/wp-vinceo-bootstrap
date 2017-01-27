<?php get_header(); ?>

<!-- The Jumbotron banner containing title, and image as a parallax scrolling BG -->

 <section class="bg-1 text-center" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/beachart-2.jpg') no-repeat center center fixed; background-size:cover;">

<div class="jumbotron text-center">
<h1>
    <?php bloginfo( 'name' ); ?>
</h1>
    
  <h2 style="color: #fff;" class="typewrite" data-period="2000" data-type='[ "Wordpress Design...", "AWS Architecture Expertise...", "Digital Marketing Expertise." ]'>
    <span class="wrap"></span>
  </h2>

        
</div>
</section>
 
<div class="container">
    <div class="row">
        
                <div class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="<?php echo get_theme_mod( 'panel_text_glyph'); ?> logo-small"></span>
      <h4><?php echo get_theme_mod( 'panel_text_head_1'); ?></h4>
        <p> <?php echo get_theme_mod( 'panel_text_block'); ?></p>
    </div>
    <div class="col-sm-4">
      <span class="<?php echo get_theme_mod( 'panel_text_glyph_2'); ?> logo-small"></span>
      <h4><?php echo get_theme_mod( 'panel_text_head_2'); ?></h4>
        <p> <?php echo get_theme_mod( 'panel_text_block_2'); ?></p>
    </div>
    <div class="col-sm-4">
      <span class="<?php echo get_theme_mod( 'panel_text_glyph_3'); ?> logo-small"></span>
      <h4><?php echo get_theme_mod( 'panel_text_head_3'); ?></h4>
    <p> <?php echo get_theme_mod( 'panel_text_block_3'); ?></p>
    </div>
    </div>
    <br><br>

</div>
        
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
 <p>
 </p>

<?php get_footer(); ?> 
