<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;

class CategoriesController extends Controller
{
    protected $categoryRepo;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->productRepo = $categoryRepo;
    }
    
    public function index(){
        return view('backend.admins.category.categories');
    }
}
