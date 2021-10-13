<?php

namespace App\Http\Controllers;

use App\Box;
use App\Record;
use Illuminate\Http\Request;

class InputkedalamanController extends Controller
{
    public function edit($id)
    {
        $box = Box::findOrFail($id);

        return view('inputkedalaman.edit', compact('box'));
    }
    public function update(Request $request, $id)
    {
       $record = Record::where('box_id', $id)->update([
           'tgl_doc'       => $request->input('tgl_doc'),
           'jumlah_lembar'  => $request->input('jumlah_lembar'),
       ]);

       flash('Kedalaman berhasil di input terimakasih');
        return redirect()->back();
    }
}
