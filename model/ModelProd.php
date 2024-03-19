<?php

    class ModelProd
    {
        protected $nome;
        protected $preco;
        protected $quantidade;
        protected $cod_loja;
        protected $codigo;

        public function __construct($codigo,$nome,$preco,$quantidade,$cod_loja) {
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
            $this->cod_loja = $cod_loja;
            $this->codigo = $codigo;
        }

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of preco
         */
        public function getPreco()
        {
                return $this->preco;
        }

        /**
         * Set the value of preco
         */
        public function setPreco($preco): self
        {
                $this->preco = $preco;

                return $this;
        }

        /**
         * Get the value of quantidade
         */
        public function getQuantidade()
        {
                return $this->quantidade;
        }

        /**
         * Set the value of quantidade
         */
        public function setQuantidade($quantidade): self
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        /**
         * Get the value of cod_loja
         */
        public function getCodLoja()
        {
                return $this->cod_loja;
        }

        /**
         * Set the value of cod_loja
         */
        public function setCodLoja($cod_loja): self
        {
                $this->cod_loja = $cod_loja;

                return $this;
        }

        /**
         * Get the value of codigo
         */
        public function getCodigo()
        {
                return $this->codigo;
        }

        /**
         * Set the value of codigo
         */
        public function setCodigo($codigo): self
        {
                $this->codigo = $codigo;

                return $this;
        }

        function cadastrarProd(ModelProd $prod) {
            include '../dao/DaoProd.php';
            $prod=new DaoProd();
            $prod->cadastrarProd($this);
        }
        function listarProd(){
            include '../dao/DaoProd.php';
            $prod=new DaoProd(null);
            return $prod->listarProd();
        }
        function resgataID($codigo){
            include '../dao/DaoProd.php';
            $prod=new DaoProd(null);
            return $prod->resgataID($codigo);
        }
        function alterarProd(ModelProd $prod) {
            include '../dao/DaoProd.php';
            $prod=new DaoProd();
            $prod->alterarProd($this);
        }
        function excluirProd($codigo){
            include '../dao/DaoProd.php';
            $prod=new DaoProd();
            $prod->excluirProd($codigo);
        }
    }
    

?>