<?php


if(isset($_POST['submit']))
{
  $host="localhost";
  $user="root";
  $pass="";
  $db="datatable";

  $email=$_POST['email'];
  $password=$_POST['password'];

  $con=mysqli_connect($host,$user,$pass,$db);

  if(!$con)
  {
    echo "conect faild";
  }
  $sql="SELECT * FROM `datatable` WHERE email='$email' AND password='$password'";
  $query=mysqli_query($con,$sql);
  $num=mysqli_num_rows($query);

  if($query)
  {
    session_start();
    $_SESSION['email ']=$email;
    $_SESSION['submit']=true;

    header("Location:welcome2.php");
  }
  else{
    "invalid ";
  }
}
?>

<!DOCTYPE html>
<html long="en">
 <head>
    <tittle></tittle>
    <link rel="stylesheet" href="digign1.css">
        <script> 
         
		
		 var email;
        function validate() { 
			// fname=document.getElementById("fname");
			//alert(fname.value);
           // fname = document.reg_form.fname;        			
            email = document.reg_form.email;    
           var password= document.reg_form.password;   
            // var repass = document.reg_form.repass; 	
    
			
           
            
			
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
					alert("must insert minimum 8 character of password");
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
				document.getElementById("data").innerHTML='<br>';
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
        <div class="main">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo"><a>E</a><span>Stationery</span></h2>
                </div>

                <div class="menu">
                 <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="suggestion.html">SUGGESTION</a></li>
                    
                 </ul> 
                </div>

                <div class="search">
                    <input class="srch" type="search" name="" placeholder="Type To Text">
                    <a href="www.google.com"> <button class="btn">Search</button></a>                
                </div>
                </div>    
                
                <div class="form">
                <form method="POST"  name="reg_form" id="reg_form" onsubmit="return formvalidate()"> 
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <!-- <button class="btnn"><a href="#"> Login</a></button> -->
                    <input type="submit" value="sign in" name="submit" class="btnn >
                    
                 <div class="link">
                    <p class="link">don't have an account<br>
                
                    <a href="signup1.php">sing up</a>here</a></p> 
                     <p class="liw">Log in with</p> 
                   <div class="for">  
                     <a href="forgot.php" class="pass">Forget Password</a>
        
                            
                     
                 </div>        
                </form> 
                </div>
                </div>
                </div>
            </div>
        </div>
    </body>
    </html>