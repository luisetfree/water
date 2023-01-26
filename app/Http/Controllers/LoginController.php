<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Validation\Validator;
//use Illuminate\Support\Facades\Validator;
 
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
       /* $credentials = $request->validate([
            'name' => ['required', 'name'],
            'password' => ['required'],
        ]);*/
 

        $credentials = request()->only(['name', 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
            //return view('dashboard');
        }
 
        return back()->withErrors([
            'name' => 'Estas credenciales no se encuentran en nuestros registros',
        ])->onlyInput('name');
    }


/**
 * Log the user out of the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}




    
}