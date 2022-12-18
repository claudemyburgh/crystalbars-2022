<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function __invoke(Request $request): View
    {
      return view('quote');
    }
}
