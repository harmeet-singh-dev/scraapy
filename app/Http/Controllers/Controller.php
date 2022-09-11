<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category_types;
use App\Models\Scrap_category;
use App\Models\Upload_scrap;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function upload_ind_scrap(){
       
            $scrap = Scrap_category::get();
            $category = Category_types::get();
            return view('en.upload-ind-scrap', compact('scrap','category'));
        
        
    }

	public function upload_scrap_data(Request $request) {
        
                                               
            $id= Auth::user()->id;
		$images = [];
		foreach($request->file('myfile') as $file) {
			$fileName = strtotime("now") . uniqid() . '.' .$file->getClientOriginalExtension();
            $file->move( public_path() . '/en/uploaded_images/' , $fileName );
            $images[] = $fileName;
        }
		$postData = $request->post();
        $imagestore=json_encode($images);
        $collector_code = strtotime("now") . uniqid() . '.' .'col';
        $approval_code = strtotime("now") . 'app' . uniqid();
		
      $Upload_scrap = Upload_scrap::create([
            'user_id' => $id,
            'scrap_category' => $request->scrap_category,
            'scrap_type' =>$request->category,
            'weight' => $request->weight,
            'price' =>$request->totalPrice,
            'time' =>$request->dlv_date,
            'images' => $imagestore,
            'collector_code' => $collector_code,
            'approval_code' => $approval_code,
        ]);
        
        return redirect()->back();
	
    }

    public function listing(){
        $category_types  = Category_types::get('scrap_type'); 
       $scrap_categories = Scrap_category::get('category_name');
        $Upload_scrap = Upload_scrap::join('users', 'upload_scraps.user_id', '=', 'users.id')
        ->join('category_types','category_types.id', '=','upload_scraps.scrap_type')
        ->get(['users.first_name', 'category_types.scrap_type','upload_scraps.price','upload_scraps.scrap_category','upload_scraps.images']);
        return view('en/listing', compact('Upload_scrap','category_types','scrap_categories'));
       
    }

    public function update_listing(Request $request){
        $category_types  = Category_types::get('scrap_type'); 
        $scrap_categories = Scrap_category::get('category_name');
        $Upload_scrap = Upload_scrap::join('category_types', 'upload_scraps.scrap_type', '=', 'category_types.id')
        ->join('users', 'upload_scraps.user_id', '=', 'users.id')
        ->where('upload_scraps.scrap_category',$request->category)
        ->where('category_types.scrap_type',$request->type)
        ->get(['users.first_name', 'category_types.scrap_type','upload_scraps.price','upload_scraps.scrap_category','upload_scraps.images']);
        return view('en/listing', compact('Upload_scrap','category_types','scrap_categories'));
    }

    public function get_unsold_scrap(Request $request){
        if (Auth::user()->user_type == 1){
        $id= Auth::user()->id;
        $name = Auth::user()->first_name; 
       $scrap = Upload_scrap::join('category_types', 'upload_scraps.scrap_type', '=', 'category_types.id')
       ->where('upload_scraps.user_id',$id)
       ->where('upload_scraps.sold','=','0')
       ->get(['upload_scraps.scrap_category','category_types.price','upload_scraps.images']);
        return view('en/individual', compact('name','scrap'));
    }
    }

    public function get_sold_scrap(Request $request){
        if (Auth::user()->user_type == 1){
        $id= Auth::user()->id;
        $name = Auth::user()->first_name; 
       $scrap = Upload_scrap::join('category_types', 'upload_scraps.scrap_type', '=', 'category_types.id')
       ->where('upload_scraps.user_id',$id)
       ->where('upload_scraps.sold','=','1')
       ->get(['upload_scraps.scrap_category','category_types.price','upload_scraps.images']);
        return view('en/sold-material', compact('name','scrap'));
    }
    }


    public function industry_unsold_scrap(Request $request){
        if (Auth::user()->user_type == 2){
        $id= Auth::user()->id;
        $name = Auth::user()->first_name; 
        $scrap = Upload_scrap::join('category_types', 'upload_scraps.scrap_type', '=', 'category_types.id')
       ->where('upload_scraps.user_id',$id)
       ->where('upload_scraps.sold','=','0')
       ->get(['upload_scraps.scrap_category','category_types.price','upload_scraps.images']);
        return view('en/industrial', compact('name','scrap'));
    }
    }

    public function industry_sold_scrap(Request $request){
        if (Auth::user()->user_type == 2){
        $id= Auth::user()->id;
        $name = Auth::user()->first_name; 
       $scrap = Upload_scrap::join('category_types', 'upload_scraps.scrap_type', '=', 'category_types.id')
       ->where('upload_scraps.user_id',$id)
       ->where('upload_scraps.sold','=','1')
       ->get(['upload_scraps.scrap_category','category_types.price','upload_scraps.images']);
        return view('en/sold-material-indus', compact('name','scrap'));
    }
    }
}
