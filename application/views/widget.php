<div class="col-lg-4">
    <div class="services-list">
        <?php foreach($products as $product):?>
        <a href="<?= base_url(); ?><?php echo $product['link'];?>"><?php echo $product['product'];?></a>
        <?php endforeach; ?>
    </div>
</div>
