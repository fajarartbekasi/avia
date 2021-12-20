<?php

namespace App\Http\Controllers;

use App\Box;
use App\Classification;
use App\Content;
use App\Record;
use App\Unit;
use App\Upload;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'classifications'   => Classification::count(),
            'units'             => Unit::count(),
            'boxs'              => Box::count(),
            'records'           => Record::count(),
            'users'             => User::count(),
            'contents'          => Content::count(),
            'uploads'           => Upload::count(),
        ];
        return view('home', $data);
    }
}
