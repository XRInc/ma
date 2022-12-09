<?php if (IS_ZP == 0) { ?>
<div class="header-banner container no-padding">
	<div id="J_owl">
		<div class="container no-padding">
			<a class="item" href="<?php echo href_link(FILENAME_BESTSELLERS); ?>" >
				<div class="banner-block">
					<img class="hidden-xs hidden-sm" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/pc-banner1.jpg" alt=""  width="100%"/>
					<img class="visible-xs visible-sm" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/M-banner01.jpg" alt="" width="100%"/>
				</div>
			</a>
		</div>
		<div class="container no-padding">
			<a class="item" href="<?php echo href_link(FILENAME_BESTSELLERS); ?>" >
				<div class="banner-block">
					<img class="hidden-xs hidden-sm" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/pc-banner2.jpg" alt=""  width="100%"/>
					<img class="visible-xs visible-sm" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/M-banner002.jpg" alt="" width="100%"/>
				</div>
			</a>
		</div>
		<!--<div class="container no-padding">-->
		<!--	<a class="item" href="<?php echo href_link(FILENAME_BESTSELLERS); ?>" >-->
		<!--		<div class="banner-block">-->
		<!--			<img class="hidden-xs hidden-sm" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner6.jpg" alt=""  width="100%"/>-->
		<!--			<img class="visible-xs visible-sm" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/M-banner03.jpg" alt="" width="100%"/>-->
		<!--		</div>-->
		<!--	</a>-->
		<!--</div>-->
		<!--<div class="container no-padding">-->
		<!--	<a class="item" href="<?php echo href_link(FILENAME_BESTSELLERS); ?>" >-->
		<!--		<div class="banner-block">-->
		<!--			<img class="hidden-xs hidden-sm" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner4.jpg" alt=""  width="100%"/>-->
		<!--			<img class="visible-xs visible-sm" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/m_banner4.jpg" alt="" width="100%"/>-->
		<!--		</div>-->
		<!--	</a>-->
		<!--</div>-->
	</div>
</div>
<?php } else { ?>
<div class="header-banner">
	<div class="banner-block2">
		<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=1'); ?>">
			<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner1_zp.jpg" alt="">
		</a>
	</div>
</div>
<?php } ?>
<script>
	$(function() {
		$('#J_owl').owlCarousel({
			items: 1,
			loop: true,
			nav: false,
			autoplay: true,
			autoplayTimeout: 3000,
			autoplayHoverPause: true
		});
	});
</script>