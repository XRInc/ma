<?php include(DIR_FS_CATALOG_MODULES . get_module_directory('bestsellers.php')); ?>
<?php if ($bestsellersListCount = count($bestsellersList)) {?>
<div class="bestsellers">
        <div class="add_title1">
            <p class="p1">
                <span class="sp1">
                   <?php echo __('Bestsellers'); ?>
                </span>
            </p>
        </div>
    <div class="row">
		<?php foreach ($bestsellersList as $_product) { ?>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 ">
			<a href="<?php echo href_link(FILENAME_PRODUCT, 'pID=' . $_product['product_id']); ?>" title="<?php echo $_product['nameAlt']; ?>" class="product-image">
				<img class="img-responsive" width="<?php echo BESTSELLERS_IMAGE_WIDTH; ?>" height="<?php echo BESTSELLERS_IMAGE_HEIGHT; ?>" alt="<?php echo $_product['nameAlt']; ?>" src="<?php echo get_small_image($_product['image'], BESTSELLERS_IMAGE_WIDTH, BESTSELLERS_IMAGE_HEIGHT); ?>" />
                <div class="add_proqv">
                    <p class="p1">QUICK VIEW</p>
                </div>
			</a>
			<div class="product-shop">
				<h3 class="product-name"><a href="<?php echo href_link(FILENAME_PRODUCT, 'pID=' . $_product['product_id']); ?>" title="<?php echo $_product['nameAlt']; ?>"><?php echo $_product['name']; ?></a></h3>
				<?php if ($_product['specials_price'] > 0) { ?>
					<div class="amount-box">
						<p class="old-amount">
							<span class="amount-value"><?php echo $currencies->display_price($_product['price']); ?></span>
						</p>
					</div>
					<div class="price-box">
						<p class="specials-price">
							<span class="price"><?php echo $currencies->display_price($_product['specials_price']); ?></span>
						</p>
					</div>
					<?php } else { ?>
					<div class="amount-box">
						<span class="regular-amount">
            				<span class="amount-value"><?php echo $currencies->display_price($_product['price']); ?></span>
						</span>
					</div>
				<?php } ?>
				<?php if ($_product['review']['total']>0) { ?>
					<div class="review-box">
						<span class="star star<?php echo $_product['review']['rating']; ?>"></span>
						<a rel="nofollow" href="<?php echo href_link(FILENAME_PRODUCT, 'pID=' . $_product['product_id']); ?>#customer-review">(<?php echo $_product['review']['total']; ?>)</a>
					</div>
				<?php } ?>
			</div>
    	</div>
    <?php } ?>
	</div>
    
</div>
<?php } ?>

