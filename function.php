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


if(count($_POST)>0){
	if($_POST['type']==1){	 
	 $Fld_EmployeeID = $_POST['Fld_EmployeeID'];
	 $Fld_FirstName = $_POST['Fld_FirstName'];
	 $Fld_MiddleName = $_POST['Fld_MiddleName'];
	 $Fld_LastName = $_POST['Fld_LastName'];
     $Fld_Gender = $_POST['Fld_Gender'];
	 $Fld_Birthday = $_POST['Fld_Birthday'];
	 $Fld_Address = $_POST['Fld_Address'];
     $Fld_ContactNumber = $_POST['Fld_ContactNumber'];
	 $Fld_DateHired = $_POST['Fld_DateHired'];
	 $Fld_Position = $_POST['Fld_Position'];
	 $Fld_JobDesc = $_POST['Fld_JobDesc'];
     $Fld_Status = $_POST['Fld_Status'];

     $sql = "INSERT INTO tbl_employee (Fld_EmployeeID, Fld_FirstName, Fld_MiddleName, Fld_LastName, Fld_Gender, Fld_Birthday, Fld_Address, Fld_ContactNumber, Fld_DateHired, Fld_Position, Fld_JobDesc, Fld_Status) 
     VALUES ('$Fld_EmployeeID', '$Fld_FirstName', '$Fld_MiddleName', '$Fld_LastName', '$Fld_Gender', '$Fld_Birthday', '$Fld_Address', '$Fld_ContactNumber','$Fld_DateHired', '$Fld_Position', '$Fld_JobDesc', '$Fld_Status')";
 
        if (mysqli_query($conn, $sql)) {
           
            $_SESSION['success'] = 'Employee updated successfully';
	    } else {
		    echo "Error: " . $sql . "" . mysqli_error($conn);
	        }      
	         mysqli_close($conn);
    }
}

if(count($_POST)>0){
	if($_POST['type']==2){
		$Fld_RecID = $_POST['Fld_RecID'];
		$Fld_Status = $_POST['Fld_Status'];
		$sql = "UPDATE tbl_employee SET Fld_Status = '$Fld_Status' WHERE Fld_RecID=$Fld_RecID";
		if (mysqli_query($conn, $sql)) {
			$_SESSION['success'] = 'Employee updated successfully';
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $_SESSION['error'] = 'Select employee to edit first'; 
		}
		mysqli_close($conn);
     
	}
}

?>

