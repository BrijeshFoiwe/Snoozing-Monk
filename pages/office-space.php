<?php
require_once "../mail_handler.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php monkStyles(); ?>
    <title>Office Space</title>
</head>

<body>
    <?php getHeader(); ?>
    <main>
        <section class="service-banner">
            <div class="container d-flex flex-column flex-lg-row justify-content-between service-banner-section">
                <div class="col d-flex flex-column justify-content-center gap-4 align-items-start">
                    <h1>Office Space.</h1>
                    <p>
                        If you’re looking for beautifully-designed office space for rent, ours are suitable for any size of team and come fully serviced.
                        So you can concentrate on growing your business distraction-free.
                        Whether you need something for the short term, longer term or want to take a flexible approach,
                        we’ve got an office space rental solution to suit you.
                    </p>

                    <a href="" class="service-btn">Get in Touch</a>

                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img src="../assets/images/Office_Space_Hero.webp" alt="">
                </div>

            </div>
        </section>


        <!-- Tabs -->
        <section class="monk-section">
            <div class="container">
                <h2>Flexible workspace designed around your needs</h2>
                <div class="d-none d-lg-block">
                    <?php getOfficeSpaceTab(); ?>
                </div>
                <!-- Mobile Carousel -->
                <?php getOfficeSpaceMobileCarousel() ?>
            </div>
        </section>


        <!-- Service Layouts -->
        <section class="service-monk-layout container ">
            <!-- Layout 1 -->
            <div class=" d-flex flex-column flex-lg-row service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content">
                    <h2>Our office space rental includes so much more.</h2>
                    <p>
                        Regus office space comes with everything you need to hit the ground running.
                        From ergonomic furniture to support services.
                        And you even get access to break-out areas and our global network of business lounges.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/Office_Space_Image_with_Description_1.webp" alt=""></div>
            </div>

            <!-- Layout 2 -->
            <div class="d-flex flex-column flex-lg-row-reverse  service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content-mid">
                    <h2>Our office space rental includes so much more.</h2>
                    <p>
                        Regus office space comes with everything you need to hit the ground running.
                        From ergonomic furniture to support services.
                        And you even get access to break-out areas and our global network of business lounges.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/Office_Space_Image_with_Description_1.webp" alt=""></div>
            </div>
            <!-- Layout 3 -->
            <div class=" d-flex flex-column flex-lg-row service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content">
                    <h2>Our office space rental includes so much more.</h2>
                    <p>
                        Regus office space comes with everything you need to hit the ground running.
                        From ergonomic furniture to support services.
                        And you even get access to break-out areas and our global network of business lounges.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/Office_Space_Image_with_Description_1.webp" alt=""></div>
            </div>
        </section>

        <!-- Steps -->
        <section class="service-steps container">
            <div class="">
                <h2>Rent an office in 3 easy steps.</h2>
            </div>
            <div class="d-flex flex-column flex-lg-row align-items-start gap-4 pt-4">
                <div class="d-flex flex-column justify-content-center align-items-start gap-2 ">
                    <h4>1. Choose and configure your office space</h4>
                    <p>Here's where you get to choose the location, the number of people who can use the space, and what sort of layout would best suit the way they work.</p>
                    <img src="/assets/images/Office_Space_Pricing_Step_1.webp" alt="">
                </div>
                <div class="d-flex flex-column  justify-content-center align-items-start gap-2">
                    <h4>1. Choose and configure your office space</h4>
                    <p>Here's where you get to choose the location, the number of people who can use the space, and what sort of layout would best suit the way they work.</p>
                    <img src="/assets/images/Office_Space_Pricing_Step_1.webp" alt="">
                </div>
                <div class="d-flex flex-column  justify-content-center align-items-start gap-2">
                    <h4>1. Choose and configure your office space</h4>
                    <p>Here's where you get to choose the location, the number of people who can use the space, and what sort of layout would best suit the way they work.</p>
                    <img src="/assets/images/Office_Space_Pricing_Step_1.webp" alt="">
                </div>
            </div>
        </section>

        <!-- Last Service Layout -->
        <section class="service-monk-layout container ">
            <!-- Layout 2 -->
            <div class="d-flex flex-column flex-lg-row-reverse  service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content-mid">
                    <h2>Our office space rental includes so much more.</h2>
                    <p>
                        Regus office space comes with everything you need to hit the ground running.
                        From ergonomic furniture to support services.
                        And you even get access to break-out areas and our global network of business lounges.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/Office_Space_Image_with_Description_1.webp" alt=""></div>
            </div>
        </section>

        <!-- Faq -->
        <section class="services-faq container">
            <div class="d-flex flex-column flex-lg-row justify-content-start gap-5 services-faq-wrapper">
                <div class="col col-lg-4">
                    <h2>Have a question about renting office space.</h2>
                    <p>Can’t see an answer to your question? Get in touch with our team, who are always happy to help.</p>
                </div>
                <div class="col">
                    <div class="accordion" id="officeSpaceFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#officeSpaceFaq">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#officeSpaceFaq">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#officeSpaceFaq">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Accordion Item #4
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#officeSpaceFaq">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Accordion Item #5
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#officeSpaceFaq">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
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