<?php require($template->get_template_dir('tpl_collections.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_collections.php'); ?>
<?php if (IS_ZP == '0') { ?>

<div class="select-top container no-padding">
	<div class="select-style">
		<div class="select-box">
			<ul>
				<li class="womens select-active">BEST SELLERS</li>
				<li class="mens ">NEW ARRIVALS</li>
			</ul>
		</div>
	</div>
	<div class="select-show">
		<div class="select-womens">
			<?php require($template->get_template_dir('tpl_modules_bestsellers.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_bestsellers.php'); ?>
		</div>
		<div class="select-mens">
			<?php require($template->get_template_dir('tpl_modules_new_products.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_new_products.php'); ?>
		</div>
	</div>
</div>
<div class="cr-productbottom"></div>


<div class="cr-socks">
	<div class="container-fluid no-padding">
		<a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=30'); ?>">
			<div class="upsell-sustainability-imgbox">
				<img class="hidden-sm hidden-xs" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/B23.jpg" alt=""/>
				<img class="visible-sm visible-xs" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/B-12.jpg" alt=""/>
				<!--<div class="cr-socks-txt">-->
				<!--	<div class="cr-socks-title">Come As You Are™</div>-->
				<!--	<div class="cr-socks-btn">SHOP NOW</div>-->
				<!--</div>-->
			</div>
		</a>
	</div>
</div>

<div class="upsell-sustainability">
	<div class="container no-padding">
		<a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=34'); ?>">
			<div class="upsell-sustainability-imgbox">
				<img class="hidden-sm hidden-xs" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/B22.jpg" alt=""/>
				<img class="visible-sm visible-xs" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/B-22.jpg" alt=""/>
			</div>
		</a>
	</div>
</div>

<?php require($template->get_template_dir('tpl_Shipping.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_Shipping.php'); ?>

<div class="collections">
    <div class="featured">
		<div class="collections-title" style="margin-top:-45px">
                    <p class="p1"><span class="sp1" style="padding-bottom: 0;letter-spacing: 2px;font-size:15px">NEW FOR FALL</span></p>
                    <p><span style="font-size:12px">MAKE ROOMM FOR THE SHADES OG THE SEASON.</span></p>
                    <p><span style="font-size:12px">COZY CHIANTI MOODY BLUES，SOFT HUES，</span></p>
                    <p><span style="font-size:12px">AND SO MUCH MORE.</span></p>
		</div>
        <div class="bottom-collection container">
                <a class="btn-overall cx_col-6 cx_col-md-3">
                    <span class="cx-button cx-heavy-brand-font">
                        CROSSBODY BAGS
                    </span>
                </a>
                <a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=30'); ?>" class="btn-overall cx_col-6 cx_col-md-3">
                    <span class="cx-button cx-heavy-brand-font">
                        TOTES
                    </span>
                </a>
				<a class="btn-overall cx_col-6 cx_col-md-3">
				    <span class="cx-button cx-heavy-brand-font">
				        BUCKET BAGS
				    </span>
				</a>
				<a class="btn-overall cx_col-6 cx_col-md-3">
				    <span class="cx-button cx-heavy-brand-font">
				        MINI BAGS
				    </span>
				</a>
                <a class="btn-overall cx_col-6 cx_col-md-3">
                    <span class="cx-button cx-heavy-brand-font">
                        SHOULDER BAGS
                    </span>
                </a>
				<a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=34'); ?>" class="btn-overall cx_col-6 cx_col-md-3">
				    <span class="cx-button cx-heavy-brand-font">
				        shop all
				    </span>
				</a>
        </div>
    </div>
</div>

<style>
	.img-ct a {display: block;}
	.img-ct a img {max-width: 100%; display: block; margin: 0 auto;}
	.block3 {max-width: 1200px; margin:20px auto;}
	.block3 .img-ct {position: relative; overflow: hidden; }
	.block3 .img-ct .block3-text {position: absolute;  left: 50%; top: 50%; transform: translate(-50%,-50%); text-align: center; padding-top: 80px;}
	.block3 .img-ct .block3-text h2 {font-size: 56px; color: #FFFFFF; font-weight: 900; font-style: italic;}
	.block3 .img-ct .block3-text span {font-size: 22px; border-bottom: 2px solid #FFFFFF; color: #FFFFFF; font-weight: 600;}
	
	.block4 {border: 1px solid #ebebeb; max-width: 1200px; margin:0 auto; overflow: hidden;}
	.block4 .img-ct a {height: auto; position: relative;}	
	.block4 .img-ct a .img-fixed {position: absolute; left: 0; top: 15%; min-width: 540px; text-align: center;}
	.block4 .img-ct a .img-fixed p {margin-top: 30px; font-size: 20px; font-weight: 400; color: #000000;}
	.block4 .img-ct a .img-fixed span {display: inline-block; margin-top: 15px; width: auto; font-size: 18px; color: #000; border-bottom: 2px solid #000;}
	
	@media (max-width:1025px) {
		.img-ct a img {height: 100%; max-width: inherit;}
		
	}
	@media (max-width:990px) {
		.block3 .img-ct .block3-text {width: 73%;}
		.img-ct a img {max-width:inherit; transform: translateX(-20%);}
		.block4 .img-ct a img.img-bod {max-width:inherit; transform: translateX(0);}				
		}
	
	@media (max-width:767px) {
		.block4 .img-ct a {height:auto;}
		.block3 .img-ct .block3-text {width: 100%;}
		.block3 .img-ct .block3-text h2 {font-size: 35px;}
		.block3 .img-ct .block3-text span {font-size: 18px;}	
		.img-ct a img {max-width: 100%; transform: translate(0); height:auto;}
		.block4 .img-ct a {display: flex; flex-direction: column;}
		.block4 .img-ct a img.img-bod {max-width: 100%; transform: translate(0);}
		.block4 .img-ct a .img-fixed {position: static; min-width: 100%!important; padding-top: 25px;}
		
	}
</style>


<?php } else { ?>
	<?php require($template->get_template_dir('tpl_modules_bestsellers.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_bestsellers.php'); ?>
	<?php //require($template->get_template_dir('tpl_modules_new_products.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_new_products.php'); ?>
<?php } ?>


<script>
	$(function(){
		$('.mens').on('click',function(){
			jQuery('body,html').stop(false,false).animate({scrollTop:$('.select-top').offset().top-100},800);
			$(this).addClass('select-active').siblings().removeClass('select-active');
			$('.select-mens').show();
			$('.select-womens').hide();
		});
		
		$('.womens').on('click',function(){
			jQuery('body,html').stop(false,false).animate({scrollTop:$('.select-top').offset().top-100},800);
			$(this).addClass('select-active').siblings().removeClass('select-active');
			$('.select-womens').show();
			$('.select-mens').hide();
		});
	})
</script>

<?php $mobileDetect = new Mobile_Detect(); ?>
<?php if ($mobileDetect->isMobile()) { ?>
	<script>
		$(function(){
			$(window).on('load change resize scroll',function(){
				// mobile
				var moselectOffsetTop = $(window).scrollTop()-$('.select-show').offset().top+$('.mobile-header .header').height();
				var moselectOffsetOutOfTop = $(window).scrollTop()-$('.cr-productbottom').offset().top+150;
				if($(window).width()<=975 && moselectOffsetTop >= 0){
					$('.select-style').show();
					$('.select-style').addClass('select-style-fixed');
					$('.select-style').css({
						'top':$('.mobile-header .header').height()
					})
				}else{
					$('.select-style').removeClass('select-style-fixed');
				}
				if($(window).width()<=975 && moselectOffsetOutOfTop>0){
					$('.select-style').hide();
				}
				
			})
		})
	</script>
<?php } else {?>
	<script>
		$(function(){
			$(window).on('load change resize scroll',function(){
				// pc
				var pcselectOffsetTop = $(window).scrollTop()-$('.select-show').offset().top+$('.pc-header .header').height();
				var pcselectOffsetOutOfTop = $(window).scrollTop()-$('.cr-productbottom').offset().top+100;
				if($(window).width()>975 && pcselectOffsetTop >= 0){
					$('.select-style').show();
					$('.select-style').addClass('select-style-fixed');
					$('.select-style').css({
						'top':'72px'
					})
				}else{
					$('.select-style').removeClass('select-style-fixed');
				}
				if($(window).width()>975 && pcselectOffsetOutOfTop>0){
					$('.select-style').hide();
				}
				
			})
		})
	</script>

<?php } ?>