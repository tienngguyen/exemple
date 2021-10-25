<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;

class ProductsController extends Controller
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function index()
    {
        return view('backend.admins.products.products');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->productRepo->getAllData();
    }

    public function show($id)
    {
        $product= $this->productRepo->find($id);
        $this->data["product"] = $product;
        return view('backend.admins.products.edit',$this->data);
    }

}
