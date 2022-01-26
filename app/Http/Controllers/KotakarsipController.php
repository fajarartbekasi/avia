<?php

namespace App\Http\Controllers;

use PDF;
use App\Box;
use App\Unit;
use App\Record;
use App\Classification;
use Illuminate\Http\Request;

class KotakarsipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $boxs = Box::with('unit','records')->paginate(5);
       return view('kotakarsip.index', compact('boxs'));
    }
    public function edit($id)
    {
       $boxs = Box::findOrFail($id);

       return view('kotakarsip.edit', compact('boxs'));
    }
    public function ubah($id)
    {
        $boxs = Box::findOrFail($id);

        return view('kotakarsip.ubah', compact('boxs'));
    }
    public function show($id)
    {
        $box = Record::findOrFail($id);

        $pdf = PDF::loadView('kotakarsip.show', compact('box'))->setPaper('legal','landscape');

       return $pdf->stream('kotak_arsip.pdf');
    }
    public function update(Request $request, $id)
    {
       $boxs = Box::findOrFail($id);

       $boxs->update($request->all());

       flash('Klasifikasi berhasil dibuat terimakasih');
        return redirect()->route('rekap-arsip.edit',$boxs->id)->with('status', 'Silahkan input data rekam arsip');
    }
    public function perbarui(Request $request, $id)
    {
        $boxs = Box::findOrFail($id);

        $boxs->update($request->all());

        flash('Klasifikasi berhasil diupdate terimakasih');
        return redirect()->route('kotak-arsip')->with('status', 'Terimakasih telah merubah nomor kotak arsip');
    }
    public function autocomplete(Request $request)
    {
          $query = $request->get('query');
          $result = Classification::where('id', 'LIKE', '%'. $query. '%')->get();
          return response()->json($result );
    }

}
