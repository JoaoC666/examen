<?php

namespace App\Http\Controllers;

use App\Models\PublicidadModel;
use Illuminate\Http\Request;

class PublicidadController extends Controller
{
    private $datos_validacion=[
        'titulo'=>'required',
        'celular'=>'numeric',
        'fecha'=>'required|before_or_equal:fechalmit',
        'fechalmit'=>'required|after_or_equal:fecha|after:today',
        'autor'=>'required'
    ];
    public function index(){
        $lista=PublicidadModel::where('estado',1)->get();
        return view('publicidad.index',compact('lista'));
    }

    public function create(){
        return view('publicidad.create');

    }

    public function store(Request $request){
        $request->validate(
            $this->datos_validacion
        );
        $nuevo= new PublicidadModel($request->input());
        $nuevo->save();
        return redirect('/publicidad')->with('success','Se guardo correctamente');
    }

   
    public function destroy($id){
        $temp=PublicidadModel::find($id);  
        $temp->delete();
        return redirect()->route('publicidad.index');
    }
}
