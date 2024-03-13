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

print "<form action='../controller2/ProcessaLoja.php' method='post'>";
print "<label for='nome'>Nome:</label>";
print "<input type='text' name='nome' value=".$nome."><br>";
print "<label for='endereco'>Endereco:</label>";
print "<input type='text' name='endereco' value=".$endereco."><br>";
print "<label for='cnpj'>CNPJ:</label>";
print "<input type='text' name='cnpj' value=".$cnpj."><br>";
print "<input type='hidden' name='codigo' value='$id'><br>";
print "<input type='hidden' name='op' value='$operacao'><br>";
print "<input type='submit' value='$operacao'>";
print "</form>";


?>


