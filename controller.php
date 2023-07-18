<?php

include 'db-config.php';

if(isset($_POST['submit'])){

  
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);


$select = " SELECT * FROM tbl_users WHERE Fld_Email = '$email' && Fld_Hash = '$pass' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

   $row = mysqli_fetch_array($result);

   if($row['Fld_Role'] == 'admin'){

      $_SESSION['Fld_Fld_Email'] = $row['Fld_Fld_Email'];
      header('location:index.php');

   }elseif($row['Fld_Role'] == 'user'){

      $_SESSION['Fld_Fld_Emaile'] = $row['Fld_Fld_Email'];
      header('location:register.php');

   }
  
}else{
   $error[] = 'incorrect email or password!';
}

};

?>