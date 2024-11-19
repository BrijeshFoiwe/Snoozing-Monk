<?php
require_once "../mail_handler.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php monkStyles(); ?>
    <title>Meeting Rooms</title>
</head>

<body>
    <?php getHeader(); ?>
    <main>
        <section class="service-banner">
            <div class="container d-flex flex-column flex-lg-row justify-content-between service-banner-section">
                <div class="col d-flex flex-column justify-content-center gap-4 align-items-start">
                    <h1>Event Space.</h1>
                    <p>
                    There are countless reasons you might need a place to meet. Fortunately, we offer a diverse selection of over 2 meeting rooms, ranging from small spaces to boardrooms and large conference facilities. 
                    You can book the meeting room you need for as long as necessary, all in just a matter of minutes
                    </p>

                    <a href="" class="service-btn">Get in Touch</a>

                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <img src="../assets/images/Event Space.webp" alt="">
                </div>

            </div>
        </section>

        <!-- Quote -->
         <section class="container">
            <h2 class="text-center lh-sm">We’ll assist you in organizing a memorable private or corporate event, from choosing the ideal venue to offering all the necessary support. </h2>
         </section>

        <!-- Service Layouts -->
        <section class="service-monk-layout container ">
            <!-- Layout 1 -->
            <div class=" d-flex flex-column flex-lg-row service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content">
                    <h2>Organize any type of event, anytime, anywhere.</h2>
                    <p>
                    There are many reasons to hold a private or corporate event, whether it's to celebrate your team's 
                    achievements or to host networking events for business growth. No matter the occasion, we’re here to help you organize your event with style.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/organize-any-event.webp" alt=""></div>
            </div>

            <!-- Layout 2 -->
            <div class="d-flex flex-column flex-lg-row-reverse  service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content-mid">
                    <h2>From any occasion to every gathering, we have the space.</h2>
                    <p>
                    Whether it’s a team celebration, a training session, or a client meeting, we provide tailored spaces designed for every type of event.
                     Our locations are fully equipped and supported by on-site staff to ensure your event runs smoothly, with options to customize the layout and amenities based on your specific requirements.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/occasion.webp" alt=""></div>
            </div>
            <!-- Layout 3 -->
            <div class=" d-flex flex-column flex-lg-row service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content">
                    <h2>Backed by dedicated on-site support staff.</h2>
                    <p>
                    Simply let us know your event requirements, and our team will manage all the preparations, from setup to any last-minute details. With everything handled,
                     you can focus on connecting with your guests and creating a memorable experience for everyone attending.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/requirements.webp" alt=""></div>
            </div>
               <!-- Layout 4 -->
               <div class="d-flex flex-column flex-lg-row-reverse  service-monk-layout-wrapper">
                <div class="col d-flex flex-column justify-content-center  service-monk-content-mid">
                    <h2>Let us take care of your entire event.</h2>
                    <p>
                    If you'd prefer to leave the event management in capable hands, we’re here to assist. From meticulous planning and ticket allocation to organizing travel and accommodation for your guests,
                     we’ll take care of every detail, ensuring your event runs flawlessly and stress-free.</p>
                </div>
                <div class="col d-flex justify-content-center align-items-center"><img src="../assets/images/takecare.webp" alt=""></div>
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