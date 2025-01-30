<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            // Redirect to the Admin Dashboard if the user is an admin
            return view('admin.dashboard');
        }

        // Otherwise, show the User Profile
        return view('user.profile');
    }
    }
}
