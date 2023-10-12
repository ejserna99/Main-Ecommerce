<?php

namespace App\Traits\Cart;

use Jackiedo\Cart\Details;
use Jackiedo\Cart\Facades\Cart;

trait ShoppingCart
{
    protected $cartName  = null;

    protected function getCart()
    {
        return Cart::name($this->cartName);
    }

    /**
     * The function returns the details of the cart.
     * 
     * @return Jackiedo\Cart\Details Details an instance of the Details class.
     */
    protected function getDetails(): Details
    {
        return $this->getCart()->getDetails();
    }

    /**
     * All items added
     * 
     * @return array
     */
    public function getCartItemsProperty()
    {
        return $this->getDetails()->get('items');
    }

    /**
     * The number of items added to the cart.
     * 
     * @return int
     */
    public function getCartItemsCountProperty()
    {
        return $this->getDetails()->get('items_count');
    }

    /**
     * The sum of the quantities of all added items.
     * 
     * @return int
     */
    public function getCartQuantitiesSumProperty()
    {
        return $this->getDetails()->get('quantities_sum');
    }

    /**
     * Expanded cart information.
     * 
     * @return array
     */
    public function getCartExtraInfoProperty()
    {
        return $this->getDetails()->get('extra_info');
    }

    /**
     * The sum of the subtotals of all items added to the cart.
     * 
     * @return float
     */
    public function getCartItemsSubtotalProperty()
    {
        return $this->getDetails()->get('items_subtotal');
    }

    /**
     * The final total amount of the cart, calculated as the sum of all amounts.
     * 
     * @return float
     */
    public function getCartTotalProperty()
    {
        return $this->getDetails()->get('total');
    }

    /**
     * The subtotal amount of the cart, calculated by the sum of the `"items_subtotal"` and `"actions_amount"` keys.
     * 
     * @return float
     */
    public function getCartSubtotalProperty()
    {
        return $this->getDetails()->get('subtotal');
    }

    /**
     * Determines if the cart is empty.
     *
     * @return bool Returns true if the cart has no items, no taxes, and no action has been applied yet
     */
    public function getCartIsEmptyProperty()
    {
        return $this->getCart()->isEmpty();
    }
}
