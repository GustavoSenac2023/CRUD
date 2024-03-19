<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <img src="logo.jpg" alt="">
        <a href="../index.html"><img src="home.png" alt="" srcset=""></a>
    </div>
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
print <<<END
    <div id='outer'>;
    <form action='../controller2/ProcessaLoja.php' onsubmit='return validateForm()' method='post'>
    <div id='inner'>
    <label for='nome'>Nome:</label>
    <input type='text' name='nome' id='nome' value="$nome" required maxlength='50'><br>
    <label for='endereco'>Endereco:</label>
    <input type='text'  name='endereco' id='endereco' value="$endereco" required maxlength='50'><br>
    <label for='cnpj'>CNPJ:</label>
    <input type='text' name='cnpj' id='cnpj' value="$cnpj" required minlength='14' maxlength='20'><br>
    </div>
    <input type='hidden' name='codigo' value='$id'><br>
    <input type='hidden' name='op' value='$operacao'><br>
    <div id='btns'>
    <input type='submit' class='in' value='$operacao'>
    <a href='../index.html' id='link'><p>Home</p></a>
    </div>
    </form>
    </div>
END;
?>
    <div class="footer">
        <p>System</p>
    </div>
    <script src="code.js"></script>
</body>
</html>




