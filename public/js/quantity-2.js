/**=====================
    Quantity 2 js
==========================**/
$(".addcart-button").click(function () {
    $(this).next().addClass("open");

    var productId = parseInt($(this).attr('data-product-id'));
    var $qty = $(".qty-box .qty-input.qty-input-" + productId);
    var newValue = 1;
    var currentVal = parseInt($qty.val());

    if (!isNaN(currentVal) && currentVal > 0) {
        newValue = currentVal + 1;
    }

    $qty.val(newValue);
    Livewire.emit('addItemToCart', { id: productId, quantity: 1 });

    setTimeout(() => $(this).next().removeClass('open'), 10000);
});

$('.qty-left-minus').on('click', function () {
    const $qty = $(this).siblings(".qty-input");
    let _val = $($qty).val();

    if (_val <= '1') {
        var _removeCls = $(this).parents('.cart_qty');
        $(_removeCls).removeClass("open");
    }

    const currentVal = parseInt($qty.val());

    if (!isNaN(currentVal) && currentVal > 0) {
        const quantity = currentVal - 1;

        $qty.val(quantity);

        Livewire.emit('updateItemFromCart', { id: parseInt($(this).attr('data-product-id')), quantity });
    }
});

$('.qty-right-plus').click(function () {
    if ($(this).prev().val() < 9) {
        const quantity = +$(this).prev().val() + 1;

        $(this).prev().val(quantity);

        Livewire.emit('updateItemFromCart', { id: parseInt($(this).attr('data-product-id')), quantity });
    }
});

Livewire.on('cart_product_add', (item) => {
    var $btn = $('.addcart-button[data-product-id="' + item.id + '"]');

    if (!$btn.next().hasClass('open')) {
        $btn.next().addClass("open");

        setTimeout(() => $btn.next().removeClass('open'), 10000);
    }

    $(".qty-box .qty-input.qty-input-" + item.id).val(item.quantity);
});

Livewire.on('cart_product_removed', (productId) => {
    $('.qty-input-' + productId).val(0);
});
