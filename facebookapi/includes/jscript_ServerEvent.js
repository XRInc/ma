$(function(){

    var sourceUrl = window.location.href;
    var name="check";
    var pid = $('input[name=pID]').val();
    //查看发送服务器事件
    if(pid) {
        name= "ViewContent";
        var price = $('.specials-price .price').html() ? $('.specials-price .price').html() : $('.regular-price .price').html();
        price = price.slice(1);
        conversions(name, price,sourceUrl);
    }
    //添加购物车发送事件
    $('.btn-incart').on('click',function(){
        var price = $('.specials-price .price').html() ? $('.specials-price .price').html() : $('.regular-price .price').html();
        price = price.slice(1);
        name = "AddToCart";
        conversions(name, price,sourceUrl);
    })
    //发起结账发送事件
    $('.btn-checkout').on('click',function(){
        var price = $('.grand_total .price').html() ? $('.grand_total .price').html() : $('.subtotal .price').html();
        price = price.slice(1);
        name= "InitiateCheckout";
        conversions(name,price,sourceUrl);
    })
    var page = window.location.search;
    if(GetQueryString('main_page') == 'checkout_result') {
        var price = $('.grand_total .price').html() ? $('.grand_total .price').html() : $('.subtotal .price').html();
        price = price.slice(1);
        name= "Purchase";
        conversions(name,price,sourceUrl);
    }
})

conversions = function(name,price,sourceUrl) {
    var email="celestinesawyer1@gmail.com";
    $.ajax({
        url: "/conversions/index.php",
        data:{price:price,name:name,url:sourceUrl,email:email},
        dataType: 'json',
        type: 'post',
        success: function(res) {
        },
        error: function(res) {

        }
    })
}

GetQueryString = function(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)","i");
    var r = window.location.search.substr(1).match(reg);
    if (r!=null) return (r[2]); return null;
}