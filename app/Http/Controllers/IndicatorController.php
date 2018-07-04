<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Area;
use App\Indicator;
class IndicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicators = Indicator::join('categories', 'indicators.id_category', '=', 'categories.id_category')
            ->join('areas', 'areas.id_area', '=', 'categories.id_area')
            ->get();
        return view('indicators.indicators', compact('indicators'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Obtener todas las areas con al menos una categoría
        $categories = self::getCategories();
        return view('indicators.createIndicators', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for ($i=0; $i < count($request -> indicators); $i++) {
            Indicator::create([
                'id_category' => $request -> id_category,
                'type' => ($request -> typeIndicator)[$i],
                'description' => ($request -> indicators)[$i]
            ]);
        }
        return redirect('indicators');
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
        $indicator = Indicator::where('id_indicator', $id) -> first();
        $categories = self::getCategories();

        return view('indicators.editIndicators', compact('indicator', 'categories'));
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
        Indicator::where('id_indicator', $id) -> update([
            'id_category' => $request -> id_category,
            'description' => $request -> indicator,
            'type' => $request -> typeIndicator,
        ]);

        return redirect('indicators');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Indicator::findOrFail($id) -> delete();
        return redirect('indicators');
    }

    public function getCategories(){
        return Area::join('categories', 'areas.id_area', '=', 'categories.id_area')
            ->orderBy('areas.area')
            ->orderBy('categories.category')
            ->groupBy('areas.id_area', 'areas.area', 'categories.category', 'categories.id_category')
            ->get();
    }


    

    public function obtener($id){
        $indicators = Indicator::paginate(10);
        //$closed = Closed_answer::all();
       // $answers = Answer::where('id_periods',$id)->get();
       
       //$groupedIndicators = Indicator::get()->toArray();
       $groupedIndicators = Indicator::all();
       $categoryNum = $indicators[0]->id_category;
       //dd($categoryNum);
       //$categories = Indicator::all()->keyBy('id_category');
       $categories = Indicator::groupBy('id_category')->pluck('id_category');
       $titulos=[];
       //dd($titulos);
       //dd($groupedIndicators[0]['id_category']);
       //dd($groupedIndicators[0]);
       //dd($groupedIndicators->where('id_category', 4 )->get());
       //dd($categories);
       //dd($groupedIndicators->where('id_category',4)->where('type','Qualitative'));
       //dd($groupedIndicators);
       $quantitative = [];
       $qualitative = [];
       $ejemplo=[];
       $indicadores = new Collection();
       $max = $categories->count();
       //dd($categories);
       
       for( $i = 0; $i < $max; $i++){
            //$qualitative = $groupedIndicators->where('id_category', $categories[$i] )->where('type','Qualitative')->get();
            //array_push($qualitative,$groupedIndicators->where('id_category', $categories[$i] )->where('type','Qualitative'));
            $qualitative = $groupedIndicators->where('id_category',$categories[$i])->where('type','Qualitative');
            //array_push($indicadores, $qualitative);
            if(!$qualitative->isEmpty()){
                $indicadores->push($qualitative);
               array_merge($ejemplo, $qualitative->toArray());
            }
            //dd($qualitative);

            $quantitative = $groupedIndicators->where('id_category',$categories[$i])->where('type','Quantitative');
            //array_push($indicadores, $quantitative);
            //dd($quantitative);
            if(!$quantitative->isEmpty()){
                $indicadores->push($quantitative); 
                array_merge($ejemplo, $quantitative->toArray());   
            }
            //$qualitative = $qualitative->array_push($qualitative, $quantitative);
            
            //$quantitative = $groupedIndicators->where('id_category', $categories[$i] )->where('type','Quantitative')->get();
           // array_push($quantitative,$groupedIndicators->where('id_category', $categories[$i] )->where('type','Quantitative'));
            //dd(array_keys($groupedIndicators, $categories[$i]));
           /* $like=$categories[$i];
            $qualitative = array_filter($groupedIndicators, function ($item) use ($like) {
                if (stripos($item['id_category'], $like) !== false) {
                    return true;
                }
                return false;
            });
            */

            //$qualitative = filter_by_value($groupedIndicators , 'id_category', $categories[$i]);
            //dd($qualitative);
            //array_push($indicadores,$qualitative);
           // array_push($indicadores,$quantitative);
       }
       dd($ejemplo);
       $titulos = $indicadores->groupBy('id_category')->pluck('id_category');
       //dd($titulos);
       //dd($indicadores);
       //dd($indicadores);
        

        return view('indicators.indicatorsAnswers',compact('indicadores','id','titulos'));
    

    }


}
