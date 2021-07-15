<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    // khai báo tên bảng
    protected $table = 'orders';

    // khai báo khóa chính của bảng
    protected $primaryKey = 'id';
}
