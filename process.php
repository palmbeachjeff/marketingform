<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Email this lead ASAP</title>
</head>
<body>

  <?php
    $name = $_POST["name"];
    echo "Thanks for filling out our form!"; 
    echo "<br>";
    echo "<br>";
    echo "We have confirmed that you are " . $name . ".";
    echo "<br>";
    echo "<br>";


    $company = $_POST["company"];
    echo "\nWe will be reaching out to " . $company . " shortly";
    echo "<br>";
    

    $interestedIn = $_POST["interestedIn"];
    echo "\nso we can help with your " . $interestedIn . " needs!"; 
    echo "<br>";
    echo "<br>";

    date_default_timezone_set('UTC');

    echo "We received your information at: ";
    echo date('h:i:s a, l F jS Y');
  ?> 
  
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cool Form</title>
</head>
<body>

  <?php
    $name = $_POST["name"];
    echo "Hello, " . $name;
    echo "<br>";

    $company = $_POST["company"];
    echo "\nDo you own " . $company . "?";
    echo "<br>";

    $email = $_POST["emailaddress"];
    echo "\nEmail Address: " . $email; 
    echo "<br>";

    date_default_timezone_set('UTC');

    echo "We received your information at: ";
    echo date('h:i:s a, l F jS Y');
  ?> 
  
</body>
</html>