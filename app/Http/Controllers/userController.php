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
		User::create($request->all());
		return redirect('/Administrador');
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
		$user = User::findOrFail($id);
		$user->nombre=$request->get('nombre');
		$user->apellidoM=$request->get('apellidoM');
		$user->apellidoP=$request->get('apellidoP');
		$user->email=$request->get('email');
		$user->password=$request->get('password');
		$user->equipo=$request->get('equipo');
		$user->update();
		return redirect('/Administrador');
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
