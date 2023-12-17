<?php

namespace App\Http\Controllers;

use App\Models\Email;
use PDF;
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

    public function emailDetail($id)
    {
        $email = Email::with([
            'details' => function ($query) {
                $query->latest()->take(1)->with('minors');
            }
        ])->find($id)->toArray();

        $data = [
            'email' => $email
        ];
        $rand = rand(1000, 9999) . time();
        $pdf = PDF::loadView('pdf', $data);
        $pdf->save('uploads/' . $rand . '.pdf');
        
        return url('uploads/' . $rand . '.pdf');
    }
}
