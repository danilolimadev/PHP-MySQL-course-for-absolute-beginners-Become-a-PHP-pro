<!DOCTYPE html>
<html lang="pt_br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <?PHP
    //phpinfo(); mostra as configurações atuais quanto ao php
    echo nl2br("Hello \r\n World \r\n "); //utiliza-se nl2br e \r\n com ele para indicar um enter, ou também com somente <br>
    $name = "MyName";
    echo "My Name is {$name} or $name <br>";  //Utilizando aspas duplas é possível inserir uma variável dentro sem nenhum problema,
    //utilizando {} você indica mais ainda que está utilizando uma variável
    //echo é mais rápido do que print, print pode somente escrever uma string, e somente uma por vez
    print "Hello"." World"; #É necessário utilizar . para juntar duas strings.
    // , # ou /* ... */Indica comentário
    ?>
  </body>
</html>
