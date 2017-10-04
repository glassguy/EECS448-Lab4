function verifyUser() {
  //check if username is in name@domain.com format
  if(document.getElementById("user").value.indexOf('@') > -1 && document.getElementById("user").value.indexOf('.com') > -1) {
    //checks if password isn't null
    if(document.getElementById("pass").value != '') {
      //log in input is correct
      document.getElementById("log").style.display = 'none';
      document.getElementById("shop").style.display = 'block';
      return true;
    }
    else {
      alert("Passwords can not be blank");
      return false;
    }
  }
  else {
    alert("Username must be in the form of name@domain.com");
    return false;
  }
}

function checkSubmit() {

  //checks for username and password
  let checker = verifyUser();

  if(checker == true) {
    //set null inputs to 0, if any
    if(document.getElementById("trubNum").value == '') {
      document.getElementById("trubNum").value = 0;
    }
    if(document.getElementById("pikaNum").value == '') {
      document.getElementById("pikaNum").value = 0;
    }
    if(document.getElementById("charNum").value == '') {
      document.getElementById("charNum").value = 0;
    }

    //validates user input
    if(document.getElementById("trubNum").value == 0 && document.getElementById("pikaNum").value == 0 && document.getElementById("charNum").value == 0) {
      alert("You need to at least buy one Pokémon");
      return false;
    }
    else if(document.getElementById("trubNum").value < 0 || document.getElementById("pikaNum").value < 0 || document.getElementById("charNum").value < 0) {
      alert("Can't have a negative number of Pokémon");
      return false;
    }
    else {
      //check if at least one radio button is selected
      var shipButtons = document.getElementsByName("shipping");
      var check = false;
       for (var i = 0; i < shipButtons.length; i++) {
            if (shipButtons[i].checked) {
                check = true;
            }
       }

      if(check == false) {
        alert("You need to pick a shipping option");
        return false;
      }
      else {
        //user input is correct
        return true;
      }
    }
  }
  else {
    return false;
  }
}
