<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function __invoke(Request $request): string
    {
      return view('quote');
    }
}
