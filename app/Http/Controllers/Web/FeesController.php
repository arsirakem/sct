<?php

namespace Vanguard\Http\Controllers\Web;

use Vanguard\Http\Controllers\Controller;

class FeesController extends Controller
{
    public function __construct()
    {
        // Allow access to authenticated users only.
        $this->middleware('auth');

        // Allow access to users with 'users.manage' permission.
        $this->middleware('permission:users.manage');
    }

    public function index()
    {
        return "Hello from FeesController";
    }
}