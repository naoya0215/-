<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;


class AdminhomeController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth:admin');
    }

    public function index() {
        return view('admin.home');
    }
}