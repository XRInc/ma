<body class="<?php echo str_replace('_', '', $current_page) . 'Body'; ?>">
<div class="wrapper">
	<?php require($template->get_template_dir('tpl_noscript.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_noscript.php'); ?>
	<div class="page">
    	<?php require($template->get_template_dir('tpl_header.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_header.php'); ?>
<!--		--><?php //require($template->get_template_dir('tpl_breadcrumb.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_breadcrumb.php'); ?>
		<div class="main-container">
			<div class="container no-padding">
				<?php require($template->get_template_dir('tpl_' . $current_page . '_default.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_' . $current_page . '_default.php'); ?>
            </div>
        </div>
        <?php require($template->get_template_dir('tpl_footer.php', DIR_WS_TEMPLATE, $current_page, 'common') . 'tpl_footer.php'); ?>
    </div>
</div>
</body>
