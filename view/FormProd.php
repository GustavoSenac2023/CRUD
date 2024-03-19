<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <img src="../view2/logo.jpg" alt="">
        <a href="../index.html"><img src="../view2/home.png" alt="" srcset=""></a>
    </div>
<?php

$op=$_REQUEST["op"];
if ($op=="Alterar") {
    include "../controller/ContProd.php";
    $res=ContProd::resgataID($_REQUEST["codigo"]);
    $qtd=$res->rowCount();
    $row=$res->fetch(PDO::FETCH_OBJ);
    $nome=$row->nome;
    $preco=$row->preco;
    $quantidade=$row->quantidade;
    $id=$row->codigo;
    $idLoja=$row->cod_loja;
    $operacao="Alterar";
}else {
    $nome="";
    $preco="";
    $quantidade="";
    $id="";
    $idLoja="";
    $operacao="Incluir";
}
print <<<END
<div id='outer'>
<form action='../controller/processaProd.php' method='post'>
<div id='inner'>
<label for='nome'>Nome:</label>
<input type='text' name='nome' id='preco' value="$nome" required maxlength='50'><br>
<label for='preco'>Preco:</label>
<input type='text' name='preco' id='preco' value="$preco" required ><br>
<label for='quantidade'>Quantidade:</label>
<input type='text' name='quantidade' id='quantidade' value="$quantidade"required><br>
<label for='cod_loja'>Codigo Loja:</label>
<input type='text' name='cod_loja' id='cod_loja' value="$idLoja" required><br>
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
<?php
    $array=[];
    $count=0;
    include "../controller2/ContLoja.php";
    $res = ContLoja::listarLoja();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        print "<table class='table table-hover table striped table bordered'>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Endereco</th>";
        print "<th>CNPJ</th>";
        while ($row=$res->fetch(PDO::FETCH_OBJ)) {
            $array[$count]=$row->codigo;
            print "<tr>";
            print "<td>".$row->codigo."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->endereco."</td>";
            print "<td>".$row->cnpj."</td>";
            echo "</form>";
            print "</tr>";
            $count++;
        }
        print "</table>";
        foreach ($array as $key) {
            if ($key==$idLoja) {
                print($key);
            }
        }
    }else {
        print "";
        echo "No data found!";
    }
    
?>
    <div class="footer">
        <p>System</p>
    </div>
</body>
</html>



