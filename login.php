
<!-- 
// include('db.php');

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $query = "SELECT * FROM users WHERE email = '$email'";
//     $result = $conn->query($query);
//     $user = $result->fetch_assoc();

//     if ($user && password_verify($password, $user['password'])) {
//         echo "Login successful!";
//     } else {
//         echo "Invalid login credentials.";
//     }
// }
?>  -->

<?php
// Include the database connection file
include('db.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the SQL query to retrieve user data based on the email
    $query = "SELECT * FROM `registration` WHERE `email` = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();

        // Check if the password matches
        if ($user['password'] === $password) { // Replace with password_verify if using hashed passwords
            echo "Login successful! Welcome, " . $user['username'] . ".";
            // Redirect to the dashboard or homepage
            header("Location: dashboard.html");
            exit();
        } else {
            echo "Invalid password. Please try again.";
        }
    } else {
        echo "No account found with that email. Please register first.";
    }
}
?>


<!-- <form method="post" action="">
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form> -->
