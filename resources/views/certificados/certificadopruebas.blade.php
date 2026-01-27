<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Documento | Centro Universitario Hidalguense A.C.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        :root {
            --cuh-primary: #003366;
            --cuh-secondary: #9E1B32;
            --cuh-accent: #F2A900;
            --cuh-light: #F8F9FA;
            --cuh-dark: #212529;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: var(--cuh-dark);
            line-height: 1.6;
        }

        .institutional-header {
            background: linear-gradient(135deg, var(--cuh-primary), var(--cuh-secondary));
            color: white;
            padding: 1.5rem 0;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-bottom: 5px solid var(--cuh-accent);
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .logo {
            height: 90px;
            width: auto;
            object-fit: contain;
            filter: brightness(0) invert(1);
        }

        .header-title {
            text-align: center;
            margin: 1rem 0;
        }

        .header-title h1 {
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 0.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .header-title .motto {
            font-style: italic;
            font-weight: 300;
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
        }

        .document-card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            overflow: hidden;
            background-color: white;
        }

        .document-card-header {
            background-color: var(--cuh-primary);
            color: white;
            font-weight: 600;
            padding: 1rem 1.5rem;
            font-size: 1.25rem;
            text-align: center;
            border-bottom: 3px solid var(--cuh-accent);
        }

        .document-card-body {
            padding: 1.5rem;
        }

        .info-row {
            display: flex;
            padding: 0.75rem 0;
            border-bottom: 1px solid #eee;
            align-items: center;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            flex: 0 0 40%;
            font-weight: 600;
            color: var(--cuh-primary);
            padding-right: 1rem;
        }

        .info-value {
            flex: 1;
            color: var(--cuh-dark);
        }

        .status-badge {
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
            border-radius: 50px;
        }

        .validation-section {
            background-color: rgba(0, 51, 102, 0.05);
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 2rem;
        }

        .validation-code {
            max-width: 200px;
            margin: 0 auto 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 0.5rem;
            background-color: white;
        }

        .footer {
            text-align: center;
            margin-top: 3rem;
            padding: 1.5rem 0;
            color: #6c757d;
            font-size: 0.9rem;
            border-top: 1px solid #dee2e6;
            background-color: white;
        }

        .watermark {
            position: fixed;
            opacity: 0.05;
            font-size: 8rem;
            transform: rotate(-30deg);
            z-index: -1;
            top: 30%;
            left: 0;
            width: 100%;
            text-align: center;
            color: var(--cuh-primary);
            font-weight: bold;
            pointer-events: none;
            font-family: 'Times New Roman', serif;
        }

        .btn-cuh {
            background-color: var(--cuh-primary);
            color: white;
            border: none;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
        }

        .btn-cuh:hover {
            background-color: #002244;
            color: white;
        }

        @media print {
            body {
                background-color: white;
                padding: 0;
                font-size: 12pt;
            }

            .institutional-header {
                background: var(--cuh-primary) !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .no-print {
                display: none !important;
            }

            .footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: white !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .document-card {
                box-shadow: none;
                border: 1px solid #ddd !important;
            }
        }

        @media (max-width: 768px) {
            .logo-container {
                flex-direction: column;
                gap: 1rem;
            }

            .info-row {
                flex-direction: column;
                align-items: flex-start;
            }

            .info-label {
                flex: 1;
                margin-bottom: 0.25rem;
            }
        }
    </style>
</head>

<body>
    <div class="watermark no-print">Centro Universitario Hidalguense A.C.</div>

    <div class="container">
        <!-- Encabezado institucional -->
        <header class="institutional-header">
            <div class="logo-container">
                <img src="public/assets/img/sapientia.png" alt="Escudo CUH" class="logo">
                <div class="header-title">
                    <h1>Centro Universitario Hidalguense A.C.</h1>
                    <div class="motto">"LA SABIDURÍA ES NUESTRA FUERZA"</div>
                </div>
                <img src="public/assets/img/yet.jpeg" alt="Logo CUH" class="logo">
            </div>
        </header>

        <!-- Tarjeta de documento -->
        <main>
            <div class="document-card">
                <div class="document-card-header">
                    CERTIFICACIÓN DOCUMENTAL
                </div>
                <div class="document-card-body">
                    <div class="info-row">
                        <div class="info-label">
                            <i class="bi bi-file-earmark-text"></i> Tipo de documento:
                        </div>
                        <div class="info-value">{{ $tipo }}</div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">
                            <i class="bi bi-check-circle"></i> Estatus:
                        </div>
                        <div class="info-value">
                            <span class="badge status-badge bg-{{ $msj == 'VALIDO' ? 'success' : 'danger' }}">
                                {{ $msj }}
                            </span>
                        </div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">
                            <i class="bi bi-person-badge"></i> Nombre del titular:
                        </div>
                        <div class="info-value">{{ $nombre }}</div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">
                            <i class="bi bi-award"></i> Título:
                        </div>
                        <div class="info-value">{{ $titulo }}</div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">
                            <i class="bi bi-calendar-range"></i> Periodo:
                        </div>
                        <div class="info-value">{{ $periodo }}</div>
                    </div>

                    <div class="info-row">
                        <div class="info-label">
                            <i class="bi bi-calendar-date"></i> Fecha de emisión:
                        </div>
                        <div class="info-value">{{ $fecha }}</div>
                    </div>
                </div>
            </div>

            <!-- Sección de validación (solo digital) -->
            <div class="validation-section no-print">
                <div class="text-center mb-4">
                    <h4 class="text-cuh-primary mb-3">
                        <i class="bi bi-shield-check"></i> Validación Documental
                    </h4>
                    <p class="text-muted">
                        Este documento ha sido verificado electrónicamente por el sistema de validación del<br>
                        Centro Universitario Hidalguense A.C.
                    </p>
                </div>

                <div class="text-center">
                    <img src="public/assets/img/cuhfull.jpg" alt="Código de validación" class="validation-code">
                    <div class="mt-3">
                        <button class="btn btn-cuh" onclick="window.print()">
                            <i class="bi bi-printer-fill"></i> Imprimir Certificación
                        </button>
                    </div>
                </div>
            </div>
        </main>

        <!-- Pie de página institucional -->
        <footer class="footer">
            <div class="container">
                <p class="mb-1">Centro Universitario Hidalguense A.C. © Todos los derechos reservados {{ date('Y') }}</p>
                <p class="small text-muted mb-0">
                    Av. Universidad #123, Col. Centro, Pachuca, Hidalgo. Teléfono: 771 123 4567
                </p>
            </div>
        </footer>
    </div>

    <script>
        function nohubo() {
            Swal.fire({
                icon: "error",
                title: "DOCUMENTO NO VÁLIDO",
                text: "El folio proporcionado no se encuentra en nuestros registros",
                confirmButtonColor: "#9E1B32",
                confirmButtonText: "Entendido"
            });
        }

        // Mostrar alerta si el documento no es válido
        @if($msj != 'VALIDO')
        nohubo();
        @endif
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>