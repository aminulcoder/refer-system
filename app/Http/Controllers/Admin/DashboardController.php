<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

           // Get the logged-in user
    $user = auth()->user();

    // Count the students associated with the logged-in user
    $studentsCount = $user->formSubmissions()->count();

    return view('admin.dashboard', compact('studentsCount'));
    }
}
