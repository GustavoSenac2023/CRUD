<?php

    class ModelLoja
    {
        protected $endereco;
        protected $nome;
        protected $cnpj;
        protected $codigo;

        public function __construct($endereco,$nome,$cnpj,$codigo) {
            $this->endereco = $endereco;
            $this->nome = $nome;
            $this->cnpj = $cnpj;
            $this->codigo = $codigo;
        }
        

        /**
         * Get the value of endereco
         */
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         */
        public function setEndereco($endereco): self
        {
                $this->endereco = $endereco;

                return $this;
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
         * Get the value of cnpj
         */
        public function getCnpj()
        {
                return $this->cnpj;
        }

        /**
         * Set the value of cnpj
         */
        public function setCnpj($cnpj): self
        {
                $this->cnpj = $cnpj;

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

        function cadastrarLoja(ModelLoja $loja) {
            include '../dao2/DaoLoja.php';
            $loja=new DaoLoja();
            $loja->cadastrarLoja($this);
        }
        function listarLoja(){
            include '../dao2/DaoLoja.php';
            $loja=new DaoLoja(null);
            return $loja->listarLoja();
        }
        function resgataID($codigo){
            include '../dao2/DaoLoja.php';
            $loja=new DaoLoja(null);
            return $loja->resgataID($codigo);
        }
        function alterarLoja(ModelLoja $loja) {
            include '../dao2/DaoLoja.php';
            echo "Model";
            $loja=new DaoLoja();
            $loja->alterarLoja($this);
            
        }
        function excluirLoja($codigo){
            include '../dao2/DaoLoja.php';
            $loja=new DaoLoja();
            $loja->excluirLoja($codigo);
        }
    }
    

?>