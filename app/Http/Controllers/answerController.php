<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Answer_closed;
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
        /*        
            dd($request);
            //dd($request->answer[1]);

            $size = sizeof($request->answer);
             for($i=0; $i<$size; $i++){
                $exist;
                $exist = Answer::where('id_question',$request->id_question[$i])->first();
                //dd($exist);
                if($exist){
                    if(is_array($request->answer[$i])){
                        $answers = Answer_closed::where('id_question',$request->id_question[$i])->where('id_process',$request->process_id)->get();
                        dd($answers);
                        if(sizeof($answers) > sizeof($request->answer[$i])){
                            $n = sizeof($request->answer[$i]);
                            for($m = 0; $m < $n; $m++){
                                $answers[$i] = $request->answer[$i][$m];
                            }
                            $answers->save();
                        }
                        else{
                            $n = sizeof($answers);
                            $dif = sizeof($request->answer[$i]) - $n; 
                            $j = 0;
                            for($j = 0; $j < $n; $j++){
                                $answers[$j] = $request->answer[$i][$j];
                            }
                            $answers->save(); 
                            for($k = j; $k < $dif; $j++){
                                 $answer = new Answer_closed;
                                 $answer->answers = $request->answer[$i][$k];
                                 $answer->id_question = $request->id_question[$i];
                                 $answer->id_process = $request->id_process;
                                 $answer->save();
                            }  
                        }
                    }
                    else{
                        $exist->answer = $request->answer[$i];   
                        //dd($exist);
                        $exist->save();
                    }
                }
                else{

                    if(is_array($request->answer[$i])){
                        $n = sizeof($request->answer[$i]);
                        for( $k = 0; $k < $n; $k++ ){
                            $answer = new Answer_closed;
                            $answer->answer = $request->answer[$i][$k];
                            $answer->id_question = $request->id_question[$i];
                            $answer->id_process = $request->process_id;
                            $answer->save();
                        }
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
            }   
            */ 
           // dd($request);
            $size = sizeof($request->answer);
             for($i=0; $i<$size; $i++){
                $exist;
                $exist = Answer::where('id_question',$request->id_question[$i])->first();
                //dd($exist);
                if($exist){
                    $exist->answer = $request->answer[$i]; 
                    $exist->comment = $request->comment[$i];   
                    //dd($exist);
                    $exist->save();
                }
                else{
                    //dd("no");
                    $answer = new Answer;
                    $answer->answer = $request->answer[$i];
                    $answer->comment = $request->comment[$i];
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
