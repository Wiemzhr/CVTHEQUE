<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Cv;
use App\Http\Requests\cvRequest;



class UploadController extends Controller
{
    // public function analyse($id){
    //   $cv =Cv::find($id);

    //   $pieces = explode("/", $cv->link);
    
    //  $path = "C:/xampp/htdocs/wiemApp/Wiem-app/storage/app/public/uploads/".$pieces[3];
  
    //  $depart=shell_exec("C:/Users/Lenovo/anaconda3/envs/env/python.exe C:/Users/Lenovo/anaconda3/envs/env/temp.py ".escapeshellarg($path)); 
      
    //       return view('test',  ['depart' => $depart]);
    //       }


    //       public function store(cvRequest $request){

    //         $cv-> depart = $request -> input('depart');           
    
    //         $cv -> save();
    
            
    
    //         return redirect('cvs');
    //     }

          


    //Modifier un cv
  //   public function update(Request $request, $id){
  //     $cv =Cv::find($id);
  //     $cv->depart = $request -> input('depart');

  //     $cv -> save();

  //     return redirect('cvs');
  // }



}
