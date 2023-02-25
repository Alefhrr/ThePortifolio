<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function create(Request $request)
    {
        if($request->hasfile('imagem')){
           $filenameWithExt = $request->file('imagem')->getClientOriginalName();
           $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
           $extension = $request->file('imagem')->getClientOriginalExtension();
           $nameStore = $filename. "_". time() . "." . $extension;
           $patch = $request->file('imagem')->storeAs('public/senai', $nameStore);
        }else{
            $nameStore = "noImagem.png";
        }


      $db = new About;
      $db->description = $request->description;
      $db->patch = $nameStore;
      $db->save();
      return view('dashboard',['msg'=> "item cadastrado com sucesso !"]);
    }
    public function getAboutAll()
    {
        return About::all();
    }
    public function getAbout(Request $request)
    {
        return About::find($request->id);
    }
    public function updateAbout(Request $request)
    {
        if($request->hasfile('imagem')){
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientExtension();
            $nameStore = $filename. "_". time() . "." . $extension;
            $patch = $request->file('imagem')->storeAs('public/senai', $nameStore);
         }else{
             $nameStore = $request->patch;
         }

        $db = About::find($request->id);
        $db->description = $request->description;
        $db->patch = $nameStore;
        $db->save();
    }
    public function deleteAbout(Request $request)
    {
        $db = About::find($request->id);
        $db->delete();
    }
    public function search(Request $requestvc )
    {
        About::where('description', 'LIKE', '%' .$request->search. '%')
            ->get();
    }














}
