<?php

function monkStyles()
{
?>
    <link rel="stylesheet" href="./assets/css/monk.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<?php
}

function getHeader()
{
?>
    <header class="monk-navbar">
        <nav>
            <div class="container py-3 ">
                <div class="navbar navbar-expand-lg justify-content-between">
                    <a href="/" class="logo">
                        <img src="./assets/images/SnoozingMonkLogo.svg" alt="logo" class="logo-img">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSnoozingMonk" aria-controls="navbarSnoozingMonk" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSnoozingMonk">
                        <ul class="navbar-nav ms-auto justify-content-center gap-3 ">
                            <li class="nav-item">
                                <a href="/office-space">Office Space</a>
                            </li>
                            <li class="nav-item">
                                <a href="/coworking">Coworking</a>
                            </li>
                            <li class="nav-item">
                                <a href="/virtual-office">Virtual Offices</a>
                            </li>
                            <li class="nav-item">
                                <a href="/meeting-rooms">Meeting Rooms</a>
                            </li>
                            <li class="nav-item">
                                <a href="/event-space">Event Space</a>
                            </li>
                            <li class="nav-item org-btn">
                                <a href="/contact-us">Contact us</a>
                            </li>
                            <!-- <li class="nav-item org-btn">
                                <a href="">+91-80-4200 7225</a>
                            </li> -->
                        </ul>
                    </div>

                </div>
            </div>
            </div>
        </nav>
    </header>
<?php
}

function getFooter()
{
?>
    <footer class="footer">
        <div class="container">
            <div class="footer-wrapper d-flex flex-column flex-md-row ">
                <div class="footer-img col col-lg-3 d-flex flex-column gap-2">
                    <img src="./assets/images/SnoozingMonkLogo.svg" alt="">
                    <p>Work to Derive & Channel the Benefits of Information Technology Through Innovations, Smart Solutions</p>
                    <div>
                        <h3>Social Media</h3>
                        <div class="d-flex gap-4">
                            <a class="social-icon" href=""><i class="bi bi-facebook"></i></a>
                            <a class="social-icon" href=""><i class="bi bi-linkedin"></i></a>
                            <a class="social-icon" href=""><i class="bi bi-twitter-x"></i></a>
                            <a class="social-icon" href=""><i class="bi bi-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column col col-lg-2">
                    <h3>About</h3>
                    <div class="footer-links d-flex flex-column gap-2">
                        <a href="">About Snoozing Monk</a>
                        <a href="">Careers</a>
                    </div>
                </div>
                <div class="d-flex flex-column col col-lg-2">
                    <h3>Support</h3>
                    <div class="footer-links d-flex flex-column gap-2">
                        <a href="">COVID-19</a>
                        <a href="">Need help?</a>
                        <a href="">Policies</a>

                    </div>
                </div>
                <div class="d-flex flex-column col col-lg-3">
                    <h3>Contact Us</h3>
                    <div class="footer-links d-flex flex-column gap-2">
                        <a href="">+91-80-4200 7225</a>
                        <a href="">sales@foiwe.com</a>
                        <a href="">186/2 Tapaswiji Arcade, BTM 1st Stage<br> Bengaluru, Karnataka, India, 560068</a>
                    </div>
                </div>
            </div>
            <div>
                <hr>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <p> &#169; Copyright 2024 -2025 SnoozingMonk </p>
            </div>
        </div>
    </footer>


<?php
}

// Office Space Tab 
function getOfficeSpaceTab()
{
?>
    <div class="image-card">
        <p>Our adaptable, fully customizable office rentals are available hourly, daily, or for any duration you require.</p>
        <div class="d-flex justify-content-between gap-2">
            <div class="card">
                <img src="./assets/images/Private-office.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Private offices</h5>
                    <p class="card-text">A variety of fully equipped, ready-to-use offices with all essentials for getting started.</p>
                    <a href="#" class="image-card-btn">Enquire Now</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/custom-offices.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Custom Offices</h5>
                    <p class="card-text">When standard options fall short, customize every detail of your space, from furniture to branding.</p>
                    <a href="#" class="image-card-btn">Enquire Now</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/day-office.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Day Offices</h5>
                    <p class="card-text">A professional office space on demand. Ideal when you need to focus and do your best work.</p>
                    <a href="#" class="image-card-btn">Enquire Now</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/office-membership.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Office Membership</h5>
                    <p class="card-text">Enjoy flexible access to Day Offices whenever you like, within this building.</p>
                    <a href="#" class="image-card-btn">Enquire Now</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/support.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Need some assistance?</h5>
                    <p class="card-text">Looking for assistance? Our team is here to help you with any questions or concerns.</p>
                    <a href="#" class="image-card-btn">Talk to an Expert</a>
                </div>
            </div>
        </div>
    </div>
<?php
}

function getCoworking(){
    ?>
        <div class="image-card">
                <p>Book a hot desk for the day or secure a Dedicated Desk within the building.</p>
                <div class="d-flex justify-content-start gap-2">
                  <div class="card">
                    <img src="./assets/images/reserved-workspace.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Reserved Workspace</h5>
                      <p class="card-text">Reserve desks as needed in a vibrant shared workspace. Includes a business address and storage.</p>
                      <a href="#" class="image-card-btn">Enquire Now</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./assets/images/daily-coworking.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Daily Coworking</h5>
                      <p class="card-text">Get on-demand access to inspiring coworking spaces, ensuring a desk is available when you need it.</p>
                      <a href="#" class="image-card-btn">Enquire Now</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./assets/images/coworking-pass.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Coworking Pass</h5>
                      <p class="card-text">Looking to hot desk more often? Rent a desk for 5, 10, or unlimited days per month.</p>
                      <a href="#" class="image-card-btn">Enquire Now</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./assets/images/support.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Need some assistance?</h5>
                    <p class="card-text">Looking for assistance? Our team is here to help you with any questions or concerns.</p>
                    <a href="#" class="image-card-btn">Talk to an Expert</a>
                     </div>
                    </div>
                </div>
              </div>
    <?php
}
function getVirtualOffice(){
    ?>
        <div class="image-card">
                <p>Whether you need a virtual presence or a physical space, we offer a package to fit your business needs.</p>
                <div class="d-flex justify-content-start gap-2">
                  <div class="card">
                    <img src="./assets/images/address.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Professional Address</h5>
                      <p class="card-text">Establish your business and enhance credibility with a virtual address at our location.</p>
                      <a href="#" class="image-card-btn">Enquire Now</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./assets/images/Virtual-office.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Virtual Office</h5>
                      <p class="card-text">A reputable address with call answering, virtual reception, and business lounge access.</p>
                      <a href="#" class="image-card-btn">Enquire Now</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./assets/images/virtual-office-meeting.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Virtual Office Plus</h5>
                      <p class="card-text">Includes all Virtual Office features, plus meeting rooms and five days of office access monthly.</p>
                      <a href="#" class="image-card-btn">Enquire Now</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./assets/images/support.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Need some assistance?</h5>
                    <p class="card-text">Looking for assistance? Our team is here to help you with any questions or concerns.</p>
                    <a href="#" class="image-card-btn">Talk to an Expert</a>
                     </div>
                    </div>
                 </div>
              </div>
    <?php
}

function getMeetingRoom(){
    ?>
         <div class="image-card">
                <p>Meeting rooms tailored for any purpose, available worldwide. Book by the hour, the day, or for as long as needed.</p>
                <div class="d-flex justify-content-between gap-2">
                  <div class="card">
                    <img src="./assets/images/meeting-rooms-tab.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Meeting Rooms</h5>
                      <p class="card-text">Ideal spaces for meetings, collaboration, and interviews. Book hourly, support available.</p>
                      <a href="#" class="image-card-btn">Enquire Now</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./assets/images/interview-room-tab.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Interview rooms</h5>
                      <p class="card-text">Private, professional spaces perfect for interviews, appraisals, or research groups.</p>
                      <a href="#" class="image-card-btn">Enquire Now</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./assets/images/Training-room-tab.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Training Room</h5>
                      <p class="card-text">Ideal for training sessions with dedicated space, desks, whiteboards, and screens.</p>
                      <a href="#" class="image-card-btn">Enquire Now</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./assets/images/Boardroom-tab.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Boardrooms</h5>
                      <p class="card-text">A professional boardroom available on-demand. Ideal for focused meetings and work.</p>
                      <a href="#" class="image-card-btn">Enquire Now</a>
                    </div>
                  </div>
                  <div class="card">
                    <img src="./assets/images/support.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Need some assistance?</h5>
                    <p class="card-text">Looking for assistance? Our team is here to help you with any questions or concerns.</p>
                    <a href="#" class="image-card-btn">Talk to an Expert</a>
                     </div>
                    </div>
                 </div>
                </div>
              </div>
    <?php
}

function getOfficeSpaceMobileCarousel()
{
?>
    <div id="monkCarousel" class="carousel slide d-block d-lg-none" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- First carousel item -->
            <div class="carousel-item active">
                <div class="row ">
                    <!-- First card (Visible on all screen sizes) -->
                    <div class="col-12 col-md-6">
                        <div class="image-card">
                            <div class="card">
                                <img src="./assets/images/Office_Space_Card_Stacked_1.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 1</h5>
                                    <p class="card-text">Some quick example text for the first card.</p>
                                    <a href="#" class="image-card-btn">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Second card (Only visible on medium screens and above) -->
                    <div class="col-md-6 d-none d-md-block">
                        <div class="image-card">
                            <div class="card">
                                <img src="./assets/images/Office_Space_Card_Stacked_1.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 2</h5>
                                    <p class="card-text">Some quick example text for the second card.</p>
                                    <a href="#" class="image-card-btn">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second carousel item -->
            <div class="carousel-item">
                <div class="row">
                    <!-- Third card (Visible on all screen sizes) -->
                    <div class="col-12 col-md-6">
                        <div class="image-card">
                            <div class="card">
                                <img src="./assets/images/Office_Space_Card_Stacked_1.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 3</h5>
                                    <p class="card-text">Some quick example text for the third card.</p>
                                    <a href="#" class="image-card-btn">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fourth card (Only visible on medium screens and above) -->
                    <div class="col-md-6 d-none d-md-block">
                        <div class="image-card">
                            <div class="card">
                                <img src="./assets/images/Office_Space_Card_Stacked_1.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title 4</h5>
                                    <p class="card-text">Some quick example text for the fourth card.</p>
                                    <a href="#" class="image-card-btn">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#monkCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#monkCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php
}

function getCompanyLogo(){
    ?>
      <section class="container company-logo">
      <h2>We host the best in our spaces.</h2>
      <!-- Desktop logos -->
      <div class="row d-none d-md-flex row-cols-3 row-cols-lg-6">
        <div class="col logo-grid-item"><img src="./assets/images/foiwe.png" alt=""></div>
        <div class="col logo-grid-item"><img src="./assets/images/carzippi.png" alt=""></div>
        <div class="col logo-grid-item"><img src="./assets/images/graphene.png" alt=""></div>
        <div class="col logo-grid-item"><img src="./assets/images/proflakes.png" alt=""></div>
        <div class="col logo-grid-item"><img src="./assets/images/verbiden.png" alt=""></div>
        <div class="col logo-grid-item"><img src="./assets/images/hvpl.png" alt=""></div>
      </div>
      <!-- Mobile Logos -->
      <div id="monkLogoCarousel" class="carousel slide d-block d-md-none">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex mobile-logo align-items-center justify-content-center">
              <div class="col logo-grid-item"><img src="./assets/images/MicrosoftLogo.webp" alt=""></div>
              <div class="col logo-grid-item"><img src="./assets/images/MicrosoftLogo.webp" alt=""></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex mobile-logo align-items-center justify-content-center">
              <div class="col logo-grid-item"><img src="./assets/images/MicrosoftLogo.webp" alt=""></div>
              <div class="col logo-grid-item"><img src="./assets/images/MicrosoftLogo.webp" alt=""></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex mobile-logo align-items-center justify-content-center">
              <div class="col logo-grid-item"><img src="./assets/images/MicrosoftLogo.webp" alt=""></div>
              <div class="col logo-grid-item"><img src="./assets/images/MicrosoftLogo.webp" alt=""></div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#monkLogoCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#monkLogoCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <?php
}