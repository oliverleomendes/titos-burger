<?php

class tipoUsuarios{
    private Int $idTipoUsuario;
    private String $tipoUsuario;

    public function setIdTipoUsuario(Int $idTipoUsuario){
        $this->idTipoUsuario = $idTipoUsuario;
    }

    public function getIdTipoUsuario(){
        return $this->idTipoUsuario;
    }

    public function setTipoUsuario(String $tipoUsuario){
        $this->tipoUsuario = $tipoUsuario;
    }

    public function getTipoUsuario(){
        return $this->tipoUsuario;
    }
}