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

       $email = $request->email;

        return view('detail', compact('email'));
    }
}
