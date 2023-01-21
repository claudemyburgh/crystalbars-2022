<?php

namespace App\Http\Controllers;

use App\Mail\GetQuote;
use App\Mail\Thanks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use LVR\Phone\Phone;

class SendQuoteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'phone' => ['required', new Phone],
            'message' => 'required'
        ]);


        Mail::to($request->only('email'))
            ->send(new Thanks($data = $request->only('name')));
        
        Mail::to(env('MAIL_FROM_ADDRESS'))
            ->send(new GetQuote($data = $request->only('name', 'email', 'phone', 'message')));

        return back()->withStatus('QUOTE SEND TO THE CRYSTAL BARS TEAM');
    }
}
