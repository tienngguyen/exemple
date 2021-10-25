<?php

namespace App\Repositories;

use App\Models\Admin\Product;
use Yajra\Datatables\Datatables;


class ProductRepository extends BaseRepository
{
    public function getModel()
    {
        return Product::class;
    }

    public function getAllData()
    {
        return Datatables::of(Product::query())
        ->editColumn('avatar', function ($product) {
            return '<img src="' . $product->avatar . '" alt="" class="img-circle img-avatar-list">';
        })
        ->addColumn('action', function ($product) {
            return '<a href="'. route('admin.product.show', $product->id) .'" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i> View</a>
            <a href="'. route('admin.product.create', $product->id) .'" class="btn btn-xs btn-info"><i class="fa fa-eye"></i>Edit</a>';
        })
        ->rawColumns(['avatar', 'action'])
        ->make(true);
    }
}
