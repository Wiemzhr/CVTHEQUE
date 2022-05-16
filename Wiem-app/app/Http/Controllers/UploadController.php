<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Cv;


class UploadController extends Controller
{
    public function analyse($id){
      $cv =Cv::find($id);
    
     $string = $cv->link;
  
     $name=shell_exec("C:/Users/Lenovo/anaconda3/envs/env/python.exe C:/Users/Lenovo/anaconda3/envs/env/temp.py ".escapeshellarg($string));  
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
