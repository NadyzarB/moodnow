<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetectController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('user.detect');
    }
}
