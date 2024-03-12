<?php
switch ($_REQUEST["op"]) {
    case "Incluir":
        incluir();
        break;
        case "Alterar":
            alterar();
            break;
            case "Excluir":
                excluir();
                break;
                case "Listar":
                    listar();
                    break;
    default:
        echo "Key not found";
        break;
}
function incluir(){
    $nome=$_POST["nome"];
    $preco=$_POST["preco"];
    $quantidade=$_POST["quantidade"];
    $cod_loja=$_POST["cod_loja"];
    include "ContProd.php";
    $contr = new ContProd();
    $contr->cadastrarProd($nome,$preco,$quantidade,$cod_loja);
}
function alterar(){
    $nome=$_POST["nome"];
    $preco=$_POST["preco"];
    $quantidade=$_POST["quantidade"];
    $cod_loja=$_POST["cod_loja"];
    $id=$_POST["codigo"];
    include "ContProd.php";
    $contr = new ContProd();
    $contr->alterarProd($id,$nome,$preco,$quantidade,$cod_loja);
}
function excluir(){
    $id=$_REQUEST["codigo"];
    include "ContProd.php";
    $contr = new ContProd();
    $contr->excluirProd($id);
}
function listar(){
    include '../view/FormProdList.php';
}
?>