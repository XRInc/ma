<body class="<?php echo str_replace('_', '', $current_page) . 'Body'; ?>">
<?php require($template->get_template_dir('tpl_header.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_header.php'); ?>

<div class="wrapper">
	<?php require($template->get_template_dir('tpl_noscript.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_noscript.php'); ?>
	<div class="page add_catefix">
    	<div class="main-container col2-left-layout">
            <?php require($template->get_template_dir('tpl_breadcrumb.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_breadcrumb.php'); ?>
            <div class="container">
                <div class="main">
                    <div class="col-left sidebar">
                        <?php require($template->get_template_dir('tpl_col_left.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_col_left.php'); ?>
                    </div>
                    <div id="mainBox" class="col-main">
                        
                        <?php require($template->get_template_dir('tpl_' . $current_page . '_default.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_' . $current_page . '_default.php'); ?>
                    </div>
                </div>
                

            </div>
            <?php require($template->get_template_dir('tpl_footer.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_footer.php'); ?>
        </div>
    </div>
</div>
</body>
<script language="javascript" type="text/javascript">

// $(function() {
//     if($(window).width()>767){
//         $('#mainBox').addClass('col-main');
//         $('.col-left').removeClass('no-display');
//     }else{
//         $('#mainBox').removeClass('col-main');
//         $('.col-left').addClass('no-display');
//     }
// });



</script>
