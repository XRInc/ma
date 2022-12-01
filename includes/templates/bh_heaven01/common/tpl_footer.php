<div class="footer-container" style="width: 100%;text-align: center">
	<div class="footer">
		<div class="add_container add_cenp">
			<div class="row">
                
                
				<div class="col-md-3 col-sm-4 col-xs-12 mob_footer footer_company_info">
					<h4><?php echo __('Company Info'); ?></h4>
					<ul class="links">
						<li class="first"><a title="<?php echo __('About Us'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=1'); ?>" rel="external nofollow"><?php echo __('About Us'); ?></a></li>
						<li><a title="<?php echo __('Contact Us'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=2'); ?>" rel="external nofollow"><?php echo __('Contact Us'); ?></a></li>
						<li class="last"><a title="<?php echo __('Site Map'); ?>" href="<?php echo href_link(FILENAME_SITE_MAP); ?>"><?php echo __('Site Map'); ?></a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 mob_footer customer_service">
					<h4><?php echo __('Customer Service'); ?></h4>
					<ul class="links">
						<li class="first"><a title="<?php echo __('Privacy & Security'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=3'); ?>" rel="external nofollow"><?php echo __('Privacy & Security'); ?></a></li>
						<li><a title="<?php echo __('Payment Methods'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=9'); ?>" rel="external nofollow"><?php echo __('Payment Methods'); ?></a></li>
						<li><a title="<?php echo __('Shipping & Delivery'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=4'); ?>" rel="external nofollow"><?php echo __('Shipping & Delivery'); ?></a></li>
						<li><a title="<?php echo __('Returns Policy'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=5'); ?>" rel="external nofollow"><?php echo __('Returns Policy'); ?></a></li>
						<li class="last"><a title="<?php echo __('Faq'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=7'); ?>" rel="external nofollow"><?php echo __('Faq'); ?></a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 mob_footer my_account">
					<h4><?php echo __('My Account'); ?></h4>
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
				<div class="col-md-3 col-sm-6 col-xs-12 mob_footer" style="display: none;">
					<h4><?php echo __('Payment & Shipping'); ?></h4>
					<img class="img-responsive" style="margin: 0 auto;" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>payment-shipping.png" />
				</div>
				<div class="search col-md-3 col-sm-6 col-xs-12" id="search_input">
					<div class="search_wrapper">
						<h4 class="add_textcen">Search Your Favorite Here</h4>
						<form method="get" action="<?php echo href_link(FILENAME_SEARCH); ?>" id="pc_search_mini_form">
							<div class="form-search">
								<?php if (USE_URL_REWRITE == 0){ ?>
									<input type="hidden" value="search" name="main_page">
								<?php } ?>
								<input type="text" class="input-text" value="<?php echo isset($_GET['q'])?$_GET['q']:__(''); ?>" name="q" id="pcSearch" placeholder="Search Here" onclick=""/>
								<button class="button" title="<?php echo __('Search'); ?>" type="submit"><i class="iconfont f-25">&#xe630;</i></button>
							</div>
						</form>
						<div class="svg_flex">
							<div class="social-links">
								<a href="/" title="Follow us on Instagram" target="_blank">
									<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram" viewBox="0 0 512 512"><path  d="M256 49.5c67.3 0 75.2.3 101.8 1.5 24.6 1.1 37.9 5.2 46.8 8.7 11.8 4.6 20.2 10 29 18.8s14.3 17.2 18.8 29c3.4 8.9 7.6 22.2 8.7 46.8 1.2 26.6 1.5 34.5 1.5 101.8s-.3 75.2-1.5 101.8c-1.1 24.6-5.2 37.9-8.7 46.8-4.6 11.8-10 20.2-18.8 29s-17.2 14.3-29 18.8c-8.9 3.4-22.2 7.6-46.8 8.7-26.6 1.2-34.5 1.5-101.8 1.5s-75.2-.3-101.8-1.5c-24.6-1.1-37.9-5.2-46.8-8.7-11.8-4.6-20.2-10-29-18.8s-14.3-17.2-18.8-29c-3.4-8.9-7.6-22.2-8.7-46.8-1.2-26.6-1.5-34.5-1.5-101.8s.3-75.2 1.5-101.8c1.1-24.6 5.2-37.9 8.7-46.8 4.6-11.8 10-20.2 18.8-29s17.2-14.3 29-18.8c8.9-3.4 22.2-7.6 46.8-8.7 26.6-1.3 34.5-1.5 101.8-1.5m0-45.4c-68.4 0-77 .3-103.9 1.5C125.3 6.8 107 11.1 91 17.3c-16.6 6.4-30.6 15.1-44.6 29.1-14 14-22.6 28.1-29.1 44.6-6.2 16-10.5 34.3-11.7 61.2C4.4 179 4.1 187.6 4.1 256s.3 77 1.5 103.9c1.2 26.8 5.5 45.1 11.7 61.2 6.4 16.6 15.1 30.6 29.1 44.6 14 14 28.1 22.6 44.6 29.1 16 6.2 34.3 10.5 61.2 11.7 26.9 1.2 35.4 1.5 103.9 1.5s77-.3 103.9-1.5c26.8-1.2 45.1-5.5 61.2-11.7 16.6-6.4 30.6-15.1 44.6-29.1 14-14 22.6-28.1 29.1-44.6 6.2-16 10.5-34.3 11.7-61.2 1.2-26.9 1.5-35.4 1.5-103.9s-.3-77-1.5-103.9c-1.2-26.8-5.5-45.1-11.7-61.2-6.4-16.6-15.1-30.6-29.1-44.6-14-14-28.1-22.6-44.6-29.1-16-6.2-34.3-10.5-61.2-11.7-27-1.1-35.6-1.4-104-1.4z"></path><path d="M256 126.6c-71.4 0-129.4 57.9-129.4 129.4s58 129.4 129.4 129.4 129.4-58 129.4-129.4-58-129.4-129.4-129.4zm0 213.4c-46.4 0-84-37.6-84-84s37.6-84 84-84 84 37.6 84 84-37.6 84-84 84z"></path><circle cx="390.5" cy="121.5" r="30.2"></circle></svg>
								</a>
								<a href="/" title="Follow us on Facebook" target="_blank">
									<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewBox="0 0 50 100"><path  d="M10.807 19.367v13.768H0V49.97h10.807V100h22.2V49.972h14.898s1.395-8.073 2.072-16.9H33.092v-11.51c0-1.72 2.42-4.035 4.812-4.035H50V0H33.554C10.258-.001 10.807 16.851 10.807 19.367z"  fill-rule="nonzero"></path></svg>
								</a>
								<a href="/" title="Follow us on Twitter" target="_blank">
									<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 20 20"><path d="M19.551 4.208q-.815 1.202-1.956 2.038 0 .082.02.255t.02.255q0 1.589-.469 3.179t-1.426 3.036-2.272 2.567-3.158 1.793-3.963.672q-3.301 0-6.031-1.773.571.041.937.041 2.751 0 4.911-1.671-1.284-.02-2.292-.784T2.456 11.85q.346.082.754.082.55 0 1.039-.163-1.365-.285-2.262-1.365T1.09 7.918v-.041q.774.408 1.773.448-.795-.53-1.263-1.396t-.469-1.864q0-1.019.509-1.997 1.487 1.854 3.596 2.924T9.81 7.184q-.143-.509-.143-.897 0-1.63 1.161-2.781t2.832-1.151q.815 0 1.569.326t1.284.917q1.345-.265 2.506-.958-.428 1.386-1.732 2.18 1.243-.163 2.262-.611z"></path></svg>
								</a>
								<a href="/" title="Follow us on Pinterest" target="_blank">
									<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pinterest" viewBox="0 0 20 20"><path  d="M9.958.811q1.903 0 3.635.744t2.988 2 2 2.988.744 3.635q0 2.537-1.256 4.696t-3.415 3.415-4.696 1.256q-1.39 0-2.659-.366.707-1.147.951-2.025l.659-2.561q.244.463.903.817t1.39.354q1.464 0 2.622-.842t1.793-2.305.634-3.293q0-2.171-1.671-3.769t-4.257-1.598q-1.586 0-2.903.537T5.298 5.897 4.066 7.775t-.427 2.037q0 1.268.476 2.22t1.427 1.342q.171.073.293.012t.171-.232q.171-.61.195-.756.098-.268-.122-.512-.634-.707-.634-1.83 0-1.854 1.281-3.183t3.354-1.329q1.83 0 2.854 1t1.025 2.61q0 1.342-.366 2.476t-1.049 1.817-1.561.683q-.732 0-1.195-.537t-.293-1.269q.098-.342.256-.878t.268-.915.207-.817.098-.732q0-.61-.317-1t-.927-.39q-.756 0-1.269.695t-.512 1.744q0 .39.061.756t.134.537l.073.171q-1 4.342-1.22 5.098-.195.927-.146 2.171-2.513-1.122-4.062-3.44T.59 10.177q0-3.879 2.744-6.623T9.957.81z"></path></svg>
								</a>
								<a href="/" title="Listen on Spotify" target="_blank">
									<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-spotify" viewBox="0 0 100 100"><path  d="M49.96 0C22.367 0 0 22.368 0 49.96 0 77.55 22.368 99.918 49.96 99.918c27.591 0 49.959-22.368 49.959-49.96C99.919 22.368 77.55 0 49.959 0zm21.742 72.505a3.416 3.416 0 0 1-4.673 1.226c-8.978-5.247-19.35-6.09-26.47-5.874-7.89.24-13.674 1.797-13.732 1.813a3.418 3.418 0 0 1-4.196-2.391 3.415 3.415 0 0 1 2.385-4.197c.26-.072 6.486-1.763 15.143-2.048 5.099-.168 10.008.187 14.588 1.056 5.801 1.1 11.093 3.032 15.73 5.742a3.416 3.416 0 0 1 1.225 4.673zm6.352-13.192a4.045 4.045 0 0 1-5.536 1.452c-10.634-6.215-22.92-7.213-31.355-6.957-9.345.285-16.197 2.13-16.265 2.148a4.05 4.05 0 0 1-4.97-2.833 4.045 4.045 0 0 1 2.825-4.97c.308-.086 7.682-2.089 17.936-2.427 6.04-.2 11.855.222 17.28 1.25 6.873 1.305 13.141 3.593 18.633 6.802a4.046 4.046 0 0 1 1.452 5.535zm3.904-11.994a4.94 4.94 0 0 1-2.5-.679c-25.282-14.775-58.077-5.991-58.406-5.9a4.963 4.963 0 1 1-2.636-9.571c.378-.105 9.423-2.562 22.001-2.976 7.41-.244 14.541.272 21.196 1.534 8.43 1.6 16.119 4.406 22.854 8.342a4.964 4.964 0 0 1-2.509 9.25z"  fill-rule="nonzero"></path></svg>
								</a>
								<a href="/" title="Follow us on YouTube" target="_blank">
									<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-youtube" viewBox="0 0 21 20"><path  d="M-.196 15.803q0 1.23.812 2.092t1.977.861h14.946q1.165 0 1.977-.861t.812-2.092V3.909q0-1.23-.82-2.116T17.539.907H2.593q-1.148 0-1.969.886t-.82 2.116v11.894zm7.465-2.149V6.058q0-.115.066-.18.049-.016.082-.016l.082.016 7.153 3.806q.066.066.066.164 0 .066-.066.131l-7.153 3.806q-.033.033-.066.033-.066 0-.098-.033-.066-.066-.066-.131z"></path></svg>
								</a>
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
			<div class="row">
				<address class="col-md-12 col-sm-12 col-xs-12"><?php echo FOOTER_COPYRIGHT; ?></address>
			</div>
		</div>
	</div>
</div>
<script language="javascript" type="text/javascript">
	$(function(){
		jQuery(window).scroll(function(){if(jQuery(this).scrollTop()>100){jQuery('#back-top').fadeIn();}else{jQuery('#back-top').fadeOut();}});
		$('#back-top a').click(function(){jQuery('body,html').stop(false,false).animate({scrollTop:0},800);return false;});
		$(document).ready(function(){
			$('.footer .row div.col-sm-12 h4').click(function () {
				$(this).siblings().toggle().addClass('zb');
			})
		});
	});
	$(document).ready(function(){
		var $panelTitles = $('.footer_company_info h4, .customer_service h4, .my_account h4');

		$panelTitles.each(function() {
			var $this = $(this);
			var $thisParentEl = $this.parent();

			$this.on('click', function() {
				if ($thisParentEl.hasClass('is-visible')) {
					$thisParentEl.removeClass('is-visible');
				} else {
					$thisParentEl.addClass('is-visible');
				}
			});
		});
	});


</script>
<?php echo FOOTER_ABSOLUTE_FOOTER; ?>
