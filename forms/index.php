<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Example Form</title>
</head>

<body>

<form action="index.php" method="post">

<label>Name</label>
<input type="text" name="name" value="<?=(isset($_POST["name"]) ? $_POST["name"] : "")?>"/><br>

<label>Age</label>
<input type="number" name="age" value="<?=(isset($_POST["age"]) ? $_POST["age"] : "")?>"/><br>

<label>Class</label>
<select name="class">
<option value="FR"<?=(isset($_POST["class"]) && $_POST["class"] == "FR" ? " selected" : "")?>>Freshman</option>
<option value="SF"<?=(isset($_POST["class"]) && $_POST["class"] == "SF" ? " selected" : "")?>>Sophomore</option>
<option value="JU"<?=(isset($_POST["class"]) && $_POST["class"] == "JU" ? " selected" : "")?>>Junior</option>
<option value="SR"<?=(isset($_POST["class"]) && $_POST["class"] == "SR" ? " selected" : "")?>>Senior</option>
</select><br>

<label>Interests</label><br><br>
<input type="checkbox" name="interests[]" value="Music"<?=(isset($_POST["interests"]) && in_array("Music",$_POST["interests"]) ? " checked" : "")?>> Music<br>
<input type="checkbox" name="interests[]" value="Disc Golf"<?=(isset($_POST["interests"]) && in_array("Disc Golf",$_POST["interests"]) ? " checked" : "")?>> Disc Golf<br>
<input type="checkbox" name="interests[]" value="Cyber Security"<?=(isset($_POST["interests"]) && in_array("Cyber Security",$_POST["interests"]) ? " checked" : "")?>> Cyber Security<br>
<input type="checkbox" name="interests[]" value="Dog Walking"<?=(isset($_POST["interests"]) && in_array("Dog Walking",$_POST["interests"]) ? " checked" : "")?>> Dog Walking<br><br>

<input type="submit" value="Submit"/>

</form>

<?php

if(isset($_POST["name"]))
{
    echo "<p>Welcome ".$_POST["name"]."! Your age is ".$_POST['age']."</p>";

    echo "<p>You are in the ".$_POST["class"]." class</p>";

    echo "Your interests are:<br><br>";

    foreach($_POST["interests"] as $interest)
    {
      echo $interest."<br>";
    }
}

?>

</body>
</html>