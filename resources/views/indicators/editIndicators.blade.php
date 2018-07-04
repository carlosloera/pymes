@extends('layouts.app')

@section('content')
    <div class="offset-md-2 col-md-8">
	    <form method="POST" action="{{ route('indicators.update', $indicator -> id_Indicator) }}">
	    	{{ method_field('PUT') }}
	    	{{ csrf_field() }}
	    	
			<div class="card border-info">
				<div class="card-header bg-info text-white"><b>Insertar Indicador</b></div>
				<div class="card-body col-md-10 offset-md-1">
					<div class="row form-group">
						<label for="id_category">Categoría</label>
						<select class="form-control" name="id_category">
							<?php $aux = ""; ?>
							@foreach($categories as $category)
							    @if($aux !== $category -> area)
							        @if($aux !== "")
							            </optgroup>
							        @endif
							        <optgroup label="{{ $category -> area }}">
							            <?php $aux = $category -> area; ?>
							    @endif
							    <option value={{ $category -> id_category }} {{ $category -> id_category === $indicator -> id_category ? "selected" : "" }}>
							    	{{ $category -> category }}
							    </option>
							@endforeach
						</select>
				    </div>

					<div class="row form-group" id="IndicatorsList">
						<div class="row form-group w-100" id="r_0">
							<div class="col-md-12">
								<input type="text" class="form-control" name="indicator" placeholder="{{ $indicator -> type === 'Qualitative' ? 'Ingrese una descripción.' : ' (Efectivo + Inversión en valores) / Pasivo a corto plazo' }}" value="{{ $indicator -> description }}" required>
							</div>
							<div class="col-md-12 mt-1">
								<select class="form-control" name="typeIndicator">
									<option value="Qualitative" {{ $indicator -> type === 'Qualitative' ? 'selected' : '' }}>Cualitativo</option>
									<option value="Quantitative" {{ $indicator -> type === 'Quantitative' ? 'selected' : '' }}>Cuantitativo</option>
								</select>
							</div>
						</div>
					</div>

                    <div class="row form-group">
						<input type="submit" class="btn btn-info btn-block mx-auto" value="Guardar">
						<input type="button" class="btn btn-info btn-block mx-auto" value="Cancelar" onClick="location.href='../indicators'">
					</div>
				</div>
			</div>
	    </form>
	 </div>
@stop