<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Eugine
 * @since Eugine 1.0
 */
?><!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->  
<!--[if IE 9]> <html <?php language_attributes(); ?> class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->  
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Meta -->
    <meta <?php bloginfo( 'charset' ); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">  

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head> 

<body <?php body_class( ); ?>>
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header navbar-fixed-top">  
            <div class="container">       
                <h1 class="logo">
                    <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?> <span class="sub">Blog</span></a>
                </h1><!--//logo-->
                <nav class="main-nav navbar-right" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--//nav-toggle-->
                    </div><!--//navbar-header-->
                    <div id="navbar-collapse" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Categories <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-category.html">Tech</a></li>
                                    <li><a href="blog-category.html">Apps</a></li>
                                    <li><a href="blog-category.html">News</a></li>
                                    <li><a href="blog-category.html">Community</a></li>              
                                </ul>                            
                            </li><!--//dropdown-->
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Archives <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-archive.html">Sep 2014 (5)</a></li>
                                    <li><a href="blog-archive.html">Aug 2014 (6)</a></li>
                                    <li><a href="blog-archive.html">July 2014 (3)</a></li>
                                    <li><a href="blog-archive.html">June 2014 (4)</a></li>              
                                </ul>                            
                            </li><!--//dropdown-->
                        </ul><!--//nav-->
                        
                        <div class="searchbox-container">
                            <form class="searchbox">
                                <label class="sr-only" for="search-form">Search</label>
                                <input id="search-form" class="form-control searchbox-input" placeholder="Search the blog..." type="search" value="" name="search-form">
                                <input class="searchbox-submit" type="submit" value="GO">
                                <i class="fa fa-search searchbox-icon"></i>
                            </form>
                        </div><!--//searchbox-container-->                                                
                        
                    </div><!--//navabr-collapse-->
                </nav><!--//main-nav-->         
            </div><!--//container-->
        </header><!--//header-->         