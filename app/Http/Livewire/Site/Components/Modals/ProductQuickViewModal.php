<?php

namespace App\Http\Livewire\Site\Components\Modals;

use Livewire\Component;
use Shopper\Core\Models\Product;

class ProductQuickViewModal extends Component
{
    public $product;
    public $storageName;

    public function mount(Product $product)
    {
        $product->load('ratings');
        $product->load('variations:id,parent_id,name,is_visible,price_amount');
        $product->load('brand:id,name');
        $product->load('attributes:attribute_id,product_id');
        $product->load('attributes.attribute:id,name,type,is_enabled');
        
        $this->product = $product;
        $this->storageName = config('shopper.core.storage.collection_name');
    }
    
    public function render()
    {
        // dd($this->product);
        return view('livewire.site.components.modals.product-quick-view-modal');
    }
}
