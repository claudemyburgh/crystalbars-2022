<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\GetQuote;
use App\Mail\Thanks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use LVR\Phone\Phone;

class SendQuoteController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'phone' => ['required', new Phone],
            'message' => 'required'
        ]);


        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->queue(new GetQuote($data = $request->only('name', 'email', 'phone', 'message')));


        Mail::to($request->only('email'))
            ->queue(new Thanks($data = $request->only('name')));

//
//        return $request->json([
//            'success' => 'Email successfully send!'
//        ]);

    }
}
