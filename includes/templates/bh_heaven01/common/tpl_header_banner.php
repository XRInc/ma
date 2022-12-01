<div class="header-banner  hidden-xs hidden-sm">
    <div class="banner-block1">
        <a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=1'); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/banner1.jpg" alt="" width="100%" /></a>
    </div>
</div>
<div class="header-banner  hidden-md hidden-lg">
    <div class="banner-block1">
        <a class="item" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=1'); ?>"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/m-banner1.jpg" alt="" /></a>
    </div>
</div>
<div class="add_box add_mt20 add_mb40">
    <div class="add_indexpro add_cenp">
        <?php require($template->get_template_dir('tpl_modules_bestsellers.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_bestsellers.php'); ?>
    </div>
</div>
<div class="add_box add_mt20 add_mb40">
    <div class="">
        <div class="bestsellers">
            <div class="add_title1" style="margin: 60px 0 30px 0;">
                <a href="<?php echo href_link(FILENAME_PRODUCT, 'cID=192'); ?>">
                    <p class="p1"><span class="sp1" style="padding-bottom: 0;letter-spacing: 2px;">NEW FOR FALL</span></p>
                    <p><span class="p4">MAKE ROOMM FOR THE SHADES OG THE SEASON.</span></p>
                    <p><span class="p4">COZY CHIANTI MOODY BLUES，SOFT HUES，</span></p>
                    <p><span class="p4">AND SO MUCH MORE.</span></p>
                </a>
            </div>
            <div class="" style="max-width: 1930px">
                <img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/low.jpg" alt="" width="100%">
            </div>
        </div>

    </div>
</div>
<div class="add_box add_mt20 add_mb40">
    <div class="add_indexpro add_cenp">
       <?php require($template->get_template_dir('tpl_modules_new_products.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_new_products.php'); ?>
    </div>
</div>