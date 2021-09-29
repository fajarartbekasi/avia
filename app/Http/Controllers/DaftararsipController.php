<?php

namespace App\Http\Controllers;

use PDF;
use App\Record;
use Illuminate\Http\Request;

class DaftararsipController extends Controller
{
    public function singleRecord($id)
    {
        $record = Record::findOrFail($id);

        $pdf = PDF::loadView('daftararsip.index', compact('record'))->setPaper('legal','landscape');

       return $pdf->stream('daftarArsip.pdf');
    }
}
