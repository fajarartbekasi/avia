<?php

namespace App\Http\Controllers;

use App\Classification;
use Illuminate\Http\Request;

class ClassficationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $classifications = Classification::paginate(5);

        return view('classification.index', compact('classifications'));
    }
    public function create()
    {
        return view('classification.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'kode'         => 'required',
            'uraian'       => 'required',
        ]);

        $classification = Classification::create([
            'kode'    => $request->input('kode'),
            'uraian'  => $request->input('uraian'),
        ]);
        flash('Klasifikasi berhasil dibuat terimakasih');
        return redirect()->back();
    }
    public function edit($id)
    {
        $classification = Classification::findOrFail($id);

        return view('classification.edit', compact('classification'));
    }
    public function update(Request $request, $id)
    {
        $classification = Classification::findOrFail($id);

        $classification->update($request->all());

        flash('Klasifikasi berhasil diperbarui terimakasih');
        return redirect()->back();
    }
}
