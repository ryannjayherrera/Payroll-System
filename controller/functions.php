<?php
require_once (dirname(__FILE__) . '/config.php');

// Function to create data
function createData($name, $email)
{
    $conn = connectToDB();

    $sql = "INSERT INTO your_table_name (name, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $email);

    $success = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $success;
}

// Function to update data
function updateData($id, $name, $email)
{
    $conn = connectToDB();

    $sql = "UPDATE your_table_name SET name = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $email, $id);

    $success = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $success;
}

// Function to delete data
function deleteData($id)
{
    $conn = connectToDB();

    $sql = "DELETE FROM your_table_name WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    $success = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $success;
}

// Function to read data
function readData()
{
    $conn = connectToDB();

    $sql = "SELECT * FROM your_table_name";
    $result = $conn->query($sql);

    $data = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    $result->close();
    $conn->close();

    return $data;
}
?>
