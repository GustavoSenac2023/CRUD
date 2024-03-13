<?php

    class ContLoja{

        public static function cadastrarLoja($endereco,$nome,$cnpj) {
            include '../model2/ModelLoja.php';
            $loja=new ModelLoja($endereco,$nome,$cnpj,null);
            $loja->cadastrarLoja($loja);
        }
        public static function excluirLoja($codigo) {
            include '../model2/ModelLoja.php';
            $loja=new ModelLoja(null,null,null,null,null);
            $loja->excluirLoja($codigo);
        }
        public static function alterarLoja($endereco,$nome,$cnpj,$codigo) {
            include '../model2/ModelLoja.php';
            $loja=new ModelLoja($endereco,$nome,$cnpj,$codigo);
            return $loja->alterarLoja($loja);
        }
        public static function listarLoja() {
            include '../model2/ModelLoja.php';
            $model=new ModelLoja(null,null,null,null,null);
            return $model->listarLoja();
        }
        public static function resgataID($codigo) {
            include '../model2/ModelLoja.php';
            $model=new ModelLoja(null,null,null,null,null);
            return $model->resgataID($codigo);
        }
    }

?>