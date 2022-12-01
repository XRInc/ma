<div class="pc-header hidden-xs hidden-sm">
    <div class="header">
        <div class="nav-container">
            <div id="nav">
                <div class="logo-img">
                    <a href="<?php echo href_link(FILENAME_INDEX); ?>">
                        <img src="<?php echo $template->get_template_dir(HEADER_LOGO_SRC, DIR_WS_TEMPLATE, $current_page, 'images') . HEADER_LOGO_SRC; ?>"
                             alt="">
                    </a>
                </div>
                <div class="logo-img">
                    <div class="nav-center">
                        <?php echo $category_tree->buildHeaderTree(0, 3); ?>
                    </div>
                </div>
                <ul class="links">
                    <li>
                        <div class="add_search" id="pc_search_btn">
                            <span style="cursor: pointer;" onclick="addC(this);"><i class="iconfont add_iconfont  f-25">&#xe630;</i></span>
                            <form method="get" action="<?php echo href_link(FILENAME_SEARCH); ?>"
                                  id="pc_search_mini_form" class="search_mini_form add_hid">
                                <div class="form-search add_form-search">
                                    <?php if (USE_URL_REWRITE == 0) { ?>
                                        <input type="hidden" value="search" name="main_page">
                                    <?php } ?>
                                    <input type="text" class="input-text"
                                           value="<?php echo isset($_GET['q']) ? $_GET['q'] : __(''); ?>" name="q"
                                           id="pcSearch" placeholder="Search Here" onclick=""/>
                                    <button class="button" title="<?php echo __('Search'); ?>" type="submit"><i
                                                class="iconfont f-25">&#xe630;</i></button>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li><a title="<?php echo __('Order Check'); ?>"
                           href="<?php echo href_link(FILENAME_SEARCH_ORDER, '', 'SSL'); ?>"
                           rel="external nofollow"></a></li>
                    <li><a class="link-account" title="<?php echo __('My Account'); ?>"
                           href="<?php echo href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><i class="iconfont">&#xe699;</i></a>
                    </li>
                    <li><a class="link-cart" title="<?php echo __('My Cart'); ?>"
                           href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>"><i class="iconfont">&#xe600;</i></a>
                    </li>
                    <li><?php require($template->get_template_dir('tpl_currency_header.php', DIR_WS_TEMPLATE, $current_page, 'sidebar') . 'tpl_currency_header.php'); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php echo ONLINE_SERVICE; ?>
<div class="mobile-header hidden-md hidden-lg">
    <div class="header-container">
        <div class="container">
            <p class="welcome-msg">
                <a href="#">
                    <?php echo STORE_WELCOME; ?>
                </a>
            </p>
        </div>
    </div>
    <div class="header" style="display:flex; justify-content: space-between;">
        <div class="add_m_nav">
            <a href="javascript:;" class="category-tree a-left"><i class="iconfont   f-25">&#xe64c;</i></a>
            <a class="logo" href="<?php echo href_link(FILENAME_INDEX); ?>"><img
                        src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>logo.png" alt="<?php echo HEADER_LOGO_ALT; ?>"
                        title="<?php echo HEADER_LOGO_ALT; ?>"/></a>
        </div>
        <div class="add_m_nav">
            <a class="link-account" title="<?php echo __('My Account'); ?>"
               href="<?php echo href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><i class="iconfont">&#xe699;</i></a>
            <div class="add_search">
                <a style="cursor: pointer;" onclick="addC(this);"><i
                            class="iconfont add_iconfont add_iconfont_hid f-25">&#xe630;</i></a>
                <form method="get" action="<?php echo href_link(FILENAME_SEARCH); ?>" id="m_search_mini_form"
                      class="search_mini_form add_hid">
                    <div class="form-search add_form-search">
                        <?php if (USE_URL_REWRITE == 0) { ?>
                            <input type="hidden" value="search" name="main_page">
                        <?php } ?>
                        <input type="text" class="input-text"
                               value="<?php echo isset($_GET['q']) ? $_GET['q'] : __(''); ?>" name="q" id="pcSearch"
                               placeholder="Search Here" onclick=""/>
                        <button class="button" title="<?php echo __('Search'); ?>" type="submit"><i
                                    class="iconfont f-25">&#xe630;</i></button>
                    </div>
                </form>
            </div>
            <a class="link-cart a-right" href="<?php echo href_link(FILENAME_SHOPPING_CART, '', 'SSL'); ?>"
               rel="external nofollow"><i class="iconfont f-25">&#xe600;</i></a>
        </div>
    </div>
    <div class="left-menu" id="menu" data-scroll="">
        <div class="layer-tree" onclick="hideCategory();"></div>
        <div class="left-category">
            <div class="add_m_level0">
                <div class="level0_i active"><i class="iconfont"> &#xe64c;</i>&nbsp;Menu</div>
                <div class="level0_i">Account</div>
                <div class="level0_i">Settings</div>
            </div>
            <div class="category-list">
                <ul class="level1 level0_list level0_list_active">
                    <li><a href="<?php echo href_link(FILENAME_INDEX); ?>"><?php echo __('Home'); ?></a></li>
                    <?php
                    $categoryTree = $category_tree->getData();
                    ksort($categoryTree);
                    ?>
                    <?php if (isset($categoryTree[0])) { ?>
                        <?php foreach ($categoryTree[0] as $val) { ?>
                            <?php if (isset($categoryTree[$val['id']])) { ?>
                                <li class="category-top">
                                    <span class="all-category"
                                          onclick="$(this).nextAll('ul.mobile-memu').show().animate({left:0},200);"><i
                                                class="iconfont f-20">&#xe69b;</i></span>
                                    <a class="oneline"
                                       href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $val['id']); ?>"><?php echo $val['name']; ?></a>
                                    <ul class="mobile-memu">
                                        <li class="category-title"><a href="javascript:;" class="return"
                                                                      onclick="$(this).closest('ul.mobile-memu').animate({left:'100%'},200).hide(200);"><i
                                                        class="iconfont f-20">&#xe69a;</i><?php echo $val['name']; ?>
                                            </a></li>
                                            
                                        <?php foreach ($categoryTree[$val['id']] as $v) { ?>
                                            <li class="category-top">
                                                <span class="all-category" onclick="$(this).nextAll('ul.mobile-memu').show().animate({left:0},200);"><i
                                                    class="iconfont f-20">&#xe69b;</i>
                                                </span>
                                                <a class="oneline"
                                                   href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $val['id']); ?>"><?php echo $v['name']; ?>
                                                </a>
                                                <ul class="mobile-memu">
                                                    <li class="category-title"><a href="javascript:;" class="return" onclick="$(this).closest('ul.mobile-memu').animate({left:'100%'},200).hide(200);"><i class="iconfont f-20">&#xe69a;</i><?php echo $v['name']; ?></a>
                                                    </li>
                                                <?php foreach ($categoryTree[$v['id']] as $d) { ?>
                                                    <li class="category-product">
                                                        <a class="oneline" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $d['id']); ?>"><?php echo $d['name']; ?></a>
                                                 </li>
                                                <?php } ?>
                                                </ul>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php } else { ?>
                                <li class="category-product">
                                    <a class="oneline"
                                       href="<?php echo href_link(FILENAME_CATEGORY, 'cID=' . $val['id']); ?>"><?php echo $val['name']; ?></a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </ul>
                <ul class="level1 level0_list">
                    <?php if (isset($_SESSION['customer_id'])) { ?>
                        <li><a title="<?php echo __('Log Out'); ?>"
                               href="<?php echo href_link(FILENAME_LOGOUT, '', 'SSL'); ?>"><?php echo __('Log Out'); ?></a>
                        </li>
                    <?php } else { ?>
                        <li><a title="<?php echo __('Log In'); ?>"
                               href="<?php echo href_link(FILENAME_LOGIN, '', 'SSL'); ?>"><?php echo __('Log In'); ?></a>
                        </li>
                    <?php } ?>
                    <?php if (isset($_SESSION['customer_id'])) { ?>
                        <li><a title="<?php echo __('My Account'); ?>"
                               href="<?php echo href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><?php echo __('My Account'); ?></a>
                        </li>
                    <?php } else { ?>
                        <li><a title="<?php echo __('Creat Account'); ?>"
                               href="<?php echo href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'); ?>"><?php echo __('Creat Account'); ?></a>
                        </li>
                    <?php } ?>
                    <li>
                        <a href="<?php echo href_link(FILENAME_SEARCH_ORDER, '', 'SSL'); ?>"><?php echo __('Order Check'); ?></a>
                    </li>
                    <li class="cms">
                        <a class="title" href="javascript:;"><?php echo __('Company Info'); ?></a>
                        <ul class="links">
                            <li><a title="<?php echo __('About Us'); ?>"
                                   href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=1'); ?>"
                                   rel="external nofollow"><?php echo __('About Us'); ?></a></li>
                            <li><a title="<?php echo __('Contact Us'); ?>"
                                   href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=2'); ?>"
                                   rel="external nofollow"><?php echo __('Contact Us'); ?></a></li>
                            <li><a title="<?php echo __('Privacy & Security'); ?>"
                                   href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=3'); ?>"
                                   rel="external nofollow"><?php echo __('Privacy & Security'); ?></a></li>
                            <li><a title="<?php echo __('Returns Policy'); ?>"
                                   href="<?php echo href_link(FILENAME_CMS_PAGE, 'cpID=5'); ?>"
                                   rel="external nofollow"><?php echo __('Returns Policy'); ?></a></li>
                            <li><a title="<?php echo __('Site Map'); ?>"
                                   href="<?php echo href_link(FILENAME_SITE_MAP); ?>"
                                   rel="external nofollow"><?php echo __('Site Map'); ?></a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="level1 level0_list">
                    <li class="currency"><?php require($template->get_template_dir('tpl_currency_header.php', DIR_WS_TEMPLATE, $current_page, 'sidebar') . 'tpl_currency_header.php'); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script language="javascript" type="text/javascript">
    $(function () {
        var mTop = $('.mobile-header').offset().top;
        var pTop = $('.pc-header').offset().top;
        $(window).scroll(function () {
            var scrolltop = $(document).scrollTop();
            if (scrolltop > mTop) {
                $('.mobile-header .header').addClass('header-fixed');
            } else {
                $('.mobile-header .header').removeClass('header-fixed');
            }
            if (scrolltop > pTop) {
                $('.pc-header .header').addClass('header-fixed');
            } else {
                $('.pc-header .header').removeClass('header-fixed');
            }
        });

        $('.category-tree').on('click', function () {
            $('.left-menu').fadeIn();
            $('html').addClass('noscroll');
            $.smartScroll('menu', '.category-list');
        });

        $('.cms').on('click', function () {
            $(this).find('.links').slideToggle(250);
            $(this).toggleClass('active');
        })
        // add_from
        $('.add_iconfont').on('click', function (e) {
            if ($("#pc_search_mini_form").hasClass("add_hid")) {
                $("#pc_search_mini_form").removeClass("add_hid");
                $(this).addClass("add_iconfont_show");
            } else if (!$("#pc_search_mini_form").hasClass("add_hid")) {
                $("#pc_search_mini_form").addClass("add_hid");
                $(this).removeClass("add_iconfont_show");
            }
            if ($("#m_search_mini_form").hasClass("add_hid")) {
                $("#m_search_mini_form").removeClass("add_hid");
                $(this).addClass("add_iconfont_show");
            } else if (!$("#m_search_mini_form").hasClass("add_hid")) {
                $("#m_search_mini_form").addClass("add_hid");
                $(this).removeClass("add_iconfont_show");
            }
        });
        //add_left_nav
        $(".level0_i").on("click", function (e) {
            $(".level0_list").removeClass("level0_list_active");
            $(".level0_list").eq($(this).index()).addClass("level0_list_active");
            $(".level0_i").removeClass("active").eq($(this).index()).addClass("active");
            console.log($(".level0_list").eq($(this).index()));
        })
    });

    function hideCategory() {
        $('.left-menu').fadeOut();
        $('html').removeClass('noscroll');
    }
</script>
<script type="text/javascript">
    function addC(s) {
        var t = document.getElementById('search_input');
        c = s.className;
        //查找 空格more 而非more
        if (c != null && c.indexOf(' s') > -1) {
            //连空格一起替换
            s.className = c.replace(' s', '');
            t.className = t.className.replace(' input_show', '');
        } else {
            s.className = c + ' s';
            t.className = t.className + ' input_show';
        }
    }
</script>