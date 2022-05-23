<?php

namespace App\Http\Controllers;

use App\Models\Lawdata;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $data = User::findOrFail(Auth::user()->id);

    
        $lawuser = Lawdata::where('user_id', auth()->user()->id);
    


   return view('profile', compact('data'));
  //return view($data);

    }
    function edit_validation(Request $request)
    {
  
        $validated = request()->validate([ //validating all data
            'name' => ['required', 'string', 'min:2', 'max:50'],
            'email' =>['required', 'email', Rule::unique('users', 'email')->ignore(auth()->user())],
            'address' => ['required', 'numeric'],
            'password' => ['required', Password::min(8)],
            'phone' => ['required', 'min:11' , 'max:11'],
            'gender'=> ['required', 'min:2' , 'max:2'],
          //  'the_age'=> ['required' ,'min:2' , 'max:2']

        ]);
        $validated['password'] = bcrypt(request('password')); //encrypting password

        $user = auth()->user(); //getting current user
        $lawuser = Lawdata::where('user_id', auth()->user()->id);   //getting current user's lawdata

        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'gender'=>$validated['gender'],
            'the_age'=>$validated['the_age'],
        ]);

        $lawuser->update([
            'address' => $validated['address'],
            'phone' => $validated['phone'],
            'gender'=>$validated['gender'],
            'the_age'=>$validated['the_age']
        ]);

        return redirect('profile')->with('success', 'Profile Data Updated');

      

    }

   
}
