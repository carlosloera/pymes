<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
class answerController extends Controller
{
    //
 
    

    public function store(Request $request){
        //dd(sizeof($request->answer));
         //dd($request)
        //return response()->json("hola");
        /* if($request->ajax()){
            return response()->json($request->data;
            
                //dd($request->answer_.strval($i));
                //dd($request->id_question_.$a);
                */
            $size = sizeof($request->answer);
             for($i=0; $i<$size; $i++){
                $exist;
                $exist = Answer::where('id_question',$request->id_question[$i])->first();
                //dd($exist);
                if($exist){
                    $exist->answer = $request->answer[$i];   
                    //dd($exist);
                    $exist->save();
                }
                else{
                    //dd("no");
                    $answer = new Answer;
                    $answer->answer = $request->answer[$i];
                    $answer->id_question = $request->id_question[$i];
                    $answer->id_periods = $request->process_id;
                    $answer->save();
                }
            }   
            
            //$request->session()-flash('status','Guardado Correctamente');
            return back()->with('status', 'Guardado Correctamente');

                /*$response = array(
                    'status' => 'success',
                    'message' => 'Article has been posted.',
                );
                */
                //return response()->json($response);
             //return json_encode($response);
         }
         
        
        //$a=1;
       

        //$array = json_decode(htmlspecialchars_decode($request->id_questions));
        //dd($array);
    
}
