<?php
// Start the session
session_start();
?>
<?php include("Session2.php"); ?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.<br>";
check_Sesion();

// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
echo "<br><br>cambiei variable favcolor<br>";
print_r( $_SESSION);
?>

<?php
// remove all session variables
session_unset();
echo "<br><br>borrei todas as variables<br>";
print_r( $_SESSION);
?>
</body>
</html>