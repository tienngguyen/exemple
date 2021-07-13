<?php

namespace App\Repositories;

use App\Models\Admin\Product;

class ProductRepository extends  BaseRepository
{
    public function getModel()
    {
        return Product::class;
    }

    public function getProduct()
    {
        return $this->model->select('product_name')->take(5)->get();
    }

    
}