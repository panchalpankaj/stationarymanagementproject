<?php
require("product.php");

function image_upload($img)
{
       $tmp_loc =$img['tmp_name'];
       $new_name=random_int(11111,99999).$img['name'];

       $new_loc=UPLOAD_SRC.$new_name;
       if(!move_uploaded_file($tmp_loc,$new_loc)){

              header("location: welcome2.php?alert=img_upload");
              exit;
       }
       else{
          return $new_name;
       }
}
     if(isset($_POST['addproduct']))
{
     foreach($_POST as $key => $value){
       $_POST[$key] =mysqli_real_escape_string($con,$value);
     }

     $imgpath=image_upload($_FILES['image']);
     
$name=$_POST['name'];
$price=$_POST['price'];
$dectiption=$_POST['dectiption'];
$image=$_POST['image'];


$query="INSERT INTO `product1`(`name`,`price`,`dectiption`,`image`) VALUES ('$_POST[name]','$_POST[price]','$_POST[desc]','$imgpath')";


if(mysqli_query($con,$query)){

              header("location: welcome2.php?success=added");
         }
         else{
              header("location: welcome2.php?alert=add_failed");
         }
         
 }

?>