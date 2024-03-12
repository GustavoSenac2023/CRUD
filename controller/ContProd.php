<?php

    class ContProd{

        public static function cadastrarProd($nome,$preco,$quantidade,$cod_loja) {
            include '../model/ModelProd.php';
            $prod=new ModelProd(null,$nome,$preco,$quantidade,$cod_loja);
            $prod->cadastrarProd($prod);
        }
        public static function excluirProd($codigo) {
            include '../model/ModelProd.php';
            $prod=new ModelProd(null,null,null,null,null);
            $prod->excluirProd($codigo);
        }
        public static function alterarProd($codigo,$nome,$preco,$quantidade,$cod_loja) {
            include '../model/ModelProd.php';
            $prod=new ModelProd($codigo,$nome,$preco,$quantidade,$cod_loja);
            return $prod->alterarProd($prod);
        }
        public static function listarProd() {
            include '../model/ModelProd.php';
            $model=new ModelProd(null,null,null,null,null);
            return $model->listarProd();
        }
        public static function resgataID($codigo) {
            include '../model/ModelProd.php';
            $model=new ModelProd(null,null,null,null,null);
            return $model->resgataID($codigo);
        }
    }

?>