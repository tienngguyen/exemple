<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // khai báo tên bảng
    protected $table = 'category';

    // khai báo khóa chính của bảng
    protected $primaryKey = 'id';

    public function products()
    {
        return $this->hasMany('App\Models\Admin\Product', 'category_id');
    }
    public $timestamps = false;
}
