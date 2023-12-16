<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        $users = Email::latest()->paginate(10);
        return view('users.index', compact('users'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        
        $isEmail = Email::where('email', $request->email)->exists(); 

        $email = $request->email;
       
        return view('detail', compact('email', 'isEmail'));
    }

    public function detailSubmit(Request $request)
    {

        $datas = [];
        foreach ($request->all() as $key => $value) {
            if ($key != '_token') {
                $datas[$key] = $value;
            }
        }
        
        return view('accept', compact('datas'));
    }

    public function acceptSubmit(Request $request)
    {
        
    }
}
