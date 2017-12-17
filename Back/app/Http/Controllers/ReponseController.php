<?php

namespace App\Http\Controllers;
use App\Models\Reponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReponseController extends Controller
{


  public function index(){

      $reponse  = Reponse::all();
      return response()->json($reponse);


  }
  public function getReponse($id){

      $reponse = Reponse::find($id);

      return response()->json($reponse);
  }


}
