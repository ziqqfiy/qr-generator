<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>QR Code</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,600" rel="stylesheet">

  <!-- Styles -->
  <style>
    html,
    body {
      background: #F09FA2;
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

    body {
      background: #fff;
      padding: 0px;
      margin: 0px;
      font-family: 'Nunito', sans-serif;
      font-size: 40px;
      font-weight: 200;
      font-style: bold;
      margin: center;
    }

    input,
    button {
      font-family: 'Nunito', sans-serif;
      font-weight: 700;
      color: rgb(61, 61, 61)
    }

    .main-div,
    .loggedin-div {
      width: 20%;
      margin: 0px auto;
      margin-top: 150px;
      padding: 20px;
      display: none;
    }

    .main-div input {
      display: block;
      border: 1px solid #ccc;
      border-radius: 5px;
      background: #fff;
      padding: 15px;
      outline: none;
      width: 100%;
      font-family: 'Nunito', sans-serif;
      font-style: normal;
      margin-bottom: 20px;
      transition: 0.3s;
      -webkit-transition: 0.3s;
      -moz-transition: 0.3s;
    }

    .main-div input:focus {
      border: 4px solid #f8d0ae;
    }

    .main-div button,
    .loggedin-div button {
      background: #f8d0ae;
      color: rgb(44, 44, 44);
      border-style: none;
      border-radius: 12px;
      padding: 15px;
      display: block;
      width: 100%;
      transition: 0.5s;
      -webkit-transition: 0.5s;
      -moz-transition: 0.5s;
    }

    .main-div button:hover,
    .loggedin-div button:hover {
      background: #fff;
      border-style: solid;
      border-radius: 12px;
      border-color: #d3b295;
      color: rgb(44, 44, 44);
      cursor: pointer;
      transition: 0.5s;
      -webkit-transition: 0.5s;
      -moz-transition: 0.5s;
    }
  </style>
</head>

<body>
  <div class="flex-center position-ref full-height">
    <div class="content">

      <div id="login_div" class="main-div">
        <h1>MY PEACE</h1>
        <input type="email" placeholder="Email..." id="email_field" />
        <input type="password" placeholder="Password..." id="password_field" />
        <button onclick="login()">Login to Account</button>
      </div>

      <div id="user_div" class="loggedin-div">
        <h3>Welcome User</h3>
        <p id="user_para">Welcome to Firebase web login Example. You're currently logged in.</p>
        <!--logout call method-->
        <div>
          <div class="qr-code-placeholder">
            {!! QrCode::size(250)->generate('Irma World!') !!}
          </div>
        </div>
        <button onclick="logout()">Logout</button>
      </div>

      <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
      <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
          apiKey: "AIzaSyBRC6Xy-v_JfXga1WWR-0sbtbgb03VFjBU",
          authDomain: "edumy-89083.firebaseapp.com",
          projectId: "edumy-89083",
          storageBucket: "edumy-89083.appspot.com",
          messagingSenderId: "398434560160",
          appId: "1:398434560160:web:0286489fea2b7e5b4041c5",
          measurementId: "G-T8NP0FZJ25"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
      </script>
      <script src="index.js"></script>

</body>