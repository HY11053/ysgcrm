<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function Index()
    {
        $users=User::paginate(50);
        return view('admin.users',compact('users'));
    }
    public function Delete($id)
    {
        User::where('id',$id)->delete();
        redirect()->back();
    }
}
