<?php

namespace App\Repositories;

use App\Models\Admin\Category;

class CategoryRepository extends  BaseRepository
{
    public function getModel()
    {
        return Category::class;
    }
}