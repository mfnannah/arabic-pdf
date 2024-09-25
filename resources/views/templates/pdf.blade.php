<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: DejaVu Sans, sans-serif;
        }
        body {
            font-family: DejaVu Sans, sans-serif;
        }
        .page-break {
            /*page-break-after: always;*/
        }
        .container{
            width: 502px;
            border: 1px solid #000;
            height: 250px;
            margin: auto;
            padding: 1px;
            overflow: hidden;
        }
        .barcode,.company{
            width: 100%;
            float: right;
        }
        .barcode img{
            width: 200px;
            margin: auto;
            height: auto;
        }
        .company{
            text-align: center;
            padding: 15px 0;
        }
        .company img{
            width: 60px;
            margin: 0;
            height: auto;
            max-width: 60px;
            max-height: 60px;
        }
        .company h2{
            margin: 0 !important;
        }
        .company p{
            margin: 0 !important;
        }
    </style>
</head>
<body dir="rtl">
<div class="container">
    <div class="barcode">

    </div>
    <div class="company">
        <h2>{{ $arabic->utf8Glyphs($record->title) }}</h2>
        <p>ID: {{ $record->id }}</p>
{{--        <p>Customer: {{ $customer }}</p>--}}
        <p>Order Date: {{ $record->created_at }}</p>
    </div>
</div>
<div class="page-break"></div>
</body>
</html>
