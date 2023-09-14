<?php $this->load->view('breadcrumbs') ?>
<section id="featured-services" class="featured-services">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                <div class="icon flex-shrink-0">
                    <img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/icons/invoicing-accounting.png" width="64" />
                </div>
                <div>
                    <h4 class="title">Invoicing & Accounting</h4>
                    <p class="description">
                        TallyPrime makes it amazingly simple to create and record invoices. Optimized invoice components, host of configurations, multiple billing modes and so on.. makes TallyPrime really moulding to your business. The wide
                        variety of TallyPrime’s features makes it a simple accounting system.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="icon flex-shrink-0">
                    <img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/icons/inventory-management.png" width="64" />
                </div>
                <div>
                    <h4 class="title">Inventory Management</h4>
                    <p class="description">
                        The features of TallyPrime’s make it one of the most flexible system for optimal inventory management. Features such as godown management, multiple stock valuation, manufacturing, batch and expiry date, job costing
                        etc., and the powerful inventory reports make inventory management a cakewalk.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0">
                    <img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/icons/insightful-business-reports.png" width="64" />
                </div>
                <div>
                    <h4 class="title">Insightful Business Reports</h4>
                    <p class="description">
                        TallyPrime comes with more than 400 business reports which are readily available with powerful insights that will allow you make informed decisions.TallyPrime’s amazing flexibility allows you to slice and dice your
                        reports and look at them the way you want, the way it works for your business.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0">
                    <img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/icons/go-to-feature.png" width="64" />
                </div>
                <div>
                    <h4 class="title">Go To Feature</h4>
                    <p class="description">
                        With TallyPrime, discovering insights just got easier. This is made possible with TallyPrime’s new and powerful search bar called “Go To”. Using Go To, you can search and find the things you didn’t know Tally could
                        do for you and discover new insights to run your business better.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0">
                    <img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/icons/banking.png" width="64" />
                </div>
                <div>
                    <h4 class="title">Banking</h4>
                    <p class="description">
                        TallyPrime comes with a wide range of banking features/utilities that help you manage all your banking needs easily. Using TallyPrime’s banking features such as auto bank reconciliation, pre-defined cheque formats,
                        cheque management, e-payments etc. makes banking an effortless task.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0">
                    <img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/icons/access-business-data-online.png" width="64" />
                </div>
                <div>
                    <h4 class="title">Access Business Data Online</h4>
                    <p class="description">
                        TallyPrime gives you the ability to view business reports online from the comfort of a web browser, wherever you are with the promise that your data will always rest with you.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0">
                    <img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/icons/secure-data.png" width="64" />
                </div>
                <div>
                    <h4 class="title">Secure Data</h4>
                    <p class="description">
                        We understand that your business data is sensitive and ensure that you will always remain in custody of it. With multiple user access control and feature-based security levels ensure that access to your data is
                        restricted based on your choice.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="faq" style="padding-top: 0px !important;">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-6">
                <div class="section-header">
                    <h2>Frequently Asked Questions</h2>
                </div>
                <div class="accordion accordion-flush" id="faqlist">
                    <?php foreach($faqs as $faq): ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $faq['faq-content'];?>">
                                <i class="bi bi-question-circle question-icon"></i>
                                <?php echo $faq['faq'];?>
                            </button>
                        </h3>
                        <div id="<?php echo $faq['faq-content'];?>" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                <?php echo $faq['ans'];?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-header">
                    <h2>TPS</h2>
                </div>
                <img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/TallyPrime-Server.png?updatedAt=1691580186320" style="width: 100%;" />
                <p class="description">
                    TallyPrime Server offers powerful data server capabilities over the Gold license. This server-based Data Architecture unleashes greater concurrency, secured data access, and advanced monitoring capabilities. TallyPrime
                    Server is truly an Enterprise Class product that helps fast-growing medium and large businesses improve their business efficiencies.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="horizontal-pricing" class="horizontal-pricing">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row gy-4 featured mt-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-10 d-flex align-items-center justify-content-center" style="padding-bottom: 20px;">
                <h3 class="absown">Experience it for yourself and don't solely rely on our recommendation.</h3>
            </div>
            <div class="col-lg-2 d-flex align-items-center justify-content-center" style="padding-bottom: 20px;">
                <div class="text-center"><a href="<?php echo base_url();?>contact" class="buy-btn">Reach Us</a></div>
            </div>
        </div>
    </div>
</section>
