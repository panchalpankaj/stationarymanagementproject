
<?php
   if(isset($_POST['submit'])){
  $host='localhost';
  $user='root';
  $pass='';
  $db='datatable';
  
  $con=mysqli_connect($host,$user,$pass,$db);
  if(!$con)
  {
    die("conect failed");
  }
  $name=$_POST['fname'];
  $email=$_POST['email'];
  $feedback=$_POST['yourfeedback'];

  $sql="INSERT INTO `feedback3`(`name`, `email`, `feedback`) VALUES ('$name','$email','$feedback')";

  $query=mysqli_query($con,$sql);
  if($query)
  {
    // header("Location:signup1(1).php");
    echo "succes to insert";
  }
  else
  {
    echo "faild to insert";
  }
}
?>