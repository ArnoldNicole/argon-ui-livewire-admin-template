<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Templatecontroller extends Controller
{
    public function dashboard()
    {
        return view('template.template-dashboard');
    }

    public function tables()
    {
        return view('template.tables');
    }


    public function billing()
    {
        return view('template.billing');
    }

    public function profile()
    {
        return view('template.profile');
    }
}
