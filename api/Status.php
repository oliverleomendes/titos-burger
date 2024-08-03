<?php

class Status{
    private Int $idStatus;
    private String $status;

    public function getIdStatus() { 
        return $this->idStatus; 
    } 

    public function setIdStatus($idStatus) {  
        $this->idStatus = $idStatus; 
    } 

    public function getStatus() { 
         return $this->status; 
    } 

    public function setStatus($status) {  
        $this->status = $status; 
    } 
}