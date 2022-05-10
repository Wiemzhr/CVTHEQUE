<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Cv;
use App\Http\Requests\cvRequest;

class CvController extends Controller
{
    //lister les cvs
    public function index(){

        $listcv = Cv::all();
        
        return view('cvs.index', ['cvs'=> $listcv]);

    }

    //afficher le formulaire de creation de cv
    public function create(){

        return view('cvs.create');

    }
    //Enregister un cv
    public function store(cvRequest $request){
        $cv = new CV();
        $cv-> name = $request -> input('name');
        

        if($request->hasFile('file')){
            $cv->file= $request->file->store('cvs');
         }
         
        $cv -> save();

        

        return redirect('cvs');
    }

    //Recuperer un cv
    public function edit(){

    }
}
