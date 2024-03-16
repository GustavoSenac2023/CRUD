<?php
echo $_REQUEST["op"];
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
    $endereco=$_POST["endereco"];
    $nome=$_POST["nome"];
    $cnpj=$_POST["cnpj"];
    include "ContLoja.php";
    $contr = new ContLoja();
    $contr->cadastrarLoja($endereco,$nome,$cnpj);
}
function alterar(){
    $endereco=$_POST["endereco"];
    $nome=$_POST["nome"];
    $cnpj=$_POST["cnpj"];
    $id=$_POST["codigo"];
    include "ContLoja.php";
    echo "Processa";
    $contr = new ContLoja();
    $contr->alterarLoja($endereco,$nome,$cnpj,$id);
}
function excluir(){
    $id=$_REQUEST["codigo"];
    include "ContLoja.php";
    $contr = new ContLoja();
    $contr->excluirLoja($id);
}
function listar(){
    include '../view2/FormLojaList.php';
}
?>