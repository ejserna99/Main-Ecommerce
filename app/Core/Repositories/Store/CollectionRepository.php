<?php

namespace App\Core\Repositories\Store;

use Shopper\Core\Repositories\BaseRepository;

class CollectionRepository extends BaseRepository
{
    public function model(): string
    {
        return config('shopper.models.collection');
    }

    public function getWithProductsBySlug($slug)
    {
        return $this->model()::whereSlug($slug)->with('products');
    }
}
