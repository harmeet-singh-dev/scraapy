<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function home()
    { 
        $users['ind'] = User::where('user_type', '=', 1)->count();
        $users['industrial'] = User::where('user_type', '=', 2)->count();
        $users['global'] = User::where('user_type', '=', 3)->count();
        $users['vendor'] = User::where('user_type', '=', 4)->count();
        return view('admin/home')->with('users',$users);
    }
 
    public function ind_user()
    { 
        $users = User::where('user_type', '=', 1)->paginate(10);
        return view('admin/ind-users')->with('users',$users);
    }

    public function industrial_user()
    { 
        $users = User::where('user_type', '=', 2)->paginate(10);
        return view('admin/industrial-users')->with('users',$users);
    }

    public function global_user()
    { 
        $users = User::where('user_type', '=', 3)->paginate(10);
        return view('admin/global-users')->with('users',$users);
    }

    public function vendor_user()
    { 
        $users = User::where('user_type', '=', 4)->paginate(10);
        return view('admin/vendor-users')->with('users',$users);
    }

    public function destroy($id){
        echo $id; die();
        User::where('id',$id)->delete();
        return back()->with('success','User data is Deleted !');
    }
}