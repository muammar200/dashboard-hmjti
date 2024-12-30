<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $members = Member::where('period_id', 1)->count();        
        return view('dashboard', compact('members'));
    }
}
