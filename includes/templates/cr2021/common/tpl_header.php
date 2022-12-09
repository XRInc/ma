<div class="pc-header hidden-xs  hidden-sm">
	<div class="header">
		<div class="rightTop">
			
			<div class="bgblack">
				<div class="wraps container">
					<p class="welcome-msg col-md-4 col-lg-4"><?php echo STORE_WELCOME; ?></p>
					<ul class="links col-md-8 col-lg-8">
						<?php if (isset($_SESSION['customer_id'])) { ?>
							<li><a title="<?php echo __('Log Out'); ?>" href="<?php echo href_link(FILENAME_LOGOUT, '', 'SSL'); ?>"><?php echo __('Log Out'); ?></a></li>
						<?php } else { ?>
							<!-- <li><a title="<?php echo __('Log In'); ?>" href="<?php echo href_link(FILENAME_LOGIN, '', 'SSL'); ?>"><?php echo __('Log In'); ?></a></li> -->
							<li><a title="<?php echo __('EMAIL SIGN UP'); ?>" href="<?php echo href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'); ?>"><?php echo __('EMAIL SIGN UP'); ?></a></li>
						<?php } ?>
						<li>
							<a class="link-account" title="<?php echo __('MY ACCOUNT'); ?>" href="<?php echo href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>">
								<?php echo __('MY ACCOUNT'); ?>
								<i class="iconfont">&#xe612;</i>
							</a>
						</li>
						<li><?php require($template->get_template_dir('tpl_currency_header.php', DIR_WS_TEMPLATE, $current_page, 'sidebar') . 'tpl_currency_header.php'); ?></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="rightBottom-parent">
			<div class="rightBottom">
				<div class="rightBottom-child-wraps">
					<div class="logo-container">
						<?php if (IS_ZP == 0) { ?>
							<a href="<?php echo href_link(FILENAME_INDEX); ?>" title="<?php echo HEADER_LOGO_ALT; ?>" class="logo"><img class="img-responsive" src="<?php echo $template->get_template_dir(HEADER_LOGO_SRC, DIR_WS_TEMPLATE, $current_page, 'images') . HEADER_LOGO_SRC; ?>" alt="<?php echo HEADER_LOGO_ALT; ?>" /></a>
						<?php } else { ?>
							<a href="<?php echo href_link(FILENAME_INDEX); ?>" title="<?php echo HEADER_LOGO_ALT; ?>" class="logo"><img class="img-responsive" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo_zp.png" alt="<?php echo HEADER_LOGO_ALT; ?>" /></a>
						<?php } ?>
					</div>
					<div class="nav-container">
						<div id="nav">
							<?php echo $category_tree->buildHeaderTree(0,2); ?>
						</div>
					</div>
				</div>
				<div class="search-cart">
					<div class="link-search">
						<form method="get" action="<?php echo href_link(FILENAME_SEARCH); ?>">
							<div class="form-search">
								<?php if (USE_URL_REWRITE == 0){ ?>
									<input type="hidden" value="search" name="main_page">
								<?php } ?>
								<input type="text" class="input-text" value="<?php echo isset($_GET['q'])?$_GET['q']:__(''); ?>" name="q" placeholder="<?php echo __('Search') ?>"/>
								<button class="button" title="<?php echo __('Search'); ?>" type="submit"><i class="iconfont">&#xe603;</i></button>
							</div>
						</form>
					</div>
					<div class="cart-container">
						<a class="link-cart" title="<?php echo __('My Cart'); ?>" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>"><?php echo ($_SESSION['shopping_cart']->getItems()>0)?__('<i class="iconfont">&#xe613;</i><span>%s</span>', $_SESSION['shopping_cart']->getItems()):__('<i class="iconfont">&#xe613;</i><span>0</span>'); ?></a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<?php //echo ONLINE_SERVICE; ?>
<div class="mobile-header hidden-md hidden-lg">
		<p class="brand-font"><?php echo STORE_WELCOME; ?></p>
	<div class="header" id="header-fixed">
		<div class="col-xs-6 col-sm-6 pd-lr10">
			<ul class="m_header-left-flex">
				<li><a href="javascript:;" class="category-tree a-left"><i class="iconfont f-25">&#xe64c;</i></a></li>
				<li>
					<?php if (IS_ZP == 0) { ?>
						<a class="logo" href="<?php echo href_link(FILENAME_INDEX); ?>" style="width:200px;"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo.png" alt="logo"/></a>
					<?php } else { ?>
						<a class="logo" href="<?php echo href_link(FILENAME_INDEX); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo_zp.png" alt="logo"/></a>
					<?php } ?>
				</li>
			</ul>
		</div>
		<div class="col-xs-6 col-sm-6 pd-lr10">
			<ul class="m_header-right-flex">
				<li><a class="m_search" href="javascript:;"><i class="iconfont f-bold">&#xe603;</i></a></li>
				<li><a class="link-account" title="<?php echo __('My Account'); ?>" href="<?php echo href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><i class="iconfont">&#xe699;</i></a></li>
				<li><a class="link-cart a-right mobile-cart" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>" rel="external nofollow"><?php echo ($_SESSION['shopping_cart']->getItems()>0)?__('<i class="iconfont">&#xe613;</i><span>%s</span>', $_SESSION['shopping_cart']->getItems()):__('<i class="iconfont">&#xe613;</i><span>0</span>'); ?></a></li>
			</ul>
		</div>
	</div>
	<div class="left-menu" id="menu" data-scroll="">
		<div class="left-category">
			<div class="menu-header">
				<span class="button btn-layer" onclick="hideCategory();"><i class="iconfont f-25">&#xe601;</i></span>
			</div>
			<div class="category-list">
				<ul class="level1">
					
					<?php
					$categoryTree = $category_tree->getData();
					ksort($categoryTree);
					?>
					<?php if (isset($categoryTree[0])) { ?>
						<?php foreach ($categoryTree[0] as $val) { ?>
							<?php if (isset($categoryTree[$val['id']])) { ?>
								<li class="category-top">
									<span class="all-category" onclick="$(this).nextAll('ul.mobile-memu').show().animate({left:0},200);"><i class="iconfont f-20">&#xe69b;</i></span>
									<a class="oneline" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $val['id']); ?>"><?php echo $val['name']; ?></a>
									<ul class="mobile-memu">
										<li class="category-title"><a href="javascript:;" class="return" onclick="$(this).closest('ul.mobile-memu').animate({left:'100%'},200).hide(200);"><i class="iconfont f-20">&#xe69a;</i><?php echo $val['name']; ?></a></li>
										<?php foreach ($categoryTree[$val['id']] as $v) { ?>
											<li class="category-product">
												<a class="oneline" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $v['id']); ?>"><?php echo $v['name']; ?></a>
											</li>
										<?php } ?>
									</ul>
								</li>
							<?php } else { ?>
								<li class="category-product">
									<a class="oneline" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $val['id']); ?>" style="font-size:1.5rem"><?php echo $val['name']; ?></a>
								</li>
							<?php } ?>
						<?php } ?>
					<?php } ?>
                    <li class="footer-nav">
                        <h4  style="font-size:1.5rem"><?php echo __('Company Info'); ?></h4>
                        <ul class="links">
                            <li class="first"><a title="<?php echo __('About Us'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=1'); ?>" rel="external nofollow"><?php echo __('About Us'); ?></a></li>
                            <li><a title="<?php echo __('Contact Us'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=2'); ?>" rel="external nofollow"><?php echo __('Contact Us'); ?></a></li>
							<li><a title="<?php echo __('Condition Of Use'); ?>" href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=10'); ?>"><?php echo __('Condition Of Use'); ?></a></li>
                            <li class="last"><a title="<?php echo __('Site Map'); ?>" href="<?php echo href_link(FILENAME_SITE_MAP); ?>"><?php echo __('Site Map'); ?></a></li>
                        </ul>
                    </li>
                    <li class="footer-nav">
                        <h4 style="font-size:1.5rem"><?php echo __('My Account'); ?></h4>
                        <ul class="links">
                            <li><a title="<?php echo __('My Orders'); ?>" href="<?php echo href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL'); ?>" rel="external nofollow"><?php echo __('My Orders'); ?></a></li>
                            <li><a title="<?php echo __('My Cart'); ?>" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>" rel="external nofollow"><?php echo __('My Cart'); ?></a></li>
							<?php if (isset($_SESSION['customer_id'])) { ?>
								<li><a title="<?php echo __('Log Out'); ?>" href="<?php echo href_link(FILENAME_LOGOUT, '', 'SSL'); ?>"><?php echo __('Log Out'); ?></a></li>
							<?php } else { ?>
								<li><a title="<?php echo __('Log In'); ?>" href="<?php echo href_link(FILENAME_LOGIN, '', 'SSL'); ?>"><?php echo __('Log In'); ?></a></li>
							<?php } ?>
                        </ul>
                    </li>
					<li class="currency"><?php require($template->get_template_dir('tpl_currency_header.php', DIR_WS_TEMPLATE, $current_page, 'sidebar') . 'tpl_currency_header.php'); ?></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="mobile-searchbox">
		<div class="searchbox-header"><span>X</span></div>
		<div class="search-box">
			<div class="header-search">
			    <form method="get" action="<?php echo href_link(FILENAME_SEARCH); ?>">
			        <div class="form-search">
						<?php if (USE_URL_REWRITE == 0){ ?>
							<input type="hidden" value="search" name="main_page">
						<?php } ?>
			            <input type="text" class="input-text form-control" value="<?php echo isset($_GET['q'])?$_GET['q']:__(''); ?>" name="q" placeholder="<?php echo __('Search') ?>" />
			            <button class="button" title="<?php echo __('Search'); ?>" type="submit"><i class="iconfont">&#xe603;</i></button>
			        </div>
			    </form>
			</div>
		</div>
		
	</div>
	
</div>
<script language="javascript" type="text/javascript">
$(function(){
	var mTop = $('.mobile-header').offset().top;
	var pTop = $('.pc-header .header .rightBottom-parent').offset().top;
	$(window).scroll(function(){
		var scrolltop =  $(document).scrollTop();
		if(scrolltop > mTop){
			$('.mobile-header .header').addClass('header-fixed');
		} else {
			$('.mobile-header .header').removeClass('header-fixed');
		}
		if(scrolltop > pTop){
			$('.pc-header .header .rightBottom-parent').addClass('header-fixed');
		} else {
			$('.pc-header .header .rightBottom-parent').removeClass('header-fixed');
		}
	});

	$('.category-tree').on('click',function(){
		$('.left-menu').slideDown();
		$('html').addClass('noscroll');
		$.smartScroll('menu','.category-list');
	});
    $('.footer-nav').on('click',function(){
        $(this).find('.links').slideToggle();
        $(this).toggleClass('active');
    });
	
	$('.m_search').on('click',function(){
		$('.mobile-searchbox').slideDown();
	})
	
	$('.searchbox-header span').on('click',function(){
		$('.mobile-searchbox').slideUp();
	})

});

function hideCategory() {
	$('.left-menu').slideUp();
	$('html').removeClass('noscroll');
}
</script>