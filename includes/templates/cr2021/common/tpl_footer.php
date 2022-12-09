<?php if (IS_ZP == '0') { ?>
<div class="Shipping-wrap">
    <div class="text-center container">
        <div class="text-gray-dark">
            <h2 class="bold">Risk Free Shopping</h2>
        </div>

		<div class="icon-wrap">
			<div class="col-md-3 icon-wrap-child">
				<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>icons-shipping.png" alt="">
				<h3 >Free Shipping</h3>
				<p>Valid on Economy Shipping method on all orders over $79.00.</p>
			</div>
			<div class="col-md-3 icon-wrap-child">
				<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>icons-returns.png" alt="">
				<h3 >Free Returns</h3>
				<p>Change your mind? No problem. Our  free return process makes it easy.</p>
			</div>
			<div class="col-md-3 icon-wrap-child" style="padding-bottom: 20px;">
				<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>icons-guarantee.png" alt="">
				<h3 >Marc Guarantee</h3>
				<p>Marc products are covered by a 90-day warranty.</p>
			</div>
			<div class="col-md-3 icon-wrap-child" style="padding-top: 15px;">
				<img class="cascade" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>cascade.png" alt="">
				<h3>Your Information Is Secure</h3>
				<p>100% secured transaction using SSL encrypted connection.</p>
			</div>
		</div>
    </div>
</div>
<?PHP } ?>
<div class="footer-container">
	<div class="footer">
		<div class="container">
			<div class="footer-flex">
				<div class="footer-order2">
					<div class="col-md-3 col-sm-12 col-xs-12">
						<h4><?php echo __('Company Info'); ?><i class="iconfont icon-anonymous-iconfont visible-xs visible-sm"></i></h4>
						<ul class="links">
							<li class="first"><a title="<?php echo __('About Us'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=1'); ?>" rel="external nofollow"><?php echo __('About Us'); ?></a></li>
							<li><a title="<?php echo __('Contact Us'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=2'); ?>" rel="external nofollow"><?php echo __('Contact Us'); ?></a></li>
							<li class="last"><a title="<?php echo __('Site Map'); ?>" href="<?php echo href_link(FILENAME_SITE_MAP); ?>"><?php echo __('Site Map'); ?></a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-12 col-xs-12">
						<h4><?php echo __('Customer Service'); ?><i class="iconfont icon-anonymous-iconfont visible-xs visible-sm"></i></h4>
						<ul class="links">
							<li class="first"><a title="<?php echo __('Privacy & Security'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=3'); ?>" rel="external nofollow"><?php echo __('Privacy & Security'); ?></a></li>
							<li><a title="<?php echo __('Payment Methods'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=9'); ?>" rel="external nofollow"><?php echo __('Payment Methods'); ?></a></li>
							<li><a title="<?php echo __('Shipping & Delivery'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=4'); ?>" rel="external nofollow"><?php echo __('Shipping & Delivery'); ?></a></li>
							<li><a title="<?php echo __('Returns Policy'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=5'); ?>" rel="external nofollow"><?php echo __('Returns Policy'); ?></a></li>
							<li class="last"><a title="<?php echo __('Faq'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=7'); ?>" rel="external nofollow"><?php echo __('Faq'); ?></a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-12 col-xs-12">
						<h4><?php echo __('My Account'); ?><i class="iconfont icon-anonymous-iconfont visible-xs visible-sm"></i></h4>
						<ul class="links">
							<?php if (isset($_SESSION['customer_id'])) { ?>
								<li class="first"><a title="<?php echo __('Log Out'); ?>" href="<?php echo href_link(FILENAME_LOGOUT, '', 'SSL'); ?>" rel="external nofollow"><?php echo __('Log Out'); ?></a></li>
							<?php } else { ?>
								<li class="first"><a title="<?php echo __('Log In'); ?>" href="<?php echo href_link(FILENAME_LOGIN, '', 'SSL'); ?>" rel="external nofollow"><?php echo __('Log In'); ?></a></li>
							<?php } ?>
							<li><a title="<?php echo __('My Orders'); ?>" href="<?php echo href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL'); ?>" rel="external nofollow"><?php echo __('My Orders'); ?></a></li>
							<li><a title="<?php echo __('My Cart'); ?>" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>" rel="external nofollow"><?php echo __('My Cart'); ?></a></li>
						</ul>
					</div>
				</div>
				<div class="footer-order1">
					<div class="col-md-3 col-sm-12 col-xs-12">
						<h4 class="email-title"><?php echo __('Get the latest scoop on new arrivals, sales, special offers.'); ?></h4>
						<div class="email-links">
							<div class="email-submit">
								<div class="email-input"><input type="email" placeholder="ENTER YOUR EMAIL ADDRESS"></div>
								<div class="email-btn">
									<a title="<?php echo __('Submit'); ?>" href="<?php echo href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'); ?>">
										<button>Submit</button>
									</a>
								</div>
							</div>
							
							<div class="footer-connected">
								<h4><?php echo __('STAY CONNECTED'); ?></h4>
								<ul>
									<li>
										<a href="https://www.facebook.com">
											<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>footericon-facebook.png" />
										</a>
									</li>
									<li>
										<a href="https://twitter.com">
											<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>footericon-twitter.png" />
										</a>
									</li>
									<li>
										<a href="https://www.pinterest.com">
											<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>footericon-pinterest.png" />
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com">
											<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>footericon-youtube.png" />
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com">
											<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>footericon-instagram.png" />
										</a>
									</li>
									<li>
										<a title="<?php echo __('Contact Us'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=2'); ?>" rel="external nofollow">
											<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>footericon-email.png" />
										</a>
									</li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<p id="back-top"><a href="#top"><span><i class="iconfont">&#xe69c;</i></span></a></p>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<address><?php echo $FOOTER_COPYRIGHT; ?></address>
		</div>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		jQuery(window).scroll(function(){if(jQuery(this).scrollTop()>100){jQuery('#back-top').fadeIn();}else{jQuery('#back-top').fadeOut();}});
		$('#back-top a').click(function(){jQuery('body,html').stop(false,false).animate({scrollTop:0},800);return false;});
		
		$('.footer h4').on('click',function(){
			$(this).siblings('.links').slideToggle().end().find('i.iconfont').toggleClass('icon-anonymous-iconfont icon-sub');
			$(this).toggleClass('h4-line','');
		})
	});
</script>
<?php echo FOOTER_ABSOLUTE_FOOTER; ?>
