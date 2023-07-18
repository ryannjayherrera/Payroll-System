<?php
include 'db-config.php';



// Create new employee
function createEmployee($Fld_EmployeeID, $Fld_FirstName, $Fld_MiddleName, $Fld_LastName, $Fld_Gender, $Fld_Age, $Fld_Birthday, $Fld_Address, $Fld_ContactNumber, $Fld_DateHired, $Fld_Position, $Fld_JobDesc, $Fld_Status) {
   // $conn = connectToDB();

    $sql = "INSERT INTO tbl_employee (Fld_EmployeeID, Fld_FirstName, Fld_MiddleName, Fld_LastName, Fld_Gender, Fld_Age, Fld_Birthday, Fld_Address, Fld_ContactNumber, Fld_DateHired, Fld_Position, Fld_JobDesc, Fld_Status) 
    VALUES ('$Fld_EmployeeID', '$Fld_FirstName', '$Fld_MiddleName', '$Fld_LastName', '$Fld_Gender', '$Fld_Age', '$Fld_Birthday', '$Fld_Address', '$Fld_ContactNumber','$Fld_DateHired', '$Fld_Position', '$Fld_JobDesc', '$Fld_Status')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Read all employees
function readEmployees() {
    $conn = connectToDB();

    $sql = "SELECT * FROM tbl_employee";
    $result = $conn->query($sql);

    $employees = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $employees[] = $row;
        }
    }

    return $employees;
}

// Update an employee
function updateEmployee($id, $fname, $mname, $lname) {
    $conn = connectToDB();

    $sql = "UPDATE tbl_employee SET Fld_Fname = '$fname', Fld_Mname = '$mname', Fld_Lname = '$lname' WHERE Fld_RecID = '$id'";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Delete an employee
function deleteEmployee($id) {
    $conn = connectToDB();

    $sql = "DELETE FROM tbl_employee WHERE Fld_RecID = '$id'";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}
?>