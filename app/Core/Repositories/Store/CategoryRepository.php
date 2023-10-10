<?php

namespace App\Core\Repositories\Store;

use Shopper\Core\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository
{
    public function model(): string
    {
        return config('shopper.models.category');
    }

    public function getRoots()
    {
        return $this->model()::isRoot();
    }

    public function getTree($depth = null)
    {
        return $this->model()::tree($depth);
    }
}
