<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function createPDF($email){
        $data = [
            'email' => $email
        ];
        $rand = rand(1000, 9999) . time();
        $pdf = PDF::loadView('pdf', $data);
        $pdf->save('uploads/' . $rand . '.pdf');
        
        return url('uploads/' . $rand . '.pdf');
    }
}
