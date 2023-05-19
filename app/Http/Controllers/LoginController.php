<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function bd($cadena){
        //dd($cadena);
        $prueba = Crypt::decryptString($cadena); // Descifra la cadena cifrada con Crypt
        $separador = "|";
        $separada = explode($separador, $prueba); // Divide la cadena descifrada en un arreglo por el separador '|'
        $mytime = Carbon::now();
        $dates = $mytime->format('Y-m-d h:i:s');
        $fecha_limite = strtotime($separada[1]);
        $fecha_ahora = strtotime($dates);
    
        if ($fecha_limite > $fecha_ahora){
            $email = $separada[0];
            $usuario = User::select('id')->where('email', $email)->first();
            if (null == $usuario) {
                abort(404, 'Usuario no encontrado: ' . $email);
            }
            Auth::loginUsingId($usuario->id); // Inicia sesión con el ID del usuario
            return redirect()->route('usuarios.index');
        }
    }
    public function logout() {
        Auth::logout(); // Cierra la sesión del usuario
        return redirect('/'); // Redirige al usuario a la página de inicio
    }
}
