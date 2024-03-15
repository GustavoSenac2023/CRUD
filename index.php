<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gerenciador de Inventário</h1>
    <h2>Ver Produtos</h2>
    <div class="prod">
    <button onclick="location.href='view/FormProd.php?op=Incluir'">Incluir</button>
    <button onclick="location.href='view/FormProdList.php?op=Listar'">Listar</button>
    </div>
    <br>
    <h2>Ver Lojas</h2>
    <div>
    <button onclick="location.href='view2/FormLoja.php?op=Incluir'">Incluir</button>
    <button onclick="location.href='view2/FormLojaList.php?op=Listar'">Listar</button>
    </div>
</body>
</html>