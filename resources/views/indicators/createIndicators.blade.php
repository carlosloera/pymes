@extends('layouts.app')

@section('content')
    <div class="offset-md-2 col-md-8">
	    <form id="saveIndicators" method="POST" action="{{ route('indicators.store') }}">
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
							    <option value={{ $category -> id_category }}>
							    	{{ $category -> category }}
							    </option>
							@endforeach
						</select>
				    </div>

					<div class="row text-center form-group">
						<input type="button" id="addIndicator" class="btn btn-secondary btn-block mx-auto" value="Agregar indicadores a la categoría">
					</div>

					<div class="row form-group" id="IndicatorsList">
						<div class="row form-group w-100" id="r_0">
							<div class="col-md-12">
								<input type="text" class="form-control" name="indicators[]" placeholder="Ingrese una descripción" required>
							</div>
							<div class="col-md-6 mt-1">
								<select class="form-control" name="typeIndicator[]">
									<option value="Qualitative" selected>Cualitativo</option>
									<option value="Quantitative">Cuantitativo</option>
								</select>
							</div>
							<div class="col-md-6 mt-1">
								<input type="button" class="btn btn-danger btn-block" name="borrar[]" value="Eliminar">
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