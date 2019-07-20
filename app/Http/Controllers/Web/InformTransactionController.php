<?php

namespace Vanguard\Http\Controllers\Web;

use Vanguard\Http\Controllers\Controller;

class InformTransactionController extends Controller
{
    public function index()
    {
        return view('user.inform-transaction');   
    }
}