<?php
class Agenda extends model
{
	public function getLista()
	{
		$array = array();
		
		$sql = "Select * from contatos order by nome";
		$sql = $this->db->query($sql);

		if ($sql->rowCount()>0)
		{
		    $array = $sql->fetchAll();

		}
	    return $array;
	}

	public function getDados($id)
	{
		$array = array();
		$sql = "Select * from contatos where id = '$id' ";
        $sql = $this->db->query($sql) ;

		if ($sql->rowCount()>0)
		{
		    $array = $sql->fetch();

		}

	    return $array;
	}

	public function cad($nome, $desc, $tel, $emai, $ender)
	{
		$sql = "insert into contatos set nome = '$nome', descricao='$desc', telefone='$tel',  email='$email', endereco='$ender'";
		$sql = $this->db->query($sql) ;

		if ($sql->rowCount()>0)
		{
		    $array = $sql->fetch();

		}
	}

	public function editar($nome, $desc, $tel, $email, $ender, $id)
	{ 
	   $sql = "update contatos set nome = '$nome', descricao='$desc', telefone='$tel', email='$email', endereco='$ender' where id='$id' ";
		$sql = $this->db->query($sql) ;
    }

    public function excluir($id)
    {
    	$sql = "delete from contatos where id = '$id' ";
        $sql = $this->db->query($sql) ;
    }

}