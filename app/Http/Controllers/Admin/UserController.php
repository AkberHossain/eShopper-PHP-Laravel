<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = User::all();

        $compact = compact('users');

        return view( 'admin-panel.users.user-list'  , $compact);
    }
}
