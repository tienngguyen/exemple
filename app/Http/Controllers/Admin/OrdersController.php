<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\OrdersRepository;

class OrdersController extends Controller
{
    protected $odersRepo;

    public function __construct(OrdersRepository $odersRepo)
    {
        $this->odersRepo = $odersRepo;
    }

    public function index(){
        return view('backend.admins.order.orders');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return $this->odersRepo->getAllDataTable();
    }
}
