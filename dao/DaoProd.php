<?php

    class DaoProd{
        function cadastrarProd(ModelProd $prod) {
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO produto (nome,preco,quantidade,cod_loja) VALUES (:nome,:preco,:quantidade,:cod_loja)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':nome',$prod->getNome());
            $stmt->bindValue(':preco',$prod->getPreco());
            $stmt->bindValue(':quantidade',$prod->getQuantidade());
            $stmt->bindValue(':cod_loja',$prod->getCodLoja());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
        function listarProd(){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM produto ORDER BY codigo";
            return $con->conn->query($sql);
        }
        function resgataID($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM produto WHERE codigo='$codigo'";
            return $con->conn->query($sql);
        }
        function alterarProd(ModelProd $prod){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="UPDATE produto SET nome=:nome,preco=:preco,quantidade=:quantidade,cod_loja=:cod_loja WHERE codigo=:codigo";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':codigo',$prod->getCodigo());
            $stmt->bindValue(':nome',$prod->getNome());
            $stmt->bindValue(':preco',$prod->getPreco());
            $stmt->bindValue(':quantidade',$prod->getQuantidade());
            $stmt->bindValue(':cod_loja',$prod->getCodLoja());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view/FormProdList.php?op=Listar';</script>";
        }
        function excluirProd($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="DELETE FROM produto WHERE codigo= '$codigo'";
            $res=$con->conn->query($sql);
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../index.html';</script>";
        }
    }

?>