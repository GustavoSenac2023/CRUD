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
    $res = ContProd::listar();
    $qtd=$res->rowCount();
    if ($qtd>0) {
        
    }
    
    ?>
</body>
</html>