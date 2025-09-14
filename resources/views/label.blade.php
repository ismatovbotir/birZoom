<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Label 60x60</title>
    <style>
        @page {
            size: 60mm 60mm;
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .label {
            width: 60mm;
            height: 60mm;
            padding: 2mm;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 1px solid #000;
        }

        .title {
            font-size: 15pt;
            font-weight: bold;
            text-align: center;
        }

        .details {
            font-size: 9pt;
            text-align: center;
        }

        .qrcode {
            display: flex;
            justify-content: center;
            margin-top: 6px;
        }
    </style>
</head>

<body onload="window.print(); setTimeout(() => window.close(), 1000)">
    <div class="label">
        <div class="title">{{ $production->product->name }}</div>
        <div class="details">Yaroqlik muddate {{ $production->product->lifetime }} soat</div>
        <div class="details"> {{ $production->created_at->format('H:i:s') }}</div>
        <div class="qrcode">
            {{-- Generate QR code --}}
            {!! QrCode::size(100)->generate('{{ $production->id }}') !!}
        </div>
        <div class="title">EXP: {{ $production->expires_at->format('H:i:s') }}</div>
    </div>
</body>

</html>
