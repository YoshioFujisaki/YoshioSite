<?php
// Template Name: SatoPortfolio
?>
<link href="<?php echo get_template_directory_uri() ?>/assets/css/lightbox.min.css" rel="stylesheet">
<?php get_header(); ?>
<body>
  <?php include 'inc/sato_portfolio_nav.php' ?>
  <?php include 'inc/sato_portfolio_works.php' ?>
  <?php include 'inc/sato_portfolio_profile.php' ?>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/nav_change.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/hamburger_nav.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/lightbox-plus-jquery.min.js"></script>
  <?php get_footer(); ?>