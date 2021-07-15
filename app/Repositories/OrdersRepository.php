<?php

namespace App\Repositories;

use App\Models\Admin\Orders;

class OrdersRepository extends  BaseRepository
{
    public function getModel()
    {
        return Orders::class;
    }
}