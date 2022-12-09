<div class="header-banner">
	<div class="banner-block1" id="J_owl">
		<?php if (IS_ZP == 0) { ?>
			<div class="container">
				<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=1'); ?>" >
					<div class="banner-block-left">
						<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner-text.png?v2" alt=""></img>
						<p>The Classics are back in a brand-new colour</p>
						<p>scheme and ready to be decked out in our</p>
						<p>exciting collection of Jibbitz™ charms.</p>
						<span>SHOP NEW HUES</span>
					</div>
					<div class="banner-block-right hidden-sm hidden-xs">
						<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner1.jpg?v2" alt=""></img>
					</div>
					<div class="banner-block-xs visible-xs">
						<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner1-xs.jpg?v2" alt=""></img>
					</div>
				</a>
			</div>
		<?php } else { ?>
			<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=1'); ?>">
				<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner1_zp.jpg" alt="">
			</a>
		<?php } ?>
	</div>
</div>
<script>
	$(function() {
		// $('#J_owl').owlCarousel({
		// 	items: 1,
		// 	loop: true,
		// 	nav: true,
		// 	autoplay: true,
		// 	autoplayTimeout: 3000,
		// 	autoplayHoverPause: true
		// });
	});
</script>