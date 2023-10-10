<?php

namespace App\Http\Livewire\Site\Components;

use App\Core\Repositories\Store\CategoryRepository;
use Livewire\Component;

class Footer extends Component
{
    public $year;
    public $logo;

    public function mount()
    {
        $this->year = now()->format('Y');
        $this->logo = shopper_asset(shopper_setting('shop_logo'));
    }

    public function getCategoriesProperty()
    {
        return (new CategoryRepository)->getRoots()
            ->select(['name', 'slug'])
            ->limit(6)
            ->get();
    }

    public function render()
    {
        return view('livewire.site.components.footer');
    }
}
