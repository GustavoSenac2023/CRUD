<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "../controller/ContProd.php";
    $res = ContProd::listarProd();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        print "<table class='table table-hover table striped table bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Preco</th>";
        print "<th>Quantidade</th>";
        print "</tr>";
        while ($row=$res->fetch(PDO::FETCH_OBJ)) {
            print "<tr>";
            print "<td>".$row->codigo."</td>";
            print "<td>".$row->cod_loja."</td>";
            print "<td>".$row->preco."</td>";
            print "<td>".$row->quantidade."</td>";
            print "<td>
            <button onclick=\"location.href='../view/FormProd.php?op=Alterar&codigo=".$row->codigo."';\">Alterar</button>
            <button onclick=\"location.href='../controller/ProcessaProd.php?op=Excluir&codigo=".$row->codigo."';\">Excluir</button>
            </td>";
            echo "</form>";
            print "</tr>";
        }
        print "</table>";
    }else {
        echo "No data found!";
    }
    
    ?>
</body>
</html>