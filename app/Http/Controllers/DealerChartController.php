<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DealerChartController extends Controller
{
    public function index()
    {
        $dealersByYear = DB::table('dealers')
        ->select(DB::raw('YEAR(created_at) as year'), DB::raw('COUNT(*) as count'))
        ->groupBy('year')
        ->orderBy('year')
        ->get();
        
        $labels = $dealersByYear->pluck('year')->toArray();
        $data = $dealersByYear->pluck('count')->toArray();
    
        return view('dealer_chart', compact('labels', 'data'));
    }
}

