<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        switch ($user->role) {
            case 'superadmin':
                return view('dashboard.superadmin', compact('user'));
            case 'adminstaff':
                return view('dashboard.adminstaff', compact('user'));
            case 'doctor':
                return view('dashboard.doctor', compact('user'));
            case 'radiografer':
                return view('dashboard.radiografer', compact('user'));
            default:
                abort(403, 'Unauthorized access');
        }
    }
}
