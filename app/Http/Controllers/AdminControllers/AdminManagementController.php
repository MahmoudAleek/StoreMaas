<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    public function home(){
        return view('admin.index');
    }
}
