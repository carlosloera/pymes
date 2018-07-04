@extends('layouts.app')

@section('content')
    <div class="offset-lg-2 col-lg-8">
    	<table class="table table-striped table-responsive" id="tbIndicatorsList">
    		<thead class="stripe">
    			<tr>
                    <th>Area</th>
                    <th>Categoría</th>
    				<th>Descripción o fórmula</th>
    				<th>Tipo de indicador</th>
                    <th></th>
                    <th></th>
    			</tr>
    		</thead>
    		@foreach($indicators as $indicator)
    		    <tr>
                    <td>{{$indicator -> area}}</td>
                    <td>{{$indicator -> category}}</td>
    		    	<td>{{$indicator -> description}}</td>
    		    	<td>{{$indicator -> type === 'Qualitative' ? 'Cualitativo' : 'Cuantitativo'}}</td>
                    <td>
                        <a href="{{ route('indicators.edit', $indicator -> id_Indicator) }}" class="btn btn-success" >Editar</a>
                    </td>
                    <td>
                        <form  class="d-inline" name="deleteIndicator[]" method="POST" action="{{ route('indicators.destroy', $indicator -> id_Indicator) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                    </td>
    		    </tr>
    		@endforeach
    	</table>
        <a href="{{ route('indicators.create') }}" class="btn btn-link" >agregar</a>
    </div>
@stop