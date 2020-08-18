<?php 

class conectar{
	private $servidor = "mysql380.umbler.com";
	private $usuario = "annajusistema";
	private $senha = "Gustavo32494565";
	private $bd = "annajusistema";

	public function conexao(){
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

		return $conexao;
	}
}

mysqli_set_charset($conexao, "utf8")
 ?>