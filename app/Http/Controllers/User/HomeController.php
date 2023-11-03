<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth:users');
    }

    public function index() {
        return view('user.home.index');
    }


}
