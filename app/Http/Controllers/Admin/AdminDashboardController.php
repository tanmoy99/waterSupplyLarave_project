<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('adminLogin'); // Assuming you've created the 'admin/dashboard.blade.php' view
    }
}
