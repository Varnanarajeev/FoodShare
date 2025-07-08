<?php
session_start();

// Destroy all session data
session_destroy();

// Redirect to NGO login page
header('Location: ngo_login.php');
exit();
