<?php
require_once "./mail_handler.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php monkStyles(); ?>
  <title>SnoozingMonk</title>
</head>

<body>
  <?php getHeader(); ?>
  <main>
    <!-- Banner -->
    <section class=" py-0 home-banner">
      <div class="home-container d-flex justify-content-center ">
        <div class="d-flex flex-column align-items-center justify-content-center gap-0 ">
          <p>Find the perfect workspace tailored to fit your needs and style.</p>
          <h1>Workspace tailored to you.</h1>
        </div>
      </div>
    </section>

    <!-- Cards -->
    <!-- <section class="container mt-5 py-0">
      <div class="d-flex flex-wrap flex-lg-nowrap  card-wrapper justify-content-center align-items-center gap-2 gap-lg-4">
        <a href="" class="card-container col col-md-5 col-lg">
          <img class="card-icon" src="./assets/images/our-offerings.svg" alt="">
          <h3>Our Offerings</h3>
          <p>Discover innovative options tailored to your business needs</p>
        </a>
        <a href="" class="card-container col col-md-5 col-lg">
          <img class="card-icon" src="./assets/images/connect-with-us.svg" alt="">
          <h3>Connect with Us</h3>
          <p>Reach out for personalized assistance and guidance today</p>
        </a>
        <a href="" class="card-container col col-md-5 col-lg">
          <img class="card-icon" src="./assets/images/reserve-workspace.svg" alt="">
          <h3>Reserve Workspace</h3>
          <p>Reserve your ideal workspace for productive work sessions</p>
        </a>
        <a href="" class="card-container col col-md-5 col-lg">
          <img class="card-icon" src="./assets/images/virtual-office.svg" alt="">
          <h3>Create a Virtual Office</h3>
          <p>Establish a professional presence without physical office space</p>
        </a>
        <a href="" class="card-container col col-md-5 col-lg">
          <img class="card-icon" src="./assets/images/purchase-membership.svg" alt="">
          <h3>Purchase a Membership</h3>
          <p>Join our community for exclusive benefits and access</p>
        </a>
      </div>
    </section> -->

    <!-- Tabs -->
    <section class="monk-section">
      <div class="container">
        <h2>Customizable workspace tailored to your requirements.</h2>
        <!-- Desktop tab -->
        <div class="monk-tab d-none d-lg-block">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="office-space-tab" data-bs-toggle="tab" data-bs-target="#office-space" type="button" role="tab" aria-controls="office-space" aria-selected="true">Office Space</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="cowork-tab" data-bs-toggle="tab" data-bs-target="#coworking" type="button" role="tab" aria-controls="coworking" aria-selected="false">Coworking</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="virtual-office-tab" data-bs-toggle="tab" data-bs-target="#virtual-offices" type="button" role="tab" aria-controls="virtual-offices" aria-selected="false">Virtual Offices</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="meeting-tab" data-bs-toggle="tab" data-bs-target="#meeting-room" type="button" role="tab" aria-controls="meeting-room" aria-selected="false">Meeting Rooms</button>
            </li>

          </ul>
          <div class="tab-content" id="myTabContent">
            <!-- Tab1 -->
            <div class="tab-pane fade show active" id="office-space" role="tabpanel" aria-labelledby="office-space-tab" tabindex="0">
              <?php getOfficeSpaceTab(); ?>
            </div>
            <!-- Tab2 -->
            <div class="tab-pane fade" id="coworking" role="tabpanel" aria-labelledby="cowork-tab" tabindex="0">
              <?php getCoworking() ?>
            </div>
            <!-- Tab3 -->
            <div class="tab-pane fade" id="virtual-offices" role="tabpanel" aria-labelledby="virtual-office-tab" tabindex="0">
              <?php getVirtualOffice() ?>
            </div>
            <!-- Tab4 -->
            <div class="tab-pane fade" id="meeting-room" role="tabpanel" aria-labelledby="meeting-tab" tabindex="0">
             <?php getMeetingRoom() ?>
            </div>
          </div>
        </div>

        <!-- Mobile Carousel -->
        <?php getOfficeSpaceMobileCarousel() ?>



      </div>
    </section>



    <!-- Layouts -->
    <section class="container">
      <!-- layout 1 -->
      <div class="monk-layout row gap-4 gap-md-0">
        <div class="col-12 col-lg d-flex justify-content-center">
          <div class="monk-layout-image">
            <img src="./assets/images/Workcation.webp" alt="">
          </div>
        </div>
        <div class="col-12 col-md d-flex flex-column justify-content-center align-items-start">
          <div class="monk-layout-content ">
            <h2>Work at comfort from a Workcation locaiton.</h2>
            <p>Enjoy the comfort of working from a beautiful workcation location, combining productivity with relaxation. 
              Embrace a change of scenery while maintaining your workflow.</p>
            <a href="">Talk to Expert</a>
          </div>
        </div>
      </div>

      <!-- layout 2 -->
      <div class="monk-layout row flex-column-reverse flex-lg-row p-0  gap-4 gap-md-0">
        <div class="col-12 col-lg d-flex flex-column justify-content-center align-items-start">
          <div class="monk-layout-content-mid">
            <h2>If your needs evolve, we adapt.</h2>
            <p>If your needs evolve, we adapt to ensure your workspace remains aligned with your goals. Our flexible options allow for adjustments 
              as your business or personal requirements change, keeping your experience seamless and tailored.</p>
            <a href="">Talk to Expert</a>
          </div>
        </div>
        <div class="col-12 col-md d-flex justify-content-center">
          <div class="monk-layout-image">
            <img src="./assets/images/adapt.png" alt="">
          </div>
        </div>
      </div>

      <!-- layout 3 -->
      <div class="monk-layout row  gap-4 gap-md-0">
        <div class="col-12 col-lg d-flex justify-content-center">
          <div class="monk-layout-image">
            <img src="./assets/images/Hybrid.png" alt="">
          </div>
        </div>
        <div class="col-12 col-md d-flex flex-column justify-content-center align-items-start">
          <div class="monk-layout-content ">
            <h2>Make hybrid working work for you.</h2>
            <p>Embrace the flexibility of hybrid working, designed to fit your unique lifestyle and professional needs. With a blend of in-office and remote options, 
              hybrid work empowers you to balance productivity and personal time, fostering both efficiency and well-being.</p>
            <a href="">Talk to Expert</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Logos -->
    <?php getCompanyLogo() ?>

    <!-- Contact US -->
    <section class="contact-section">
      <div class="container">
        <div class="Get-in-touch">
          <div class="row d-flex flex-column flex-lg-row justify-content-center align-items-center gap-4 gap-md-0">
            <div class="col">
              <h2 class="text-center text-lg-start">Ready to Create a Safer
                Online Community? </h2>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
              <a href=""> Get in Touch</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php getFooter(); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>