<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Codeplateau;
use Illuminate\Support\Facades\Redirect;

class CodeplateauController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    
    public function create(){
        return view('form');
    }

    public function stop(Request $request){
        Codeplateau::create($request->all());
        //echo $request->firstname, "<br>";
        //die($request->lastname);
        return redirect::route('showlist');
    }
    public function showlist(){
        $all = Codeplateau::all();
        //die($all);
        return view('showlist', ['all'=>$all]);
        
    }
    public function delete($id){
        $del = Codeplateau::find($id);
        $del->delete();
        return redirect::route('showlist');

    }
    public function edit($id){
        $edit = Codeplateau::find($id);

        return view('edit', ['name'=>$edit]);

    }
    public function update(Request $request){

        $update = Codeplateau::find($request->id);
        $update->firstname = $request->firstname;
        $update->lastname = $request->lastname;
        $update->save();

        return redirect('showlist');

    }

    
}
