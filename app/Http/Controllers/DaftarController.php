<?php

namespace App\Http\Controllers;

use PDF;
use App\Box;
use App\Content;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        $contents = Content::latest()->paginate(6);

        return view('daftarIsi.index', compact('contents'));
    }
    public function create($id)
    {
        $box = Box::with('records')->findOrFail($id);

        return view('daftarIsi.create', compact('box'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'record_id'             => 'required',
            'nomor_item_arsip'      => 'required',
            'uraian_informasi_arsip'     => 'required',
        ]);

        $content = Content::create([
            'record_id'                 => $request->input('record_id'),
            'nomor_item_arsip'         => $request->input('nomor_item_arsip'),
            'uraian_informasi_arsip'         => $request->input('uraian_informasi_arsip'),
        ]);

        return redirect()->route('daftar-isi')->with('status', 'terimakasih telah mengisi Daftar isi berkas berkas');
    }
    public function show(Request $request)
    {
        if ($request->has('tgl_awal')) {
            $records = Content::with('record')->whereBetween('created_at', [request('tgl_awal'), request('tgl_akhir')])
            ->get();
        }

        $pdf = PDF::loadView('laporan.daftarberkas', compact('records'))->setPaper('legal', 'landscape');

        return $pdf->stream('laporan_daftar_berkas.pdf');
    }
}
