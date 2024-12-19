<?php
session_start();
session_destroy(); // Destroy session to log out the user
header("Location: index.html"); // Redirect to home page
exit();
?>
