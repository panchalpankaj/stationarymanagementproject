<?php


if(isset($_POST['submit']))
{
  $host="localhost";
  $user="root";
  $pass="";
  $db="datatable";

  $name=$_POST['fname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $repass=$_POST['repass'];

  $con=mysqli_connect($host,$user,$pass,$db);

  if(!$con)
  {
    echo "conect faild";
  }
  $sql="insert into datatable(name,email,password,repass)values('$name','$email','$password','$repass');";
  $query=mysqli_query($con,$sql);

  if($query)
  {
    header("Location:loginform.php");
  }
  else{
    "Error Data not inserted into database ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

body{

background-image: url(photo2.jpg);
-webkit-background-size:cover;
background-size: cover;
background-position: center center;
font-family: poppins;

}
.box{
  width: 300px;
  height: 470px;
  margin: 10px auto 0;
  background: rgba(0, 0, 0, 0.3);
  text-align: center;
  padding: 35px;
  border:1px solid #fff;
  border-radius: 30px 20px 30px 20px;
}
.box h2{
  margin-bottom: 10px;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
}
input{
  width: 100%;
  height: 38px;
  border-radius: 20px 10px 20px 10px;
  border: 1px solid #fff;
  margin-bottom: -30px;
  background: transparent;
  color: #fff;
}
.box p{
  text-align: left;
  color:#fff;
  text-transform: uppercase;
  font-weight: bold;
}
.btn{
  display: block;
  height: 35px;
  line-height: 30px;
  text-align: center;
  background: rgb(81, 185, 134);
  border-radius: 20px;
  color: black;
  text-transform: uppercase;
  margin-top: 20px;
  cursor: pointer;
  text-decoration: none;
  letter-spacing: 7px;
  font-family:ariyl;
  font-size:20px;
}
.pass{
  text-decoration: none;
  display: block;
  margin-top: 30px;
  font-weight: bold;
  font-size: 20px;
  color: rgb(0,0,0);
}

        </style>
    <script> 
		 var fname;
		 var email;
        function validate() { 
			fname=document.getElementById("fname");
			//alert(fname.value);
           // fname = document.reg_form.fname;        			
            email = document.reg_form.email;    
           var password= document.reg_form.password;   
            var repass = document.reg_form.repass; 	
    
            if (fname.value.length <= 0) {    
                alert("Name is required");    
                fname.focus();    
                return false;    
            }    
            else
			{
				var str=fname.value;
			   var regEx = /^[A-Za-z]+$/;
 
				if(str.match(regEx)==null)
				{
					alert("only alphabate is allowed");
					return false;
				}
				
			}
           
            
			
            if (email.value.length <= 0) 
			{    
                alert("Email Id is must be required");    
                email.focus();    
                return false;    
            }    
			else
			{
				email=email.value;
				var atpos=email.indexOf("@");
				var dotpos=email.lastIndexOf(".");
				if(atpos<4 || dotpos<atpos+3)
				{
				//flag=0;
				alert("invalid email");
				 return false;    
				}
			 
			}
			 if (password.value.length <= 0) {    
                alert("password is required required");    
                password.focus();    
                return false;    
            } 
			else
			{
				if(password.value.length <8)
				{
					alert("must insert minimum 8 character");
					return false;
				}
			}
			 if (repass.value.length <= 0) {    
                alert("re-type password is  required");    
                repass.focus();    
                return false;    
            } 
			else
			{
				pass=password.value;
				repass=repass.value;
				if(pass.localeCompare(repass)!=0)
				{
				alert("repassword must be same");
				 return false;    
				}
			}
            return true;    
        }    
		function formvalidate()
		{
			if(validate())
			{
				alert("form submit success");
				document.getElementById("data").innerHTML=fname.value+'<br>';
				return false;
			}
			else
			{
				alert("form not submited");
				return false;
			}
		}
    </script>    
</head>

<body>

    <div class="box">
	<form method="post" name="reg_form" id="reg_form" onsubmit="return formvalidate()"> 
        <div class="h2"><h2><b>CREATE AN ACCOUNT<h2><b></h2>
        </div>
        <p>Name :</p>
        <input type="text" name="fname" id="fname" >
        <p>Email :</p>
        <input type="email" name="email" >
        <p>Password :</p>
        <input type="password" name="password" >
        <p>Re-Password :</p>
        <input type="password" name="repass" >
      <div class="btn"><input type="submit" value="sign in" class="btn" name="submit"></div>
       <!-- <a href="#" class="btn" input type="submit" value="sign in">sign in</a> -->
        <!-- <a href="forgot.php" class="pass">Forget Password</a> -->
	</form>
    </div>
</body>

</html>