@extends('layouts.app')
@section('content')
<div class="body"></div>
<div class="row">
	<div class="col">
 <input id="date" type="date">

    </div>
 <div class="col">
  <div class="form-group">
            <label for="egreso">Tipo Gasto</label>
            <select class="form-control">
               @foreach($tipoGasto as $gasto)
                <option name="tipoGasto">{{$gasto->Detalle}}</option>
               @endforeach   
            </select>
        </div>
    </div>

  
</div>
<div class="row">
     <label for="egreso">Egreso:</label>
    	<input type="double">
    </div>
    <div class="row">
    	<div class="col">
    		 <div class="form-group">
            <label for="egreso">Placa</label>
            <select class="form-control">
               @foreach($tipoGasto as $gasto)
                <option name="tipoGasto">{{$gasto->Detalle}}</option>
               @endforeach   
            </select>
        </div>
    	</div>
    	<div class="col">
    		<label for="egreso">Transporte:</label>
    	    <input type="text"><br>
    	    <label for="egreso">persona1:</label>
    	     <input type="text"><br>
    	    <label for="egreso">persona2:</label>
    	    <input type="text"><br>
    	    <label for="egreso">persona3:</label>
    	    <input type="text"><br>
    	</div>
    	
    </div>
    <div class="row">
    	 <label class="form-check-label" for="exampleRadios1">Aplica Descuento   </label>
    	<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    SI
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    No
  </label>
</div>
    </div>
    <div class="row">
    	<div class="form-check">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">nombre1</label>
</div>
<div class="form-check ">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">nombre2</label>
</div>
<div class="form-check ">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">nombre3</label>
</div>
    </div>
    <input type="submit" value="Guardar">
@endsection