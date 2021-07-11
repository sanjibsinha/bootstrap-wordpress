<!doctype html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    
    <title><?php bloginfo( 'name' ); ?> | 
    <?php is_front_page(  ) ? bloginfo( 'description' ) : wp_title( ); ?>
    </title>

     

    <!-- Bootstrap core CSS -->
<link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Favicons -->
<!-- <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico"> -->
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
    <?php wp_head(  ); ?>
  </head>
  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <!-- <div class="col-4 pt-1">
        <a class="link-secondary" href="#">Subscribe</a>
      </div> -->
      <div class="col-4 text-center">
		  <p>
			  <a class="blog-header-logo text-dark" href="<?php echo site_url('/'); ?>">
			পৃথিবীর অ‍াটচালা
		  </a>
		  </p>
        
		  <p>
			  বাংলার খড় মাটি কাদা দিয়ে তৈরি
		  </p>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        
      </div>
    </div>
  </header>

	<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
		<a class="p-2 link-secondary" href="<?php echo site_url( '/' ); ?>">Home</a>
      <a class="p-2 link-secondary" href="<?php echo site_url( '/about-us' ); ?>">About Us</a>
		<a class="p-2 link-secondary" href="<?php echo site_url( '/blog' ); ?>">Blog</a>
      
    </nav>
  </div>
</div>
	
	
</div>
