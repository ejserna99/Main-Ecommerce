<?php

namespace App\Http\Livewire\Site\Components;

use App\Core\Repositories\Store\CategoryRepository;
use Livewire\Component;

class Header extends Component
{
    public $logo;
    public $storageName;

    public function mount()
    {
        $this->logo = shopper_asset(shopper_setting('shop_logo'));
        $this->storageName = config('shopper.core.storage.collection_name');
    }

    public function getCategoriesProperty()
    {
        return (new CategoryRepository)->getTree()
            ->with('media:id,file_name,model_type,model_id,generated_conversions,collection_name,disk,conversions_disk')
            ->select(['id', 'parent_id', 'name', 'slug'])
            ->get()->toTree()->filter(fn ($item) => is_null($item->parent_id));
    }

    public function render()
    {
        return view('livewire.site.components.header');
    }
}
