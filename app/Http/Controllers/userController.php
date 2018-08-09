<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Process;
use App\DocumentalAnalises;
use App\Workprogram;
use App\WorkprogramNum;
use App\EvaluationCriterion;
use App\FailureDetection;
use App\RecordFind;
use App\FinalEvaluationCriterion;
class userController extends Controller
{
    public function index()
    {
    	$users = User::orderBy('id','nombre','apellidoP','apellidoM','email','id_role','equipo')->paginate(10);
    	return view('alumnos',compact('users'))->with('estudiantes', $users);
    }
    public function create()
	{
		return view('createUsers');
	}
	public function store(Request $request)
	{	
		$exist = User::where('email',$request->email)->first();
		if( $exist ){
			return back()->with('error', 'El correo '. $exist->email .' ha sido registrado anteriormente elige otro');	
		}
		//dd($request);
		User::create($request->all());
		
		return redirect('/Administrador')->with('status', 'Guardado Correctamente');
	}
	public function show($id)
	{
		return view('view',['user'=>user::findOrFail($id)]);
	}
	public function edit($id)
	{
		return view('edit',['user'=>user::findOrFail($id)]);
	}
	public function update(Request $request,$id)
	{
		//dd($request);
		$user = User::findOrFail($id);
		$user->nombre=$request->get('nombre');
		$user->apellidoM=$request->get('apellidoM');
		$user->apellidoP=$request->get('apellidoP');
		$user->email=$request->get('email');
		$user->id_role = $request->get('id_role');
		
		$user->update();
		return  redirect()->route('users.edit',$id);
		//dd($user);
		//return view('edit',['user'=>user::findOrFail($id)]);
	}
	public function destroy($id)
	{
		//dd($id);
		//$process_id = Process::where('user_id',$id)->first();
		//Process::where('user_id',$id)->delete();
		//DocumentalAnalises::where('process_id',$process_id->id)
		User::find($id)->delete();
		
		return redirect('/Administrador');
	}
}
