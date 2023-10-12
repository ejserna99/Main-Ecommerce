<?php

namespace App\Traits\Cart;

use Jackiedo\Cart\Facades\Cart;

trait Purchasable
{
    protected $cartName  = null;

    protected function getCart(): Cart
    {
        return Cart::name($this->cartName);
    }

    public function addToCart(int $quantity = 1, $options = null)
    {
        $this->getCart()::addItem([
            'id'               => $this->id,
            'title'            => $this->name,
            'price'            => $this->getPriceAmount()->value,
            'options'          => $options,
            'quantity'         => $quantity,
            'associated_class' => self::class,
        ]);
    }

    public function removeFromCart()
    {
        Cart::remove($this);
    }

    public function getTitle(): string
    {
        return 'Untitled';
    }

    public function getPrice($currency = null, $options = null): int
    {
        return 0;
    }
}
