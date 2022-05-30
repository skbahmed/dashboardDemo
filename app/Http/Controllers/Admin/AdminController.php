<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //ADMIN ROUTE CONTROLLER FUNCTION
    public function adminRouteController(){
        $totalUser = User::count();
        $currentUserData = auth()->user();
        return view('admin.home', compact('totalUser', 'currentUserData'));
    }
}
