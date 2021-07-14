<?php

namespace App\Repositories;

use App\Models\Admin\Product;

class ProductRepository extends  BaseRepository
{
    public function getModel()
    {
        return Product::class;
    }

    
}