<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title>Sicard recherches privée</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<?php wp_head(); ?>
</head>

<?php do_action( 'tailpress_header' ); ?>

<body class="bg-grey-lightest font-serif leading-normal tracking-normal">
      <header class="relative gradient_blue w-full">
      <div id="navbar" class="h-16 space-x-32 w-full top-0 z-50">
        <div class="mx-auto-120px mx-auto-80px mx-auto-40px mx-auto-20px flex space-between items-center">
          <nav class="m-0 w-full flex justify-end md:hidden">
            <?php wp_nav_menu(); ?>
          </nav>
          <!-- Mobile menu button -->
          <div class="container hidden md:flex md:justify-end">
            <div class="hamburger transition-opacity duration-75">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
            <!-- mobile menu -->
            <div id="menu" class="hidden h-screen w-screen px-6 z-10 pt-10 fixed gradient_blue">
              <div class="">
                  <?php wp_nav_menu(); ?>
                </div>
            </div>
          <!-- END mobile menu -->
          </div>
          <!-- END Mobile menu button -->
        </div>
      </div>

<?php do_action( 'tailpress_content_start' ); ?>

<main>
