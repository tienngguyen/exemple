<?php

namespace App\Repositories;

use App\Models\Admin\Customer;

class CustomerRepository extends  BaseRepository
{
    public function getModel()
    {
        return Customer::class;
    }
}