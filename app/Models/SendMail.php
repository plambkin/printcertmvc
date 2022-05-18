<?php


namespace App\Models;


use App\Mail\CertEmail;
use Illuminate\Support\Facades\Mail;

class SendMail
{
    public function send() {

        $to_email = "plambkin100@gmail.com";

        Mail::to($to_email)->send(new CertEmail);

    }
}
