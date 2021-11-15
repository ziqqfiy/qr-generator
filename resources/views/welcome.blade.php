<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QR Code Generator</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background: rgb(255, 212, 177);
            background: linear-gradient(20deg, rgba(255, 212, 177, 1) 0%, rgba(255, 239, 224, 1) 100%);
            color: #323740;
            font-family: 'Montserrat', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 70px;
            text-align: center;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .qr-code-placeholder {
            margin: auto;
            width: 30%;
            background-color: #FFFFFF;
            padding: 3%;
            border-radius: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">

            <div class="title m-b-md">
                <b>This QR Code has been<br>generated using <a style="color:#ff4b20;">Laravel.</a></b>
            </div>

            <div>
                <div class="qr-code-placeholder">
                    {!! QrCode::size(250)->generate('Hello World') !!}
                </div>
            </div>

            <div style="align-items: center; margin-top: 5px;">
                <a style="font-size:20px;"><strong>- Made by Haziq -</strong><a>
            </div>

        </div>

    </div>


</body>

</html>