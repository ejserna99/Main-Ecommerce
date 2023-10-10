<?php

namespace App\Http\Livewire\Site\Components\Home;

use Livewire\Component;
use App\Core\Repositories\Store\CollectionRepository;

class CollectionProductsSection extends Component
{
    public ?string $slug;
    public $storageName;

    public function mount()
    {
        $this->storageName = config('shopper.core.storage.collection_name');
    }

    public function getCollectionProperty()
    {
        return (new CollectionRepository)->getWithProductsBySlug($this->slug)
            ->with('products.brand:id,name,slug')
            ->with('products.media:id,file_name,model_type,model_id,generated_conversions,collection_name,disk,conversions_disk')
            ->first();
    }

    public function getProductsProperty()
    {
        return $this->collection?->products->chunk(2);
    }

    public function render()
    {
        // dd($this->products->first()->getFirstMediaUrl('uploads', 'thumb_200'));
        return view('livewire.site.components.home.collection-products-section');
    }
}
