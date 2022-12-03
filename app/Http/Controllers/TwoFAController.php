<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controller\Sessions;
use App\Models\UserCode;
use App\Http\Controller\response;
use Illuminate\Contracts\View\Factory\Illuminate\Contracts\View;
// use App\Http\Controller\Session;

// use Illuminate\Routing\Redirector;

class TwoFAController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()  
    {
        // return view('2fa'); 
        
        // return redirect()->view('2fa');   
        return redirect()->route('2fa');             
    }  

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
        ]);  
        $find = UserCode::where('user_id', auth()->user()->id)
                        ->where('code', $request->code)
                        ->where('updated_at', '>=', now()->subMinutes(2))
                        ->first(); 
        if (!is_null($find)) {
            Session::put('user_2fa', auth()->user()->id);
            return redirect()->route('home');
        }  
        return redirect()->back()->with('error', 'You entered wrong code.');
       }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function resend()
    {
        auth()->user()->generateCode(); 
        return redirect()->back()->with('success', 'We sent you code on your email.');
    }
}
