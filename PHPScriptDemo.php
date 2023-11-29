<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PHPScriptDemo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "SELECT * FROM student";
$result = $conn->query($sql);
echo "STUDENTS LIST: <br>";
if ($result){

    while($row = $result->fetch_assoc()){
        echo "Name: " . $row["LastName"]. ", " . $row["FirstName"]. " - Birthdate: " . $row["DateOfBirth"]. " - Email: " . $row["Email"]."<br>";
    }
    echo "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM instructor";
$result = $conn->query($sql);
echo "INSTRUCTORS LIST: <br>";
if ($result){

    while($row = $result->fetch_assoc()){
        echo "Name: " . $row["LastName"]. ", " . $row["FirstName"]. " - Email: " . $row["Email"]."<br>";
    }
    echo "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM course";
$result = $conn->query($sql);
echo "COURSES LIST: <br>";
if ($result){

    while($row = $result->fetch_assoc()){
        echo "Course: " . $row["CourseName"].  " - Credits: " . $row["Credits"]."<br>";
    }
    echo "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM enrollment";
$result = $conn->query($sql);
echo "ENROLLMENT LIST: <br>";
if ($result){

    while($row = $result->fetch_assoc()){
        echo "Enrollment I.D: " . $row["EnrollmentID"].  " - Student I.D: " . $row["StudentID"]. " - Course I.D: " . $row["CourseID"]. " - Date: " . $row["EnrollmentDate"]. "<br>";
    }
    echo "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>