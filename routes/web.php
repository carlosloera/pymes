<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
//INDICADORES
Route::resource('/indicators','IndicatorController');
Route::get('indicadores/{id}/{id_category}','IndicatorController@obtener')->name('indicadores');
//ERIK PREGUNTAS--------------------------------------------------------------
Route::resource('/questions','questionController');
Route::post('saveIndicatorAnswer', 'indicatorAnswerController@store')->name('saveIndicatorsAnswers');

Route::get('cuestionario/{id}/{id_category}','questionController@obtener')->name('cuestionario');
Route::post('guardar','answerController@store')->name('guardar');
//Route::get('/questions','questionController@index')->name('questions');
//Route::get('/questionsCrear','questionController@create')->name('questionsCreate');

//CARLOS-------------------------------------------------
Route::get('evaluacion',function(){
    return view('tools.criteriosEvaluacionFinal.form');
});

Route::get('evaluacionFinal/{id}','ProcessController@evaluacionFinal')->name('evaluacionFinal');
Route::post('crearEvaluacionFinal','ProcessController@crearEvaluacionFinal')->name('crearEvaluacionFinal');
Route::get('pdfEvaluacionFinal/{id}','ProcessController@pdfEvaluacionFinal')->name('pdfEvaluacionFinal');

Route::get('workProgram/{id}','ProcessController@workProgram')->name('workProgram');
Route::post('crearWork','ProcessController@createWorkProgram')->name('crearWork');
Route::get('pdfWork/{id}','ProcessController@pdfWork')->name('pdfWork');

Route::get('analisis/{id}','ProcessController@documentalAnalises')->name('analisis');
Route::post('crearAnalisis','ProcessController@createDocumentalAnalises')->name('crearAnalisis');
Route::get('pdfAnalisis/{id}','ProcessController@pdfDocumentalAnalisis')->name('pdfAnalisis');


Route::get('evaluacion/{id}','ProcessController@evaluationCriteria')->name('evaluacion');
Route::post('crearEvaluacion','ProcessController@createEvaluationCriteria')->name('crearEvaluacion');
Route::get('pdfEvaluacion/{id}','ProcessController@pdfEvaluationCriteria')->name('pdfEvaluacion');


Route::get('deteccion/{id}','ProcessController@failureDetection')->name('deteccion');
Route::post('crearDeteccion','ProcessController@createFailureDetection')->name('crearDeteccion');
Route::get('pdfDeteccion/{id}','ProcessController@pdfDeteccion')->name('pdfDeteccion');

Route::get('registro/{id}','ProcessController@recordFind')->name('registro');
Route::post('crearRegistri','ProcessController@createRecordFind')->name('crearRegistro');
Route::get('pdfRegistro/{id}','ProcessController@pdfRegistro')->name('pdfRegistro');

Route::post('guardar2','ProcessController@storeWork')->name('guardar2');
Route::post('editar','ProcessController@editWork')->name('editar');
Route::post('eliminar','ProcessController@deleteWork')->name('eliminar');
//Cesar-----------------------------------
Route::get('/Administrador','userController@index')->name('Administrador');
Route::get('/Administrador/{id}/mostrar','userController@show')->name('mostrarAdministrador');
Route::resource('/users','userController');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/pdf',['as'=>'pdfDemo','uses'=>"PdfDemoController@index"]);
Route::get('/sample-pdf', ['as'=>'samplePdf', 'uses'=>'PdfDemoController@samplePdf']);
Route::get('/save-pdf',['as'=>'savePdf','uses'=>'PdfDemoController@savePdf']);
Route::get('/html-to-pdf',['as'=>'htmlToPdf','uses'=>'PdfDemoController@htmlToPdf']);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pdf2','PdfController@index');

Route::get('registroEvidencias',function() {
    return view('tools.registroEvidencias.form');
});

Route::get('deteccionFallas',function() {
    return view('tools.deteccionFallas.form');
});

Route::get('criteriosEvaluacion',function() {
    return view('tools.criteriosEvaluacion.form');
});

Route::get('procesos','ProcessController@procesos')->name('procesos');
Route::post('crearProceso','ProcessController@crearProceso')->name('crearProceso');
Route::get('proceso/{id}','ProcessController@proceso')->name('proceso');

