@extends('proceso')


@section('herramientas')

<div class="container">
    <h1>Indicadores</h1>
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
           $qualitative=[];
           $quantitative=[];
    ?>
    


    
    @foreach( $indicadores as $key=>$indicador)
          <?php
            $categoria = \App\Category::where('id_category',$indicador->first()->id_category)->first();
          ?>
           <h2><strong>{{ $categoria->category }} </strong></h2>
         @foreach( $indicador as $item)
            <h4>{{ $item->description }}</h4>
            <h4>{{ $item->type }}</h4>
            <br>
        @endforeach
            <hr> 
    @endforeach

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                       
                 
   
        <div class="offset-md-10">

            <button type="submit"  class="  btn btn-danger" >Guardar</button>
        </div>
    </div>
    </form>
    
</div>

@endsection
