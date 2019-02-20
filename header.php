<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/materialize.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/ol.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/materialize.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.countdown.min.js"></script>
	<?php wp_head();?>
</head>

<body>
    <header>
	<div class="navbar-fixed ">
		<nav>
	<?php
    wp_nav_menu( array(
        'menu' => 'menu',
        'theme_location' => 'primary',
        'menu_class'     => 'menu-deskop',
         ) );?>
         
    
       	</nav>
       	
     </div>
     
     
     <div id="menu-toggle">
  <div id="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div id="cross">
    <span></span>
    <span></span>
  </div>
</div>
     
       	<?php
       	wp_nav_menu( array(
       	'menu' => 'menu',    
        'theme_location' => 'primary',
        'menu_class'     => 'menu-mobil',
         ) );?>
         
        <script>
            $('.menu-mobil').hide();
            $('#menu-toggle').click(function(){
              $(this).toggleClass('open');
              
              if ($(this).hasClass('open')){
                  $('.menu-mobil').slideDown();
              }
              else{
                  $('.menu-mobil').slideUp();
              }
            });
            
        </script> 
         
         
      </header>
      <main>