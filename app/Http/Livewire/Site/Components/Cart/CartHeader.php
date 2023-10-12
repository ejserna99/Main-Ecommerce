<?php

namespace App\Http\Livewire\Site\Components\Cart;

use App\Traits\Cart\ShoppingCart;
use Livewire\Component;

class CartHeader extends Component
{
    use ShoppingCart;

    public function render()
    {
        // dd($this->cartItemsSubtotal);
        return view('livewire.site.components.cart.cart-header');
    }
}
