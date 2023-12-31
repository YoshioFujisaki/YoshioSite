<?php
/* 
Template Name: ポートフォリオ
Template Post Type: post,page
*/
?>
<?php get_header(); ?>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light py-3 bg-dark">
        <div class="container">
          <a class="navbar-brand text-light" href="#">Menu</a>
          <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-light"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link text-light" aria-current="page" href="#introduce">INTRODUCE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#skils">SKILS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#works">WORKS</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link text-light" href="#Q&A">Q&A</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- intro section -->
    <!-- <section id="intro"> -->
      <div class="hero vh-100 d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center ">
              <div class="title">
                <h1 class="display-4">Welcome to my page!</h1>
                <p class="my-3">Thank you for coming to my page.</p>
                <a href="#introduce" class="btn btn-outline-light">click!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- </section> -->

    <!-- introduce section -->
    <section id="introduce" class="slide-from-left" data-section="0">
      <div class="container">
        <div class="row">
          <div class="text col-md-8 mx-auto text-center">
            <h1>INTRODUCE</h1>
            <div class="profile">
              <div class="icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.jpg" 
              alt="藤﨑のアイコン"
              width="200"
              height="200"
              class="icon">
            </div>
            <div class="int-text">
              <ul>
                <li>
                  <h5>
                    NAME&ensp;:&ensp; Yoshio Fujisaki
                  </h5>
                  </li>
                <li>
                  <p>
                    現役大学生のエンジニアです。
                    明るいエナジーで生きています(\^_^/)
                  </p>
                </li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sklis section -->
    <section id="skils" class="slide-from-right" data-section="1">
       <div class="container">
         <div class="row">
           <div class="col-md-8 mx-auto text-center">
             <h1>SKILS</h1>
             <table class="table">
               <thead>
                 <tr>
                   <th scope="col">#</th>
                   <th scope="col">Languages</th>
                   <th scope="col">Period</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th scope="row">1</th>
                   <td>HTML</td>
                   <td>2022.5~</td>
                 </tr>
                 <tr>
                   <th scope="row">2</th>
                   <td>CSS</td>
                   <td>2022.5~</td>
                 </tr>
                 <tr>
                   <th scope="row">4</th>
                   <td>JavaScript</td>
                   <td>2022.5~</td>
                 </tr>
                 <tr>
                   <th scope="row">5</th>
                   <td>PHP</td>
                   <td>2022.5~</td>
                 </tr>
                 <tr>
                   <th scope="row">6</th>
                   <td>Python</td>
                   <td>2023.1~</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
       </div>
    </section>
    

    <!-- Works section -->
    <section id="works" class="slide-from-left" data-section="2">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h1>WORKS</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- お問い合わせ senction
    <section id="Q&A" class="slide-from-right" data-section="3">
        <div class="container">
        <div class="main container-fluid">
            <div class="row bg-light text-dark py-5">
                <div class="col-md-8 offset-md-2">
                    <h2 class="fs-1 mb-5 text-center fw-bold">お問い合わせ</h2>
                    <form method="post" action="mail.php">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="お名前" placeholder="名前（必須）" value="">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="住所" placeholder="住所" value="">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="Email" placeholder="メールアドレス（必須）" value="">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="電話番号" placeholder="電話番号" value="">
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" name="お問い合わせ内容" rows="5" placeholder="メッセージを入力してください"></textarea>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                              利用規約に同意します。<a href="" target="_blank" rel="noopener noreferrer" class="text-decoration-underline text-dark">プライバシーポリシーはこちら</a>
                            </label>
                          </div>
                        <div class="text-center pt-4 col-md-6 offset-md-3">
                            <button type="submit" class="btn btn-primary">送信</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section> -->

    <!-- Footer -->
  <footer class="text-center text-white" style="background-color: black">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <div class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#introduce" class="text-white">INTRODUCE</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#skils" class="text-white">SKILS</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#works" class="text-white">WORKS</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <!-- <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#Q&A" class="text-white">Q&A</a>
            </h6>
          </div> -->
          <!-- Grid column -->

        </div>
        <!-- Grid row-->
      </div>
      <!-- Section: Links -->

      <hr class="my-5" />

      <!-- Section: Text -->
      <div class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti
              dicta, aliquam sequi voluptate quas.
            </p>
            <!-- Section: Social -->
            <a href="https://www.facebook.com/profile.php?id=100009458384967""><span class='bi bi-facebook btn-lg me-3' style='color: white'></span></a>
            <a href="https://twitter.com/a27879038"><span class='bi bi-twitter btn-lg me-3' style='color: white'></span></a>
            <a href="https://www.instagram.com/yoshio0716/"><span class='bi bi-instagram btn-lg me-3' style='color: white'></span></a>
            <a href="https://github.com/YoshioFujisaki""><span class='bi bi-github btn-lg me-3' style='color: white'></span></a>
          </div>
        </div>
      </div>
      <!-- Section: Text -->
      <p>Send an email to me&ensp;:&ensp;<span>a27879038@gmail.com</span></p>
      </div>
      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    </footer>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/portfolio.js"></script>
<?php get_footer(); ?>
