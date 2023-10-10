<?php

namespace App\Http\Livewire\Site\Components\Home;

use App\Core\Repositories\Store\CategoryRepository;
use Livewire\Component;

class CategorySection extends Component
{
    public $storageName;

    public function mount()
    {
        $this->storageName = config('shopper.core.storage.collection_name');
    }

    public function getCategoriesProperty()
    {
        return (new CategoryRepository)->getRoots()
            ->with('media:id,file_name,model_type,model_id,generated_conversions,collection_name,disk,conversions_disk')
            ->select(['id', 'name', 'slug'])
            ->limit(7)
            ->get();
    }

    public function render()
    {
        return view('livewire.site.components.home.category-section');
    }
}
