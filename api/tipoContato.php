<?php

class tipoContato{
    private Int $idTipoContato;
    private String $tipoContato;

    public function setIdTipoContato(Int $idTipoContato){
        $this->idTipoContato = $idTipoContato;
    }

    public function getIdTipoContato(){
        return $this->idTipoContato;
    }

    public function setTipoContato(Int $tipoContato){
        $this->tipoContato = $tipoContato;
    }

    public function getTipoContato(){
        return $this->tipoContato;
    }
}