<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $studentID = $_POST["studentID"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PHPScriptDemo";

    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $stmt = $conn->prepare("INSERT INTO Student (StudentID, FirstName, LastName, DateOfBirth, Email, Phone) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $studentID, $firstName, $lastName, $dateOfBirth, $email, $phone);
    $stmt->execute();

    
    $stmt->close();
    $conn->close();
}
?>

<form action="AddData.php" method="post">
    <label for="studentID">Student ID:</label>
    <input type="number" id="studentID" name="studentID" required><br>

    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required><br>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required><br>

    <label for="dateOfBirth">Date of Birth:</label>
    <input type="text" id="dateOfBirth" name="dateOfBirth" placeholder="YYYY-MM-DD" required><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required><br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required><br>

    <input type="submit" value="Add Data">
</form>


<footer>
    <button onclick="location.href='PHPScriptDemo.php'" style="position: fixed; top: 20px; right: 20px;">Show Data</button>
</footer>

</body>
</html>
