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
                                <a href="">Coworking</a>
                            </li>
                            <li class="nav-item">
                                <a href="">Virtual Offices</a>
                            </li>
                            <li class="nav-item">
                                <a href="">Meeting Rooms</a>
                            </li>
                            <li class="nav-item">
                                <a href="">Event Space</a>
                            </li>
                            <li class="nav-item org-btn">
                                <a href="">Contact us</a>
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
        <p>Our flexible, fully-customisable office rentals are available by the hour, day, or as long as you need.</p>
        <div class="d-flex justify-content-between gap-3">
            <div class="card">
                <img src="./assets/images/Office_Space_Card_Stacked_1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="image-card-btn">Learn More</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/Office_Space_Card_Stacked_1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="image-card-btn">Learn More</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/Office_Space_Card_Stacked_1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="image-card-btn">Learn More</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/Office_Space_Card_Stacked_1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="image-card-btn">Learn More</a>
                </div>
            </div>
            <div class="card">
                <img src="./assets/images/Office_Space_Card_Stacked_1.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="image-card-btn">Learn More</a>
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
                                    <a href="#" class="image-card-btn">Learn More</a>
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
                                    <a href="#" class="image-card-btn">Learn More</a>
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
                                    <a href="#" class="image-card-btn">Learn More</a>
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
                                    <a href="#" class="image-card-btn">Learn More</a>
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
