<?php
include 'common/header.php';
?>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container">

        <?php
         include 'common/menu.php';
        ?>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">直播卖货</span></h2>
          <p class="animate__animated animate__fadeInUp">直播带货，是直播娱乐行业在直播的同时带货，其形式在不断变化，出现直播带货的原因是电商的兴起，引起一些娱乐行业的人跟进所致及演化而来.</p>
<!--          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>-->
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">仓库管理</h2>
          <p class="animate__animated animate__fadeInUp">仓库管理是对仓储货物的收发、结存等活动的有效控制，其目的是为企业保证仓储货物的完好无损，确保生产经营活动的正常进行，并在此基础上对各类货物的活动状况进行分类记录，以明确的图表方式表达仓储货物在数量、品质方面的状况，以及所在的地理位置、部门、订单归属和仓储分散程度等情况的综合管理形式.</p>
<!--          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>-->
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">生产管理</h2>
          <p class="animate__animated animate__fadeInUp">生产管理是计划、组织、协调、控制生产活动的综合管理活动。内容包括生产计划、生产组织以及生产控制。通过合理组织生产过程，有效利用生产资源，经济合理地进行生产活动，以达到预期的生产目标.</p>
<!--          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>-->
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
      <?php
      include 'common/Services.php';
      ?>
    <!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
<!--    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">-->
<!--      <div class="container">-->
<!---->
<!--        <div class="row">-->
<!--          <div class="col-lg-6 video-box">-->
<!--            <img src="assets/img/why-us.jpg" class="img-fluid" alt="">-->
<!--            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>-->
<!--          </div>-->
<!---->
<!--          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">-->
<!---->
<!--            <div class="icon-box">-->
<!--              <div class="icon"><i class="bx bx-fingerprint"></i></div>-->
<!--              <h4 class="title"><a href="">Lorem Ipsum</a></h4>-->
<!--              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>-->
<!--            </div>-->
<!---->
<!--            <div class="icon-box">-->
<!--              <div class="icon"><i class="bx bx-gift"></i></div>-->
<!--              <h4 class="title"><a href="">Nemo Enim</a></h4>-->
<!--              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>-->
<!--            </div>-->
<!---->
<!--          </div>-->
<!--        </div>-->
<!---->
<!--      </div>-->
<!--    </section>-->
      <!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>功能</h2>
          <p>定制画生产管理</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/artowrkProduce.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <ul>
              <li><i class="icofont-check"></i> 设计管理</li>
                <li><i class="icofont-check"></i>商品管理</li>
                <li><i class="icofont-check"></i>订单管理</li>
                <li><i class="icofont-check"></i>生产管理</li>
                <li><i class="icofont-check"></i>发货管理</li>
                <li><i class="icofont-check"></i>库存管理</li>
                <li><i class="icofont-check"></i>统计管理</li>
                <li><i class="icofont-check"></i>系统设置</li>
            </ul>
          </div>
        </div>


<!--        <div class="row" data-aos="fade-up">-->
<!--          <div class="col-md-5 order-1 order-md-2">-->
<!--            <img src="assets/img/features-2.svg" class="img-fluid" alt="">-->
<!--          </div>-->
<!--          <div class="col-md-7 pt-5 order-2 order-md-1">-->
<!--            <h3>Corporis temporibus maiores provident</h3>-->
<!--            <p class="font-italic">-->
<!--              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore-->
<!--              magna aliqua.-->
<!--            </p>-->
<!--            <p>-->
<!--              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate-->
<!--              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in-->
<!--              culpa qui officia deserunt mollit anim id est laborum-->
<!--            </p>-->
<!--          </div>-->
<!--        </div>-->
<!---->
<!--        <div class="row" data-aos="fade-up">-->
<!--          <div class="col-md-5">-->
<!--            <img src="assets/img/features-3.svg" class="img-fluid" alt="">-->
<!--          </div>-->
<!--          <div class="col-md-7 pt-5">-->
<!--            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>-->
<!--            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>-->
<!--            <ul>-->
<!--              <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>-->
<!--              <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>-->
<!--              <li><i class="icofont-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>-->
<!--            </ul>-->
<!--          </div>-->
<!--        </div>-->
<!---->
<!--        <div class="row" data-aos="fade-up">-->
<!--          <div class="col-md-5 order-1 order-md-2">-->
<!--            <img src="assets/img/features-4.svg" class="img-fluid" alt="">-->
<!--          </div>-->
<!--          <div class="col-md-7 pt-5 order-2 order-md-1">-->
<!--            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>-->
<!--            <p class="font-italic">-->
<!--              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore-->
<!--              magna aliqua.-->
<!--            </p>-->
<!--            <p>-->
<!--              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate-->
<!--              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in-->
<!--              culpa qui officia deserunt mollit anim id est laborum-->
<!--            </p>-->
<!--          </div>-->
<!--        </div>-->

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include 'common/footer.php';
  ?>
  <!-- End Footer -->

</body>

</html>