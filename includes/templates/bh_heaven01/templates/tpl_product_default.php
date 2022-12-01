<?php if ($message_stack->size('product') > 0) echo $message_stack->output('product'); ?>
<div class="product-view">
	<div class="row product-essential">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 product-img-box">
			<?php require($template->get_template_dir('tpl_modules_additional_image.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_additional_image.php'); ?>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 product-shop-box">
			<form id="form-validate" method="post" action="<?php echo href_link(FILENAME_PRODUCT, 'pID=' . $productInfo['product_id'] . '&action=add_product'); ?>">
				<div class="no-display">
					<input type="hidden" value="<?php echo $_SESSION['securityToken']; ?>" name="securityToken" />
					<input type="hidden" value="<?php echo $productInfo['product_id']; ?>" name="pID" />
				</div>
				<div class="product-name">
					<h1><?php echo $productInfo['name']; ?></h1>
				</div>
				<div class="review-box">
					<?php if ($productInfo['review']['total']>0) { ?>
					<span class="star star<?php echo $productInfo['review']['rating']; ?>"></span>
					<a rel="nofollow" href="javascript:;" onclick="reviewTab();">(<?php echo $productInfo['review']['total']; ?>)</a>&nbsp;
					<?php } else { ?>
					<a rel="nofollow" href="javascript:;" onclick="reviewTab();"><?php echo __('Write a review'); ?></a>
					<?php } ?>
				</div>
				<div class="divider"></div>
				<p class="sku"><?php echo __('Model'); ?>: <span><?php echo $productInfo['sku']; ?></span></p>
				<?php if ($productInfo['in_stock']==1) { ?>
				<p class="availability in-stock"><?php echo __('Availability'); ?>: <span><?php echo __('In stock'); ?></span></p>
				<?php } else { ?>
				<p class="availability out-of-stock"><?php echo __('Availability'); ?>: <span><?php echo __('Out of Stock'); ?></span></p>
				<?php } ?>
				<?php if ($productInfo['specials_price'] > 0) { ?>
    			    <div class="amount-box">
    			        <p class="old-amount">
							<span class="amount-value"><?php echo $currencies->display_price($productInfo['price']); ?></span>
						</p>
    		        </div>
    			    <div class="amount-box">
    			        <p class="specials-amount">
							<span class="amount-value"><?php echo $currencies->display_price($productInfo['specials_price']); ?></span>
						</p>
    			    </div>
				<?php }else{?>
    				<div class="amount-box">
    				    <span class="regular-amount">
                			<span class="amount-value"><?php echo $currencies->display_price($productInfo['price']); ?></span>
                		</span>
    			    </div>
				<?php }?>
				<div class="divider"></div>
				<?php if (not_null($productInfo['short_description'])) { ?>
					<div class="short-description">
						<h3><?php echo __('Quick Overview'); ?></h3>
						<div class="std"><?php echo $productInfo['short_description']; ?></div>
					</div>
					<div class="divider"></div>
				<?php } ?>
				<?php require($template->get_template_dir('tpl_modules_color.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_color.php'); ?>
				<?php if (isset($productInfo['attribute']) && count($productInfo['attribute']) > 0) { ?>
					<?php require($template->get_template_dir('tpl_modules_attribute.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_attribute.php'); ?>
				<?php } ?>
				<?php if ($productInfo['in_stock']==1) { ?>
					<div class="add-to-cart">
						<?php if ($productInfo['qty'] == true) { ?>
							<label for="qty"><?php echo __('Quantity:'); ?></label>
							<div class="num_ops hidden-xs">
								<div class="reduce action">-</div>
								<input type="text" class="input-text required-entry qty" title="<?php echo __('Qty'); ?>" value="1" maxlength="3" id="qty" name="qty" />
								<div class="pus action">+</div>
							</div>
							<div class="num_mobile visible-xs">
								<select id="qtySelect" class="qty form-control">
									<?php for ($i = 1; $i < 100; $i++) { ?>
										<option value="<?php echo $i ?>"><?php echo $i ?></option>
									<?php } ?>
								</select>
							</div>
						<?php } ?>
						<button type="submit" class="button btn-incart" title="<?php echo __('Add to Cart'); ?>"><span><span><?php echo __('Add to Cart'); ?></span></span></button>
					</div>
				<?php } ?>
			</form>
		</div>
	</div>
	<div class="product-collateral">
		<ul class="cos-listView">
			<?php if (not_null($productInfo['description'])) { ?>
				<li>
					<a class="cosTab" href="#proDescription"><span class="cos-arrow"></span><?php echo __('Description'); ?></a>
					<div class="std" id="proDescription"><?php echo $productInfo['description']; ?></div>
				</li>
			<?php } ?>
			<li><?php require($template->get_template_dir('tpl_modules_review.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_review.php'); ?></li>
		</ul>
		<?php require($template->get_template_dir('tpl_modules_related.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_related.php'); ?>
		<?php require($template->get_template_dir('tpl_modules_also_purchased.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_also_purchased.php'); ?>
	</div>
</div>
<script type="text/javascript"><!--
$(function () {
	$('#form-validate').validate({
    submitHandler: function(form) {
    if($('#form-validate').valid()) {
    $('html').addClass('noscroll');
    $('.masking-layer').show();
    $('.shoppingcartBody').on('touchmove', function (event) { event.preventDefault(); });
    }
    form.submit();
    }
    });
// qty操作
qtyAction();
});

function qtyAction(){
	$('.reduce').on('click',function () {var val = parseInt($('input.qty').val());if(val != 1){$('.qty').val(val-1);}});
	$('.pus').on('click',function () {var val = parseInt($('input.qty').val());$('.qty').val(val+1);});
	$('#qtySelect').on('change',function(){$('#qty').val($(this).val());});
	$('#qty').on('change',function(){$('#qtySelect').val(parseInt($(this).val()));});
}

function reviewTab(){
	if($('#customer-review-tab').length > 0){
		$('#customer-review-tab').click();
	}
	$('html,body').animate({scrollTop:$('#customer-review').offset().top});
}
if(window.location.hash == "#customer-review"){
    reviewTab();
}

//--></script>