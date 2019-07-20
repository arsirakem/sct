<?php

namespace Vanguard\Http\Controllers\Web;

use Vanguard\Http\Controllers\Controller;

class InformTransactionController extends Controller
{
    public function __construct()
    {
        // Allow access to authenticated users only.
        $this->middleware('auth');

        // Allow access to users with 'users.manage' permission.
    }

    public function index()
    {
        return "Hello from ActiveUsersController";
    }
}
