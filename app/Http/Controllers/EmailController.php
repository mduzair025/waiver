<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\EmailDetail;
use App\Models\Minor;
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
        // add data on session
        $request->session()->put('submint-data', $request->all());
         
        return view('accept');
    }

    public function acceptSubmit(Request $request)
    {
        $emailData = Email::with('details')->latest()->first();
        
        $emailData = null;
        // check if session has data
        if($request->session()->has('submint-data')) {
            // get session data
            $data = $request->session()->get('submint-data');
            $emailData = $data;
            // save data to database
            
            $email = Email::where('email', $data['email'])->first();
            if(!$email){
                $email = new Email();
                $email->email = $data['email'];
                $email->save();
            }

            $emailDetail = new EmailDetail();
            $emailDetail->email_id  = $email->id;
            $emailDetail->firstname = $data['firstname'];
            $emailDetail->lastname  = $data['lastname'];
            $emailDetail->phone     = $data['phone'];
            $emailDetail->dob       = $data['dob'];
            $emailDetail->save();


            if(isset($data['minors'])){
                foreach($data['minors'] as $minor){
                    $emailMinor = new Minor();
                    $emailMinor->email_id        = $email->id;
                    $emailMinor->email_detail_id = $emailDetail->id;
                    $emailMinor->firstname       = $minor['firstname'];
                    $emailMinor->lastname        = $minor['lastname'];
                    $emailMinor->dob             = $minor['dob'];
                    $emailMinor->save();
                }
            }
            // remove session data
            $emailData = $data;
            $request->session()->forget('submint-data');
        }else{
            return redirect()->to('/');
        }


        return view('success', compact('emailData'));
    }
}
