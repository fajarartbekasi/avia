<?php

namespace App\Http\Controllers;

use PDF;
use App\Box;
use App\Record;
use App\Classification;
use Illuminate\Http\Request;

class RekaparsipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $records = Record::with('box','classification')->paginate(5);
        return view('rekaparsip.index', compact('records'));
    }
    public function edit($id)
    {
       $box = Box::findOrFail($id);
       $class = Classification::all();
       return view('rekaparsip.create', compact('box','class'));
    }

    public function store(Request $request, $id)
    {
        $box = Box::findOrFail($id);

        $this->validate($request,[
           'box_id'             => 'required',
           'classification_id'  => 'required',
           'nomor_portapel'     => 'required',
           'nomor_berkas'       => 'required',
           'info_berkas'        => 'required',
           'durasi'             => 'required',
           'jumlah'             => 'required',
           'uraian'             => 'required',
           'aktif'              => 'required',
           'in_aktif'           => 'required',
           'tindak_lanjut'      => 'required',
           'media'              => 'required',
           'lokasi'             => 'required',
           'jenis'              => 'required',
           'reg_ska'            => 'required',
        ]);

        $records =  Record::create([
           'box_id'             => $id,
           'classification_id'  => $request->input('classification_id'),
           'nomor_portapel'     => $request->input('nomor_portapel'),
           'nomor_berkas'       => $request->input('nomor_berkas'),
           'info_berkas'        => $request->input('info_berkas'),
           'durasi'             => $request->input('durasi'),
           'jumlah'             => $request->input('jumlah'),
           'uraian'             => $request->input('uraian'),
           'aktif'              => $request->input('aktif'),
           'in_aktif'           => $request->input('in_aktif'),
           'tindak_lanjut'      => $request->input('tindak_lanjut'),
           'media'              => $request->input('media'),
           'lokasi'             => $request->input('lokasi'),
           'jenis'              => $request->input('jenis'),
           'reg_ska'            => $request->input('reg_ska'),
        ]);

        return redirect()->route('rekap-arsip')->with('status','Terimakasih telah menambahkan rekam arsip');
    }
    public function show($id)
    {
       $record = Record::findOrFail($id);

       $pdf = PDF::loadView('rekaparsip.show', compact('record'));

       return $pdf->stream('rekap_arsip.pdf');
    }
}
