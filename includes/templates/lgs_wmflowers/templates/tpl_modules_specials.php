<?php include(DIR_FS_CATALOG_MODULES . get_module_directory('specials.php')); ?>
<?php if ($specialsListCount = count($specialsList)) {?>
<div class="specials">
	<div class="page-title add_iptitle">
		<h2 class="subtitle"><?php echo __('Specials'); ?></h2>
	</div>
    <div class="add_iptitle">
        <div class="p12">
            <p class="p1"><?php echo __('Specials'); ?></p>
            <p class="p2">MOST TRENDY PRODUCTS</p>
        </div>
        <p class="p3">
            <a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=1'); ?>">VIEW ALL PRODUCTS</a>
        </p>
    </div>
	<div id="product_spe">
	<?php foreach ($specialsList as $_product) { ?>
    	<div class="col-xs-6 col-sm-4 col-md-3 products-grid add_ip img_box">
    		<a href="<?php echo href_link(FILENAME_PRODUCT, 'pID=' . $_product['product_id']); ?>" title="<?php echo $_product['nameAlt']; ?>" class="product-image">
                <img class="img-responsive" width="<?php echo SPECIALS_IMAGE_WIDTH; ?>" height="<?php echo SPECIALS_IMAGE_HEIGHT; ?>" alt="<?php echo $_product['nameAlt']; ?>" src="<?php echo get_small_image($_product['image'], SPECIALS_IMAGE_WIDTH, SPECIALS_IMAGE_HEIGHT); ?>" />
                <div class="add_proqv">
                    <p class="p1">QUICK VIEW</p>
                </div>
            </a>
    		<div class="product-shop">
	    		<h3 class="product-name"><a href="<?php echo href_link(FILENAME_PRODUCT, 'pID=' . $_product['product_id']); ?>" title="<?php echo $_product['nameAlt']; ?>"><?php echo $_product['name']; ?></a></h3>
				<div class="price-box">
					<?php if ($_product['specials_price'] > 0) { ?>
						<p class="old-price">
							<span class="price-label"><?php echo __('Regular Price'); ?>:</span>
							<span class="price"><?php echo $currencies->display_price($_product['price']); ?></span>
						</p>
						<p class="specials-price">
							<span class="price-label"><?php echo __('Special Price'); ?>:</span>
							<span class="price"><?php echo $currencies->display_price($_product['specials_price']); ?></span>
						</p>
						<?php if ($_product['save_off']>0) { ?>
							<p class="save-off add_save-off">
								<span class="price-label"><?php echo __('Save Off'); ?>:</span>
								<span class="price"><?php echo $_product['save_off']; ?>%</span>
							</p>
						<?php } ?>
					<?php } else { ?>
						<span class="regular-price">
							<span class="price"><?php echo $currencies->display_price($_product['price']); ?></span>
						</span>
					<?php } ?>
				</div>
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
    <hr class="separator-line align_center solid" style="background-color: #e7e7e7;">
</div>
<?php } ?>
<script>
$(function(){
$('#product_spe').owlCarousel({
		pagination:false,
		loop:true,
		nav:true,
		navigation:true,
		responsive:{
			100:{
				items:2
			},
			629:{
				items:2
			},
			630:{
				items:3
			},
			992:{
				items:3
			},
			996:{
				items:4
			},
			1199:{
				items:4
			},
			1200:{
				items:4
			},
		}
	})
});
</script>
