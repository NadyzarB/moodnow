<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsulController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('user.consul');
    }
}
