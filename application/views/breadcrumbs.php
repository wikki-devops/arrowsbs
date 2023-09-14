<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-color: #055160 ">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 class="text-uppercase">
                        <img src="https://ik.imagekit.io/f4cbynrok/arrowsbs/logos/<?php echo $page_title_img ?>" width="300px"/>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <ol>
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <?php echo $page ?>
                <li><?php echo $page_title ?></li>
            </ol>
        </div>
    </nav>
</div>
