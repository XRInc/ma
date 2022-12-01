<div class="header-container">
			<div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
				<ul class="links f-left">
					<li><?php require($template->get_template_dir('tpl_currency_header.php', DIR_WS_TEMPLATE, $current_page, 'sidebar') . 'tpl_currency_header.php'); ?></li>
				</ul>
			</div>
			<div class="col-md-6 col-xs-12 col-sm-12">
				<p class="welcome-msg"><?php echo STORE_WELCOME; ?></p>
			</div>
			<div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
				<ul class="links f-right">
					<li><a class="link-account" title="<?php echo __('Log In / Sign Up'); ?>" href="<?php echo href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><i class="iconfont">&#xe699;</i><?php echo __('Log In / Sign Up'); ?></a></li>
					<li><a title="<?php echo __('Order Check'); ?>" href="<?php echo href_link(FILENAME_SEARCH_ORDER, '', 'SSL'); ?>" rel="external nofollow"><i class="iconfont">&#xe602;</i><?php echo __('Order Check'); ?></a></li>
				</ul>
			</div>
</div>
<div class="pc-header hidden-xs hidden-sm">
	<div class="header">
		<ul class="links">
			<li class="link-search"><a class="search-btn" title="<?php echo __('Serach Box'); ?>" href="javascript:;"><i class="iconfont icon-sousuo1"></i></a></li>
			<li><a class="link-cart" title="<?php echo __('My Cart'); ?>" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>"><i class="iconfont">&#xe619;</i></a></li>
		</ul>
		<ul class="logo-container">
			<li>
				<?php if (IS_ZP == 0) { ?>
				<a href="<?php echo href_link(FILENAME_INDEX); ?>" title="<?php echo HEADER_LOGO_ALT; ?>" class="logo"><strong><?php echo HEADER_LOGO_ALT; ?></strong><img class="img-responsive" src="<?php echo $template->get_template_dir(HEADER_LOGO_SRC, DIR_WS_TEMPLATE, $current_page, 'images') . HEADER_LOGO_SRC; ?>" alt="<?php echo HEADER_LOGO_ALT; ?>" /></a>
				<?php } else { ?>
				<?php } ?>
			</li>
		</ul>
		<div class="nav-container">
			<div id="nav">
				<?php echo $category_tree->buildHeaderTree(0,2); ?>
			</div>
		</div>
	</div>
	<div class="search-bg"></div>
	<div class="search-box">
		<form method="get" action="<?php echo href_link(FILENAME_SEARCH); ?>" id="pc_search_mini_form">
			<div class="form-search">
				<?php if (USE_URL_REWRITE == 0){ ?>
					<input type="hidden" value="search" name="main_page">
				<?php } ?>
				<input type="text" class="input-text" value="<?php echo isset($_GET['q'])?$_GET['q']:__(''); ?>" name="q" id="pcSearch" placeholder="Search" />
				<button class="button" title="<?php echo __('Search'); ?>" type="submit"><i class="iconfont f-25">&#xe61d;</i></button>
			</div>
		</form>
	</div>
</div>
<?php echo ONLINE_SERVICE; ?>
<div class="mobile-header hidden-md hidden-lg">
	<div class="header">
		<div class="col-xs-3 col-sm-3"><a href="javascript:;" class="category-tree a-left"><i class="iconfont icon-mulu f-18"></i></a></div>
		<div class="col-xs-6 col-sm-6">
			<?php if (IS_ZP == 0) { ?>
			<a class="logo" href="<?php echo href_link(FILENAME_INDEX); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo.png" alt="<?php echo HEADER_LOGO_ALT; ?>" title="<?php echo HEADER_LOGO_ALT; ?>"/></a>
			<?php } else { ?>
			<?php } ?></div>
		<div class="col-xs-3 col-sm-3" style="padding: 0;">
			<div class="col-xs-6 col-sm-6"><a class="search-btn" href="javascript:;"><i class="iconfont icon-sousuo1 f-18"></i></a></div>
			<div class="col-xs-6 col-sm-6"><a class="link-cart a-right" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>" rel="external nofollow"><i class="iconfont f-18">&#xe619;</i></a></div>
		</div>
	</div>
	<div class="search-box">
		<form method="get" action="<?php echo href_link(FILENAME_SEARCH); ?>" id="m_search_mini_form">
			<div class="form-search">
				<?php if (USE_URL_REWRITE == 0){ ?>
					<input type="hidden" value="search" name="main_page">
				<?php } ?>
				<input type="text" class="input-text" value="" name="q" id="mSearch" maxlength="100" placeholder="Search" />
				<button class="button" title="<?php echo __('Go'); ?>" type="submit" onclick=""><i class="iconfont f-18">&#xe61d;</i></button>
			</div>
		</form>
	</div>
	<div class="left-menu" id="menu" data-scroll="">
		<div class="layer-tree" onclick="hideCategory();"></div>
		<div class="left-category">
			<div class="menu-header">
				<?php if (IS_ZP == 0) { ?>
				<span><a class="logo" href="<?php echo href_link(FILENAME_INDEX); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo.png" alt="<?php echo HEADER_LOGO_ALT; ?>" title="<?php echo HEADER_LOGO_ALT; ?>"/></a></span>
				<?php } else { ?>
				<?php } ?>
				<span class="button btn-layer" onclick="hideCategory();"><i class="iconfont">&#xe601;</i></span>
			</div>
			<div class="category-list">
				<ul class="level1">
<!--					<li><a href="--><?php //echo href_link(FILENAME_INDEX); ?><!--">--><?php //echo __('Home'); ?><!--</a></li>-->
					<?php
					$categoryTree = $category_tree->getData();
					ksort($categoryTree);
					?>
					<?php if (isset($categoryTree[0])) { ?>
						<?php foreach ($categoryTree[0] as $val) { ?>
							<?php if (isset($categoryTree[$val['id']])) { ?>
								<li class="category-top">
									<span class="all-category" onclick="$(this).nextAll('ul.mobile-memu').fadeToggle(100).end().find('i.iconfont').toggleClass('icon-anonymous-iconfont icon-sub');"><i class="iconfont icon-anonymous-iconfont f-20"></i></span>
									<a class="oneline" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $val['id']); ?>"><?php echo $val['name']; ?></a>
									<ul class="mobile-memu">
										<?php foreach ($categoryTree[$val['id']] as $v) { ?>
											<li class="category-product">
												<a class="oneline" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $v['id']); ?>"><?php echo $v['name']; ?></a>
											</li>
										<?php } ?>
									</ul>
								</li>
							<?php } else { ?>
								<li class="category-product">
									<a class="oneline" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $val['id']); ?>"><?php echo $val['name']; ?></a>
								</li>
							<?php } ?>
						<?php } ?>
					<?php } ?>
					<?php if (isset($_SESSION['customer_id'])) { ?>
						<li class="menu-user"><a title="<?php echo __('Log Out'); ?>" href="<?php echo href_link(FILENAME_LOGOUT, '', 'SSL'); ?>"><?php echo __('Log Out'); ?></a></li>
					<?php } else { ?>
						<li class="menu-user"><a title="<?php echo __('Log In'); ?>" href="<?php echo href_link(FILENAME_LOGIN, '', 'SSL'); ?>"><?php echo __('Log In'); ?></a></li>
					<?php } ?>
					<li class="menu-user"><a href="<?php echo href_link(FILENAME_SEARCH_ORDER, '', 'SSL'); ?>"><?php echo __('Order Check'); ?></a></li>
					<li class="currency menu-user"><?php require($template->get_template_dir('tpl_currency_header.php', DIR_WS_TEMPLATE, $current_page, 'sidebar') . 'tpl_currency_header.php'); ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script language="javascript" type="text/javascript">
$(function(){
	var mTop = $('.mobile-header').offset().top;
	var pTop = $('.pc-header').offset().top;
	$(window).scroll(function(){
		var scrolltop =  $(document).scrollTop();
		if(scrolltop > mTop){
			$('.mobile-header .header').addClass('header-fixed');
			$('.mobile-header .search-box').css('top', 54);
			$('.mobile-header .search-bg').css('top', 54);
		} else {
			$('.mobile-header .header').removeClass('header-fixed');
			$('.mobile-header .search-box').css('top', 90);
			$('.mobile-header .search-bg').css('top', 90);
		}
		if(scrolltop > pTop){
			$('.pc-header .header').addClass('header-fixed');
			$('.pc-header .search-box').css('top', 74);
			$('.pc-header .search-bg').css('top', 74);
		} else {
			$('.pc-header .header').removeClass('header-fixed');
			$('.pc-header .search-box').css('top', 141);
			$('.pc-header .search-bg').css('top', 141);
		}
	});

	$('.category-tree').on('click',function(){
		$('.left-menu').fadeToggle();
		$('html').toggleClass('noscroll');
		$.smartScroll('menu','.category-list');
	});

	$('.cms').on('click',function(){
		$(this).find('.links').slideToggle(250);
		$(this).toggleClass('active');
	});
	
//	Search
	$('.search-btn').on('click', function () {
		$('.search-box').fadeToggle();
		$('.search-bg').fadeToggle();
		$(this).find('i.iconfont').toggleClass('icon-sousuo1 icon-cha-copy');
	});

});

function hideCategory() {
	$('.left-menu').fadeOut();
	$('html').removeClass('noscroll');
}
</script>