
<?php
include('connection.php');
// Inialize session
session_start();

// Delete certain session
unset($_SESSION['aadhar']);
unset($_SESSION['name']);

// Delete all session variables
session_destroy();

// Jump to login page
echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "index.php";';
echo '</script>'; 
?>
