<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
var_dump($_SESSION);
unset($_SESSION["favanimal"]);
session_destroy();
session_unset();
$_SESSION = [];
var_dump($_SESSION);
?>

</body>
</html>
