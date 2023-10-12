<?php

namespace App\Http\Livewire\Site\Components\Cart;

use App\Models\Product;
use App\Traits\Cart\ShoppingCart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CartHeader extends Component
{
    use ShoppingCart, LivewireAlert;

    protected $listeners = ['cart_updated' => 'render', 'addItemToCart', 'updateItemFromCart'];

    public function render()
    {
        // dd($this->cartItems);
        return view('livewire.site.components.cart.cart-header');
    }

    public function removeItemToCart($hash)
    {
        try {
            $item = $this->getCart()->getItem($hash);
            
            $this->getCart()->removeItem($hash);
            $this->emitUp('cart_updated');
            $this->emit('cart_product_removed', $item->get('id'));
            $this->alert('success', 'Producto eliminado con éxito');
        } catch (\Throwable $th) {
            $this->alert('error', 'Ocurrió un problema al intentar eliminar el producto.');
        }

    }

    public function addItemToCart($data)
    {
        $product = Product::with('media')->select(['id', 'slug', 'name', 'price_amount'])->findOrFail($data['id']);
        $product->addToCart(config('cart.default_cart_name'), [
            'quantity'   => $data['quantity'],
            'extra_info' => [
                'slug'  => $product->slug,
                'thumb' => $product->getFirstMediaUrl(config('shopper.core.storage.collection_name'), 'thumb_200'),
            ]
        ]);

        $this->emit('cart_updated');
        $this->alert('success', 'Producto agregado con éxito');
    }

    public function updateItemFromCart($data)
    {
        $item = $this->cartItems->firstWhere('id', $data['id']);

        $this->getCart()->updateItem($item->hash, ['quantity' => $data['quantity']]);

        $this->emit('cart_updated');
        $this->alert('success', 'Producto actualizado con éxito');
    }
}
