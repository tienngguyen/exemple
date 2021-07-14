<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // khai báo tên bảng
    protected $table = 'customer';

    // khai báo khóa chính của bảng
    protected $primaryKey = 'id';
}
