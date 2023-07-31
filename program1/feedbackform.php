<?php
  include('feedconfig.php');
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK FORM</title>
    <link rel="stylesheet" href="feedback.css">
    </head>
    <script>
        function validate()
{
  var firstname = document.getElementById("fname").value;
  var lastname = document.getElementById("lname").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var yourfeedback = document.getElementById("yourfeedback").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(fname.length < 3)
  {
    text = "Please Enter a valid First Name";
    error_message.innerHTML = text;
    return false;
  }
  else if(lname.length < 3)
  {
    text = "Please Enter a Valid Last Name";
    error_message.innerHTML = text;
    return false;
  }
  else if(isNaN(phone) || phone.length != 10)
  {
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  else if(email.indexOf("@") == -1 || email.length < 6)
  {
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(address.length <= 140)
  {
    text = "Please Enter More Than 140 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}
    </script>
<body>
    <div class="wrapper">
        <h2><center>Feedback Form</center></h2>
        <div id="error_message"></div>
            <form id="myform" action="feedconfig.php" method="post" ">
                <div class="input_field">
                    <input type="text" placeholder="First Name" name="fname" >

                </div>
                <div class="input_field">
                    <input type="text" placeholder="Last Name" name="lname">

                </div>
                <div class="input_field">
                    <input type="text" placeholder="Phone" name="phone">

                </div>
                <div class="input_field">
                <input type="text" placeholder="Email" name="email">
                </div>
                <div class="input_field">
                    <textarea placeholder="Your Feedback" name="yourfeedback"></textarea>
                </div>
                <div class="btn">
                    <input type="submit" name="submit">
                </div>
            </form>
    </div>
    </div>
</body>
</html>