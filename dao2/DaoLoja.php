<?php

    class DaoLoja{
        function cadastrarLoja(ModelLoja $loja) {
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="INSERT INTO loja (endereco,nome,cnpj) VALUES (:endereco,:nome,:cnpj)";
            $stmt=$con->conn->prepare($sql);
            $stmt->bindValue(':endereco',$loja->getEndereco());
            $stmt->bindValue(':nome',$loja->getNome());
            $stmt->bindValue(':cnpj',$loja->getCnpj());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view2/FormLojaList.php?op=Listar';</script>";
        }
        function listarLoja(){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM loja ORDER BY codigo";
            return $con->conn->query($sql);
        }
        function resgataID($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="SELECT * FROM loja WHERE codigo='$codigo'";
            return $con->conn->query($sql);
        }
        function alterarLoja(ModelLoja $loja){
            echo "Dao",$loja->getCodigo();
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao();
            $sql="UPDATE loja SET endereco=:endereco,nome=:nome,cnpj=:cnpj WHERE codigo=:codigo";
            $stmt=$con->conn->prepare($sql);
            echo $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->bindValue(':endereco',$loja->getEndereco());
            $stmt->bindValue(':nome',$loja->getNome());
            $stmt->bindValue(':cnpj',$loja->getCnpj());
            $stmt->bindValue(':codigo',$loja->getCodigo());
            $res=$stmt->execute();
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../view2/FormLojaList.php?op=Listar';</script>";
        }
        function excluirLoja($codigo){
            include 'Conexao.php';
            $con= new Conexao();
            $con->fazConexao(); 
            $sql="DELETE FROM loja WHERE codigo= '$codigo'";
            $res=$con->conn->query($sql);
            $res ? print "<script>alert('Sucess')</script>" : print "<script>alert('Failure')</script>";
            echo "<script>location.href='../index.html';</script>";
        }
    }

?>