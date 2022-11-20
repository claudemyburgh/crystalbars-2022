<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __invoke(): string
    {
        return view('faq');
    }
}
