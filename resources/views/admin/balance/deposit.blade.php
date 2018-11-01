@extends('adminlte::page')

@section('title', 'Sistema Teste')

@section('content_header')
    <h1>Recarga</h1>

    <ol class="breadcrumb">
<li> <a href="" >Dashboard </a>  </li>
<li> <a href="" > Saldo</a>  </li>
<li> <a href="" > Recarregar</a>  </li>


</ol>



@stop

@section('content')
<div class="box">
    <div class="box-header">
        <h3>Fazer Recarga</h3>
    </div>
    <div class="box-body">
         <form  method="POST" action="{{ route('deposit.store') }}">
            <div class="form-group">
               {!! csrf_field() !!}
            <input type="text" name="value" placeholder="Valor da recarga">
            
            </div>
            <div class="form-group">

               <button type="submit" class="btn btn-success">Recarregar</button>
            
            </div>
         
         </form>
          
    </div>
</div>
@stop