<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week</title>
</head>
<body>
    <h1>Day Of The Week</h1>
    <form method="post">
        Enter a Day Of The Week: <input type="text" name="day">
        <input type="submit" name="submit">
    </form> 
 
    <?php
    if (!isset($_POST['submit'])){
}else{
$day = $_POST["day"];
if ($day == 'Monday'){
  echo "Laugh on Monday, laugh for danger.";
} elseif ($day == 'Tuesday'){
  echo "Laugh on Tuesday, kiss a stranger.";
} elseif ($day == 'Wednesday'){
  echo "Laugh on Wednesday, laugh for a letter.";
} elseif ($day == 'Thursday'){
  echo "Laugh on Thursday, something better.";
} elseif ($day == 'Friday'){
  echo "Laugh on Friday, laugh for sorrow.";
} elseif ($day == 'Saturday'){
  echo "Laugh on Saturday, joy tomorrow.";
} else {
  echo "No information for that day.";
}
 
}
?>


</body>
</html>