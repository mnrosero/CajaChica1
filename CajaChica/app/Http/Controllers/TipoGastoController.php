<?php

namespace CajaChica\Http\Controllers;

use Illuminate\Http\Request;
use CajaChica\TipoGasto;
use Illuminate\Support\Facades\Redirect;
use DB;


class TipoGastoController extends Controller
{
	 public function __construt(){

 } 
   public function index(){
	$tipoGasto=TipoGasto::all();
	//dd($tipoGasto);
	return view('tipoGasto.index')
	->with('tipoGasto',$tipoGasto);
}

}
