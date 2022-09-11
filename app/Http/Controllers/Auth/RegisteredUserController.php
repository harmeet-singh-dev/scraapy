<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
       // return view('auth.register');
       return view('en.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    { 
        
        Auth::login($user = User::create([
            'user_type' =>'1',
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'city' => $request->city,
            'region' => $request->region,
            'district' => $request->district,
            'user_name' => $request->user_name,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($user));
        return redirect('en/edit-profile');
      
    }

    public function industrial_register(Request $request){

Auth::login($user = User::create([
    'user_type' => '2',
    'company_name' => $request->company_name,
    'first_name' => $request->first_name,
    'last_name' => $request->last_name,
    'email' => $request->email,
    'mobile' => $request->mobile,
    'city' => $request->city,
    'region' => $request->region,
    'district' => $request->district,
    'user_name' => $request->user_name,
    'password' => Hash::make($request->password),
]));
event(new Registered($user));
return redirect('/en/edit-profile-indus');
    }

    public function global_register(Request $request){
        
    Auth::login($user = User::create([
            'user_type' => '3',
            'buyer' => $request->buyer,
            'address' => $request->address,
            'landline' => $request->landline,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'company_website' => $request->company_website,
            'port_of_discharge' => $request->port_of_discharge,
            'country_of_final_destination' => $request->country_of_final_destination,
            'terms_of_delivery' => $request->terms_of_delivery,
            'payment_terms' => $request->payment_terms,
            'currency' => $request->currency,
            
            'password' => Hash::make($request->password),
        ]));
        event(new Registered($user));
        return redirect('/en/edit-profile-global');
            }

            public function vendor_register(Request $request){
                $logo = $request->file('logo');
                $logoName = time().'.'.$logo->getClientOriginalExtension();
                
                $destinationPath = base_path('/public/en/logo');
                $request->logo->move($destinationPath, $logoName);
                Auth::login($user = User::create([
                        'user_type' => '4',
                        'company_name' => $request->company_name,
                        'company_c_r_number' => $request->company_c_r_number,
                        'logo' => $logoName,
                        'landline' => $request->landline,
                        'location' => $request->location,
                        'first_name' => $request->first_name,
                        'business_type' => $request->business_type,
                        'email' => $request->email,
                        'mobile' => $request->mobile,
                        'i_ban' => $request->i_ban,
                        'password' => Hash::make($request->password),
                    ]));
                    event(new Registered($user));
                    return redirect('/en/edit-profile-ven');
                        }

            public function edit_profile(Request $request){
              if (Auth::user()->user_type == 1){
               
               $user_data['first_name'] =  Auth::user()->first_name;
               $user_data['last_name'] =  Auth::user()->last_name;
               $user_data['email'] =  Auth::user()->email;
               $user_data['mobile'] =  Auth::user()->mobile;
               $user_data['region'] =  Auth::user()->region;
               $user_data['city'] =  Auth::user()->city;
               $user_data['district'] =  Auth::user()->district;
               return view('en/edit-profile')->with('user_data',$user_data); 
               
              }else{
                    return redirect('/en/home');
                   }
                   }

                   public function edit_profile_data(Request $request){
                    if (Auth::user()->user_type == 1){
                    $id= Auth::user()->id;
                        $user = User::find($id);
                        $user['first_name'] = $request->input('first_name');
                        $user['last_name'] = $request->input('last_name');
                        $user['email'] = $request->input('email');
                        $user['mobile'] = $request->input('mobile');
                        $user['region'] = $request->input('region');
                        $user['city'] = $request->input('city');
                        $user['district'] = $request->input('district');
                        $user->save();
                        return back()->with('success','User data is updated !');
                      
                    }else{
                        return redirect('/en/home');
                       }
                   }

                   public function edit_profile_industrial(Request $request){
                    if (Auth::user()->user_type == 2){
                     
                     $user_data['first_name'] =  Auth::user()->first_name;
                     $user_data['last_name'] =  Auth::user()->last_name;
                     $user_data['email'] =  Auth::user()->email;
                     $user_data['mobile'] =  Auth::user()->mobile;
                     $user_data['region'] =  Auth::user()->region;
                     $user_data['city'] =  Auth::user()->city;
                     $user_data['district'] =  Auth::user()->district;
                     return view('en/edit-profile-indus')->with('user_data',$user_data); 
                     
                    }else{
                          return redirect('/en/home');
                         }
                         }

                         public function edit_profile_industrial_data(Request $request){
                            if (Auth::user()->user_type == 2){
                            $id= Auth::user()->id;
                                $user = User::find($id);
                                $user['first_name'] = $request->input('first_name');
                                $user['last_name'] = $request->input('last_name');
                                $user['email'] = $request->input('email');
                                $user['mobile'] = $request->input('mobile');
                                $user['region'] = $request->input('region');
                                $user['city'] = $request->input('city');
                                $user['district'] = $request->input('district');
                                $user->save();
                                return back()->with('success','User data is updated !');
                              
                            }else{
                                return redirect('/en/home');
                               }
                           }


                           public function edit_profile_global(Request $request){
                            if (Auth::user()->user_type == 3){
                             
                             $user_data['first_name'] =  Auth::user()->first_name;
                             $user_data['last_name'] =  Auth::user()->last_name;
                             $user_data['email'] =  Auth::user()->email;
                             $user_data['mobile'] =  Auth::user()->mobile;
                             $user_data['region'] =  Auth::user()->region;
                             $user_data['city'] =  Auth::user()->city;
                             $user_data['district'] =  Auth::user()->district;
                             return view('en/edit-profile-global')->with('user_data',$user_data); 
                             
                            }else{
                                  return redirect('/en/home');
                                 }
                                 }
        
                                 public function edit_profile_global_data(Request $request){
                                    if (Auth::user()->user_type == 3){
                                    $id= Auth::user()->id;
                                        $user = User::find($id);
                                        $user['first_name'] = $request->input('first_name');
                                        $user['last_name'] = $request->input('last_name');
                                        $user['email'] = $request->input('email');
                                        $user['mobile'] = $request->input('mobile');
                                        
                                        $user->save();
                                        return back()->with('success','User data is updated !');
                                      
                                    }else{
                                        return redirect('/en/home');
                                       }
                                   }
                                   public function edit_profile_ven(Request $request){
                                    if (Auth::user()->user_type == 4){
                                     
                                     $user_data['first_name'] =  Auth::user()->first_name;
                                     $user_data['company_name'] =  Auth::user()->company_name;
                                     $user_data['logo'] =  Auth::user()->logo;
                                     $user_data['company_c_r_number'] =  Auth::user()->company_c_r_number;
                                     $user_data['location'] =  Auth::user()->location;
                                     $user_data['business_type'] =  Auth::user()->business_type;
                                     $user_data['landline'] =  Auth::user()->landline;
                                     $user_data['mobile'] =  Auth::user()->mobile;
                                     $user_data['email'] =  Auth::user()->email;
                                     $user_data['i_ban'] =  Auth::user()->i_ban;
                                     return view('en/edit-profile-ven')->with('user_data',$user_data); 
                                     
                                    }else{
                                          return redirect('/en/home');
                                         }
                                         }
                
                                         public function edit_profile_ven_data(Request $request){
                                            if (Auth::user()->user_type == 4){
                                               
                                            $id= Auth::user()->id;
                                                $user = User::find($id);
                                     $user['first_name'] =  $request->input('first_name');
                                     $user['company_name'] =  $request->input('company_name');

                                     if(null !== $request->file('logo')){
                                        $logo = $request->file('logo');
                                        $logoName = time().'.'.$logo->getClientOriginalExtension();
                                         
                                        $destinationPath = base_path('\public\en\logo');
                                        $request->logo->move($destinationPath, $logoName);
                                        $user['logo'] = $logoName;
                                    }else{
                                        $user['logo'] =  Auth::user()->logo;
                                    }

                                    $user['company_c_r_number'] =  $request->input('company_c_r_number');;
                                    $user['location'] =  $request->input('location');;
                                    $user['business_type'] = $request->input('business_type');;
                                    $user['landline'] =  $request->input('landline');;
                                    $user['email'] =  $request->input('email');;
                                    $user['mobile'] =  $request->input('mobile');;
                                    $user['i_ban'] =  $request->input('i_ban');;
                                                $user->save();
                                                return back()->with('success','User data is updated !');
                                              
                                            }else{
                                                return redirect('/en/home');
                                               }
                                           }
}
