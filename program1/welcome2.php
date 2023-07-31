<?php

require("product.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stastinary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"></link>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"></link>
</head>
    <body class="bg-light">
    <div class="container bg-dark text-light p-3 rounded my-4">
    <div class="d-flex align-items-center justify-content-between px-3">
        <h2><a href="product.php" class="text-white text-decoration-none"> 
        <i class="bi bi-app-indicator"></i> E Stationery</a></h2>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproduct">
        <i class="bi bi-plus-lg"></i>addproduct
        </botton>
      </div>
     </div> 
       
     <div class="container mt-5 p-0">
      <table class="table table-hover text-center">
  <thead class="bg-dark text-light">
    <tr>
       <th  width="10%" scope="col" class="rounded-start">Sr.No</th>
       <th  width="15%" scope="col">image</th>
       <th  width="10%" scope="col">name</th>
       <th width="10%" scope="col">price</th>
       <th width="35%" scope="col">dectiption</th>
       <th width="20%" scope="col" class="rounded-end">action</th>
    </tr>
  </thead>
    <tbody class="big-white">
   
<?php
     $query="SELECT * FROM `product1`";
     $result=mysqli_query($con,$query);
     $i=1;
     $fetch_src=FETCH_SRC;
     while($fetch=mysqli_fetch_assoc($result))
{
      echo<<<product
      <tr>
      <th scope="row">$i</th>
      <td><img src="$fetch[image]" width="150px"</td>
      <td>$fetch[name]</td>
      <td>$fetch[price]</td>
       <td>$fetch[dectiption]</td>
    <td>
   <a href="deletedata.php?id=$fetch[id]">DELETE</a>
   </td>
   </tr>
   product;
   $i++;
}
   
?>
</tbody>
 </table>
<style>
.link{
   
   
   
   
   width:110px;
    height:30px;
    background: rgb(81, 185, 185);
    border: none;
    margin-top: 250px;
    font-size: 22px;
    font-centar:10px;
    border-radius:7px;
    cursor: pointer;
    color:rgb(20, 285, 185);
    transition:  0.6s ease;
}
.link:hover{
    background: rgb(255, 255, 255);
    color: rgb(81, 185, 185);
}
.link a{
     text-decoration: none;
     color: rgb(0, 0, 0);
     font-weight: bold;
}
</style> 
      
<div class="link">

 <a href="feedbackform.php">log out</a>


  <div class="modal fade" id="addproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <form action="crude.php" method="POST"  enctype="multipart/form-data">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"> addproduct</h5>
         </div>
       <div class="modal-body">       
    <div class="input-group mb-3">
   <span class="input-group-text" >name</span>
   <input type="text" class="form-control" name="name" required>
   </div>
<div class="input-group mb-3">
   <span class="input-group-text" >Price</span>
   <input type="text" class="form-control" name="price" min="1" required>
   </div>
<div class="input-group mb=3">
   <span class="input-group-text">Description</span>
   <textarea class="form-control" name="desc" required></textarea>
   </div>
   <div class="input-group mb=3">
   <label class="input-group-text" >Image</label>
   <input type="file" class="form-control" name="Image" accept=".jpg,.png,.svg" required>
   </div>
   </div>
   <div class="modal-footer">
        <button type="reset" class="btn btn-out-line-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="addproduct">add</button>
    </div>
    <div class="feedback">
      
    </div>
    </div>
    </div>
    </div>
    </form>

  
  </div>
    </div>
</body>
</html>                     