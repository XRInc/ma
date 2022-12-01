<body class="<?php echo str_replace('_', '', $current_page) . 'Body'; ?>">
<div class="wrapper">
	<?php require($template->get_template_dir('tpl_noscript.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_noscript.php'); ?>
	<div class="page">
    	
    	<div class="main-container col2-left-layout">
            <div class="container">

                <?php require($template->get_template_dir('tpl_header.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_header.php'); ?>

                <div class="categoryBanner">
                    <a href=""><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banner.jpg"></a>
                    <div class="bannerText">
                        <div class="TextBox">
                            <div class="leftBox">
                                <h3>Find the Boundaries. Push Through!</h3>
                                <h2>Shoes Sale</h2>
                            </div>
                            <div class="rightBox priceBox">
                                    <div class="shopBtn">
                                        <h4>Starting At</h4>
                                        <h5 class="coupon-sale-text heading-light">$<b>119</b>99</h5>
                                        <div><button class="btn">SHOP NOW!</button></div>
                                    </div>                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <?php require($template->get_template_dir('tpl_breadcrumb.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_breadcrumb.php'); ?>
                    <div id="mainBox" class="col-main">
                        <?php require($template->get_template_dir('tpl_' . $current_page . '_default.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_' . $current_page . '_default.php'); ?>
                    </div>
                    <div class="col-left sidebar">
                        <?php require($template->get_template_dir('tpl_col_left.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_col_left.php'); ?>
                    </div>
                </div>
                <?php require($template->get_template_dir('tpl_footer.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_footer.php'); ?>

            </div>

        </div>
    </div>
</div>
</body>
<script language="javascript" type="text/javascript">

$(function() {
    if($(window).width()>767){
        $('#mainBox').addClass('col-main');
        $('.col-left').removeClass('no-display');
    }else{
        $('#mainBox').removeClass('col-main');
        $('.col-left').addClass('no-display');
    }
});
</script>
