<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;
class MailController extends Controller
{
    public function index($email,$otp){
        $otp=base64_decode($otp);
        $email=base64_decode($email);
        
        Mail::to($email)->send(new OtpMail($otp));

        if(Mail::failures($email)){
            return response(0);
        }
        else{
            return response(1);
        }
    }
}
