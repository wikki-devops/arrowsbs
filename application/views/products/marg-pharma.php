<?php $this->load->view('breadcrumbs') ?>
<section id="featured-services" class="featured-services">
    <div class="container">
        <div class="row gy-4">
            <?php foreach($margs as $marg): ?>
            <div class="col-lg-4 col-md-6 service-item d-flex align-items-center" data-aos="fade-up">
                <div class="icon flex-shrink-0">
                    <img src="<?php echo base_url();?>assets/img/icons/<?php echo $marg['img'];?>" width="64"/>
                </div>
                <div>
                    <h4 class="title"><?php echo $marg['features'];?></h4>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<!-- End Featured Services Section -->
<section id="about" class="about marg" style="padding-top: 0px">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4 text-center">
            <div class="col-lg-12 align-items-center">
                
                <h3>Digitize Your Pharmacy with Marg Pharmacy Software</h3>
                <p style="text-align: center!important; padding-top: 20px">
                    Marg Pharmacy software empowers you with a complete business solution from billing till return filing for your pharmacy store. It's the best pharmacy software with sales automation functions, seamless integrations, and mobile accessibility. Marg pharmacy software facilitates increased productivity, better collaborations, and accelerated sales performance. 
                </p>
            
                    <img src="<?php echo base_url();?>assets/img/marhg-pharmacy.webp" width="600px" class="img-fluid" alt="" style="padding-top: 20px;">
                    <a href="https://www.youtube.com/watch?v=C2NRnfwwzK4" class="glightbox play-btn"></a>
                
            </div>
        </div>
    </div>
</section>
<!-- End Service Details Section -->
<!-- ======= Our Team Section ======= -->
<section id="team" class="team pt-0">
    <div class="container" data-aos="fade-up">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
        <?php foreach($pharmacys as $pharmacy ): ?>
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="member">
                    <img src="<?php echo base_url();?>assets/img/<?php echo $pharmacy['sort'];?>" class="img-fluid" alt="" />
                    <div class="member-content">
                        <h4><?php echo $pharmacy['title'];?></h4>
                        <p>
                        <?php echo $pharmacy['descripition'];?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Team Member -->
        <?php endforeach;?>    
        </div>
    </div>
</section>