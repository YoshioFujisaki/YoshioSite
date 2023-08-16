<?php
// Template Name: SatoPortfolio
?>
<?php get_header(); ?>
<body>
  <header class="my-8">
    <div class="container mx-auto">
      <nav class="flex justify-between py-10">
        <h3><a class="name" href="#">Sato Kashiwaguma</a></h3>
        <ul class="category flex">
          <li class="md:ml-4"><a href="works.html">Works</a></li>
          <li class="md:ml-4"><a href="profile.html">Profile</a></li>
          <li class="md:ml-4"><a href="https://www.instagram.com/sato39_kuma/">instagram</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="container mx-auto flex">
      <a class="img w-1/4 ml-4" href="">
        <div class="box type1">
          <img class="type1" src="<?php echo get_template_directory_uri() ?>/assets/img/type1.jpg" alt="">
          <p class="text-center">Works</p>
        </div>
      </a>
      <a class="img w-1/4 ml-4" href="">
        <div class="box type2">
          <img class="type2" src="<?php echo get_template_directory_uri() ?>/assets/img/type2.jpg" alt="">
          <p class="text-center">Works</p>
        </div>
      </a>
      <a class="img w-1/4 ml-4" href="">
        <div class="box type1">
          <img class="type1" src="<?php echo get_template_directory_uri() ?>/assets/img/type1.jpg" alt="">
          <p class="text-center">Works</p>
        </div>
      </a>
      <a class="w-1/4 ml-4" href="">
        <div class="box type2">
          <img class="type2" src="<?php echo get_template_directory_uri() ?>/assets/img/type2.jpg" alt="">
          <p class="text-center">Works</p>
        </div>
      </a>
    </div>
  </main>
  <?php get_footer(); ?>