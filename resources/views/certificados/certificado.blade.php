@extends('layouts.pagina')

@section('content')


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
        <!-- <div class="alert alert-danger">
        </div> 
        <div class="alert alert-success">
        </div> -->
        <h2 class="h1-responsive font-weight-bold text-center">Valida tu Documento</h2>
        <form action="{{ route('certificadoValidar') }}" method="post" class="form-horizontal">
          @csrf
          <br>
          <div class="form-row">
            <div class="col form-group">
              <input type="Text" class="form-control" name="folio" id="folio" placeholder="Folio" data-rule="" data-msg="Por favor ingresa un Folio" required>
              <!-- <div class="alert alert-danger">
                        <span class="help-block">
                          <strong></strong>
                        </span>
                      </div> -->
              <div class="validate"></div>
            </div>
          </div>
          <!-- <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required >
                  <div class="alert alert-danger">
                    <span class="help-block">
                      <strong></strong>
                    </span>
                  </div>
                <div class="validate"></div>
            </div> -->

          <!-- <div class="form-group">
              <textarea class="form-control" id="message" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje" required ></textarea>
                
                  <div class="alert alert-danger">
                    <span class="help-block">
                      <strong></strong>
                    </span>
                  </div>
              <div class="validate"></div>
            </div> -->

          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
              Enviar
            </button>
          </div>
        </form>
      </div>
      <div class="col-lg-3"></div>
    </div>

  </div>
</section><!-- End Contact Section -->

@endsection