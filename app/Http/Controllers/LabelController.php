<?php

namespace App\Http\Controllers;

use PDF;
use App\Record;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function singleRecord($id)
    {
        $record = Record::findOrFail($id);

        $pdf = PDF::loadView('label.singleRecord', compact('record'));

       return $pdf->stream('cetakLabel.pdf');
    }
}
