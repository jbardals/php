<!DOCTYPE html>
<html>
<body>

<?php
function check_Sesion(){
   // Echo session variables that were set on previous page
//print_r($_SESSION);
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . "."; 
}
?>

</body>
</html>