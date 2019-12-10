<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request) {

        $mail = [
            'name' => $request->input('username'),
            'phone' => $request->input('userphone'),
        ];

        Mail::to('coolalexnov@gmail.com')->bcc(['alex_webl@rambler.ru'])->send(new Feedback($mail));
    }
}
