<?php

namespace App\Repositories;

use App\Models\Admin\Product;
use Yajra\Datatables\Datatables;


class ProductRepository extends  BaseRepository
{
    public function getModel()
    {
        return Product::class;
    }

}