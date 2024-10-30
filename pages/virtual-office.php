<?php
require_once "../mail_handler.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php monkStyles(); ?>
    <title>Virtual Offices</title>
</head>

<body>
    <?php getHeader(); ?>
    <main>
        <section class="service-banner">
            <div class="container d-flex flex-column flex-lg-row justify-content-between service-banner-section">
                <div class="col d-flex flex-column justify-content-center gap-4 align-items-start">
                    <h1>Virtual Offices.</h1>
                    <p>
                    A virtual office gives your business a professional address at our building, allowing you to establish a presence without the expense of a full-time office. 
                    We’ll manage your mail, forward it, and answer your calls. Plus, you can easily book a meeting room or office whenever you’re on-site.
                    </p>

                    <a href="" class="service-btn">Get in Touch</a>

                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img src="../assets/images/Virtual-office-banner.png" alt="">
                </div>

            </div>
        </section>


        <!-- Tabs -->
        <section class="monk-section">
            <div class="container">
                <h2>Customizable workspace tailored to your requirements.</h2>
                <div class="d-none d-lg-block">
                    <?php getVirtualOffice(); ?>
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
                    <h2>Strengthen your business image with a virtual office address.</h2>
                    <p>
                    Sometimes, a dedicated office isn't necessary, yet a professional presence is still essential for your business at an office address. This is where a virtual office proves invaluable. It enables you to establish a business in any city, whether at home or abroad, 
                    offering a virtual office address and workspace access as needed—without the complexities of renting and managing a dedicated office space.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/Strengthen-buisiness.png" alt=""></div>
            </div>

            <!-- Layout 2 -->
            <div class="d-flex flex-column flex-lg-row-reverse  service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content-mid">
                    <h2>The advantages of a virtual office.</h2>
                    <p>
                    A virtual office offers more than a mailing address. It serves as a foundation for your business in a recognized location, complete with professional staff, workspace, and amenities. 
                    It's a quick, cost-efficient way to establish trust and credibility with customers and stakeholders, allowing you to elevate your business to new heights.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/advantage-virtual-office.png" alt=""></div>
            </div>
            <!-- Layout 3 -->
            <div class=" d-flex flex-column flex-lg-row service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content">
                    <h2>Who can benefit from a virtual office?</h2>
                    <p>
                    A virtual office offers a wide range of substantial advantages for businesses at every size and stage of development, 
                    benefiting everyone from solo entrepreneurs starting out to large multinational corporations with a robust global presence.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/virtual-included.png" alt=""></div>
            </div>
             <!-- Layout 4 -->
             <div class="d-flex flex-column flex-lg-row-reverse  service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content-mid">
                    <h2>What’s included in a virtual office from Snoozing Monk?</h2>
                    <p>
                    A virtual office from Snoozing Monk includes a prestigious business address and professional telephone answering services. You’ll have access to meeting rooms and workspaces as needed, along with mail handling and forwarding. Enjoy the flexibility of our global network of business lounges for a professional environment.
                     This comprehensive package elevates your business presence while minimizing costs.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/virtual-support.png" alt=""></div>
            </div>
              <!-- Layout 5 -->
              <div class=" d-flex flex-column flex-lg-row service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content">
                    <h2>It all begins with a business address.</h2>
                    <p>
                    No matter your identity or location, a virtual office offers genuine benefits. If you simply need a business address to operate, 
                    we provide a prestigious address within our building to enhance your professional image.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/buisiness address.png" alt=""></div>
            </div>
            <!-- Layout 6 -->
            <div class="d-flex flex-column flex-lg-row-reverse  service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content-mid">
                    <h2>Our virtual offices are designed to be flexible and tailored to your needs.</h2>
                    <p>
                    No matter where your company aims to expand, we’ll have a virtual office ready for you. You can relocate your virtual office at any time and establish multiple virtual offices across different countries and cities, 
                    with potential savings based on the number you open. Contact our team to help create a customized package that suits your needs.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/virtual-tailored.png" alt=""></div>
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