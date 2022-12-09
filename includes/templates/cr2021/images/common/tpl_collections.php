<?php if (IS_ZP == 0 ) { ?>
<div class="collections">
    <div class="featured">
        <div class="cx_container-fluid">
                <a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=1'); ?>" class="btn-overall cx_col-6 cx_col-md-3">
                    <span class="cx-button cx-heavy-brand-font">
                        shop women’s
                    </span>
                </a>
                <a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=2'); ?>" class="btn-overall cx_col-6 cx_col-md-3">
                    <span class="cx-button cx-heavy-brand-font">
                        shop men’s
                    </span>
                </a>
                <a href="<?php echo href_link(FILENAME_CATEGORY, 'cID=3'); ?>" class="btn-overall cx_col-6 cx_col-md-3">
                    <span class="cx-button cx-heavy-brand-font">
                        shop kids’
                    </span>
                </a>
        </div>
    </div>
	<div class="block2">
		<a class="item hidden-xs" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=1'); ?>" >
			<div class="banner-block-left">
				<h2>SHOW YOUR</h2>
				<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/block2-text.jpg?v2" alt=""></img>
				<p>Rep your team from head to toe.</p>
				<span>SHOP NOW</span>
			</div>
			<div class="banner-block-right">
				<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/block2.gif?v2" alt=""></img>
			</div>
		</a>
		<a class="item visible-xs block2-xs" href="<?php echo href_link(FILENAME_CATEGORY, 'cID=1'); ?>" >
			<div class="banner-block-xs">
				<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/block2-xs.gif?v2" alt=""></img>
			</div>
			<div class="banner-block-left banner-block-xs">
				<h2>SHOW YOUR</h2>
				<img src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/block2-text.jpg?v2" alt=""></img>
				<p>Rep your team from head to toe.</p>
				<span>SHOP NOW</span>
			</div>
		</a>	
	</div>
</div>
<?php } ?>

<style>
/* featured======================================================================================= */
.collections .featured .cx_container-fluid {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    align-content: center;
    flex-wrap: wrap;
    padding: 20px 0;
    max-width: 960px;
    margin: 0 auto;
}
.collections .featured .cx_container-fluid a{
    padding: 11px 5px;
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
}
.collections .featured .cx_container-fluid a:hover {
    background-color: #444;
    border-color: #fff;
    color: #fff;
}


/* ======================================================================================= */
/* featured======================================================================================= */
.collections .target-slot-wrap {position: relative;max-width: 1200px;margin: 0 auto;}
.collections .text-container {position: absolute;top: 50%;left: 15px;transform: translateY(-50%);}
.collections .target-slot-wrap img {margin: 0 auto;}
.collections .cx-button-parent {display: flex;flex-direction: column;align-items: center;}
.collections .cx-button-parent .cx-button-link {padding: 8px 20px;background-color: #fff;border: #fff solid 2px;font-size: 18px;color: #000;font-weight: bold;width: 240px;margin: 10px 0;}
.collections .cx-button-parent .cx-button-link:hover {background-color: #000;color: #fff;}
/* ======================================================================================= */

@media (max-width:991px) {.collections .featured .cx_container-fluid a {width: 170px;} }
@media (max-width:555px) {.collections .cx-button-parent .cx-button-link {font-size: 5px;width: 130px;}}



/* newbanner ================================================= */
.block2{max-width: 1200px;margin-top: 40px;margin-left: auto;margin-right: auto;}
.banner-block1 a,.block2 a{display: flex;align-items: center;justify-content: space-between;background: #000;margin-bottom: 40px;}
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
.block2 .banner-block-left span{width: 160px;margin-top: 10px;padding: 7px 5px 6px 5px;display: inline-block;border: 1px solid rgba(0,0,0,0);text-decoration: underline;text-transform: uppercase!important;}
.block2 .banner-block-left p,.block2 .banner-block-left span{font-size: 16px;}

.banner-block-xs, .banner-block-xs img,.block2-xs{display: block;width: 100%;border: none!important;text-align: center;}
.block2-xs .banner-block-left{flex-basis: 90%;max-width: 90%;}
@media (max-width:767px) {
	.banner-block1 a {position: relative;}
	.banner-block1 .banner-block-left{position: absolute;top: 0;left: 0;width: 100%;height: 100%;flex-basis: 100%;max-width: 100%;padding: 15px 0;}
	.banner-block1 .banner-block-left img{max-width: 300px;margin: 0 auto;margin-bottom: 40px;}
	.banner-block1 .banner-block-left span{position: absolute;bottom: 0; margin-top: 0;transform: translateX(-50%) translateY(-100%);}
	.block2 .banner-block-left img{margin: 10px auto;}
	.block2 .banner-block-left span{margin-top: 0;}
}
</style>