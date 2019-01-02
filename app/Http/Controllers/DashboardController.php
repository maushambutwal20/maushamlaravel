<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Admin(){
        return view('back.pages.index');
    }

}
