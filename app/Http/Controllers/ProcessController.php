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
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function procesos()
    {
        $procesos = Process::where('user_id',Auth::user()->id)->get();
       // dd($procesos);
        return view('tools.process', compact('procesos'));
    } 

    public function proceso($id)
    {
        return view('proceso',compact('id'));
    }

    public function crearProceso()
    {
        //dd(Auth::user()->id);   
       /* Process::create([
            'user_id'=>2
        ]);   
        */
        $proceso = new Process;
        $proceso->user_id = Auth::user()->id;
        $proceso->save();

        $documetalAnalisis = new DocumentalAnalises;
        $documetalAnalisis->process_id = $proceso->id;
        $documetalAnalisis->save();

        $evaluation = new EvaluationCriterion;
        $evaluation->process_id = $proceso->id;
        $evaluation->save();
       
        $failure = new FailureDetection;
        $failure->process_id = $proceso->id;
        $failure->save();

        $record = new RecordFind;
        $record->process_id = $proceso->id;
        $record->save();

        $work = new WorkProgram;
        $work->process_id = $proceso->id;
        $work->save();

        $evaluacion = new FinalEvaluationCriterion;
        $evaluacion->process_id = $proceso->id;
        $evaluacion->save();
        
        return redirect()->route('proceso', ['id' => $proceso->id]);
    }


     // ANALISIS DOCUMENTAL -------------------------------------------------------
    public function documentalAnalises($id)
    {
        //
        $analisis = DocumentalAnalises::where('process_id',$id)->first();
        
        
        //$user = Process::with('documental_analises')->get();
        //$result = $user->documental_analisis()->where('id',$user->id)->get();
        
        return view('tools.documentalAnalisis.form', compact('analisis'));
       // echo "<pre>";
        //print_r($user);
        //echo "</pre>";
        //dd($user);
    }

    public function createDocumentalAnalises(Request $request )
    {
        //dd($request);
        
        $id = intval($request->process_id);
        
        $document = DocumentalAnalises::where('process_id',$id)->first();
        //dd($document);
        $document->fecha =  $request->fecha;
        $document->num_hoja = $request->num_hoja;
        $document->num_hoja_de = $request->num_hoja_de;
        $document->responsable = $request->responsable;
        $document->funcion = $request->funcion;
        $document->area = $request->area;
        $document->documento = $request->documento;
        $document->resultados_analisis = $request->resultados_analisis;
        $document->propuesta = $request->propuesta;
        $document->observaciones  = $request->observaciones;
        $document->elabora = $request->elabora;
        $document->autorizo = $request->autorizo;
        $document->save();

        //return view('tools.documentalAnalisis.form',compact($document));
        return redirect()->route('proceso', ['id' =>  $document->process_id]);
    }

    public function pdfDocumentalAnalisis($id)
    {
        $analisis =  DocumentalAnalises::where('process_id',$id)->first();
        //dd($analisis);
        $pdf = PDF::loadView('documentalAnalisis',compact('analisis'));
        return $pdf->download('analisis_documental.pdf');
        //return view('documentalAnalisis',compact($analisis));
    }


    //
//DETERMINAR CRITERIOS DE EVALUACIÓN-------------------------------------------------------------------------
    public function evaluationCriteria($id)
    {
        $criterios =  EvaluationCriterion::where('process_id',$id)->first();
        return view('tools.criteriosEvaluacion.form', compact('criterios'));

    }
    public function createEvaluationCriteria(Request $request)
    {
        //dd($request);
        $id = intval($request->process_id);
        $evaluation =  EvaluationCriterion::where('process_id',$id)->first();

        $evaluation->pagina1 = $request->pagina1;
        $evaluation->pagina1_de = $request->pagina1_de;
        $evaluation->pagina2 = $request->pagina2;
        $evaluation->pagina2_de = $request->pagina2_de;
        $evaluation->sustituye_a = $request->sustituye_a;
        $evaluation->fecha = $request->fecha;
        $evaluation->fecha2 = $request->fecha2;
        $evaluation->area = $request->area;
        $evaluation->etapa_elemento = $request->etapa_elemento;
        $evaluation->factor = $request->factor;
        $evaluation->indicadores = $request->indicadores;
        $evaluation->documento_registro = $request->documento_registro;
        $evaluation->alternativa_atencion = $request->alternativa_atencion; 
        $evaluation->observaciones = $request->observaciones;
        $evaluation->elaboro = $request->elaboro;
        $evaluation->autorizo = $request->autorizo;
        $evaluation->save();

        return redirect()->route('proceso', ['id' =>  $evaluation->process_id]);

    }

    public function pdfEvaluationCriteria($id)
    {
        $criterios =  EvaluationCriterion::where('process_id',$id)->first();
        //dd($analisis);
        $pdf = PDF::loadView('criteriosEvaluacion',compact('criterios'));
        return $pdf->download('criterios_evaluacion.pdf');
        //return view('documentalAnalisis',compact($analisis));
    }


    //DETECCCION Y ATENCION DE FALLAS------------------------------------------------------------------------
    public function failureDetection($id)
    {
        $deteccion =  FailureDetection::where('process_id',$id)->first();
        return view('tools.deteccionFallas.form', compact('deteccion'));
    }
    public function createFailureDetection( Request $request )
    {
        $id = intval($request->process_id);
        $deteccion =  FailureDetection::where('process_id',$id)->first();
        
        $deteccion->pagina1 = $request->pagina1;
        $deteccion->pagina1_de = $request->pagina1_de;
        $deteccion->pagina2 = $request->pagina2;
        $deteccion->pagina2_de = $request->pagina2_de;
        $deteccion->sustituye_a = $request->sustituye_a;
        $deteccion->fecha = $request->fecha;
        $deteccion->fecha2 = $request->fecha2;
        $deteccion->area = $request->area;
        $deteccion->etapa_elemento = $request->etapa_elemento;
        $deteccion->numero = $request->numero;
        $deteccion->falla = $request->falla;
        $deteccion->propuesta = $request->propuesta;
        $deteccion->seguimiento = $request->seguimiento;
        $deteccion->observaciones = $request->observaciones;
        $deteccion->elaboro = $request->elaboro;
        $deteccion->autorizo = $request->autorizo;
        $deteccion->save();

        return redirect()->route('proceso', ['id' =>  $deteccion->process_id]);

    }

    public function pdfDeteccion($id)
    {
        $deteccion =  FailureDetection::where('process_id',$id)->first();
        //dd($analisis);
        $pdf = PDF::loadView('deteccionFallas',compact('deteccion'));
        return $pdf->download('deteccion_fallas.pdf');
    }


    //CÉDULA PARA LA DETECCIÓN Y REGISTRO DE HALLAZGOS Y EVIDENCIAS
    public function recordFind($id)
    {
        $registro =  RecordFind::where('process_id',$id)->first();
        return view('tools.registroEvidencias.form', compact('registro'));
    }

    public function createRecordFind( Request $request )
    {
        $id = intval($request->process_id);
        $registro =  RecordFind::where('process_id',$id)->first();

        $registro->pagina1 = $request->pagina1;
        $registro->pagina1_de = $request->pagina1_de;
        $registro->pagina2 = $request->pagina2;
        $registro->pagina2_de = $request->pagina2_de;
        $registro->sustituye_a = $request->sustituye_a;
        $registro->fecha = $request->fecha;
        $registro->fecha2 = $request->fecha2;
        $registro->area = $request->area;
        $registro->etapa_elemento = $request->etapa_elemento;
        $registro->numero = $request->numero;
        $registro->hallazgo = $request->hallazgo;
        $registro->evidencias = $request->evidencias;
        $registro->aspectos_solidos = $request->aspectos_solidos;
        $registro->aspectos_mejorar = $request->aspectos_mejorar;
        $registro->observaciones = $request->observaciones;
        $registro->elabora = $request->elabora;
        $registro->autorizo = $request->autorizo;
        $registro->save();
        return redirect()->route('proceso', ['id' =>  $registro->process_id]);

    }

    public function pdfRegistro($id)
    {
        $registro =  RecordFind::where('process_id',$id)->first();
        //dd($analisis);
        $pdf = PDF::loadView('RegistroEvidencias',compact('registro'));
        return $pdf->download('registro_evidencias.pdf');
    }


    public function workProgram($id)
    {
        //$work = WorkProgram::find($id);
        $work =  WorkProgram::where('process_id',$id)->first();
        $worknum = WorkProgramNum::where('work_programs_id',$work->id)->get();
        //dd($worknum);
        return view('tools.programWork.form', compact('work','worknum'));
    }

    public function createWorkProgram(Request $request)
    {
        //dd($request);
        //dd($request->actividad[0]);
        $id = intval($request->process_id);
        $max = count($request->actividad);
        //dd($max);
        //dd($request->responsable);
        $work =  WorkProgram::where('process_id',$id)->first();
        
        $work->area = $request->area;
        $work->inicio = $request->inicio;
        $work->terminacion = $request->terminacion;
        $work->suspencion = $request->suspencion;
        $work->cancelacion = $request->cancelacion;
        $work->reinicio = $request->reinicio;
        $work->terminacion2 = $request->terminacion2;
        $work->responsable = $request->responsable;
        $work->clave = $request->clave;
        $work->observaciones = $request->observaciones;
        $work->elaboro = $request->elaboro;
        $work->reviso = $request->reviso;
        $work->autorizo = $request->autorizo;
        
        for($i=0; $i<$max; $i++){
            $worknum = new WorkProgramNum();
            $worknum->work_programs_id = $work->id;
            $worknum->actividad =  $request->actividad[$i];
            $worknum->responsable =  $request->responsable_especifico[$i];
            $worknum->save();
        }
        $work->save();
        
        return redirect()->route('workProgram', ['id' =>  $work->process_id]);
    }

    public function pdfWork($id)
    {

        $work =  WorkProgram::where('process_id',$id)->first();
        $worknum = WorkProgramNum::where('work_programs_id',$work->id)->get();
        //dd($analisis);
        $pdf = PDF::loadView('programaTrabajo',compact('work','worknum'));
        return $pdf->download('programa_trabajo.pdf');


    }


    public function evaluacionFinal($id){

         //$work = WorkProgram::find($id);
         $evaluacion =  FinalEvaluationCriterion::where('process_id',$id)->first();
        
         //dd($worknum);
         return view('tools.criteriosEvaluacionFinal.form', compact('evaluacion'));


    }

    public function crearEvaluacionFinal(Request $request){
        $id = intval($request->process_id);

        $evaluacion =  FinalEvaluationCriterion::where('process_id',$id)->first();
        $evaluacion->process_id = $request->process_id;
        $evaluacion->fecha = $request->fecha;
        $evaluacion->pagina = $request->pagina;
        $evaluacion->pagina_de = $request->pagina_de;
        $evaluacion->establecidos_planeacion = $request->establecidos_planeacion;
        $evaluacion->obtenidos_planeacion = $request->obtenidos_planeacion;
        $evaluacion->establecidos_organizacion = $request->establecidos_organizacion;
        $evaluacion->obtenidos_organizacion = $request->obtenidos_organizacion;
        $evaluacion->establecidos_direccion = $request->establecidos_direccion; 
        $evaluacion->obtenidos_direccion = $request->obtenidos_direccion;
        $evaluacion->establecidos_control = $request->establecidos_control;
        $evaluacion->obtenidos_control = $request->obtenidos_control;
        $evaluacion->save();

        return redirect()->route('evaluacionFinal', ['id' =>  $evaluacion->process_id]);

    }

    public function pdfEvaluacionFinal($id){

        $evaluacion =  FinalEvaluationCriterion::where('process_id',$id)->first();
        
        //dd($analisis);
        $pdf = PDF::loadView('criteriosEvaluacionFinal',compact('evaluacion'));
        return $pdf->download('criterios_evaluacion_final.pdf');

    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
