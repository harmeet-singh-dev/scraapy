<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Scrap_category;
use App\Models\Category_types;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ScrapController extends Controller
{
    public function add_scrap_category()
    { 
        return view('admin/add-scrap-category');
    }

    public function add_scrap_category_pro(Request $request)
    { 
        Scrap_category::create([
            'category_name'=>$request->get('category'),
         
       ]);
      
         return back()->with('success','User data is updated !');
    }

    public function view_category()
    { 
        $categories = Scrap_category::paginate(10); 
        return view('admin/view-categories')->with('categories',$categories);
        
    }

    public function add_scrap_type()
    { 
        return view('admin/add-scrap-type');
    }

    public function add_scrap_type_pro(Request $request)
    { 
        Category_types::create([
            'scrap_type'=>$request->get('name'),
            'price'=>$request->get('price'),
       ]);
      
         return back()->with('success','User data is updated !');
    }

    public function view_scraptype()
    { 
        $categories = Category_types::paginate(10); 
        return view('admin/view-scraptype')->with('categories',$categories);
        
    }

}