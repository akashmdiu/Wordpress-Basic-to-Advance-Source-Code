<?php
/*
Template Name: Contact Page
*/
get_header(); ?>
<!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Contact</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay=".3s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.3s; animation-name: fadeInDown;">Contact With Me</h2>
                    <p class="subtitle-des wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay=".5s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.5s; animation-name: fadeInDown;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea!
                        consectetur adipisicing elit. Dolore, ea!
                    </p>
                    <div class="contact-form">
                        <?php echo do_shortcode( '[contact-form-7 id="9" title="Contact form"]' ); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay=".3s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.3s; animation-name: fadeInDown;">Find Us</h2>
                    <p class="subtitle-des wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay=".5s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.5s; animation-name: fadeInDown;">
                        Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi.

                    </p>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.277552998015!2d90.3678744!3d23.773128800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sShishu+Mela!5e0!3m2!1sen!2s!4v1435516022247" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>

                    </div>
                </div>
            </div>
        </div>
        <div class="row address-details">
            <div class="col-md-3">
                <div class="address wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay=".3s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.3s; animation-name: fadeInLeft;">
                    <i class="ion-ios-location-outline"></i>
                    <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay=".5s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <i class="ion-ios-location-outline"></i>
                    <h5>125 , Kings Street,Melbourne <br>United Kingdom,600562</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="email wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay=".7s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.7s; animation-name: fadeInLeft;">
                    <i class="ion-ios-email-outline"></i>
                    <p>support@themefisher.com<br>support@themefisher.com</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="phone wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay=".9s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.9s; animation-name: fadeInLeft;">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+07 052 245 022<br>+07 999 999 999</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>