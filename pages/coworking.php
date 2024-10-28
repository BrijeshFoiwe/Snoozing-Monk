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
                    <h1>Coworking.</h1>
                    <p>
                    Snoozing Monk’s vibrant, beautifully designed open-plan coworking spaces bring a new dimension to your work style. 
                    Join a thriving community in our shared office environment. A place to collaborate, connect, and create new opportunities 
                    for your business alongside like-minded professionals.
                    </p>

                    <a href="" class="service-btn">Get in Touch</a>

                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img src="../assets/images/coworking-service.png" alt="">
                </div>

            </div>
        </section>


        <!-- Tabs -->
        <section class="monk-section">
            <div class="container">
                <h2>Customizable workspace tailored to your requirements.</h2>
                <div class="d-none d-lg-block">
                    <?php getCoworking(); ?>
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
                    <h2>We handle all your coworking needs.</h2>
                    <p>
                    When you book a hot desk for the day or rent a permanent desk in our coworking space, 
                    everything is fully serviced. Our dedicated support team ensures every detail is handled, allowing you to focus on your best work.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/coworking-needs.png" alt=""></div>
            </div>

            <!-- Layout 2 -->
            <div class="d-flex flex-column flex-lg-row-reverse  service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content-mid">
                    <h2>Coworking space in a location that fits your needs.</h2>
                    <p>
                    Thanks to our extensive global network of over 4,000 coworking spaces, you can work from virtually anywhere your business takes you. You'll easily find a convenient location nearby in every town, city,
                     and transportation hub, ensuring you always have a workspace when you need it.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/cowork-fits.png" alt=""></div>
            </div>
            <!-- Layout 3 -->
            <div class=" d-flex flex-column flex-lg-row service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content">
                    <h2>Coworking benefits businesses of all sizes.</h2>
                    <p>
                    Coworking spaces hold universal appeal for all types of businesses, whether you’re a solo startup or a global corporation with offices across five continents.
                     Our flexible coworking options are complemented by expert on-site support, including receptionists, IT assistance, cleaning, and security staff</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/coworking-benefits.png" alt=""></div>
            </div>
             <!-- Layout 4 -->
             <div class="d-flex flex-column flex-lg-row-reverse  service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content-mid">
                    <h2>Drop by whenever to utilize an office space.</h2>
                    <p>
                    For the ultimate flexibility, why not visit a nearby coworking space and use a desk whenever it suits you? Hot desking offers
                     a straightforward, cost-effective working solution, ideal for individuals who excel at building new business connections.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/desk-anytime.png" alt=""></div>
            </div>
              <!-- Layout 5 -->
              <div class=" d-flex flex-column flex-lg-row service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content">
                    <h2>Your own Dedicated Desk space designed just for you.</h2>
                    <p>
                    If having your own desk in a vibrant shared area appeals to you, consider our Dedicated Desk option. 
                    Dedicated Desk customers also have access to a locker for keeping equipment and personal items secure.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/dedicated-desk.png" alt=""></div>
            </div>
            <!-- Layout 6 -->
            <div class="d-flex flex-column flex-lg-row-reverse  service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content-mid">
                    <h2>Coworking can support and accelerate your business growth.</h2>
                    <p>
                    Our workspaces host a vibrant mix of businesses. Renting coworking space allows you to network with local entrepreneurs and business professionals while also connecting at our regular networking events. 
                    Join our global community of 8 million professionals and unlock new opportunities for your business today.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/business-cowork.png" alt=""></div>
            </div>  
        </section>

        <!-- Steps -->
        <!-- <section class="service-steps container">
            <div class="">
                <h2>Secure an office in three simple steps.</h2>
            </div>
            <div class="d-flex flex-column flex-lg-row align-items-start gap-4 pt-4">
                <div class="d-flex flex-column col justify-content-center align-items-start gap-2 ">
                    <h4>1. Select and customize your office space</h4>
                    <p>Here, you can select the location, determine the number of users, and decide on the layout that best fits their work style.</p>
                    <img src="/assets/images/step1.png" alt="">
                </div>
                <div class="d-flex flex-column col justify-content-center align-items-start gap-2">
                    <h4>2. Enhance and personalize it.</h4>
                    <p>Next, use our 'Design Your Office' service to customize your space. Alternatively, we can handle specifications for you.</p>
                    <img src="/assets/images/step2.png" alt="">
                </div>
                <div class="d-flex flex-column col justify-content-center align-items-start gap-2">
                    <h4>3. Simply sign up and get settled</h4>
                    <p>Once you sign your contract, you can start in your new space. Our experts will handle all details and last-minute adjustments.</p>
                    <img src="/assets/images/step3.png" alt="">
                </div>
            </div>
        </section> -->

          <!-- Logos -->
            <?php getCompanyLogo() ?>

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