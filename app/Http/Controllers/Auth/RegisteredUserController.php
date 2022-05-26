<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Civi;
use App\Models\datauser;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Doctrine\DBAL\Schema\Table;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Lawdata;
use App\Models\twouser;
use DB;

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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'id_number' => ['required', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role_id' => ['required'],



        ]);

        DB::beginTransaction();

//        try {

        $civi = DB::table('civis')->where('id_number', $request->id_number)->first();

//        return  $civi->id;

        if ($civi == null)
            {
                return redirect()->back()->withInput()->with([
                    'message'       => __('site.This_number_is_not_in_our_records'),
                    'alert-type'    => 'error'
                ]);

            }else{

                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),

                ]);

                $user->attachRole($request->role_id);

                if ($request->role_id == 'Lawyer') {
                    Lawdata::create([
                        'user_id' => $user->id,
                        'civi_id' => $civi->id,
                        'address' => $request->address,
                        'phone' => $request->phone,
                        'gender' => $request->gender,
                        'the_age' => $request->the_age,
                    ]);
//                    return redirect()->back()->withInput()->with([
//                        'message'       => __('site.added_successfully'),
//                        'alert-type'    => 'success'
//                    ]);
                } elseif ($request->role_id == 'user') {
                        datauser::create([
                        'user_id' => $user->id,
                        'civi_id' => $civi->id,
                        'address' => $request->address,
                        'phone' => $request->phone,
                        'id_number' => $request->id_number,
                        'gender' => $request->gender,
                        'the_age' => $request->the_age,
                        ]);
                } elseif ($request->role_id == 'user2') {
                    twouser::create([
                        'user_id' => $user->id,
                        'civi_id' => $civi->id,
                        'address' => $request->address,
                        'phone' => $request->phone,
                        'gender' => $request->gender,
                        'the_age' => $request->the_age,

                        ]);
                } {
                    # code...
                }

                DB::commit();
//             all good
            }
//        } catch (\Exception $e) {
//            DB::rollback();
//            return redirect()->back()->withInput();
//        }


        event(new Registered($user));

        Auth::login($user);
        if (auth()->user()->hasRole('admin')) {
            return redirect(RouteServiceProvider::DASHBOARD);
            return redirect()->route('dashboard.index');

        }elseif (auth()->user()->hasRole('Lawyer')){

            return redirect(RouteServiceProvider::LAWYER);

        } elseif (auth()->user()->hasRole('user')){

            return redirect(RouteServiceProvider::HOME);
        }

    }

    protected function redirectTo()
    {
        if (auth()->user()->hasRole('admin')) {

            return redirect()->route('dashboard.index');

        }elseif (auth()->user()->hasRole('Lawyer')){

            return redirect()->route('dashboard.index');

        } elseif (auth()->user()->hasRole('user')){

            return  redirect()->route('dashboard.index');
        }
        return '/home';
    }
}
