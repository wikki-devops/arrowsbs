<?php $this->load->view('breadcrumbs'); ?>
<section id="contact" class="contact" style="padding-bottom: 20px;">
    <div class="container" data-aos="fade-up">
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4012924.124507834!2d78.2897649!3d10.8211663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x660d620f4fb134b%3A0xd214727f41a0588e!2sArrows%20Business%20Solution!5e0!3m2!1sen!2sin!4v1681986163387!5m2!1sen!2sin"
                width="100%"
                height="450"
                style="border: 0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>

        <!-- End Google Maps -->

        <div class="row gy-4 mt-4">
            <div class="col-lg-4">
                <div class="info-item d-flex">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h4>Location:</h4>
                        <p>No.15/7, Agasthiar Street, East Tambaram, Chennai - 600059</p>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="info-item d-flex">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h4>Email:</h4>
                        <p>callmia@arrowsbs.in arrowsbs2022@gmail.com</p>
                    </div>
                </div>
                <!-- End Info Item -->

                <div class="info-item d-flex">
                    <i class="bi bi-phone flex-shrink-0"></i>
                    <div>
                        <h4>Call:</h4>
                        <p>+91 93425 85500 / 78240 28315</p>
                    </div>
                </div>
                <!-- End Info Item -->
            </div>

            <div class="col-lg-8"><?php $this->load->view('contactform'); ?></div>
            <!-- End Contact Form -->
        </div>
    </div>
</section>
