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
        <img src="logo.jpg" alt="">
        <a href="../index.php"><p>Home</p></a>
    </div>
    <?php
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
            print "<tr>";
            print "<td>".$row->codigo."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->endereco."</td>";
            print "<td>".$row->cnpj."</td>";
            print "<td>
            <div class='btns'>
            <button id='alt' onclick=\"location.href='../view2/FormLoja.php?op=Alterar&codigo=".$row->codigo."';\">Alterar</button>
            <button id='del' onclick=\"location.href='../controller2/ProcessaLoja.php?op=Excluir&codigo=".$row->codigo."';\">Excluir</button>
            </div>
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