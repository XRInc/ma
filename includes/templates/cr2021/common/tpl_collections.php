<?php if (IS_ZP == 0 ) { ?>
<div class="collections">
    <div class="featured">
        <div class="cx_container-fluid container">
                <a class="btn-overall cx_col-6 cx_col-md-3">
                    <span class="cx-button cx-heavy-brand-font">
                        CROSSBODY
                    </span>
                </a>
                <a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=30'); ?>" class="btn-overall cx_col-6 cx_col-md-3">
                    <span class="cx-button cx-heavy-brand-font">
                        TOTES
                    </span>
                </a>
                <a class="btn-overall cx_col-6 cx_col-md-3">
                    <span class="cx-button cx-heavy-brand-font">
                        BUCKET
                    </span>
                </a>
				<a class="btn-overall cx_col-6 cx_col-md-3">
				    <span class="cx-button cx-heavy-brand-font">
				        MINI BAGS
				    </span>
				</a>
				
        </div>
    </div>
	<div class="block2">
		<a class="item hidden-xs" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=30'); ?>" >
			<div class="banner-block-left">
				<h2>MARC FOR THE HOLIDAYS</h2>
				<p>EXPLORE THE GIFT GUIDE-FROM ICONIC</p>
				<p>HERITAGE STYLES TO SHOWSTOPPING PAPTY PLECES</p>
				<span>SHOP THE GIFT GUIDE</span>
			</div>
			<div class="banner-block-right">
				<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/0000001_2.gif" alt=""></img>
			</div>
		</a>
		<a class="item visible-xs block2-xs" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=30'); ?>" >
			<div class="banner-block-xs">
				<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/0000001_2.gif" alt=""></img>
			</div>
			<div class="banner-block-left banner-block-xs">
				<h2>MARC FOR THE HOLIDAYS</h2>
				<p style="font-size:12px">EXPLORE THE GIFT GUIDE-FROM ICONIC</p>
				<p style="font-size:12px">HERITAGE STYLES TO SHOWSTOPPING PAPTY PLECES</p>
				<div class="buu" style="margin-top:20px">
				    <span>SHOP THE GIFT GUIDE</span>
				</div>
			</div>
		</a>	
	</div>
</div>
<?php } ?>

<style>
/* featured======================================================================================= */
.collections .featured .cx_container-fluid,.collections .featured .bottom-collection {
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
    flex-wrap: wrap;
    margin: 10px auto;
}
.collections .featured .cx_container-fluid a,.collections .featured .bottom-collection a{
    padding: 10px 25px;
    margin: 5px;
    background-color: #fff;
    border: #444 solid 2px;
    font-size: 18px;
    color: #444;
    width: 260px;
    text-align: center;
    font-weight: bold;
    font-family: proxima_novaextrabold,Arial,sans-serif!important;
    text-transform: uppercase;
	min-width: 135px;
}

.collections .featured .bottom-collection a{min-width: 280px;}


.collections .featured .cx_container-fluid a:hover,.collections .featured .bottom-collection a:hover {
    background-color: #444;
    border-color: #fff;
    color: #fff;
}

@media (max-width:767px) {
	.collections .featured .cx_container-fluid a{flex: 0 46%;}
	.collections .featured .bottom-collection a{width: 100%;}
}
@media (max-width:345px) {
	.collections .featured .cx_container-fluid{display: block;}
	.collections .featured .cx_container-fluid a{display: inline-block;width: 49%;margin: 3px 0;}
}

/* ======================================================================================= */
/* featured======================================================================================= */
.collections .target-slot-wrap {position: relative;max-width: 1200px;margin: 0 auto;}
.collections .text-container {position: absolute;top: 50%;left: 15px;transform: translateY(-50%);}
.collections .target-slot-wrap img {margin: 0 auto;}
.collections .cx-button-parent {display: flex;flex-direction: column;align-items: center;}
.collections .cx-button-parent .cx-button-link {padding: 8px 20px;background-color: #fff;border: #fff solid 2px;font-size: 18px;color: #000;font-weight: bold;width: 240px;margin: 10px 0;}
.collections .cx-button-parent .cx-button-link:hover {background-color: #000;color: #fff;}
.collections-title{text-align: center;font-size: 18px;color: #444;font-weight: bold;margin: 15px 10px;line-height: 1.2;font-family: proxima_novaregular,Arial,sans-serif;}
/* ======================================================================================= */




/* newbanner ================================================= */
.block2{max-width: 1200px;margin-top: 10px;margin-left: auto;margin-right: auto;}
.banner-block1 a,.block2 a{display: flex;align-items: center;justify-content: space-between;background: #000;margin-bottom: 10px;}
.banner-block1 a{min-height: 366px;}
.banner-block1 .banner-block-left,
.banner-block1 .banner-block-right,
.block2 .banner-block-left,
.block2 .banner-block-right{flex-basis: 50%;max-width: 50%;padding: 0;margin: 0 auto;}
.banner-block1 .banner-block-right img,
.block2 img{width: 100%;}
.banner-block1 .banner-block-left img{margin-bottom: 40px;}
.banner-block1 .banner-block-left p{color: #fff;line-height: 12px;font-size: 14px;}
.banner-block1 .banner-block-left span{display: inline-block; padding: 13px 5px 12px 5px; background-color: #fff;border: #fff solid 2px;font-size: 18px; color: #000;width: 260px;margin-top: 26px;}
.banner-block1 a:hover span{background: none;color: #fff;}

.block2 a{background: none; border: 2px solid #ebebeb;}
.block2 a:hover{color: #000;}
.block2 a:hover span{border: 1px solid #000;}
.block2 .banner-block-left{flex-basis: 35%;max-width: 35%;text-align: center;}
.block2 .banner-block-right{flex-basis: 65%;max-width: 65%;}
.block2 .banner-block-left h2{font-weight: bold;font-size: 16px;}
.block2 .banner-block-left img{max-width: 70%;margin: 10px;}
.block2 .banner-block-left span{font-weight: 500;padding: 8px 20px;background-color: #000;border: #fff solid 2px;font-size: 10px;color: #fff;font-weight: bold;}
.block2 .banner-block-left p,.block2 .banner-block-left span{font-size: 15px;}

.banner-block-xs, .banner-block-xs img,.block2-xs{display: block;width: 100%;border: none!important;text-align: center;}
.block2-xs .banner-block-left{flex-basis: 90%;max-width: 90%;}
@media (max-width:992px) {
	.banner-block1 a {position: relative;}
	.banner-block1 .banner-block-left{position: absolute;z-index: 2;top: 0;left: 0;width: 100%;height: 100%;flex-basis: 100%;max-width: 100%;padding: 15px 0;}
	.banner-block1 .banner-block-left img{max-width: 300px;margin: 0 auto;margin-bottom: 40px;}
	.banner-block1 .banner-block-left span{background-color:#000;position: absolute;bottom: 0; margin-top: 0;transform: translateX(-50%) translateY(-100%);}
	.block2 .banner-block-left img{margin: 10px auto;}
	.block2 .banner-block-left span{margin-top: 0;}
}
</style>