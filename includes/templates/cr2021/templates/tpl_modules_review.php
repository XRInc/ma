<?php include(DIR_FS_CATALOG_MODULES . get_module_directory('review.php')); ?>
<a class="cosTab" id="customer-review-tab" href="#customer-review"><!-- <span class="cos-arrow"></span> --><?php echo __('Customer Reviews') ?></a>
<div class="box-collateral box-review" >
<?php if (isset($reviewList) && count($reviewList)>0) { ?>
	<div class="pr-contents-wrapper">
		<div class="pr-pagination-top">
			<h2><?php //echo __('Customer Reviews') ?></h2>
		</div>
		<?php require($template->get_template_dir('tpl_modules_pager.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_pager.php'); ?>
		<ul class="review-row">
			<?php foreach ($reviewList as $val) { ?>
				<li>
					<p class="a-left"><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>star-review.png" alt="" width="80px"</p>
					<p class="a-left review-name"><span style="font-weight: bold;"><?php echo $val['nickname']; ?></span>&nbsp;·&nbsp;<span><?php echo $val['time_interval']; ?></span></p>
					<p><img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>Verified.png" alt=""  width="15px" height="15px" style="margin-bottom: 3px;"/>&nbsp;<span style="color: #767676!important;">Verified Buyer</span></p>
					<p class="review-text"><?php echo $val['content']; ?></p>
					
				</li>
			<?php } ?>
		</ul>
		<?php require($template->get_template_dir('tpl_modules_pager.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_pager.php'); ?>
	</div>
<?php } ?>
	<div class="form-add">
		<h2><?php echo __('Write Your Own Review') ?></h2>
		<form action="<?php echo href_link(FILENAME_PRODUCT, 'pID=' . $_GET['pID']); ?>" method="post" id="review-form">
		<div class="no-display">
			<input type="hidden" value="<?php echo $_SESSION['securityToken']; ?>" name="securityToken" />
			<input type="hidden" value="process" name="action" />
		</div>
		<div class="form-group">
			<label class="required"><em>*</em><?php echo __('Rating'); ?></label>
			<div class="input-box">
				<div id="star"></div>
			</div>
		</div>
		<div class="form-group">
			<label class="required" for="review-nickname"><em>*</em><?php echo __('Nickname'); ?></label>
			<input type="text" value="<?php echo isset($_SESSION['customer_firstname'])?$_SESSION['customer_firstname']:'';?>" class="form-control input-text required-entry" id="review-nickname" name="review[nickname]">
		</div>
		<div class="form-group">
			<label class="required" for="review-content"><em>*</em><?php echo __('Review'); ?></label>
			<textarea class="form-control required-entry" rows="5" cols="5" id="review-content" name="review[content]"></textarea>
		</div>
		<div class="buttons-set">
			<button type="submit" class="button" title="<?php echo __('Submit Review') ?>"><span><span><?php echo __('Submit Review') ?></span></span></button>
		</div>
		</form>
	</div>
	<script type="text/javascript">
		$('#star').raty({
			scoreName:'review[rating]',
			score: 5,
			size: 22,
			path:'<?php echo DIR_WS_TEMPLATE_IMAGES; ?>',
			hints:[
				'<?php echo __('Bad'); ?>',
				'<?php echo __('Poor'); ?>',
				'<?php echo __('Regular'); ?>',
				'<?php echo __('Good'); ?>',
				'<?php echo __('Gorgeous'); ?>'
			]
		});
		if(window.location.hash == "#customer-review")
		{
			$('#customer-review').click();
		}
		$('#review-form').validate();
	</script>
</div>