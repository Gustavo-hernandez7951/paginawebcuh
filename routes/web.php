<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'paginaController@welcome')->name('home');

//cuh
Route::get('quienessomos', 'paginaController@quienessomos')->name('quienessomos');
Route::get('logrosacademicos', 'paginaController@logrosacademicos')->name('logrosacademicos');
Route::get('avisoprivacidad', 'paginaController@avisoprivacidad')->name('avisoprivacidad');
Route::get('directorio/{id?}', 'paginaController@directorio')->name('directorio');
Route::get('directorioPDF/{id?}', 'paginaController@directorioPDF')->name('directorioPDF');
Route::get('credencial', 'paginaController@credencial')->name('credencial');
Route::get('credencialPDF', 'paginaController@credencialPDF')->name('credencialPDF');
Route::post('cargarCV','paginaController@cargarCV')->name('cargarCV');
Route::get('cargapdf','paginaController@cargapdf')->name('ccargapdf');
Route::get('manualSeguridad', 'paginaController@manualSeguridad')->name('manualseguridad');
Route::get('reglamentos', 'paginaController@reglamentos')->name('reglamentos');

//becas
Route::get('becaspreparatoria', 'paginaController@becaspreparatoria')->name('becaspreparatoria');
Route::get('becaslicenciatura', 'paginaController@becaslicenciatura')->name('becaslicenciatura');
Route::get('becasposgrado', 'paginaController@becasposgrado')->name('becasposgrado');

//Ceneval/Egel
Route::get('sedeegel', 'paginaController@sedeegel')->name('sedeegel');

//contacto
Route::get('contacto', 'paginaController@contactoweb')->name('contactoweb');
Route::post('contactar', 'paginaController@contactar')->name('contactar');

//comunidad CUH
Route::get('raicescuh','paginaController@raicescuh')->name('raicescuh');

//Oferta Educativa prepa
Route::get('preparatoria', 'paginaController@preparatoria')->name('preparatoria');

//licenciatura
Route::get('licenciatura', 'paginaController@licenciatura')->name('licenciatura');
Route::get('licadminysiscom', 'paginaController@licadminysiscom')->name('licadminysiscom');
Route::get('liccontaysisfis', 'paginaController@liccontaysisfis')->name('liccontaysisfis');
Route::get('licderecho', 'paginaController@licderecho')->name('licderecho');
Route::get('liceducacion', 'paginaController@liceducacion')->name('liceducacion');
Route::get('licsiscom', 'paginaController@licsiscom')->name('licsiscom');
Route::get('licpsicologia', 'paginaController@licpsicologia')->name('licpsicologia');

//posgrado
Route::get('posgrado', 'paginaController@posgrado')->name('posgrado');
Route::get('posfinanzas', 'paginaController@posfinanzas')->name('posfinanzas');
Route::get('posadminnegocios', 'paginaController@posadminnegocios')->name('posadminnegocios');
Route::get('posderechocivil', 'paginaController@posderechocivil')->name('posderechocivil');
Route::get('posformaciondocente', 'paginaController@posformaciondocente')->name('posformaciondocente');
Route::get('poseipa', 'paginaController@poseipa')->name('poseipa');
Route::get('posdppa', 'paginaController@posdppa')->name('posdppa');

//doctorado
Route::get('doctorado', 'paginaController@doctorado')->name('doctorado');
Route::get('doctoradodcd', 'paginaController@doctoradodcd')->name('doctoradodcd');
Route::get('doctoradodaiit', 'paginaController@doctoradodaiit')->name('doctoradodaiit');
Route::get('doctoradoditaae', 'paginaController@doctoradoditaae')->name('doctoradoditaae');

//serviciosocial
Route::get('dependencias', 'paginaController@dependencias')->name('dependencias');
Route::get('serviciosocial', 'paginaController@serviciosocial')->name('serviciosocial');
Route::get('practicasprofesionales', 'paginaController@practicasprofesionales')->name('practicasprofesionales');
Route::get('procedimientoservicio', 'paginaController@procedimientoservicio')->name('procedimientoservicio');
Route::get('reglamento', 'paginaController@reglamento')->name('reglamento');
Route::get('solicituddepartamentos', 'paginaController@solicituddepartamentos')->name('solicituddepartamentos');

//servicios
Route::get('biblioteca', 'paginaController@biblioteca')->name('biblioteca');
Route::get('labscomputo', 'paginaController@labscomputo')->name('labscomputo');
Route::get('aulasmultimedia', 'paginaController@aulasmultimedia')->name('aulasmultimedia');
Route::get('instalacionescomodas', 'paginaController@instalacionescomodas')->name('instalacionescomodas');
Route::get('salasjuiciooral', 'paginaController@salasjuiciooral')->name('salasjuiciooral');
Route::get('camaragesell', 'paginaController@camaragesell')->name('camaragesell');
Route::get('cafeteria', 'paginaController@cafeteria')->name('cafeteria');
Route::get('estacionamiento', 'paginaController@estacionamiento')->name('estacionamiento');
Route::get('cursosdeeducacioncontinua', 'paginaController@cursosdeeducacioncontinua')->name('cursosdeeducacioncontinua');
Route::post('cursosdeeducacioncontinua-registrar', 'paginaController@cursosdeeducacioncontinuaregistrar')->name('cursosdeeducacioncontinua-registrar');

//Ruta para el test CUH 
Route::get('vocacion-cuh', 'paginaController@testcuh')->name('vocacion-cuh');

//Ruta para la API contadora de vistas
Route::post('contadorVistas', 'paginaController@contadorVistas')->name('contador');

//Ruta para la validacion
Route::get('validaCertificado', 'paginaController@validaCertificado')->name('certificado');
Route::get('certificadovalidar', 'paginaController@certificadovalidar')->name('certificadoValidar');