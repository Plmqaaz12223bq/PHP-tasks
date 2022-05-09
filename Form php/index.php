<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<h1>Favorite City</h1>
    <form method="post">
        Enter Your Favorite City: <input type="text" name="city">
        <input type="submit" name="submit">
    </form> 
 
<?php
if (isset($_POST['submit'])){
    
        $city = $_POST['city'];
        echo "Your favorite city is $city.";
    }

?>




</body>
</html>