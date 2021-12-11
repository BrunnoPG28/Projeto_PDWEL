<?php
class agendaController extends controller
{
	public function __construct()
	{
		parent ::__construct();
	}


	public function index()
	{
			$dados = array
			(
				'agenda' => array()
		 	);

			$ag = new Agenda();
			$dados['agenda'] = $ag->getLista();

			$this->loadTemplate('agenda', $dados);

	}

	public function cadastrar()
	{
			$dados = array();

			if(isset($_POST['nome'])&&(!empty($_POST['nome'])))
			{
				$nome = strtoupper (addslashes($_POST['nome']) );
				$desc = addslashes($_POST['descricao']);
				$tel = addslashes($_POST['telefone']);
				$email = addslashes($_POST['email']);
				$ender = addslashes($_POST['endereco']);

				$a = new Agenda();
				$a->cad($nome, $desc, $tel, $email, $ender);

				echo "<meta http-equiv='refresh' content=0;url=". BASE_URL . "agenda>";    	
			}

			$this->loadTemplate('cadastrar', $dados);
	}

	public function editar($id=0)
	{
			$dados = array(
				'agenda' => array()

			     );

			$e = new Agenda();

			$dados['agenda'] = $e->getDados($id);

			if(isset($_POST['nome'])&&(!empty($_POST['nome'])))
			{
				$id = addslashes($id);

				$nome = strtoupper (addslashes($_POST['nome']) );
				$desc = addslashes($_POST['descricao']);
				$tel = addslashes($_POST['telefone']);
				$email = addslashes($_POST['email']);
				$ender = addslashes($_POST['endereco']);

				$e->editar($nome, $desc, $tel, $email, $ender, $id);

				echo "<meta http-equiv='refresh' content=0;url=". BASE_URL . "agenda>";    	
			}
			$this->loadTemplate('agenda_editar', $dados);

	}

    public function excluir($id)
	{
			$e = new Agenda();
			$id = addslashes($id);
			$e->excluir($id);

			echo "<meta http-equiv='refresh' content=0;url=". BASE_URL . "agenda>";    	
	}
}
?>