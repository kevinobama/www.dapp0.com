<?php
include 'common/header.php';
?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container">

        <?php
        include 'common/menu.php';
        ?>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>我们的成功案例</h2>
          <ol>
            <li><a href="index.php">首页</a></li>
            <li>我们的成功案例</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
<!--              <li data-filter=".filter-card">Card</li>-->
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/artowrkProduce.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/artowrkProduce.png" data-gall="portfolioGallery" class="venobox" title="Web 1">agent.meioudi.com</a></h3>
                <div>
                  <a href="assets/img/artowrkProduce.png" data-gall="portfolioGallery" class="venobox" title="Web 1"><i class="bx bx-plus"></i></a>
<!--                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>-->
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/agent.sign4x.com.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/agent.sign4x.com.png" data-gall="portfolioGallery" class="venobox" title="Web 2">agent.sign4x.com</a></h3>
                <div>
                  <a href="assets/img/portfolio/agent.sign4x.com.png" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/vault.plusdebit.com.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/vault.plusdebit.com.png" data-gall="portfolioGallery" class="venobox" title="plusdebit">plusdebit</a></h3>
                <div>
                  <a href="assets/img/portfolio/vault.plusdebit.com.png" data-gall="portfolioGallery" class="venobox" title="plusdebit"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>

            <div class="col-lg-4 col-md-6 filter-web">
                <div class="portfolio-item">
                    <img src="assets/img/portfolio/www.wall26.com.png" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h3><a href="assets/img/portfolio/www.wall26.com.png" data-gall="portfolioGallery" class="venobox" title="www.wall26.com">www.wall26.com</a></h3>
                        <div>
                            <a href="assets/img/portfolio/www.wall26.com.png" data-gall="portfolioGallery" class="venobox" title="www.wall26.com"><i class="bx bx-plus"></i></a>

                        </div>
                    </div>
                </div>
            </div>
<!---->
<!--          <div class="col-lg-4 col-md-6 filter-web">-->
<!--            <div class="portfolio-item">-->
<!--              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">-->
<!--              <div class="portfolio-info">-->
<!--                <h3><a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2">Web 2</a></h3>-->
<!--                <div>-->
<!--                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>-->
<!--                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!---->
<!--          <div class="col-lg-4 col-md-6 filter-web">-->
<!--            <div class="portfolio-item">-->
<!--              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">-->
<!--              <div class="portfolio-info">-->
<!--                <h3><a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3">App 3</a></h3>-->
<!--                <div>-->
<!--                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>-->
<!--                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->


        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php
  include 'common/footer.php';
  ?>

</body>

</html>