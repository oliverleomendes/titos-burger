<?php

class catalogoContato{
    private Int $idCatalogoContato;
    private String $contato;
    
    public function setIdCatalogoContato(Int $idCatalogoContato){
        $this->idCatalogoContato = $idCatalogoContato;
    }

    public function getIdCatalogoContato(){
        return $this->idCatalogoContato;
    }

    public function setContato(String $contato){
        $this->contato = $contato;
    }

    public function getContato(){
        return $this->contato;
    }
}