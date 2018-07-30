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

    <form action="{{ route('saveIndicatorsAnswers') }}" method="POST" id="form">
        @csrf
        <input type="hidden" name="idProcess" value="{{$id}}">
        <h2>{{$seccion->area}} - {{$seccion->category}}</h2>

        <div class="row my-3">
            <div class="col-md-12">
                <div class="card border-dark">
                    <div class="card-header bg-dark text-white">
                        <h5><b>Indicadores cualitativos</b></h5>
                    </div>
                    <div class="card-body">
                        @foreach($indicators as $indicator)
                            @if($indicator->type == 'Qualitative')
                                @php
                                    $valor = $indicatorsAnswers->where('id_indicator', '=', $indicator->id_Indicator)->first();
                                    $valor = $valor ? $valor->indicator_answer:$valor;
                                @endphp
                                <div class="row col-md-12 my-3">
                                    <label>{{ $indicator->description }}</label>
                                    <input type="text" class="form-control" name="indicatorAnswer[]" value="{{ $valor }}" required>
                                    <input type="hidden" name="indicatorID[]" value="{{$indicator -> id_Indicator}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-3">
            <div class="col-md-12">
                <div class="card border-dark">
                    <div class="card-header bg-dark text-white">
                        <h5><b>Indicadores cuantitativos</b></h5>
                    </div>
                    <div class="card-body">
                        @foreach($indicators as $indicator)
                            @if($indicator->type == 'Quantitative')
                                @php
                                    $valor = $indicatorsAnswers->where('id_indicator', '=', $indicator->id_Indicator)->first();
                                    $valor = $valor ? $valor->indicator_answer:$valor;
                                @endphp
                                <div class="row col-md-12 my-3">
                                    <label>{{ $indicator->description }}</label>
                                    <input type="text" class="form-control" name="indicatorAnswer[]" value="{{ $valor }}"  required>
                                    <input type="hidden" name="indicatorID[]" value="{{$indicator -> id_Indicator}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <input type="submit" class="btn btn-danger float-right" value="Guardar">
    </form>
</div>

@endsection
