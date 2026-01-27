@extends('layouts.pagina')

@section('content')    
    <!-- ======= Credencial ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Directorio</h2>
            <h3><i class="icofont-credit-card"></i> Credencial Digital <span>CUH</span></h3>
        </div>

        <div class="row justify-content-center">
          @foreach($credencial as $lists)
          <div class="col-lg-6 col-md-12" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <img class="rounded-circle z-depth-2" alt="100x100" width="150" height="150" onerror="this.onerror=null; this.src='assets/img/directorio/default.jpg'" src="assets/img/directorio/{{ $lists->idempleado }}.jpg" data-holder-rendered="true">
                <br>
                <br>
                <p><strong>CENTRO DE TRABAJO:</strong><br> {{ $lists->centro_trabajo }}</p>
                <br>
                <p><strong>NOMBRE:</strong><br> {{ $lists->nombre_empleado }}
                                            {{ $lists->paterno_empleado }}
                                            {{ $lists->materno_empleado }}</p>
                <br>
                <p><strong>CURP:</strong><br> {{ $lists->curp_empleado }}</p>
                <br>
                <p><strong>RFC:</strong><br> {{ $lists->rfc_empleado }}</p>
                <br>
                <p><strong>DIRECCION:</strong><br>  {{ $lists->domicilio_empleado }}
                                                {{ $lists->localidad_empleado }}
                                                {{ $lists->municipio_empleado }}
                                                {{ $lists->estado_empleado }}</p>
                <br>
                <p><strong>CORREO ELECTRONICO:</strong><br> {{ $lists->email_empleado }}</p>
                <br>
                <p><strong>TELEFONO:</strong><br> {{ $lists->telefono_empleado }}</p>
                <br>
                <p><strong>AREA:</strong><br> {{ $lists->area_empleado }}</p>
                <br>
                <div align="center">
                  <a href="{{ route('directorioPDF', $lists->idempleado) }}"><button type="button" class="btn btn-outline-danger btn-lg btn-block"><i class="icofont-download"></i><i class="fas fa-download"></i> Descargar Credencial</button></a>
                </div>
                <br>
            </div>
          </div>
          @endforeach
        </div>        
      </div>
    </section><!-- End Services Section -->

    <div class="row">
    <div class="col-md-4 col-lg-4">
    </div>
      <div class="col-md-4 col-lg-4">
        <a href="#" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" data-target="#create">
          <i class="fas fa-plus"></i>&nbsp; Comprobante de Vacunación
        </a>
      </div>
    <div class="col-md-4 col-lg-4">
    </div>
    </div>

      <div class="modal fade" id="create">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                  <form method="POST" action="{{ route('cargarCV') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <!-- Encabezado -->
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Comprobante de Vacunación</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <!-- Cuerpo -->
                  <div class="modal-body">
                  
                          <!-- Input Razon social -->
                          <div class="input-group mb-3">                           
                              <input id="id" type="hidden" placeholder="id" class="form-control " name="id" value="{{trim($lists->idempleado)}}" onkeyup="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required="" autocomplete="id" autofocus="">
                          </div>

                          <!-- Input Constancia de situación fiscal -->
                          <div class="input-group mb-3">
                              <label for="exampleFormControlFile1">Subir Comprobante</label>
                              <!-- <input type="file" name="constanciasf" class="form-control-file" id="constanciasf" required> -->
                              <input type="file" id="archivo" name="archivo" accept="application/pdf" required>
                          </div>
                            
                  </div>
                  <!-- Pie de pagina -->
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" data-target="#carga" onclick="(alerta)">
                          <i class="icofont-upload"></i><i class="fas fa-upload"></i>&nbsp; Subir
                      </button>
                  </div>

                  </form>
              </div>
          </div>
      </div>
@endsection

@section('script')
<!-- cargar archivos solo pdf -->
<script>
$('input[type="file"]').on('change', function(){
  var ext = $( this ).val().split('.').pop();
  if ($( this ).val() != '') {
    if(ext == "pdf"){
      // alert("La extensión es: " + ext);
      if($(this)[0].files[0].size > 40000000){
        console.log("El documento excede el tamaño máximo");
        $('#modal-title').text('¡Precaución!');
        $('#modal-msg').html("Se solicita un archivo no mayor a 40MB. Por favor verifica.");
        $("#modal-gral").modal();           
        $(this).val('');
      }else{
        $("#modal-gral").hide();
      }
    }
    else
    {
      $( this ).val('');
      alert("Extensión no permitida: " + ext);
    }
  }
});
</script>
@endsection