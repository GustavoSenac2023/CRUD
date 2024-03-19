<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style2.css">
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
    $arr=[];
    $count=0;
    include "../controller/ContProd.php";
    $res = ContProd::listarProd();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        print "<table class='table table-hover table striped table bordered'>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Preco</th>";
        print "<th>Quantidade</th>";
        print "<th>Codigo Loja</th>";
        while ($row=$res->fetch(PDO::FETCH_OBJ)) {
            $arr[$count]=$row->codigo;
            print "<tr>";
            print "<td>".$row->codigo."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->preco."</td>";
            print "<td>".$row->quantidade."</td>";
            print "<td>".$row->cod_loja."</td>";
            print "<td>
            <div class='btns'>
            <button id='alt' onclick=\"location.href='../view/FormProd.php?op=Alterar&codigo=".$row->codigo."';\">Alterar</button>
            <button id='del' onclick=\"location.href='../controller/ProcessaProd.php?op=Excluir&codigo=".$row->codigo."';\">Excluir</button>
            </div>
            </td>";
            echo "</form>";
            print "</tr>";
            $count++;
        }
        print "</table>";
        include "../controller/ProcessaProd.php";
        
    }else {
        echo "No data found!";
    }
    
    ?>
    <div class="footer">
        <p>System</p>
    </div>
</body>
</html>