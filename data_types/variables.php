<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //VARIABLES
    // Is a symbol or name that stands for a value

    $name = "MyName";

    echo "My Name is " . $name . "<br>";

    echo $name . " is x years old" . "<br>";

    //Variable names
    //Variable name starts with a letter A-Z a-z,
    //underscore(_), follower by any number of letters
    //, numbers, or underscores.

    $name = "MyName";
    $Name = "MyName";
    //$9name = "MyName";  //Invalid, starts with a number
    $_name = "MyName";
    $_9name = "MyName";

    echo $name;

    $age = 23;
    //Echo
    //Single quotes - Variable named are echoed as it is
    //Double quotes - Variable names are replaced by the variable values
    echo "My age is {$age}"."<br>";
    echo 'My age is {$age}'."<br>";
    echo 'My age is '.$age;

     ?>

  </body>
</html>
