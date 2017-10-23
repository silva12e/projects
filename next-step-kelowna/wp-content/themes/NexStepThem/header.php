<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
	<style>
  .carousel {
  width:640px;
  height:360px;
  margin-bottom: 40px;
  min-height: 40px;
}
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 20px;

}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

body
{
	height:100%;
	width: 100%;
	padding-top:70px;
	font-family: 'Raleway', sans-serif;
}

</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lobster+Two|Raleway|Roboto+Slab" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Archivo+Black|Bad+Script|Cookie|Dancing+Script|Lobster+Two|Pacifico|Playball" rel="stylesheet"> 
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<meta charset="">
		
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class();?> style="padding-top: 140px;">
		
			<header class="site-header">
	     <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" ">
        <div class="container-fluid " >
	        <div class="navbar-header">
	            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
        					<?php bloginfo('name');?>
      					</a>
	            		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              		<span class="sr-only">Toggle navigation</span>
		              		<span class="icon-bar"></span>
		              		<span class="icon-bar"></span>
		              		<span class="icon-bar"></span>
	            		</button>
	          </div>
          <div id="navbar" class="navbar-collapse collapse ">            
            <div class="topBotomBordersOut"><?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'navbar',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbar',
                'menu_class'        => 'nav navbar-nav navbar  ',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?></div>
        		<div id="navbar-menu-social" class="navbar-default navbar-right">
	        		<p class="text-center">
		            <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
		            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
		            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
		            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
		            </p>
	            </div>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>  		
</header>


			