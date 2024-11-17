<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function index()
    {
        return view('client/wellcome');
    }
    public function home()
    {
        return view('client/home');
    }
    public function details($id)
    {
        return view('client/webdetail');
    }
    public function getScore($id)
    {
        return view('client/getscoregame');
    }
}
