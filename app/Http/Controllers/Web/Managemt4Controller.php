<?php

namespace Vanguard\Http\Controllers\Web;

use Vanguard\Http\Controllers\Controller;

class Managemt4Controller extends Controller
{
    public function __construct()
    {
        // Allow access to authenticated users only.
        $this->middleware('auth');

    }

    public function index()
    {
        return view('user.managemt4');
    }

    public function update()
    {
        return view('user.managemt4');
    }

}