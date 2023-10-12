<?php

namespace App\Models;

use Jackiedo\Cart\Contracts\UseCartable;
use Jackiedo\Cart\Traits\CanUseCart;
use Shopper\Core\Models\Product as ShopperProduct;

class Product extends ShopperProduct implements UseCartable
{
    use CanUseCart;

    protected $cartTitleField = 'name';
    protected $cartPriceField = 'price_amount';
}
