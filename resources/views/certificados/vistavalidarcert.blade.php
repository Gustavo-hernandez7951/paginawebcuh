@extends('layouts.pagina')

@section('content')

<style>
    .container-fluid{
        align-content: center;
        justify-content: center;
    }
    .joey {
        border-radius: 10%;
        height: 260px;
        width: 280px;
    }
    
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<br/>
<br/>
<div class="row justify-content-around justify-content-md-around">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="row">
<div id="sapi" class="col-sm-12 col-md-4 align-items-center">
    <div class="row ">
        <div class="col-sm-1 col-md-9">
            <img  src="public/assets/img/sapientia.png" style="height:110px; width:100% " alt="nohubocarnal">
        </div>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------->
<div id="sapi" class="col-sm-12 col-md-4 align-items-center">
    <div class="row ">
        <div class="col-sm-1 col-md-9">
            <img  src="public/assets/img/yet.jpeg" style="height:245px; width:100% " alt="nohubocarnal">
        </div>

    </div>
</div>
<!-------------------------------------------------------------------------------------------------------->
<div id="sapi" class="col-sm-12 col-md-4 align-items-center">
    <div class="row ">
        <div class="col-sm-1 col-md-9">
            <img class="joey" style="height:100%; width:100% " src="public/assets/img/cuhfull.jpg" alt="nohubocarnal">
        </div>

    </div>
</div>
<!-------------------------------------------------------------------------------------------------------->
</div>
 
</div>
<br/>
<br/>
<br/>
<div class="container-fluid row justify-content-center">
    <br/>
    <br/>
    <div class="row justify-content-center">


        @if ($holp == "I")
            <script>
                nohubo();
            </script>
        @endif 

        @if ($holp != "I")
        <div class="col-md-20 col-md-offset-2 text-center">
            <div class="card bg-light mb-3">
                <div class="card-header">INFORMACION</div>
                <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-6 col-form-label text-md-right">DOCUMENTO:</label>
                                <p class="col-md-5 col-form-label text-md-left">{{ $tipo }}</p>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6 col-form-label text-md-right">ESTATUS:</label>
                                <p class="col-md-5 col-form-label text-md-left">{{ $msj }}</p>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6 col-form-label text-md-right">NOMBRE DEL TITULAR:</label>
                                <p class="col-md-5 col-form-label text-md-left">{{ $nombre }}</p>
                            </div>
        
                            <div class="form-group row">
                                <label class="col-md-6 col-form-label text-md-right">TITULO:</label>
                                <p class="col-md-5 col-form-label text-md-left">{{ $titulo }}</p>
                            </div>
        
                            <div class="form-group row">
                                <label class="col-md-6 col-form-label text-md-right">PERIODO:</label>
                                <p class="col-md-5 col-form-label text-md-left">{{ $periodo }}</p>
                            </div>
        
                            <div class="form-group row">
                                <label class="col-md-6 col-form-label text-md-right">FECHA DE EMISION:</label>
                                <p class="col-md-5 col-form-label text-md-left">{{ $fecha }}</p>
                            </div>
                </div>
            </div>
        </div>
        @endif
        

    </div>
</div> 

@endsection

<script>
    function nohubo(){
        Swal.fire({
            icon: "error",
            title: "DOCUMENTO NO VALIDO",
            text: "FOLIO NO IDENTIFICADO"
        });
    }
</script>

                        {{-- <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right">DOCUMENTO:</label>
                            <p class="col-md-5 col-form-label text-md-left">{{ $tiipo }}</p>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right">ESTATUS:</label>
                            <p class="col-md-5 col-form-label text-md-left">{{ $msj }}</p>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right">NOMBRE DEL TITULAR:</label>
                            <p class="col-md-5 col-form-label text-md-left">{{ $nombre }}</p>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right">TITULO:</label>
                            <p class="col-md-5 col-form-label text-md-left">{{ $titulo }}</p>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right">PERIODO:</label>
                            <p class="col-md-5 col-form-label text-md-left">{{ $periodo }}</p>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right">FECHA DE EMISION:</label>
                            <p class="col-md-5 col-form-label text-md-left">{{ $fecha }}</p>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right"> </label>
                            <p class="col-md-5 col-form-label text-md-left">{{  }}</p>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right"> </label>
                            <p class="col-md-5 col-form-label text-md-left">{{  }}</p>
                        </div> --}}
                        