<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//POST
//Collect data from the HTML form (invisible)

if (isset($_POST)) {  //isset verifica se uma variável foi setada, se ela foi iniciada
    echo $_POST['name'] . ", your form is submitted";
}

echo"<br>";
print_r($_POST);

?>

<form action="post.php" method="post">
    <input type="text" name="name">
    <input type="text" name="age">
    <button type="submit">SUBMIT</button>
</form>

</body>
</html>
