<?php require(DIR_FS_CATALOG_MODULES . 'meta.php'); ?>
<!DOCTYPE html>
<html xml:lang="<?php echo STORE_LANGUAGE; ?>" lang="<?php echo STORE_LANGUAGE; ?>">
<head>
<?php if (defined('FACEBOOK_ID') && strlen(FACEBOOK_ID) > 0) { ?>
	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');

		<?php $facebookId = explode(',',FACEBOOK_ID); ?>
		<?php foreach ($facebookId as $val) { ?>
		<?php if (!isset($val) || !is_numeric($val) || $val < 1) continue; ?>
		fbq('init', '<?php echo $val; ?>');
		<?php } ?>

		fbq('track', 'PageView');
		<?php switch ($current_page) {
			case FILENAME_PRODUCT:
				echo "fbq('track', 'ViewContent');";
				break;
			case FILENAME_ACCOUNT:
				echo isset($_GET['success']) ? "fbq('track', 'CompleteRegistration');" : "";
				break;
			case 'checkout_result':
				if ($orderInfo['order_status_id'] == 3
					&& !isset($_SESSION['facebook_purchase'])
					&& !isset($_GET['order_token'])) {
					echo "fbq('track', 'Purchase', {value: '" . $currencies->get_price($orderInfo['order_total'], $orderInfo['currency']['code'], $orderInfo['currency']['value']) . "', currency: '" . $orderInfo['currency']['code'] . "'});";
				}
				break;
		} ?>
	</script>
	<noscript>
		<?php foreach ($facebookId as $val) { ?>
			<?php if (!isset($val) || !is_numeric($val) || $val < 1) continue; ?>
			<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $val; ?>&ev=PageView&noscript=1" />
		<?php } ?>
	</noscript>
	<!-- End Facebook Pixel Code -->
<?php } ?>
<title><?php echo $metaInfo['title']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="keywords" content="<?php echo $metaInfo['keywords']; ?>" />
<meta name="description" content="<?php echo $metaInfo['description']; ?>" />
<meta name="facebook-domain-verification" content="<?php echo FACEBOOK_DOMAIN_VERIFICATION; ?>" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="renderer" content="webkit">
<?php if (IS_ZP == 0) { ?>
<link rel="icon" href="<?php echo DIR_WS_TEMPLATE; ?>favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo DIR_WS_TEMPLATE; ?>favicon.ico" type="image/x-icon" />
<?php } ?>
<base href="<?php echo (($request_type=='SSL')?HTTPS_SERVER:HTTP_SERVER) . DIR_WS_CATALOG; ?>" />
<link href="<?php echo $metaInfo['canonical']; ?>" rel="canonical" />
<?php // ??????????????????css???????????????????????????style*.css??????????????? ?>
	<link rel="stylesheet" type="text/css" href="js/jquery/bootstrap-3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_375202_rffro0w6xuutmx6r.css" />
<?php $directory_css = $template->get_template_dir('.css', DIR_WS_TEMPLATE, $current_page, 'css'); ?>
<?php $directory_array = $template->get_template_part($directory_css, '/^style/', '.css'); ?>
<?php foreach ($directory_array as $_file) { ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $directory_css . $_file; ?>" />
<?php } ?>
<?php //??????????????????modules/pages/(????????????)???????????????????????????style*.css??????????????? ?>
<?php $directory_array = $template->get_template_part($page_directory, '/^style/', '.css'); ?>
<?php foreach ($directory_array as $_file) { ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $code_page_directory . '/' . $_file; ?>" />
<?php } ?>
	<script type="text/javascript" src="js/jquery/jquery.js"></script>
	<script type="text/javascript" src="js/jquery/base.js"></script>
	<script type="text/javascript" src="js/jquery/validate.js"></script>
<?php if (STORE_LANGUAGE!='en') { ?>
    <script type="text/javascript" src="js/jquery/validate/messages_<?php echo STORE_LANGUAGE; ?>.js"></script>
<?php } ?>
	<script type="text/javascript" src="js/jquery/tabs.js"></script>
<?php //??????????????????js???????????????????????????jscript_*.js??????????????? ?>
<?php $directory_array = $template->get_template_part(DIR_WS_TEMPLATE_JS, '/^jscript_/', '.js'); ?>
<?php foreach ($directory_array as $_file) { ?>
	<script type="text/javascript" src="<?php echo DIR_WS_TEMPLATE_JS . $_file; ?>"></script>
<?php } ?>
<?php //??????????????????modules/pages/(????????????)???????????????????????????jscript_*.js??????????????? ?>
<?php $directory_array = $template->get_template_part($page_directory, '/^jscript_/', '.js'); ?>
<?php foreach ($directory_array as $_file) { ?>
	<script type="text/javascript" src="<?php echo $code_page_directory . '/' . $_file; ?>"></script>
<?php } ?>
<?php //??????????????????modules/pages/(????????????)???????????????????????????jscript_*.php??????????????? ?>
<?php $directory_array = $template->get_template_part($page_directory, '/^jscript_/', '.php'); ?>
<?php foreach ($directory_array as $_file) { ?>
	<?php require($page_directory . '/' . $_file); ?>
<?php } ?>
<script type="text/javascript">
    var event_id = "<?php echo put_orderNO($orderInfo['order_id']);?>";
</script>
<link rel="stylesheet" type="text/css" href="<?php echo DIR_WS_TEMPLATE_CSS; ?>new-style.css" />
</head>
