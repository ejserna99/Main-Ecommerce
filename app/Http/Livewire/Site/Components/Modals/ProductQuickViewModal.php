<?php

namespace App\Http\Livewire\Site\Components\Modals;

use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ProductQuickViewModal extends Component
{
    use LivewireAlert;

    public Product $product;
    public $variant;
    public $quantity;
    public $storageName;

    public function getCurrentProductProperty(): Product
    {
        return $this->product->id == $this->variant ?
            $this->product :
            $this->product->variations->firstWhere('id', $this->variant);
    }

    public function getCanIncrementProperty(): bool
    {
        return $this->currentProduct->stock > $this->quantity;
    }

    public function getCanDecrementProperty(): bool
    {
        return $this->quantity > 1;
    }

    public function mount(Product $product)
    {
        $product->load('media');
        $product->load('ratings');
        $product->load('brand:id,name');
        $product->load('inventoryHistories');
        $product->load('variations:id,parent_id,name,is_visible,price_amount');
        $product->load('variations.inventoryHistories');
        $product->load('attributes:attribute_id,product_id');
        $product->load('attributes.attribute:id,name,type,is_enabled');
        // $product->select(['id', 'sku', 'name', 'slug', 'brand_id', 'parent_id', 'price_amount', 'old_price_amount', 'description']);

        $this->product = $product;
        $this->variant = $product->id;
        $this->quantity = $product->stock > 0 ? 1 : 0;
        $this->storageName = config('shopper.core.storage.collection_name');
    }

    public function render()
    {
        // dd($this->product);
        return view('livewire.site.components.modals.product-quick-view-modal');
    }

    public function addToCart()
    {
        $product = Product::with('media')->select(['id', 'slug', 'name', 'price_amount'])->find($this->variant);
        $productItem = $product->addToCart(config('cart.default_cart_name'), [
            'extra_info' => [
                'slug'  => $product->slug,
                'thumb' => $product->getFirstMediaUrl($this->storageName, 'thumb_200'),
            ]
        ]);

        $this->emit('hideModal');
        $this->emit('cart_updated');
        $this->emit('cart_product_add', [
            'id'       => $productItem->get('id'),
            'quantity' => $productItem->get('quantity'),
        ]);

        $this->alert('success', 'Producto agregado con éxito');
    }

    public function increment()
    {
        if (!$this->canIncrement) return;

        $this->quantity++;
    }

    public function decrement()
    {
        if (!$this->canDecrement) return;

        $this->quantity--;
    }
}
