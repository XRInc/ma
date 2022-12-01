<?php include(DIR_FS_CATALOG_MODULES . get_module_directory('related.php')); ?>
<?php if ($relatedListCount = count($relatedList)) {?>
<div class="box-related">
	<div class="page-title">
		<h2 class="subtitle"><?php echo __('Related'); ?></h2>
	</div>
	<div class="row" id="product_rela">
		<?php foreach ($relatedList as $_product) { ?>
			<div class="col-xs-6 col-sm-4 col-md-3 products-grid add_ip img_box">
				<a href="<?php echo href_link(FILENAME_PRODUCT, 'pID=' . $_product['product_id']); ?>" title="<?php echo $_product['nameAlt']; ?>" class="product-image"><img class="img-responsive" width="<?php echo RELATED_IMAGE_WIDTH; ?>" height="<?php echo RELATED_IMAGE_HEIGHT; ?>" alt="<?php echo $_product['nameAlt']; ?>" src="<?php echo get_small_image($_product['image'], RELATED_IMAGE_WIDTH, RELATED_IMAGE_HEIGHT); ?>" /></a>
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
<script>
$(function(){
$('#product_rela').owlCarousel({
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