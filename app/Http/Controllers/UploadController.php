<?php

namespace App\Http\Controllers;

use App\Record;
use App\Upload;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        $uploads = Upload::with('record')->paginate(5);
       return view('upload.index', compact('uploads'));
    }
    public function create()
    {
        $records = Record::all();
        return view('upload.create', compact('records'));
    }
    public function store()
    {
       $upload = Upload::create($this->validateRequest());

       $this->storeImage($upload);

        flash()->success('file berhasi ditambahkan');

        return redirect()->back();
    }
    public function show($id)
    {
        $showUpload = Upload::findOrFail($id);

        return view('upload.show', compact('showUpload'));
    }
    public function download($id)
    {
        $image = Upload::find($id);

        return Storage::disk('public')->download($image->image);

    }
    private function validateRequest(){
        return tap(request()->validate([
            'record_id'   => 'required',
            'judul'       => 'required',
            'image'       => 'required|image|max:5000',
        ]), function(){
            if(request()->hasFile('image')){
                request()->validate([
                    'image'    => 'required|image|max:5000',
                ]);
            }
        });
    }

    private function storeImage($upload){
        if(request()->has('image')){
            $upload->update([
                'image'  => request()->image->store('uploads','public'),
            ]);

            $image = Image::make(public_path('storage/'. $upload->image))->fit(300,300, null, 'top-left');
            $image->save();
        }
    }
}
