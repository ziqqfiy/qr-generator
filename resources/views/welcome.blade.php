<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Peace.</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,600" rel="stylesheet">

  <!-- Styles -->
  <style>
    html,
    body {
      background: rgb(241, 248, 255);
      background: linear-gradient(55deg, rgba(241, 248, 255, 1) 0%, rgba(255, 249, 244, 1) 32%, rgba(244, 255, 254, 1) 62%, rgba(255, 244, 255, 1) 93%);
      font-family: 'Montserrat', sans-serif;
      font-size: 40px;
      font-weight: 200;
      font-style: bold;
      height: auto;
      margin: 0;
    }

    input,
    button {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      color: rgb(61, 61, 61)
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

    .details {
      text-align: left;
      font-size: 25px;
      margin-bottom: 10px;
      margin-top: 0px;
    }

    .card {
      text-align: center;
      max-width: 500px;
      min-width: 500px;
      background-color: #FFFFFF;
      padding: 50px;
      border-radius: 30px;
      box-shadow: 0 0 6rem #DED5DE;
      margin: 50px;
    }

    .main-div input {
      display: block;
      border: 3px solid #F9D5B7;
      border-radius: 12px;
      background: #FDFAF6;
      padding: 15px;
      outline: none;
      width: 100%;
      box-sizing: border-box;
      font-family: 'Montserrat', sans-serif;
      font-style: normal;
      margin-bottom: 10px;
      transition: 0.5s;
      -webkit-transition: 0.5s;
      -moz-transition: 0.5s;
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
      border: 3px;
      border-style: solid;
      border-radius: 50px;
      border-color: #F9D5B7;
      color: rgb(44, 44, 44);
      cursor: pointer;
      transition: 0.5s;
      -webkit-transition: 0.5s;
      -moz-transition: 0.5s;
    }

    #preview {
      width: 500px;
      height: 500px;
      margin: 0px;
    }
  </style>
</head>

<body>
  <div class="flex-center position-ref">
    <div class="card">
      <!--Login Page-->
      <div id="login_div" class="main-div">
        <h1 style="font-weight: 600; margin-top: 0px;">Peace.</h1>
        <p style="text-align: left; margin-bottom: 10px; margin-top: 0px;">Hello Again!<br>Welcome back.</p>
        <input type="email" placeholder="Email" id="email_field" />
        <input type="password" placeholder="Password" id="password_field" />
        <button style="margin-top: 50px;" onclick="login()">Login</button>
      </div>

      <!--Logged In Page-->
      <div id="user_div" class="loggedin-div">
        <h2 style="margin-top: 0px;">Profile</h2>
        <p class="details" id="user_para"></p>
        <p class="details" id="user_ic"></p>
        <p class="details" style="margin-bottom: 20px;" id="phone_num"></p>
        <video id="preview"></video>

        <div class="qr-code-placeholder">
          {!! QrCode::size(250)->generate("Test") !!}
        </div>

        <!--logout call method-->
        <button style="margin-top: 20px;" onclick="logout()">Logout</button>
      </div>
    </div>
  </div>


  <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
  <script type="text/javascript">
    let scanner = new Instascan.Scanner({
      video: document.getElementById('preview')
    });
    scanner.addListener('scan', function(content) {
      window.alert("You have logged in"+ content);
    });
    Instascan.Camera.getCameras().then(function(cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        window.alert('No cameras found.');
      }
    }).catch(function(e) {
      window.alert(e);
    });
  </script>

  <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
  <script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
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
  </script>

  <script src="index.js"></script>
</body>

</html>