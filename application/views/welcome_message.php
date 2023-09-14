<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Empowering Businesses with User-Friendly Software Solutions - Arrows Business Solution</title>
        <meta content="" name="Discover our range of business software solutions, including TallyPrime, ERPNext, Mobile Apps, Biz Analyst, greytHR HR payroll software, and professional Website Development. Unlock usability, information, and cost-effectiveness for your business today." />
        <meta content="" name="Business software solutions, TallyPrime, ERPNext, Mobile Apps, Biz Analyst, greytHR HR payroll software, Website Development, usability, user-friendly, informative, cost-effective, Arrows Business Solution" />
        <link href="assets/favicon.png" rel="icon" />
        <link href="assets/apple-touch-icon.png" rel="apple-touch-icon" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />
        <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/vendor/aos/aos.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" />
        <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
		
    </head>
    <body>
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a href="<?php echo base_url();?>" class="logo d-flex align-items-center">

                </a>

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <nav id="navbar" class="navbar">
					<ul>
					<li><a href="<?= base_url(); ?>" class="<?php echo (current_url() == base_url()) ? 'active' : '' ?>">Home</a></li>
					<li><a href="<?= base_url(); ?>about" class="<?php echo (current_url() == base_url('about')) ? 'active' : '' ?>">About us</a></li>
					
					<li class="dropdown"><a href="javascript:void(0)"><span>Our Products</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
						<ul>
							<?php foreach($products as $product):?>
								<li><a href="<?= base_url(); ?><?php echo $product['link'];?>"><?php echo $product['product'];?></a></li>
							<?php endforeach; ?>
						</ul>
					</li>
					<!--li><a href="https://www.greythr.com/?utm_source=Organic+traffic&utm_medium=Web&utm_campaign=Arrowbusinesssolutions-partner&utm_term=digital-solution-partner&utm_content=gt-logo" target="_blank" style="text-transform: none">greytHR</a></li-->
					<li><a href="<?= base_url(); ?>services" class="<?php echo (current_url() == base_url('services')) ? 'active' : '' ?>">Services</a></li>
					<li><a href="<?= base_url(); ?>contact" class="<?php echo (current_url() == base_url('contact')) ? 'active' : '' ?>">Contact</a></li>
					<li><a class="get-a-quote" href="tel:+919342585500" style="color: #fff;">CALL US</a></li>
					</ul>
				</nav>
                <!-- .navbar -->
            </div>
        </header>
        <!-- End Header -->
        <!-- End Header -->
        <?php $this->load->view($view_page); ?>

			<footer id="footer" class="footer" style="padding-bottom: 20px">

				<div class="container">
				<div class="row gy-4">
					<div class="col-lg-5 col-md-12 footer-links footer-content">
					<h4>Our Services</h4>
					<p style="text-align: justify;">We deliver business software solutions that are usable, user friendly, informative and cost effective.</p>
					<div class="social-links d-flex mt-4">
						<a href="javascript:void()" class="facebook"><i class="bi bi-facebook"></i></a>
						<a href="https://instagram.com/arrows.business.solution" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
						<a href="https://www.linkedin.com/company/arrows-business-solution/" class="linkedin"><i class="bi bi-linkedin"></i></a>
					</div>
					</div>
					<div class="col-lg-3 col-6 footer-links">
					<h4>Our Products</h4>
					<ul>
						<?php foreach($products as $product):?>
							<li><a href="<?= base_url(); ?><?php echo $product['link'];?>"><?php echo $product['product'];?></a></li>
						<?php endforeach; ?>
					</ul>
					</div>

					<div class="col-lg-4 col-md-12 footer-contact text-md-start">
					<h4>Contact Us</h4>
					<p>
						Arrows Business Solution <br>
						No.15/7, Agasthiar Street, East Tambaram, <br>Chennai - 600059<br><br>
						<strong>Phone:</strong> +91 93425 85500 / +91 78240 28315 <br>
						<strong>Email:</strong> callmia@arrowsbs.in <br>
						<strong>Email:</strong> arrowsbs2022@gmail.com
					</p>

					</div>

				</div>
				</div>

				<div class="container mt-4">
				<div class="copyright">
					&copy; Copyright <strong><span> Arrows Business Solution</span></strong>. All Rights Reserved 
				</div>
				<div class="credits">
					
				</div>
				</div>

			</footer>
        <!-- End Footer -->
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>
        <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/aos/aos.js"></script>
        <script src="<?php echo base_url();?>assets/vendor/php-email-form/validate.js"></script>
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
    </body>
</html>
