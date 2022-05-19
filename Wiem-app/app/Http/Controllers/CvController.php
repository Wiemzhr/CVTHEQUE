<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Cv;
use App\Http\Requests\cvRequest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


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

        $pieces = explode("/", $cv->link);
    
         $path = "C:/xampp/htdocs/wiemApp/Wiem-app/storage/app/public/uploads/".$pieces[3];
  
         $class=shell_exec("C:/Users/Lenovo/anaconda3/envs/env/python.exe C:/Users/Lenovo/anaconda3/envs/env/temp.py ".escapeshellarg($path)); 
         $cv-> depart = $class;
         
      
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



    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $cv = cv::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('cv'));
    }


//get element of it departement
    public function getItDep(){


       $data = DB::table('cvs')->where('depart' ,'like','%IT%')->get();

        return view('departement.it', ['data' => $data ]);
    }

//get element of prod departement
    public function getProdDep(Request $request){

       $data = DB::table('cvs')->where('depart', 'like','%Production%')->get();

        return view('departement.production', ['data' => $data ]);
    }

//get element of tech departement
    public function getTechDep(Request $request){

       $data = DB::table('cvs')->where('depart', 'like','%Technique%')->get();

        return view('departement.technique', ['data' => $data ]);
    }

//get element of administratif departement
    public function getAdDep(Request $request){

       $data = DB::table('cvs')->where('depart', 'like','%Administratif%')->get();

        return view('departement.administratif', ['data' => $data ]);
    }
//get element of other departement
    public function getOtherDep(Request $request){

       $data = DB::table('cvs')->where('depart', 'like','%Autres%')->get();

        return view('departement.autres', ['data' => $data ]);
    }


//Modif Autre depart
    public function updateAutre(Request $request, $id){
        $cv =Cv::find($id);
        $cv->name = $request -> input('name');

        $cv -> save();

        return redirect('autres');
    }

//Modif Prod depart
    public function updateprod(Request $request, $id){
        $cv =Cv::find($id);
        $cv->name = $request -> input('name');

        $cv -> save();

        return redirect('production');
    }

//Modif Administratif depart
    public function updateAdministratif(Request $request, $id){
        $cv =Cv::find($id);
        $cv->name = $request -> input('name');

        $cv -> save();

        return redirect('administratif');
    }


//Modif technique depart
    public function updateTech(Request $request, $id){
        $cv =Cv::find($id);
        $cv->name = $request -> input('name');

        $cv -> save();

        return redirect('technique');
    }

//Modif it depart
    public function updateIT(Request $request, $id){
        $cv =Cv::find($id);
        $cv->name = $request -> input('name');

        $cv -> save();

        return redirect('it');
    }


    



}
