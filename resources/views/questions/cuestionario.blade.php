@extends('proceso')

 
@section('herramientas')

<div class="container">
    @if( Session::has('status') )
        <div  class="alert alert-success alert-dismissible fade show flash">
            {{ Session::get('status') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>               
        </div>
    @endif
<form action="{{ route('guardar') }}" method="POST" id="form">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @csrf
    <?php  $j=0; 
           $arreglo = [];
    ?>
    

    @foreach( $questions as $question)
    <?php array_push($arreglo, $question->id_question)?>
    
    <h2></h2>
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <strong style="font-weight:bold;"> {{ $question->question }}  </strong>
                        {{--<h4>{{ $id }}</h4>--}}
                        {{--<h2>{{$question->id_question }}</h2>--}}
                        <br>
                        <br>
                        @if( $question->type == 'MultipleC' )
                            <?php 
                               $closed_a = \App\Closed_answer::where('id_question',$question->id_question)->get();
                                $alphas = range('A', 'Z');
                                $closedA = \App\Answer::where('id_question',$question->id_question)->first();
                                $i=0;
                                 if( !$closedA ){
                                    $valor = "";
                                }
                                else{
                                    $valor = $closedA->answer;
                                }

                            ?>
                            
                            @foreach( $closed_a as $closed )
                                <div class="row">
                                    <div class="col-md-4">           
                                        <div class="form-group">
                                         <div class="form-check form-check-inline offset-md-3">
                                                   
                                                    
                                                   
                                            <input class="form-check-input" type="checkbox" name="answer[{{$j}}]" id="inlineRadio.{{$i}}" value="{{$i}}" {{ ($valor == $i) ? 'checked' : '' }} >
                                            <label class="form-check-label" for="inlineRadio.{{$i}}"> &nbsp; {{ $alphas[$i].")  " }} &nbsp;  {{ $closed->closed_answer }} </label>
                                                  
                                         </div> 
                
                                        </div>    
                                    </div>        
                                         <!--   <div class="col-md-2 offset-1">
                                            <input class="form-check-input offset-md-4" type="checkbox" id="gridCheck">
                                            &nbsp; {{ $alphas[$i].")  " }} &nbsp;  {{ $closed->closed_answer }} 
                                           -->
                                            
                                </div>
                                   
                                <?php $i++; ?>
                            @endforeach
                            <br>
                                <textarea class="form-control col-md-6" placeholder="Comentarios" ></textarea>
                            <input type="hidden" name="id_question[{{$j}}]" value="{{ $question->id_question }}">
                        @endif
                        @if( $question->type == 'Open' )
                            <?php 
                                $openA = \App\Answer::where('id_question',$question->id_question)->where('id_periods',$id)->first();
                                $valor;
                                if( !$openA ){
                                    $valor = "";
                                }
                                else{
                                    $valor = $openA->answer;
                                }
                            ?>
                               {{--<h1>{{ $openA }}</h1>--}}
                                <input type="text" name="answer[{{$j}}]" class="form-control col-md-6" placeholder="Ingresar la respuesta" value="{{ $valor }}">
                                <input type="hidden" name="id_question[{{$j}}]" value="{{ $question->id_question}}">
                                <br>
                                <textarea class="form-control col-md-6" placeholder="Comentarios" ></textarea>
                              
                        @endif
                        @if( $question->type == 'Binary' )
                            <?php 
                                $binary = \App\Answer::where('id_question',$question->id_question)->where('id_periods',$id)->first();
                                 $valor;
                                if( !$binary ){
                                    $valor = "";
                                }
                                else{
                                    $valor = $binary->answer;
                                }
                            ?>
                            <div class="form-group">
                                    <div class="form-check form-check-inline offset-md-1">
                                    <input class="form-check-input" type="radio" name="answer[{{$j}}]" id="inlineRadio1" value="si" {{ ($valor ==  "si" ) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer[{{$j}}]" id="inlineRadio2" value="no" {{ ($valor ==  "no" ) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>  
                            <input type="hidden" name="id_question[{{$j}}]" value="{{ $question->id_question }}"> 
                            <br>
                                <textarea class="form-control col-md-6" placeholder="Comentarios" ></textarea>
                        @endif
                    </div>
                </div>   
            </div>       
        </div>
        <?php $j++ ?>
    @endforeach
    <input type="hidden" value="{{ $id }}" name="process_id">
    <!--<input type="checkbox"  name="id_questions[]">-->
    <br>
    <div class="row">
        <div class="offset-md-10">

            <button type="submit"  class="  btn btn-danger" >Guardar</button>
        </div>
    </div>
    </form>
   
</div>






@endsection

