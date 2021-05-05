<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "signup";
	var $koneksi;
 
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->email $this->database);
	}
 
 
	function register($username,$password,$nama,$email)
	{	
		$insert = mysqli_query($this->koneksi,"insert into user values ('','$username','$password','$nama','$email')");
		return $insert;
	}
 
	function login($uemail,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from user where email='$email'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['email'] = $
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}
 
	function relogin($email)
	{
		$query = mysqli_query($this->koneksi,"select * from user where email='$email'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['email'] = $data_user['email'];
		$_SESSION['is_login'] = TRUE;
	}
} 
 
 
?>
