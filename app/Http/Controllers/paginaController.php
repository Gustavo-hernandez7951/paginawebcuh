<?php

namespace App\Http\Controllers;

//Prueba
use App\Models\catDocumento;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use App\Mail\MensajeRecibido;
use App\Models\credencial_digital;

use App\Models\curso;
use App\Models\participante;
use App\Models\grupos_curso;
use App\Models\validacionCert;
use App\Models\datosPersonales;
use App\Models\valDocumentos;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Support\Facades\DB;

class paginaController extends Controller
{
    public function quienessomos()
    {
        return view('cuh.quienessomos');
    }

    public function logrosacademicos()
    {
        return view('cuh.logrosacademicos');
    }

    public function avisoprivacidad()
    {
        return view('cuh.avisoprivacidad');
    }

    public function Egel()
    {
        return view('servicios.Egel');
    }

    public function directorio($id)
    {
        $credencial = credencial_digital::where('idempleado',$id)->get();
        $count = credencial_digital::where('idempleado',$id)->count();

        return redirect()->route( 'credencial' )->with( [ 'credencial' => $credencial ] )->with( [ 'count' => $count ] );
    }

    public function directorioPDF($id)
    {
        $credencial = credencial_digital::where('idempleado',$id)->get();
        $count = credencial_digital::where('idempleado',$id)->count();

        return redirect()->route( 'credencialPDF' )->with( [ 'credencial' => $credencial ] )->with( [ 'count' => $count ] );
    }

    public function credencial()
    {
        $credencial = session()->get('credencial');
        $count = session()->get('count');

        if($credencial != null){
            if($count == 1){
                return view('cuh.directorio', compact('credencial'));
            }else{
                return view('cuh.directorionovalido');
            }
        }else{
            return redirect( '/' );
        }
    }

    public function credencialPDF()
    {
                $credenciales = session()->get('credencial');
                foreach( $credenciales as $credencial)

                $folio = 'www.cuh.edu.mx/pagina/directorio/'.$credencial->idempleado;
    
                $qrcode = base64_encode(QrCode::format('svg')->size(200)->errorCorrection('H')->generate($folio));
                $pdf = \PDF::loadView('cuh.credencial', compact('qrcode', 'credencial'))->setPaper('letter');
                $pdf->save(storage_path('app/public/credenciales/') . $credencial->idempleado.'.pdf');
                return $pdf->download($credencial->idempleado.'.pdf',array('Attachment'=>false));
    }

    public function cargarCV(Request $request)
    {

        if($request->hasFile('archivo'))
            {
                $file = $request->file('archivo');
                $originalname = time().$file->getClientOriginalName();
                $path = $file->storeAs('public/archivoCV/', $request->id.'.pdf');
            }

        return redirect('cargapdf')->with("success","Su archivo se subió con éxito!");
    }

    public function cargapdf()
    {
        return view('cuh.avisocarga');
    }

    public function contactoweb()
    {
        return view('contactoweb.contactoweb');
    }
    
    public function contactar(Request $request)
    {
        $msg = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ],[
            'name.required' => __('Yo necesito su nombre')
        ]);

        Mail::to('contacto.web@cuh.edu.mx')->send(new MensajeRecibido($msg));

        return redirect()->back()->with("success","Mensaje Enviado!");
    }

    public function becaspreparatoria()
    {
        return view('becas.preparatoria');
    }

    public function becaslicenciatura()
    {
        return view('becas.licenciatura');
    }

    public function becasposgrado()
    {
        return view('becas.posgrado');
    }

    public function preparatoria()
    {
        return view('ofertaeducativa.preparatoria');
    }

    public function licenciatura()
    {
        return view('ofertaeducativa.licindex');
    }

    public function licadminysiscom()
    {
        return view('ofertaeducativa.licadminysiscom');
    }

    public function liccontaysisfis()
    {
        return view('ofertaeducativa.liccontaysisfis');
    }

    public function licderecho()
    {
        return view('ofertaeducativa.licderecho');
    }

    public function liceducacion()
    {
        return view('ofertaeducativa.liceducacion');
    }

    public function licsiscom()
    {
        return view('ofertaeducativa.licsiscom');
    }

    public function licpsicologia()
    {
        return view('ofertaeducativa.licpsicologia');
    }

    public function posgrado()
    {
        return view('ofertaeducativa.posindex');
    }

    public function posfinanzas()
    {
        return view('ofertaeducativa.posfinanzas');
    }

    public function posadminnegocios()
    {
        return view('ofertaeducativa.posadminnegocios');
    }

    public function posderechocivil()
    {
        return view('ofertaeducativa.posderechocivil');
    }

    public function posformaciondocente()
    {
        return view('ofertaeducativa.posformaciondocente');
    }

    public function poseipa()
    {
        return view('ofertaeducativa.poseipa');
    }

    public function posdppa()
    {
        return view('ofertaeducativa.posdppa');
    }

    public function doctorado()
    {
        return view('ofertaeducativa.doctorado');
    }

    public function doctoradodcd()
    {
        return view('ofertaeducativa.doctoradodcd');
    }

    public function doctoradodaiit()
    {
        return view('ofertaeducativa.doctoradodaiit');
    }

    public function doctoradoditaae()
    {
        return view('ofertaeducativa.doctoradoditaae');
    }


    public function biblioteca()
    {
        return view('servicios.biblioteca');
    }

    public function labscomputo()
    {
        return view('servicios.laboratoriosdecomputo');
    }

    public function aulasmultimedia()
    {
        return view('servicios.aulasmultimedia');
    }

    public function instalacionescomodas()
    {
        return view('servicios.instalacionescomodas');
    }

    public function salasjuiciooral()
    {
        return view('servicios.salasdejuiciooral');
    }

    public function camaragesell()
    {
        return view('servicios.camaradegesell');
    }

    public function cafeteria()
    {
        return view('servicios.cafeteria');
    }

    public function estacionamiento()
    {
        return view('servicios.estacionamiento');
    }

    public function sedeegel()
    {
        return view('servicios.sedeegel');
    }

    public function testcuh()
    {
        return view('test.vocacioncuh');
    }

    public function cursosdeeducacioncontinua()
    {
        $cursos = curso::where('status_curso','VI')->get();
        return view('servicios.cursosdeeducacioncontinua', compact('cursos'));
    }

    public function cursosdeeducacioncontinuaregistrar(Request $request)
    {
        // Creamos el objeto
        $p = new participante();
        
        // Seteamos las propiedades
        $p->idcurso = $request['curso'] ;
        $p->nombre_participante = $request['nombre'] ;
        $p->paterno_participante = $request['paterno'] ;
        $p->materno_participante = $request['materno'] ;
        $p->email_participante = $request['email'] ;
        $p->celular_participante = $request['telefono'] ;
        $p->edad_participante = $request['edad'] ;
        $p->tematica_propuesta =  $request['tematica'] ;
        $p->idgrupo = $request['grupo'] ;
        $p->recibir_informacion = $request['info'] ;
        $p->acepto_terminos = $request['acepto'] ;
        
        // Guardamos en la base de datos (equivalente al flush de Doctrine)
        $p->save();

        return redirect()->back()->with("success","Sus datos se agregaron con éxito!");
    
    }

    public function raicescuh()
    {
        return view('comunidadcuh.raicescuh');
    }

    //Funcion --> Contador de solicitudes de la pagina: raicescuh
    public function contadorVistas(Request $request)
    {
        $filename = 'count.txt';
        $data = 1;

        $file1 = Storage::disk('archivoTXT')->get($filename);
        $suma = $data+intval($file1);

        Storage::disk('archivoTXT')->put($filename,$suma);

        $visita =  $request['numVista'];
        $array = [
            "NumVistas" =>  $file1
        ];
        return response()->json($array);
    
    }


    public function validaCertificado(Request $request){
        //  $hom = valDocumentos::get();
        //  foreach($hom as $kk)
        //  $gg = $kk->Folio    
        // res = sha,gg  
        //  $res=password_verify('hola','b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79');
        //  if ('b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79' == 'b221d9dbb083a7f33428d7c2a3c3198ae925614d70210e28716ccaa7cd4ddb79'){
        //      $res = "verdadero";
        //  } else
        //  {
        //      $res = "falso";

        //  }

        $folio = $request['folio'];


        //$decrypted = Crypt::decryptString($folio);

        $tipo = "NO ENCONTRADO";
        $titulo = "NO ENCONTRADO";
        $periodo = "NO ENCONTRADO";
        $nombre = "NO ENCONTRADO";
        $nombre = "NO ENCONTRADO";
        $fecha = " NO ENCONTRADO";
        // $nombre = "NO ENCONTRADO";
        // $folioCert = "NO ENCONTRADO";  
        // $fecha = "NO ENCONTRADO"; 
        // $periodo = "NO ENCONTRADO";
        // $promedio = "NO ENCONTRADO";
        // $licenciatura = "NO ENCONTRADO"; 
        // $tipodoc = "NO ENCONTRADO";
        // $titulo="NO ENCONTRADO";
        $msj = "NO ENCONTRADO"; 
        $holp = "I";
        


        // $matricula = $request['fechexped'];
        

        // $folio = str_replace("-", "/", $folio);

        // Folio Expedicion,Folio Certificado

        //$count = validacionCert::where('num_certificado',$folio)->count();
        $ccount = valDocumentos::where('folio',$folio)->count();

        if($ccount == 0){
            return view('certificados.vistavalidarcert', compact('msj','periodo','tipo','titulo','nombre','fecha','holp'));
        }

        $ccount = valDocumentos::where('folio', $folio)->first();
        $tipodoc = $ccount->iddocumento_emision;
        $type = catDocumento::where('iddocumento_emision' , $tipodoc)->first();
        $msj = "DOCUMENTO VALIDO";
        $ccount = valDocumentos::where('folio', $folio)->first();
        $tipodoc = $ccount->iddocumento_emision;
        $titulo = $ccount->titulo_trabajo;
        $periodo = $ccount->fecha_inicial." A ".$ccount->fecha_termino;
        $nambre = $ccount->siglas_emision." ".$ccount->nombre_emision . " " . $ccount->paterno_emision . " " . $ccount->materno_emision;
        $nombre = str_replace("&", "Ñ", $nambre);
        $fecha = $ccount->fecha_emision;
        $tipo = $type->nombre_documento;
        $holp = "P";
        return view('certificados.vistavalidarcert', compact('msj','periodo','tipo','titulo','nombre','fecha','holp'));

        //$decrypted = Crypt::decryptString($folio);
        //$msj = "DOCUMENTO VALIDO";

        //$certificado = validacionCert::where('num_certificado',$folio)->first();
        // $ccount = valDocumentos::where('folio', $folio)->first();
        // //$matricula =$certificado->matricula_alumno;
        // //$consulta = datosPersonales::where('matricula',$matricula)->first();
        // $tipodoc = $ccount->iddocumento_emision;
        // $titulo = $ccount->titulo_trabajo;
        // $periodo = $ccount->fecha_inicial." a ".$ccount->fecha_termino;
        // $nombre = $ccount->siglas_emision." ".$ccount->nombre_emision . " " . $ccount->parerno_emision . " " . $ccount->materno_emision;
        // $nombre = str_replace("&", "Ñ", $nombre);
        // $fecha = $ccount->fecha_emision;

        //  if($tipodoc === "CD"){
        //      $tiipo = "Constancia de Dictaminacion";
        //     }elseif($tipodoc === "PR"){
        //      $tiipo = "Publicacion de Revista";
        //         }else{
        //             $tiipo = "Documento Especial";
        //         } 

        // //$nombre = $consulta->paterno . " " . $consulta->materno . " " . $consulta->nombre;
        // //$nombre = str_replace("&", "Ñ", $nombre);
        // //$folioCert = $certificado->num_certificado;
        
        // //$promedio = $certificado->promedio;
        // //$licenciatura = $certificado->programa_alumno;
        // //$periodo = $certificado->periodo;
        // // $modalidad = "PRESENCIAL";  
        //  //valores-->id,grado academico, tipo documento, departamento, identificador, programa,turno, grupo, nombre, folioqr, fecha_expedicion, rutaarch, nombre_archivo
        //  //tabla-->archivos 


        // // $nombre = "";
        // // $folioCert = "";  
        // // $fecha = ""; 
        // // $periodo = "";
        // // $promedio = "";
        // // $licenciatura = ""; 
        // // $msj = "¡LO SENTIMOS... NO EXISTE UN DOCUMENTO RELACIONADO CON ESTE FOLIO!";   

        // // // $matricula = $request['fechexped'];
        // // $folio = $request['folio'];
        // // // $folio = str_replace("-", "/", $folio);

        // // // Folio Expedicion,Folio Certificado

        // // $count = validacionCert::where('num_certificado',$folio)->count();

        // // if($count == 0){
        // //     return view('certificados\certificado', compact('msj','nombre','folioCert','periodo','fecha','promedio','licenciatura'));
        // // }

        // // $msj = "CERTIFICADO VALIDO";

        // // $certificado = validacionCert::where('num_certificado',$folio)->first();
        // // $matricula =$certificado->matricula_alumno;
        // // $consulta = datosPersonales::where('matricula',$matricula)->first();


        // // $nombre = $consulta->paterno . " " . $consulta->materno . " " . $consulta->nombre;
        // // $nombre = str_replace("&", "Ñ", $nombre);
        // // $folioCert = $certificado->num_certificado;
        // // $fecha = $certificado->fecha_expedicion;
        // // $promedio = $certificado->promedio;
        // // $licenciatura = $certificado->programa_alumno;
        // // $periodo = $certificado->periodo;
        // // // $modalidad = "PRESENCIAL";  

        // return view('certificados.vistavalidarcert', compact('msj','periodo','tiipo','titulo','nombre','fecha'));
    }
    

    //Funcion --> Contador de solicitudes de la pagina: raicescuh
    public function certificadovalidar(Request $request){
        $tiipo = "NO ENCONTRADO";
        $titulo = "NO ENCONTRADO";
        $periodo = "NO ENCONTRADO";
        $nombre = "NO ENCONTRADO";
        $nombre = "NO ENCONTRADO";
        $fecha = "NO ENCONTRADO";
        $holp = "I";


        // $nombre = "NO ENCONTRADO";
        // $folioCert = "NO ENCONTRADO";  
        // $fecha = "NO ENCONTRADO"; 
        // $periodo = "NO ENCONTRADO";
        // $promedio = "NO ENCONTRADO";
        // $licenciatura = "NO ENCONTRADO"; 
        // $tipodoc = "NO ENCONTRADO";
        // $titulo="NO ENCONTRADO";
        $msj = "¡LO SENTIMOS... NO EXISTE UN DOCUMENTO RELACIONADO CON ESTE FOLIO!";   

        // $matricula = $request['fechexped'];
        $folio = $request['folio'];
        // $folio = str_replace("-", "/", $folio);

        // Folio Expedicion,Folio Certificado

        $count = validacionCert::where('num_certificado',$folio)->count();
        $ccount = valDocumentos::where('folio',$folio)->count();

        if($count == 0 and $ccount == 0){
            return view('certificados.vistavalidarcert', compact('msj','periodo','tiipo','titulo','nombre','fecha','holp'));
        }

        $msj = "DOCUMENTO VALIDO";

        #$certificado = validacionCert::where('num_certificado',$folio)->first();
        $ccount = valDocumentos::where('folio_qr', $folio)->first();
        #$matricula =$certificado->matricula_alumno;
        #$consulta = datosPersonales::where('matricula',$matricula)->first();
        $tipodoc = $ccount->tipo_documento;
        $titulo = $ccount->titulo;
        $periodo = $ccount->periodo;
        $nombre = $ccount->name;
        $nombre = str_replace("&", "ñ", $nombre);
        $fecha = $ccount->fecha_expedicion;

        if($tipodoc === "CD"){
            $tiipo = "Constancia de Dictaminacion";
        }elseif($tipodoc === "PR"){
            $tiipo = "Publicacion de Revista";
            }else{
                $tiipo = "Documento Especial";
            } 

        // #$nombre = $consulta->paterno . " " . $consulta->materno . " " . $consulta->nombre;
        // #$nombre = str_replace("&", "Ñ", $nombre);
        // #$folioCert = $certificado->num_certificado;
        
        // #$promedio = $certificado->promedio;
        // #$licenciatura = $certificado->programa_alumno;
        // #$periodo = $certificado->periodo;
        // $modalidad = "PRESENCIAL";  
         //valores-->id,grado academico, tipo documento, departamento, identificador, programa,turno, grupo, nombre, folioqr, fecha_expedicion, rutaarch, nombre_archivo
         //tabla-->archivos 

        return view('certificados.vistavalidarcert', compact('msj','periodo','tiipo','titulo','nombre','fecha'));
        //return view('certificados\vistavalidarcert', compact('msj','nombre','folioCert','periodo','fecha','promedio','licenciatura','tipodoc','matri','titulo'));
    }

    public function manualSeguridad()
    {
        return view('cuh.manualseguridad');
    }

    public function reglamentos()
    {
        return view('cuh.reglamentos');
    }

    public function dependencias()
    {
        return view('serviciosocial.dependencias');
    }

    public function serviciosocial()
    {
        return view('serviciosocial.serviciosocial');
    }

    public function practicasprofesionales()
    {
        return view('serviciosocial.practicasprofesionales');
    }

    public function procedimientoservicio()
    {
        return view('serviciosocial.procedimientoservicio');
    }

    public function reglamento()
    {
        return view('serviciosocial.reglamento');
    }

    public function solicituddepartamentos()
    {
        return view('serviciosocial.solicituddepartamentos');
    }

    public function welcome()
    {
        $aperturaBeca = DB::table('configuracion')
            ->where('num_serial', 1)
            ->value('apertura_renovacion_beca');

        return view('welcome', compact('aperturaBeca'));
    }

}