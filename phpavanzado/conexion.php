
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpavanzado";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL query
$stmt = $conn->prepare("INSERT INTO registro (email, password) VALUES (?, ?)");

// Bind the parameters
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$stmt->bind_param("ss", $email, $password);

// Execute the query
if ($stmt->execute()) {
  echo "New user created successfully";
} else {
  echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>