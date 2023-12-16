<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function emails()
    {
        $emails = Email::with('details', 'details.minors')->latest()->get();
        
        return view('admin.emails', compact('emails'));
    }
}
