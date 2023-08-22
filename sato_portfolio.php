<?php
// Template Name: SatoPortfolio
?>
<?php get_header(); ?>
<body>
  <?php include 'inc/sato_portfolio_nav.php' ?>
  <main>
    <div class="main_content mx-auto flex justify-around">
      <a class="img w-1/4" href="">
        <div class="box type1">
          <img class="type1" src="<?php echo get_template_directory_uri() ?>/assets/img/type1.jpg" alt="">
          <p class="text-center before_text">Works</p>
        </div>
      </a>
      <a class="img w-1/4" href="">
        <div class="box type2">
          <img class="type2" src="<?php echo get_template_directory_uri() ?>/assets/img/type2.jpg" alt="">
          <p class="text-center before_text">Works</p>
        </div>
      </a>
      <a class="img w-1/4" href="">
        <div class="box type1">
          <img class="type1" src="<?php echo get_template_directory_uri() ?>/assets/img/type1.jpg" alt="">
          <p class="text-center before_text">Works</p>
        </div>
      </a>
      <a class="img w-1/4" href="">
        <div class="box type2">
          <img class="type2" src="<?php echo get_template_directory_uri() ?>/assets/img/type2.jpg" alt="">
          <p class="text-center before_text">Works</p>
        </div>
      </a>
    </div>
  </main>
  <?php get_footer(); ?>