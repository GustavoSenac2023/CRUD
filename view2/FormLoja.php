<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$op=$_REQUEST["op"];
if ($op=="Alterar") {
    include "../controller2/ContLoja.php";
    $res=ContLoja::resgataID($_REQUEST["codigo"]);
    $qtd=$res->rowCount();
    $row=$res->fetch(PDO::FETCH_OBJ);
    $nome=$row->nome;
    $endereco=$row->endereco;
    $cnpj=$row->cnpj;
    $id=$row->codigo;
    $operacao="Alterar";
}else {
    $nome="";
    $endereco="";
    $cnpj="";
    $id="";
    $operacao="Incluir";
}
print "<div id='outer'>";
print "<form action='../controller2/ProcessaLoja.php' method='post'>";
print "<div id='inner'>";
print "<label for='nome'>Nome:</label>";
print "<input type='text' name='nome' value=".$nome."><br>";
print "<label for='endereco'>Endereco:</label>";
print "<input type='text' name='endereco' value=".$endereco."><br>";
print "<label for='cnpj'>CNPJ:</label>";
print "<input type='text' name='cnpj' value=".$cnpj."><br>";
print "</div>";
print "<input type='hidden' name='codigo' value='$id'><br>";
print "<input type='hidden' name='op' value='$operacao'><br>";
print "<div id='btns'>";
print "<input type='submit' value='$operacao'>";
print "<a href='../index.html' id='link'><p>Home</p></a>";
print "</div>";
print "</form>";
print "</div>";
?>

</body>
</html>




