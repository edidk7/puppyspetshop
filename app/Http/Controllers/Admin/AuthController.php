<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view('admin.login');
    }

    public function submit(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        // Intento login
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return response()->json([
                'message' => 'ok',
                'details' => null,
                'route' => route('admin.home')
            ], 200);
        } else {
            return response()->json([
                'message' => 'error',
                'details' => 'Credenciales incorrectas, por favor intente nuevamente.'
            ], 200);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        Session::flush();
        return redirect()->route('/');
    }
}
