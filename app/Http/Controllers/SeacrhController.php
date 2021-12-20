<?php

namespace App\Http\Controllers;

use App\Content;
use App\Record;
use Illuminate\Http\Request;

class SeacrhController extends Controller
{
    public function index(Request $request)
    {
        $contents = Content::where('nomor_item_arsip', $request->input('name'))->get();

        return view('search.index', compact('contents'));
    }
    public function show(Request $request)
    {
        $records = Record::where('nomor_portapel',$request->input('name'))->get();

        return view('search.show', compact('records'));
    }
}
