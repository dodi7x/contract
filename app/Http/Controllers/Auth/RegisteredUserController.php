<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Civi;
use App\Models\Customer;
use App\Models\datauser;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Lawdata;
use App\Models\Role;
use App\Models\twouser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Schema;
use DB;
use Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
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
        //return $request;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
           // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role_id' => ['required'],
            'id_number'=>['required']
           //'id_number' =>['required', 'string', 'min:11',],
        ]);
       
         $civi = Civi::where('id_number', $request->id_number)->first();
   

     
        DB::beginTransaction();

        try {


            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ]);

            $user->attachRole($request->role_id);
            if ($request->role_id == '2') {
                Lawdata::create([
                    'user_id' => $user->id,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'gender' => $request->gender,
                    'the_age' => $request->the_age,
                ]);
                
            } elseif ($request->role_id == '3') {
                //return $request->id_number;
                 
                $civi = Civi::where('id_number',$request->id_number)->first();
                   if (!$civi) {
                   return 'no id number in civis'; 
                }
                if ($civi->user_id) {
                    return 'there user register idnumber ';
                }
               $customer= Customer::create([

                    'user_id' => $user->id,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'gender' => $request->gender,
                    'the_age' => $request->the_age,
                  //  'civi_id'=> $civi->id,
                    'customer_number' => Str::random(14),
                    ]);
                    $civi->update  ([
                        'user_id' => $customer->id,

                    ]);
            // } elseif ($request->role_id == 'user2') {
            //     twouser::create([
            //         'user_id' => $user->id,
            //         'address' => $request->address,
            //         'phone' => $request->phone,
            //         'gender' => $request->gender,
            //         'the_age' => $request->the_age,

            //         ]);
            // } {
                # code...
            }

            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput();
        }


        event(new Registered($user));

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
