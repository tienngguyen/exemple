<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Category;

class Product extends Model
{
    // khai báo tên bảng
    protected $table = 'products';

    // khai báo khóa chính của bảng
    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo('App\Models\Admin\Category', 'category_id');
    }
}
