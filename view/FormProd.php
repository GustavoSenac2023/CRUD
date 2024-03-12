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

print "<form action='../controller/processaProd.php' method='post'>";
print "<label for='nome'>Nome:</label>";
print "<input type='text' name='nome' value=".$nome."><br>";
print "<label for='preco'>Preco:</label>";
print "<input type='text' name='preco' value=".$preco."><br>";
print "<label for='quantidade'>Quantidade:</label>";
print "<input type='text' name='quantidade' value=".$quantidade."><br>";
print "<label for='cod_loja'>Codigo Loja:</label>";
print "<input type='text' name='cod_loja' value=".$idLoja."><br>";
print "<input type='hidden' name='codigo' value='$id'><br>";
print "<input type='hidden' name='op' value='$operacao'><br>";
print "<input type='submit' value='$operacao'>";
print "</form>";


?>


