function formValidate() {
  result = true;
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let number = document.getElementById("number").value.length;
  let subject = document.getElementById("subject").value;
  let msg = document.getElementById("msg").value;
  let regex = /^[A-Za-z0-9 ]+$/;
  let isValid = regex.test(name);
  if (name === "") {
    result = false;
    document.getElementById("nameerror").innerHTML =
      "<b style= 'color:red'>This field can't be empty</b>";
  } else if (!isValid) {
    result = false;
    document.getElementById("nameerror").innerHTML =
      "<b style='color:red'>Enter a valid name</b>";
  } else {
    document.getElementById("nameerror").innerHTML = "";
  }
  var filt =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var ismatch = filt.test(email);
  if (!ismatch) {
    result = false;
    document.getElementById("errmail").innerHTML =
      "<b style='color:red'>Enter Valid Email</b>";
  } else {
    document.getElementById("errmail").innerHTML = "";
  }
  if (number != 10) {
    result = false;
    document.getElementById("inmobile").innerHTML =
      "<b style='color:red'>Should be of 10 digits<b>";
  } else {
    document.getElementById("inmobile").innerHTML = "";
  }
  var regex2 = /^[A-Za-z0-9 ]+$/;
  var isValid2 = regex2.test(subject);
  if (subject === "") {
    result = false;
    document.getElementById("subjecterror").innerHTML =
      "<b style= 'color:red'>This field can't be empty</b>";
  } else if (!isValid2) {
    result = false;
    document.getElementById("subjecterror").innerHTML =
      "<b style= 'color:red'>Invalid characters</b>";
  } else {
    document.getElementById("subjecterror").innerHTML = "";
  }

  var regex3 = /^[A-Za-z0-9 ]+$/;
  var isValid3 = regex3.test(msg);
  if (!isValid3) {
    result = false;
    document.getElementById("msgerror").innerHTML =
      "<b style= 'color:red'>Invalid characters</b>";
  } else if (msg === "") {
    result = false;
    document.getElementById("msgerror").innerHTML =
      "<b style= 'color:red'>This field can't be empty</b>";
  } else {
    document.getElementById("msgerror").innerHTML = "";
  }
  return result;
}
