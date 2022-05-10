<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class UploadController extends Controller
{
    public function store(Request $request){
        $cv = new Cv();
        if($request->hasFile('file')){
           $cv->file= $request->file->store('cv');
        }
        
        $cv->save();

        return redirect('uploads');

    }



}
