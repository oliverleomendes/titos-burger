<?php

class catalogoEndereco{
    private Int $idCatalogoEndereco;
    private Int $cep;
    private String $logradouro;
    private String $complemento;
    private Int $numero;
    private String $bairro;
    private String $cidade;
    private String $uf;
    private Int $enderecoPrincipal;
    
    public function setIdCatalogoEndereco(Int $idCatalogoEndereco){
        $this->idCatalogoEndereco = $idCatalogoEndereco;
    }

    public function getIdCatalogoEndereco(){
        return $this->idCatalogoEndereco;
    }

    public function setCep(Int $cep){
        $this->cep = $cep;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setLogradouro(String $logradouro){
        $this->logradouro = $logradouro;
    }

    public function getLogradouro(){
        return $this->logradouro;
    }

    public function setComplemento(String $complemento){
        $this->complemento = $complemento;
    }

    public function getComplemento(){
        return $this->complemento;
    }

    public function setNumero(Int $numero){
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setBairro(String $bairro){
        $this->bairro = $bairro;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setCidade(String $cidade){
        $this->cidade = $cidade;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setUf(String $uf){
        $this->uf = $uf;
    }

    public function getUf(){
        return $this->uf;
    }

    public function setEnderecoPrincipal(Int $enderecoPrincipal){
        $this->enderecoPrincipal = $enderecoPrincipal;
    }

    public function getEnderecoPrincipal(){
        return $this->enderecoPrincipal;
    }
}