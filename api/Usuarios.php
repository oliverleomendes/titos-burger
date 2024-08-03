<?php

class Usuarios{
    private Int $idUsuario;
    private String $nome;
    private String $sobrenome;
    private String $data;
    private String $razaoSocial;
    private String $nomeFantasia;
    private Int $idGenero;
    private String $genero;
    private String $rg;
    private Int $cpf;
    private Int $ie;
    private Int $im;
    private Int $cnpj;
    private Int $isIm;
    private String $login;
    private String $senha;
    protected String $senhaSegura;

	public function getIdUsuario() { 
 		return $this->idUsuario; 
	} 

	public function setIdUsuario($idUsuario) {  
		$this->idUsuario = $idUsuario; 
	} 

	public function getNome() { 
 		return $this->nome; 
	} 

	public function setNome($nome) {  
		$this->nome = $nome; 
	} 

	public function getSobrenome() { 
 		return $this->sobrenome; 
	} 

	public function setSobrenome($sobrenome) {  
		$this->sobrenome = $sobrenome; 
	} 

	public function getData() { 
 		return $this->data; 
	} 

	public function setData($data) {  
		$this->data = $data; 
	} 
	
	public function getRazaoSocial() { 
 		return $this->razaoSocial; 
	} 

	public function setRazaoSocial($razaoSocial) {  
		$this->razaoSocial = $razaoSocial; 
	} 

	public function getNomeFantasia() { 
 		return $this->nomeFantasia; 
	} 

	public function setNomeFantasia($nomeFantasia) {  
		$this->nomeFantasia = $nomeFantasia; 
	} 

	public function getIdGenero() { 
 		return $this->idGenero; 
	} 

	public function setIdGenero($idGenero) {  
		$this->idGenero = $idGenero; 
	} 

	public function getGenero() { 
 		return $this->genero; 
	} 

	public function setGenero($genero) {  
		$this->genero = $genero; 
	} 

	public function getRg() { 
 		return $this->rg; 
	} 

	public function setRg($rg) {  
		$this->rg = $rg; 
	} 

	public function getCpf() { 
 		return $this->cpf; 
	} 

	public function setCpf($cpf) {  
		$this->cpf = $cpf; 
	} 

	public function getIe() { 
 		return $this->ie; 
	} 

	public function setIe($ie) {  
		$this->ie = $ie; 
	} 

	public function getIm() { 
 		return $this->im; 
	} 

	public function setIm($im) {  
		$this->im = $im; 
	} 

	public function getCnpj() { 
 		return $this->cnpj; 
	} 

	public function setCnpj($cnpj) {  
		$this->cnpj = $cnpj; 
	} 

	public function getIsIm() { 
 		return $this->isIm; 
	} 

	public function setIsIm($isIm) {  
		$this->isIm = $isIm; 
	} 

	public function getLogin() { 
 		return $this->login; 
	} 

	public function setLogin($login) {  
		$this->login = $login; 
	} 

	public function getSenha() { 
 		return $this->senha; 
	} 

	public function setSenha($senha) {  
		$this->senha = $senha; 
	} 

	private function getSenhaSegura() { 
 		return $this->senhaSegura; 
	} 

	private function setSenhaSegura($senhaSegura) {  
		$this->senhaSegura = $senhaSegura; 
	} 
}