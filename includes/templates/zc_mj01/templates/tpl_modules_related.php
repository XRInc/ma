<?php include(DIR_FS_CATALOG_MODULES . get_module_directory('related.php')); ?>
<?php if ($relatedListCount = count($relatedList)) {?>
<div class="box-related">
	<div class="page-title">
		<h2 class="subtitle"><?php echo __('Related'); ?></h2>
	</div>
	<div class="owl-banner-box" id="my_owl">
		<?php foreach ($relatedList as $_product) { ?>
			<div class="products-grid">
				<a href="<?php echo href_link(FILENAME_PRODUCT, 'pID=' . $_product['product_id']); ?>" title="<?php echo $_product['nameAlt']; ?>" class="product-image"><img class="img-responsive" width="<?php echo RELATED_IMAGE_WIDTH; ?>" height="<?php echo RELATED_IMAGE_HEIGHT; ?>" alt="<?php echo $_product['nameAlt']; ?>" src="<?php echo get_small_image($_product['image'], RELATED_IMAGE_WIDTH, RELATED_IMAGE_HEIGHT); ?>" /></a>
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
								<p class="save-off">
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
</div>
<?php } ?>

<script type="text/javascript">
	$(function () {
		$('#my_owl').owlCarousel({
			loop:true,
//			nav:true,
			dots:true,
			margin:15,
			responsive:{
				100:{
					items:2
				},
				750:{
					items:3
				},
				1000:{
					items:4
				}
			}
		});

	});
</script>
