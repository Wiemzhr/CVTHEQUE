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
        

       
        if($request->hasFile('link')) {
            $fileName = time().'_'.$request->file('link')->getClientOriginalName();
            $filePath = $request->file('link')->storeAs('uploads', $fileName, 'public');
            $cv->link = '/storage/' . $filePath;
           
            
        }
         
        $cv -> save();

        

        return redirect('cvs');
    }

    //Recuperer un cv
    public function edit($id){

        $cv =Cv::find($id);

        return view('cvs.edit',['cv'=> $cv]);

    }

    //Modifier un cv
    public function update(Request $request, $id){
        $cv =Cv::find($id);
        $cv->name = $request -> input('name');

        $cv -> save();

        return redirect('cvs');
    }

    //Supprimer un cv
    public function destroy(Request $request, $id){

        $cv = Cv::find($id);
        $cv->delete();

        return redirect('cvs');

    }
}
