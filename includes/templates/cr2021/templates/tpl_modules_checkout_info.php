<form id="form-validate" method="post" action="<?php echo SHOPPING_CART_MODE == 0 ? href_link(FILENAME_SHOPPING_CART, '', 'SSL') : href_link(FILENAME_CHECKOUT, '', 'SSL'); ?>">
	<div class="no-display">
		<input type="hidden" value="<?php echo $_SESSION['securityToken']; ?>" name="securityToken" />
		<input type="hidden" value="process" name="action" />
	</div>
	<div id="checkout-steps" class="row">
		<ol class="col-wide opc col-sm-7 col-md-7 col-xs-12">
			<li class="section active" id="opc-billing">
				<?php require($template->get_template_dir('tpl_modules_checkout_billing.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_checkout_billing.php'); ?>
			</li>
			<li class="section" id="opc-shipping">
				<?php require($template->get_template_dir('tpl_modules_checkout_shipping.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_checkout_shipping.php'); ?>
			</li>
		</ol>
		<ol class="col-narrow opc col-sm-5 col-md-5 col-xs-12">
			<li class="section active">
				<?php require($template->get_template_dir('tpl_modules_checkout_shipping_method.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_checkout_shipping_method.php'); ?>
			</li>
			<li class="section active">
				<?php require($template->get_template_dir('tpl_modules_checkout_payment_method.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_checkout_payment_method.php'); ?>
			</li>
			<li class="section active" id="opc-order_review">
				<?php require($template->get_template_dir('tpl_modules_checkout_order_review.php', DIR_WS_TEMPLATE, $current_page, 'templates') . 'tpl_modules_checkout_order_review.php'); ?>
			</li>
		</ol>
	</div>
</form>
<style>
	@keyframes rotation{from{transform:rotate(0deg)}to{transform:rotate(359deg)}}
	@-webkit-keyframes rotation{from{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}
	@-moz-keyframes rotation{from{-moz-transform:rotate(0deg);transform:rotate(0deg)}to{-moz-transform:rotate(359deg);transform:rotate(359deg)}}
	@-o-keyframes rotation{from{-o-transform:rotate(0deg);transform:rotate(0deg)}to{-o-transform:rotate(359deg);transform:rotate(359deg)}}
	.shoppingcartBody {position: relative;}
	.masking-layer {position: fixed; top: 40%; right: 0; bottom: 0; left: 0; z-index: 9998; margin: 0; margin-top: -50px; text-align: center;}
	.masking-layer:before {content: ''; display: block; margin: 0 auto 10px; text-align: center; width: 100px; height: 100px; border-left: 5px solid #000; border-left: 5px solid rgba(0,0,0,.2); border-right: 5px solid #000; border-right: 5px solid rgba(0,0,0,.2); border-bottom: 5px solid #000; border-bottom: 5px solid rgba(0,0,0,.2); border-top: 5px solid #2180c0; border-radius: 100%; -webkit-animation: rotation .7s infinite linear; -moz-animation: rotation .7s infinite linear; -o-animation: rotation .7s infinite linear; animation: rotation .7s infinite linear;}
	.masking-layer:after {content: ''; position: fixed; z-index: -1; top: 0; right: 0; bottom: 0; left: 0; background: #fff; -moz-opacity: .9; -khtml-opacity: .9; -webkit-opacity: .9; opacity: .9; -ms-filter: alpha(opacity=90); filter: alpha(opacity=90);}
	.masking-layer .tips {margin: 20px 0;}
	.masking-layer .lock-icon {position: fixed; width: 50px; height: 50px; top: 40%; left: 50%; margin: -25px 0 0 -25px; z-index: 9999;}
	
	.cart_limit{display: block; margin: 0 auto; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(255, 255, 255,0.97); z-index: 9999; }
	.cart_limit div{width: 210px; height: 60px; position: absolute; top: 50%; left: 50%; margin-top: -30px; margin-left: -105px; font-size: 14px;}
	.cart_limit div{height: 200px; border-radius: 15px;box-shadow: 0 0 10px #b5b3b3;padding: 20px;line-height: 19px;width: 370px;transform: translateX(-50%);margin-left: unset;}
	.cart_limit_close{position: absolute;left: 50%;transform: translateX(-50%); bottom:20px;display: block;width: 145px;height:50px;cursor: pointer;background: #3783f1;color: #fff;font-size: 22px;line-height: 48px;border-radius: 25px;box-shadow: 0 0 8px #b9b9b9;}
</style>
<script type="text/javascript"><!--
function newAddress(prefix) {
	var select = $("#" + prefix + "-address-select");
	var from = $("#" + prefix + "-new-address-form");
	if (select.val()==""||select.length==0) {
		from.show();
	} else {
		from.hide();
	}
}
function same_as_billing()
{
	if ($("input:radio[name='use_for_shipping']:checked").val()==1) {
		$('#opc-shipping').removeClass("active");
	} else {
		$('#opc-shipping').addClass("active");
	}
}
same_as_billing();
newAddress('billing');
newAddress('shipping');

$('.shoppingcartBody').append('<div class="masking-layer" style="display: none;"><p class="tips">Please wait……</p><img class="lock-icon" src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>icon_lock.png?v1"/></div>');
$('.shoppingcartBody').append('<div class="cart_limit" style="display: none;"> <div><?php echo __('SINCE THE ORDER AMOUNT EXCEEDS THE MAXIMUM PAYMENT ($300), PLEASE PURCHASE SEPARATELY. THANK YOU FOR YOUR TIME AND UNDERSTANDING.'); ?><span class="cart_limit_close">RETURN</span> </div> </div>');
	
	$('#form-validate').validate({
	    submitHandler: function(form) {
	        <?php if ($grand_total > 300) { ?>
	        $('.cart_limit').show();
	        <?php } else { ?>
	        if($('#form-validate').valid()) {
	            $('html').addClass('noscroll');
	            $('.masking-layer').show();
	            $('.shoppingcartBody').on('touchmove', function (event) { event.preventDefault(); });
	        }
	
	        <?php if (defined('FACEBOOK_ID') && strlen(FACEBOOK_ID) > 0) { ?> fbq('track', 'InitiateCheckout'); <?php } ?>
	        <?php if (defined('TIKTOK_ID') && strlen(TIKTOK_ID) > 0) { ?> ttq.track('InitiateCheckout'); <?php } ?>
	        setTimeout(function(){form.submit();}, 1000);
	        <?php } ?>
	    }
	});
	$(function () {
	    $('.cart_limit_close').click(function () {
	        $('.cart_limit').hide();
	    })
	})
	
</script>
