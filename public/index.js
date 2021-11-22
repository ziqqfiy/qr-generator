firebase.auth().onAuthStateChanged(function (user) {
  if (user) {
    // User is signed in.
    document.getElementById("user_div").style.display = "block";
    document.getElementById("login_div").style.display = "none";

    var user = firebase.auth().currentUser;

    if (user != null) {
      //when the user actually logged in
      var email_id = user.email;
      var user_ic = "990813455123";
      var phone_num = "0132879716";

      document.getElementById("user_para").innerHTML = "<strong>Email: </strong><br>" + email_id;
      document.getElementById("user_ic").innerHTML = "<strong>IC: </strong><br>" + user_ic;
      document.getElementById("phone_num").innerHTML = "<strong>Phone Number: </strong><br>" + phone_num;
    }

  } else {
    // No user is signed in.

    document.getElementById("user_div").style.display = "none";
    document.getElementById("login_div").style.display = "block";

  }
});



function login() {

  var userEmail = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function (error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);

    // ...
  });

}

function logout() {
  firebase.auth().signOut();
}
