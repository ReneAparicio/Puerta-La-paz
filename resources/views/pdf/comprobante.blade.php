<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comprobante de Donación</title>
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            margin: 40px;
            font-size: 12px;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .titulo {
            font-size: 18px;
            font-weight: bold;
        }
        .resolucion {
            font-size: 10px;
            margin-top: 10px;
        }
        .datos {
            margin: 20px 0;
        }
        .datos td {
            padding: 5px 0;
        }
        .firma {
            margin-top: 50px;
            text-align: center;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 9px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="titulo">{{ $comprobante->nombre_emisor }}</div>
        <div>NIT: {{ $comprobante->nit_emisor }}</div>
        <div class="resolucion">
            Resolución: {{ $comprobante->resolucion_numero }}<br>
            Código único: {{ $comprobante->codigo_unico }}<br>
            Serie autorizada: {{ $comprobante->serie }}
        </div>
    </div>

    <h3>COMPROBANTE DE DONACIÓN</h3>
    <p><strong>Número de comprobante:</strong> {{ $comprobante->numero_comprobante }}</p>
    <p><strong>Fecha de emisión:</strong> {{ $comprobante->fecha_emision->format('d/m/Y') }}</p>

    <table class="datos" width="100%">
        <tr><td width="30%"><strong>Donante:</strong></td><td>{{ $donacion->nombre }}</td></tr>
        <tr><td><strong>Documento:</strong></td><td>{{ $donacion->documento_identidad ?? 'No registra' }}</td></tr>
        <tr><td><strong>Dirección:</strong></td><td>{{ $donacion->direccion ?? 'No registra' }}</td></tr>
        <tr><td><strong>Monto donado:</strong></td><td>${{ number_format($donacion->monto, 2) }}</td></tr>
        <tr><td><strong>Fecha donación:</strong></td><td>{{ $donacion->created_at->format('d/m/Y') }}</td></tr>
    </table>

    <div class="firma">
        _______________________________<br>
        Firma y sello autorizado
    </div>

    <div class="footer">
        Este comprobante es válido para efectos fiscales.<br>
        Dirección: Soyapango, El Salvador
    </div>
</body>
</html>