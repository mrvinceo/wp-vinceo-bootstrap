<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="inc/fancies.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" <?php body_class(); ?>>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/">
          <?php
        // Display the Custom Logo
        the_custom_logo();

        // No Custom Logo, just display the site's name
        if (!has_custom_logo()) {
        ?>
        <h1><?php bloginfo('name'); ?></h1>
          <?php
}
?>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <?php bootstrap_nav( array( 
'theme_location' => 'header-menu', 
'menu_class' => 'nav navbar-nav navbar-right',
'container' => 'ul'
)); ?>
    </div>
  </div>
</nav>

