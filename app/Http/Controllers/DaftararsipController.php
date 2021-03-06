<?php

namespace App\Http\Controllers;

use App\Classification;
use App\Content;
use PDF;
use App\Record;
use Illuminate\Http\Request;

class DaftararsipController extends Controller
{
    public function edit($id)
    {
        $record = Record::findOrFail($id);
        $class  = Classification::all();
        return view('rekaparsip.edit', compact('record', 'class'));
    }
    public function update(Request $request, $id)
    {
       $record = Record::findOrFail($id);

       $record->update($request->all());

       return redirect()->back()->with('status','Terimakasih data berhasil diubah');
    }
    public function singleRecord($id)
    {
        $record = Record::findOrFail($id);

        $pdf = PDF::loadView('daftararsip.index', compact('record'))->setPaper('legal','landscape');

       return $pdf->stream('daftarArsip.pdf');
    }
    public function show(Request $request)
    {
        if ($request->has('tgl_awal')) {
            $records = Content::with('record')->whereBetween('created_at', [request('tgl_awal'), request('tgl_akhir')])
            ->get();
        }

        $pdf = PDF::loadView('laporan.daftarisiberkas', compact('records'))->setPaper('legal', 'landscape');

        return $pdf->stream('laporan_daftar_isi_berkas.pdf');
    }
}
