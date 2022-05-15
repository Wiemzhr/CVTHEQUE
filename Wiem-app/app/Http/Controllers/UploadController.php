<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class UploadController extends Controller
{
    public function analyse(Request $req){

        $name=shell_exec("C:/Users/Lenovo/anaconda3/envs/env/python.exe C:/Users/Lenovo/anaconda3/envs/env/temp.py ");
    
          return view('test',  ['name' => $name]);
          }


    //Modifier un cv
  //   public function update(Request $request, $id){
  //     $cv =Cv::find($id);
  //     $cv->depart = $request -> input('depart');

  //     $cv -> save();

  //     return redirect('cvs');
  // }



}
