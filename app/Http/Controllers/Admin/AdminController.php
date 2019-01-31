<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;



use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
    
        return view('admin-panel.dashboard.dashboard');
    }

    public function showContactInfo()
    {
        return view('admin-panel.contact-info.contact_info');
    }
  
}
