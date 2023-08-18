<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
                // Fetch user-specific data, if needed
        $userData = auth()->user(); // Example: get authenticated user's data

        return view('dashboard', compact('userData')); // Load the existing dashboard.blade.php view
    }
}
