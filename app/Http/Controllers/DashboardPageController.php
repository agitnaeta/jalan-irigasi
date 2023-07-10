<?php

namespace App\Http\Controllers;

use App\Models\Irigasi;
use App\Models\Jalan;
use App\Models\User;

class DashboardPageController extends Controller
{
    function index(){
        $irigasi = Irigasi::all();
        $jalan = Jalan::all();
        $user = User::all();
        return view('dashboard',
            compact('irigasi','jalan','user')
        );
    }
}
