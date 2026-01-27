<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Credencial CUH</title>

        <style>
            h1 { color: #00004a;
            }
            table {
                /* border: #00004a 10px solid; */
                width: 350px;
	            height: 500px;
                background-image: url('assets/img/fondo-credencial.jpg');
            }
            .rounded-circle {
                width:150px;
                height:150px;
                border-radius:75px;
            }
            </style>
    </head>
    <body>
        <h2 align="center" style="font-size:100%;">Centro Universitario Hidalguense A.C.</h2>
        <p align="center" style="font-size:75%;">
            <strong>La sabiduría es nuestra fuerza</strong><br>
            Boulevard del Minero #305, Colonia Rojo Gómez, C.P. 42030 Pachuca, Hgo.<br>
            Telefonos: (771) 719 5300 / (771) 719 5301
        </p>
        <hr width=300>
        <br>
        <h2 align="center" style="font-size:150%;"><strong>CREDENCIAL DIGITAL</strong></h2>
        <br>
        <table align="center">
            <tr style="border: hidden">
                <td style="border: hidden" align="center" width="170" height="170">
                    <img class="rounded-circle z-depth-2" alt="" width="150" height="150" onerror="this.onerror=null; this.src='assets/img/directorio/default.jpg'"  src="assets/img/directorio/{{ $credencial->idempleado }}.jpg" data-holder-rendered="true">
                </td>
            </tr>

            <tr style="border: hidden">
                <td style="border: hidden" align="center" width="45" height="45">
                <h1 align="center" style="font-size:100%;"> {{ $credencial->nombre_empleado }}
                                                            {{ $credencial->paterno_empleado }}
                                                            {{ $credencial->materno_empleado }}</h1>
                </td>
            </tr>

            <tr style="border: hidden">
                <td style="border: hidden" align="center" width="110" height="110">
                        <img width="130" height="130" src="data:image/png;base64, {!! $qrcode !!}">
                </td>
            </tr>
        </table>
    </body>
    <script>
    $(function() {
        $('img[data-src-error]').error(function() {
            var o = $(this);
            var errorSrc = o.attr('data-src-error');

            if (o.attr('src') != errorSrc) {
                o.attr('src', errorSrc);
            }
        });
    });
    </script>
</html>