<?php if (IS_ZP == 0) { ?>
<div class="header-banner">
	<div class="banner-block1">
		<a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=3'); ?>">
			<img class="hidden-sm hidden-xs" width="100%" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide0.jpg" alt="" />
			<img class="hidden-md hidden-lg" width="100%" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide0_mobile.jpg" alt="" />
		</a>
	</div>
</div>
<?php } else { ?>
<div class="header-banner">
    <div class="banner-block1">
        <a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=2'); ?>">
            <img width="100%" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide1_zp.jpg" alt="" />
        </a>
    </div>
</div>
<?php } ?>
<!-- <script type="text/javascript">
$(function () {
	$('#J_owl').owlCarousel({
		items:1,
		loop:true,
		nav:false,
		dots:true,
		autoplay:true,
		autoplayHoverPause:true
	});
});
</script> -->