copy&edit from www.w3schools.com/php/showphp.asp?filename=demo_form_validation_escapechar
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php
// define variables and set to empty values
$Fotograf = "";
$Epost = "";
$Kön = "";
$Kommentar = "";
$Webb= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Fotograf = test_input($_POST["Fotograf"]);
  $Epost = test_input($_POST["Epost"]);
  $Webb = test_input($_POST["Webb"]);
  $Kommentar = test_input($_POST["Kommentar"]);
  $Kön = test_input($_POST["Kön"]);//vi kan ta bort det...
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>Skriv din kommentar här!</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Namn: <input type="text" name="name">
  <br><br>
  Epost: <input type="text" name="email">
  <br><br>
  Webbsida: <input type="text" name="website">
  <br><br>
  Kommentar: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Kön:
  <input type="radio" name="gender" value="female">Kvinna
  <input type="radio" name="gender" value="male">Man
  <br><br>
  <input type="submit" name="submit" value="Skicka!">  
</form>
<?php
echo "<h2>Så här ser det ut:</h2>";
echo $Fotograf;
echo "<br>";
echo $Epost;
echo "<br>";
echo $Webb;
echo "<br>";
echo $Kommentar;
echo "<br>";
echo $Kön;
?>
</body>
</html>