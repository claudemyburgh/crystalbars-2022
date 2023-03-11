<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TrellisController extends Controller
{

    public array $products = [
        [
            'size' => '900mm x 2100mm',
            'price' => 'R 3500'
        ],
        [
            'size' => '1200mm x 2100mm',
            'price' => 'R 4500'
        ],
        [
            'size' => '1500mm x 2100mm',
            'price' => 'R 5000'
        ],
        [
            'size' => '1800mm x 2100mm',
            'price' => 'R 5500'
        ],
        [
            'size' => '2200mm x 2100mm',
            'price' => 'R 6200'
        ],
        [
            'size' => '2500mm x 2100mm',
            'price' => 'R 7000'
        ],
        [
            'size' => '2700mm x 2100mm',
            'price' => 'R 7800'
        ],
        [
            'size' => '3000mm x 2100mm',
            'price' => 'R 8700'
        ],

    ];


    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request): View
    {
        return view('trellis', [
            'products' => $this->products
        ]);
    }
}
