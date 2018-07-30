<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndicatorAnswer;
class indicatorAnswerController extends Controller
{
    public function store(Request $request){
        for ($i=0; $i < count($request->indicatorAnswer); $i++) {
            $old_indicator_answer = indicatorAnswer::where('id_process', '=', $request->idProcess)->
                where('id_indicator', '=', ($request->indicatorID)[$i])->
                first();

            if ($old_indicator_answer) {
                $id = $old_indicator_answer->id_indicator_answer;

                indicatorAnswer::where('id_indicator_answer', '=', $id)->update([
                    'id_indicator' => ($request->indicatorID)[$i],
                    'id_process' => $request->idProcess,
                    'indicator_answer' => ($request->indicatorAnswer)[$i]
                ]);
            }else{
                indicatorAnswer::create([
                    'id_indicator' => ($request->indicatorID)[$i],
                    'id_process' => $request->idProcess,
                    'indicator_answer' => ($request->indicatorAnswer)[$i]
                ]);
            }
        }
        
        return redirect()->route('proceso', ['id' => $request->idProcess]);
    }
}
