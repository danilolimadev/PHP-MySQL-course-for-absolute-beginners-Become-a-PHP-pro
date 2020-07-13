<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//$_FILES
//How to upload files
//1. Upload it to the root
//2. Directly to the database

//enctype="multipart/form-data
//Specifies how the form data should be encoded

//echo $name = $_FILES['file']['name'] . "<br>";  //Mostra informações do arquivo quando escolhido
//echo $type = $_FILES['file']['type'] . "<br>";
//echo $tmp_location = $_FILES['file']['tmp_name'] . "<br>";
//echo $error = $_FILES['file']['error'] . "<br>";  //0 indica nenhum erro, 1 indica erro

?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">SUBMIT</button>
</form>

</body>
</html>
