<?php

namespace App\Repositories;

use App\Models\User;
use Yajra\Datatables\Datatables;


class UserRepository extends  BaseRepository
{
    public function getModel()
    {
        return User::class;
    }
    public function getAllData()
    {
        return Datatables::of(User::query())
        ->editColumn('avatar', function ($user) {
            return '<img src="' . $user->avatar . '" alt="" class="img-circle img-avatar-list">';
        })
        ->addColumn('action', function ($user) {
            return '<a href="'. route('admin.user.show', $user->id) .'" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i> View</a> <a href="javascript:void(0)" data-id="' . $user->id . '" class="btn btn-xs btn-danger btn-delete"><i class="fa fa-times"></i> Delete</a>';
        })
        ->rawColumns(['avatar', 'action'])
        ->make(true);
        
    }
}