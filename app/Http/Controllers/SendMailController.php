<?php

namespace App\Http\Controllers;

use App\Mail\ResultMail;
use App\Registerstudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(){
        $students = Registerstudent::all();
        for($i = 0; $i<count($students); $i++){
            $email = $students[$i]->email;
            Mail::to($email)->send(new ResultMail());
        }
    }
}
