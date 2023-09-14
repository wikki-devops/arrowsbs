<section id="hero" class="hero d-flex align-items-center" style="background-color: #055160!important">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 col-md-6 hero-img" data-aos="zoom-out" style="text-align: center;padding: 30px 110px;">
                <a href="<?php echo base_url();?>products/tally-prime"><img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/logos/1.png" class="img-fluid mb-3 mb-lg-0" alt="" /></a>
            </div>
            <div class="col-lg-6 col-md-6 hero-img" data-aos="zoom-out" style="text-align: center;padding: 30px 110px;">
                <a href="<?php echo base_url();?>products/ERPnext"><img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/logos/2.png" class="img-fluid mb-3 mb-lg-0" alt="" /></a>
            </div>
            <div class="col-lg-4 hero-img" data-aos="zoom-out" style="text-align: center;padding: 30px;">
                <a href="<?php echo base_url();?>products/mobile-apps"><img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/logos/3.png" class="img-fluid mb-3 mb-lg-0" alt="" /></a>
            </div>
            <div class="col-lg-4 hero-img" data-aos="zoom-out" style="text-align: center;padding: 30px;">
                <a href="<?php echo base_url();?>products/biz-analyst"><img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/logos/4.png" class="img-fluid mb-3 mb-lg-0" alt="" /></a>
            </div>
            <div class="col-lg-4 hero-img" data-aos="zoom-out" style="text-align: center;padding: 30px;">
                <a href="https://www.greythr.com/?utm_source=Organic+traffic&utm_medium=Web&utm_campaign=Arrowbusinesssolutions-partner&utm_term=digital-solution-partner&utm_content=gt-logo" target="_blank"><img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/logos/5.png" class="img-fluid mb-3 mb-lg-0" alt="" /></a>
            </div>
        </div>
    </div>
</section>
<main id="main">
    <section id="about" class="about pt-50">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-center order-lg-last order-first">
                    <img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/about.webp?updatedAt=1691517214287" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-6 content order-last order-lg-first">
                    <h3>About Us</h3>
                    <p>
                        We deliver business software solutions that are usable, user friendly, informative and cost effective.
                    </p>
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="fa fa-bullseye"></i>
                            <div>
                                <h5>Mission</h5>
                                <p>
                                    Mission – to develop our clients’ businesses and increase their competitiveness through simple and effective software solutions using innovative technology and best practice.
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="fa fa-eye"></i>
                            <div>
                                <h5>Vision</h5>
                                <p>
                                    Vision – Our Vision is to be the most preferred Business Software Solutions Company in the region. We are aware that Customer’s satisfaction and growth is our growth, so we commit our customers to help in achieving their business goals through our Software Solutions. We believe in work with the accuracy and best quality. We want to be known as the reliable, simple, innovative and user- friendly Business Software Solution provider in the SME segment.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

	<section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <span>Our Products</span>
                <h2>Our Products</h2>
            </div>
            <div class="row gy-4">
				<?php foreach($products as $product):?>
					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
						<div class="card">
							<div class="card-img">
								<img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/products/<?php echo $product['img'];?>" alt="" class="img-fluid" />
							</div>
							<h3><a href="<?php echo $product['link'];?>" class="stretched-link" style="text-transform: none;"><?php echo $product['product'];?></a></h3>
							<p>
								<?php echo $product['content'];?>
							</p>
						</div>
					</div>
				<?php endforeach;?>
				

            </div>
        </div>
    </section>

	<section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="zoom-out">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3>Build a Better Future for Your Business</h3>
                    <p style="text-align: center!important;">
                    Contact us today to schedule a consultation and learn more about how we can help you achieve your goals. Don't wait - take the first step towards success now!"
                    </p>
                    <a class="cta-btn" href="tel:+919342585500">Call Us</a>
                </div>
            </div>
        </div>
    </section>

	<section id="pricing" class="pricing">
		<div class="container" data-aos="fade-up">
			<div class="row gy-4">
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
					<div class="pricing-item featured">
						<h2 class="text-uppercase">Our Service</h2>
						<ul class="owncss">
							<li><img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/arrows.png?updatedAt=1691517523881" /> Tally AMC</li>
							<li><img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/arrows.png?updatedAt=1691517523881" /> Tally on AWS Cloud </li>
							<li><img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/arrows.png?updatedAt=1691517523881" /> Tally Implementation </li>
							<li><img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/arrows.png?updatedAt=1691517523881" /> Training </li>
							<li><img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/arrows.png?updatedAt=1691517523881" /> Customization</li>
						</ul>
						<a href="<?php echo base_url();?>services" class="buy-btn">Read More</a>
					</div>
				</div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
					<img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/tally-aws.webp?updatedAt=1691517615339" style="height: 700px !important" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section>
</main>
