<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $labels = ['Apples', 'Bananas', 'Cherries'];
        $data = [10, 20, 30];

        return view('chart', compact('labels', 'data'));
    }
}
