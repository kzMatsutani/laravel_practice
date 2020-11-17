<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller
{
    //
    public function __construct()
    {
        // $admin = Auth::admin();
    }

    public function adminIndex()
    {
        $admins = Admin::get();
        $admin = Auth::user();
        return view('admin.account.admin', ['admin' => $admin, 'admins' => $admins]);
    }
}
