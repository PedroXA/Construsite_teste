<?php
class Usuario{

    private $id;
    private $email_cliente;
    private $nome_cliente;
	private $telefone_cliente;
	private $senha_cliente;
	private $data_nasc_cliente;

    private $con;

    public function __construct(){
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){
        $sql = $this->con->prepare("SELECT * FROM clientes");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function create(){
        $sql = $this->con->prepare("INSERT INTO clientes (email_cliente, nome_cliente, telefone_cliente,senha_cliente,data_nasc_cliente) VALUES (?,?,?,?,?)");
        $sql->execute([$this->getEmail_cliente(), $this->getNome_cliente(), $this->getTelefone_cliente(),$this->getSenha_cliente(),$this->getData_nasc_cliente()]);

        if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
			header("Location: ./");
   	 	}
    }

	public function read(){
        $sql = $this->con->prepare("SELECT * FROM clientes WHERE id=?");
        $sql->execute([$this->getId()]);
        $row = $sql->fetchObject();
        return $row;		
	}

	public function update(){
		$sql = $this->con->prepare("UPDATE clientes SET email_cliente=?, nome_cliente=?, telefone_cliente=?, senha_cliente=?, data_nasc_cliente=? WHERE id=?");
		$sql->execute([$this->getEmail_cliente(), $this->getNome_cliente(),$this->getTelefone_cliente(),$this->getSenha_cliente(),$this->getData_nasc_cliente(), $this->getId()]);

		if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
           header("Location: ./");
		}
	}

	public function delete(){
		$sql = $this->con->prepare("DELETE FROM clientes WHERE id=?");
		$sql->execute([$this->getId()]);

		if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
           header("Location: ./");
		}
	}


	/**
	 * Get the value of id
	 *
	 * @return  mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @param   mixed  $id  
	 *
	 * @return  self
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	
    /**
     * Get the value of nome_cliente
     */ 
    public function getNome_cliente()
    {
        return $this->nome_cliente;
    }

    /**
     * Set the value of nome_cliente
     *
     * @return  self
     */ 
    public function setNome_cliente($nome_cliente)
    {
        $this->nome_cliente = $nome_cliente;

        return $this;
    }

    /**
     * Get the value of email_cliente
     */ 
    public function getEmail_cliente()
    {
        return $this->email_cliente;
    }

    /**
     * Set the value of email_cliente
     *
     * @return  self
     */ 
    public function setEmail_cliente($email_cliente)
    {
        $this->email_cliente = $email_cliente;

        return $this;
    }

	/**
	 * Get the value of telefone_cliente
	 */ 
	public function getTelefone_cliente()
	{
		return $this->telefone_cliente;
	}

	/**
	 * Set the value of telefone_cliente
	 *
	 * @return  self
	 */ 
	public function setTelefone_cliente($telefone_cliente)
	{
		$this->telefone_cliente = $telefone_cliente;

		return $this;
	}

	/**
	 * Get the value of senha_cliente
	 */ 
	public function getSenha_cliente()
	{
		return $this->senha_cliente;
	}

	/**
	 * Set the value of senha_cliente
	 *
	 * @return  self
	 */ 
	public function setSenha_cliente($senha_cliente)
	{
		$this->senha_cliente = $senha_cliente;

		return $this;
	}

	/**
	 * Get the value of data_nasc_cliente
	 */ 
	public function getData_nasc_cliente()
	{
		return $this->data_nasc_cliente;
	}

	/**
	 * Set the value of data_nasc_cliente
	 *
	 * @return  self
	 */ 
	public function setData_nasc_cliente($data_nasc_cliente)
	{
		$this->data_nasc_cliente = $data_nasc_cliente;

		return $this;
	}
}