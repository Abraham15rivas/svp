@extends('layouts.app')

@section('title')
    @include('partials.title.formHoliday', [
        'title' => __("Solicitar Vacaciones")
    ])
@endsection

@section('content')
{{$holiday=null}}
<div class="container">  
<div class="row">
    <form action="{{ route('holidays.calculate') }}" method="POST">
        @csrf   
   <div class="col s4">
     <h5 class="center" style="margin-top:50px;">Fecha Inicio</h5>
       <div class="input-field">
         <input type="date" class="datepicker" name="fi" id="fi">
         <input type="hidden" id="fival" name="fival">
       </div>
   </div>

   <div class="col s4">
      <h5 class="center" style="margin-top:50px;">Fecha Fin</h5>
        <div class="input-field">
          <input type="date" class="datepicker" id="ff">
        </div>
   </div>

  @if($holiday)
      @include('partials.holidays.data')
  @else
  <br><br>
    <div class="col s4">
        <button class="btn btn-large blue darken-3">Calcular</button>
    </div>
  @endif
</form>
</div>
</div>
@endsection