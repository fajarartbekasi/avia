<?php

namespace App\Http\Controllers;

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
        $boxs = Box::with('unit')->get();
       return view('kotakarsip.index', compact('boxs'));
    }
    public function edit($id)
    {
       $boxs = Box::findOrFail($id);

       return view('kotakarsip.edit', compact('boxs'));
    }
    public function update(Request $request, $id)
    {
       $boxs = Box::findOrFail($id);

       $boxs->update($request->all());

       flash('Klasifikasi berhasil diperbarui terimakasih');
        return redirect()->back();
    }

    public function autocomplete(Request $request)
    {
          $query = $request->get('query');
          $result = Classification::where('id', 'LIKE', '%'. $query. '%')->get();
          return response()->json($result );
    }

}
