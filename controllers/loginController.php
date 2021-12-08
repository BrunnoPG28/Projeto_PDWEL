<?php 

class loginController extends controller
{
	public function __construct()
	{
		parent ::__construct();
	}

	public function index()
	{
		$dados = array(
           'aviso' => '',
           'logado' => 'false'
		);


		if(isset($_POST['usuario'])&& !empty($_POST['senha']))
		{
			$usu = addslashes($_POST['usuario']);
			$senha = addslashes($_POST['senha']);

			$usuario = new Usuarios();

			if ($usuario->isExiste($usu, $senha))
			{     
				$dados['logado'] = 'true';

				$_SESSION['admin'] = $usu;
                echo "<meta http-equiv='refresh' content=0;url=". BASE_URL . "agenda>";
			}else{
				$dados['aviso'] = "Email e/ou Senha não estão corretos!";
			}

		}

        $this->loadTemplate("login", $dados);		
    }

    public function logout()
    {
    	unset($_SESSION['admin']);
        echo "<meta http-equiv='refresh' content=0;url=". BASE_URL . "login>";    	
    }
}
?>