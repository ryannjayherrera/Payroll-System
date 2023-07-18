<?php
include 'db-config.php';


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
           
    //echo "New record created successfully !";
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
		$sql = "UPDATE `tbl_employee` SET `Fld_Status`='$Fld_Status' WHERE Fld_RecID=$Fld_RecID";
		if (mysqli_query($conn, $sql)) {
			//echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>