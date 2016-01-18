<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>
   <meta name="description" content="<?php bloginfo('description'); ?>" />

   <!-- Bootstrap -->
   <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
   <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
   <link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-theme.min.css" rel="stylesheet">
   <link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">


   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="canonical" href="http://cybersecml.com/" />
    <meta name="referrer" content="origin" />

    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:description" content="<?php if(!is_singular()) bloginfo('description'); else the_title(); ?>" />
    <meta property="og:url" content="<?php the_permalink(); ?>" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php the_title(); ?>" />
    <meta name="twitter:description" content="<?php the_title(); ?>" />
    <meta name="twitter:url" content="<?php the_permalink(); ?>" />
    <?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>

<body>
   <div class="container">
      <div class="blog-header blog-header-gradient" >
         <p class="lead blog-description"><?php bloginfo('name'); ?></p>
      </div>
      <nav class="new-nav blog-navbar">
   <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
         </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
               <li class="page_item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
               <li><?php wp_list_pages('title_li='); ?></li>
         </ul>
      </div>
   </div>
</nav>
