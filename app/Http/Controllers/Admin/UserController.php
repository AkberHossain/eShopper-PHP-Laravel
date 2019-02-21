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

        return view( 'admin-panel.users.user_list'  , $compact);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin.user');
    }

    public function details($id)
    {
        $user = User::findOrFail($id);

        return view( 'admin-panel.users.user_details' ,compact('user'));
    }
}
