<?php if (IS_ZP == 0 ) { ?>
<div class="olapic-header"  style="margin-top:40px">
    <div class="pages-title">
        <div class="hidden-xs"><h2 class="olapic-carousel-title"><span>Tag @Marc and #ComeAsYouAre</span></h2></div>	
        <div class="visible-xs"><h2 class="olapic-carousel-title"><span>Tag @Marc and #ComeAsYouAre</span></h2></div>	
        <div class="olapic-carousel-subtitle">
            Help others find comfort bysharing your selfie 
            <br /> or favorite photo!
        </div>
    </div>
    <div class="olapic-item" id="olapic_one" style="text-align:center">
        <a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=30'); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide01.jpg" alt="" /></a>
        <a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=30'); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide02.jpg" alt="" /></a>
        <a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=30'); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide03.jpg" alt="" /></a>
        <a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=30'); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide04.jpg" alt="" /></a>
        <a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=30'); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/slide05.jpg" alt="" /></a>
    </div>
</div>
<?php } ?>
<script type="text/javascript">
    $(function () {
        $('#olapic_one').owlCarousel({
            loop:true,
            nav:true,
            autoplay:true,
            dots:false,
			margin:5,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsive:{
                100:{
                    items:1
                },
                750:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        })
    });
</script>
<style>
    /*  ======================================================================================= */
    .main-container .olapic-header {max-width: 1200px;margin: 70px auto;padding:0px 20px;}
    .olapic-header .pages-title {text-align: center;margin-bottom: 10px;}
    .olapic-header .olapic-carousel-title {font: 20px proxima_novaregular,Arial,sans-serif;color:#444;
    background: #ffffff;
    background: -webkit-linear-gradient(top, #ffffff 45%,#444 50%,#ffffff 50%,#ffffff 50%);
    background: linear-gradient(to bottom, #ffffff 45%,#444 50%,#ffffff 50%,#ffffff 50%);}
    .olapic-header .olapic-carousel-title span {padding: 0 20px;background: #fff;}
    .olapic-header .olapic-carousel-subtitle {font-size: 10px;line-height: 1.5;}

    /* olapic-item ======================================================================================= */
    .olapic-item .item {display: inline-block;padding: 0 5px;}
    .owl-carousel .owl-item img {object-fit: cover;}
    /* ======================================================================================= */
    @media (max-width:560px) {
        .olapic-header .olapic-carousel-title {font-size: 14px;}
    }
    @media (max-width:1024) {
        .olapic-header .olapic-carousel-title {background: -webkit-linear-gradient(top, #ffffff 40%,#444 50%,#ffffff 50%,#ffffff 50%);background: linear-gradient(to bottom, #ffffff 40%,#444 50%,#ffffff 50%,#ffffff 50%);}
    }
</style>
