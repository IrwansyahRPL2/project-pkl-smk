<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagerDashboardController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('role', 3)->get();
        return view('manager.dashboard', ['users' => $users]);
    }
}
