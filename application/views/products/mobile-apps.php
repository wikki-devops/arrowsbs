<?php $this->load->view('breadcrumbs') ?>
<section id="service-details" class="service-details">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4">
		<?php $this->load->view('widget');?>
            <div class="col-lg-8">
                <img src="<?php echo base_url();?>assets/img/mobile-apps.webp" alt="" class="img-fluid services-img" />
                <h3><?= $page_title ?></h3>
                <p>
                    Business to Business (B2B) applications to streamline business operations, simplify complex business processes or fulfill specific industry needs. These are used by businesses to connect with other businesses, clients and employees as well as other stakeholders.
                </p>
                <p>
                    Business to Consumer (B2C) applications are being used by us on a daily basis. The focus is to make life easy for users and help them complete a particular task with minimal effort.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Service Details Section -->
