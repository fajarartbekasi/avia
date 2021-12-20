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
            'kode_klasifikasi'      => 'required',
            'uraian_klasifikasi'    => 'required',
            'aktif'                 => 'required',
            'in_aktif'              => 'required',
            'tindak_lanjut'         => 'required',
        ]);

        $classification = Classification::create([
            'kode_klasifikasi'      => $request->input('kode_klasifikasi'),
            'uraian_klasifikasi'    => $request->input('uraian_klasifikasi'),
            'aktif'                 => $request->input('aktif'),
            'in_aktif'              => $request->input('in_aktif'),
            'tindak_lanjut'         => $request->input('tindak_lanjut'),
        ]);

        return redirect()->route('classification')->with('status','Terimakasih telah menambahkan Satuan kerja baru');
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

        return redirect()->route('classification')->with('status', 'Satuan kerja berhasil diperbarui terimakasih');
    }
}
