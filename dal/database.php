<?php
Class Database {
	
	private $_password = "";
	private $_dsn = "mysql:dbname=city;host=localhost"; 
	private $_user = "root";
	private $_dbh;
	
	
	public function __construct()
	{
		$this->_dbh = new PDO($this->_dsn, $this->_user, $this->_password);
	}
	
	public function getCon()
	{
		return $this->_dbh;
	}
	public function loginAdmin($username, $password)
	{
		$sql = $this->_dbh->prepare("select count(*) as count from admin where Username =:username and Password =:password");
		$sql->bindValue(":username", $username, PDO::PARAM_STR);
		$sql->bindValue(":password", $password, PDO::PARAM_STR);
		$sql->execute();
		$sql->bindColumn("count", $count);
		$row = $sql->fetch();
		return $count;	
	}
	
	public function addUser($data)
	{
		$sql = $this->_dbh->prepare("Insert into users (fullName, email, phone, password) values 
		(:fullName, :email, :phone, :password)");
		$sql->bindValue(":fullName", ucwords($data->fullName), PDO::PARAM_STR);
		$sql->bindValue(":email", $data->email, PDO::PARAM_STR);
		$sql->bindValue(":phone", $data->phone, PDO::PARAM_STR);
		$sql->bindValue(":password", $data->password, PDO::PARAM_STR);
	
		
		if($sql->execute()){
			return true;
		} else{
			return false;
		}
	}
	
	public function loginUser($data)
	{
		$sql = $this->_dbh->prepare("select count(*) as count from users where email =:email and password =:password");
		$sql->bindValue(":email", $data->email, PDO::PARAM_STR);
		$sql->bindValue(":password", $data->password, PDO::PARAM_STR);
		$sql->execute();
		$sql->bindColumn("count", $count);
		$row = $sql->fetch();
		($count == 1) ? $res = true  : $res = false ;
		return $res;
	}
	
	public function addCompany($data)
	{
		
		$sql = $this->_dbh->prepare("Insert into serviceproviders (companyName, email, phone, password, address, description, category) values 
		(:name, :email, :phone, :password, :address, :description, :category)");
		$sql->bindValue(":name", ucwords($data->companyname), PDO::PARAM_STR);
		$sql->bindValue(":email", $data->email, PDO::PARAM_STR);
		$sql->bindValue(":phone", $data->phone, PDO::PARAM_STR);
		$sql->bindValue(":password", $data->password, PDO::PARAM_STR);
		$sql->bindValue(":address", $data->address, PDO::PARAM_STR);
		$sql->bindValue(":description", $data->desc, PDO::PARAM_STR);
		$sql->bindValue(":category", $data->cat, PDO::PARAM_STR);
		
		if($sql->execute()){
			return true;
		} else{
			return false;
		}
	}
	
	public function searchServicesByCategory($cat)
	{
		$sql = $this->_dbh->prepare("select * from  serviceproviders where  category =:category");
		$sql->bindValue(":category", $cat, PDO::PARAM_STR);
		$sql->execute();
		return $sql->fetchAll(PDO::FETCH_ASSOC);	
	
	}
	
	public function getUserByEmail($email)
	{
		$sql = $this->_dbh->prepare("select * from users where   email =:email");
		$sql->bindValue(":email", $email, PDO::PARAM_STR);
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
		
	}
	
	public function getServiceproviderById($id)
	{
		$sql = $this->_dbh->prepare("select * from  serviceproviders where  id =:id");
		$sql->bindValue(":id", $id, PDO::PARAM_STR);
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	
	
	

	public function sendMessage($data)
	{
	$sql = $this->_dbh->prepare("insert into contactmessages (userid, companyid, message, date) values (:userid, :companyid, :message, :date) ");
		$sql->bindValue(":userid", $data->userid, PDO::PARAM_INT);
		$sql->bindValue(":companyid", $data->companyid, PDO::PARAM_INT);
		$sql->bindValue(":message", $data->message, PDO::PARAM_STR);
		$sql->bindValue(":date", date("d-m-Y"), PDO::PARAM_STR);
		
		if($sql->execute()){
			return "2000";
		}else{
			return "3000";
		}
	}
	
	public function loginProvider($data)
	{
		$sql = $this->_dbh->prepare("select count(*) as count from serviceproviders where email =:email and password =:password");
		$sql->bindValue(":email", $data->email, PDO::PARAM_STR);
		$sql->bindValue(":password", $data->password, PDO::PARAM_STR);
		$sql->execute();
		$sql->bindColumn("count", $count);
		$row = $sql->fetch();
		($count == 1) ? $res = true  : $res = false ;
		return $res;
	}
	
	public function getServiceproviderByEmail($email)
	{
		$sql = $this->_dbh->prepare("select * from  serviceproviders where  email =:email");
		$sql->bindValue(":email", $email, PDO::PARAM_STR);
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	
	public function getServiceproviderByMessagesById($id)
	{
		$sql = $this->_dbh->prepare("select * from  contactmessages where  companyid =:id");
		$sql->bindValue(":id", $id, PDO::PARAM_INT);
		$sql->execute();
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function getUserBYId($id)
	{
		$sql = $this->_dbh->prepare("select * from users where   userId =:id");
		$sql->bindValue(":id", $id, PDO::PARAM_INT);
		$sql->execute();
		return $sql->fetch(PDO::FETCH_ASSOC);
		
		
	}
	
	
	
}



	?>