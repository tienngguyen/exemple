<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

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

    public function update(Request $request,$id) {
        $name = $request->input('name', '');
        $price = $request->input('price', '');
        $quantity = $request->input('quantity', '');
        $category_id = $request->input('category_id', '');
        $desc = $request->input('desc', '');

            // validate dữ liệu
            $validatedData = $request->validate([
                'name' => 'required',
                'price' => 'required',
                'quantity' => 'required',
                'category_id' => 'required',
                'desc' => 'required',
                ]);

        $product = $this->productRepo->find($id);;

        $product->name = $name;
        $product->price = $price;
        $product->quantity = $quantity;
        $product->category_id = $category_id;
        $product->desc = $desc;

        // lưu danh mục
        $product->save();

        return redirect("admin/product/show/{$id}")->with('status', 'cập nhật admin thành công !');
    }

}
