PHP multidimensionals array- 
1. output elements from a multidimensionals array - 
<!DOCTYPE html>
<html>
<body>
<?php
$cars = array (
  array("bike",21,17),
  array("car",16,12),
  array("bus",6,3),
  array("lorry",18,16)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
</body>
</html>

2. loop through a multidimensionals array - 
<!DOCTYPE html>
<html>
<body>
<?php
$cars = array (
  array("bike",21,17),
  array("car",16,12),
  array("bus",6,3),
  array("lorry",18,16)
);  
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
</body>
</html>

PHP superglobals - 
A. $GLOBAL - 
used to access global variables from anywhere in the PHP script
Example - 
<!DOCTYPE html>
<html>
<body>
<?php 
$x = 65;
$y = 35; 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
?>
</body>
</html>

B. $_SERVER - 
holds information about heaaders, paths, and script location
Example - 
<!DOCTYPE html>
<html>
<body>
<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
</body>
</html>

C. $_REQUEST - 
used to collect data after submitting an html form 
Example - 
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name of a person="fname">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']); 
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>
</body>
</html>

D. $_POST - 
used to collect form data after submitting an html form. Also used to pass variables
Example - 
<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name of the candidate ="fname">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname']; 
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>
</body>
</html>

E. $_GET - 
collect the data sent in the URL 
Example - 
<!DOCTYPE html>
<html>
<body>
<a href="test_get.php?subject=PHP&web=W3schools.com">Demo $GET</a>
</body>
</html>