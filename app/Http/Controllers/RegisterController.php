<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Validation\Validator;
//use Illuminate\Support\Facades\Validator;
use  Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;

use App\Models\User;
 
class RegisterController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        //Validacion de datos procedentes de vista register
       $credentials=$request->validate([
            'name' => ['required', 'string','max:255'],
            'email' => ['required', 'string','email','max:255'],
            'rol' => ['required', 'string','max:10'],
            'password' => ['required','confirmed',Rules\Password::defaults()],
        ]);
 

       //Si la validacion es correcta se procede a crear el usuario, de lo contrario se devuelve a la pagina principal
        //if (attempt($credentials)) {

            //Creacion de usuario a partir de datos previamente validados
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'rol' => $request->rol,
            'password' =>bcrypt($request->password),

       ]);

           return view('login'); 
      //  }

       
       /* return back()->withErrors([
            'name' => 'Error en registrar',
        ])->onlyInput('name');
*/
        //  return view('register')->with('mensaje', 'Error en los datos');


    }
}