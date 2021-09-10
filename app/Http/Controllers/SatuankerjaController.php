<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Box;
use Illuminate\Http\Request;

class SatuankerjaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $units = Unit::paginate(5);
        return view('satuankerja.index', compact('units'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_unit'         => 'required',
            'unit_kerja'        => 'required',
        ]);

        $unit = Unit::create([
            'kode_unit'    => $request->input('kode_unit'),
            'unit_kerja'   => $request->input('unit_kerja'),
        ]);

        if($unit->save())
        {
            $box = Box::create([
                'unit_id'   => $unit->id,
            ]);
        }

        flash('Satuan kotak arsip berhasil disimpan');
        return redirect()->back();
    }
    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        return view('satuankerja.edit', compact('unit'));
    }
    public function update(Request $request, $id)
    {
        $unit = Unit::findOrFail($id);

        $unit->update($request->all());

        return redirect()->back();
    }
    public function destroy($id)
    {
         $unit = Unit::destroy($id);
         return redirect()->back();
    }
}
