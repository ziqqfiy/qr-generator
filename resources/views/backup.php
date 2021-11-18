<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SAYA PEACE IN</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background: #452B4E;
            color: white;
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

        .textbox {
            margin: auto;
            width: 80%;
            background-color: #FFFFFF;
            padding: 3%;
            border-radius: 30px;
        }
    </style>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">

            <div class="title m-b-md">
                <b>Welcome Bacc</a></b>
            </div>

            <div>
                <form>
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname" class="textbox"><br>
                    <label for="lname">Last name:</label><br>
                    <input type="password" id="lname" name="lname" class="textbox">
                </form>
            </div>

        </div>
    </div>

</body>

</html>