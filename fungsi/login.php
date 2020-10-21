<?php 
	include 'koneksi.php';
	
	if(isset($POST['login'])){
		$username=$_REQUEST['username'];
		$pass=$_REQUEST['pass'];
		$sql="SELECT*FROM pengguna WHERE username ='$username'";
		$res = mysqli_query($koneksi,$sql);
		$hasil = mysqli_fetch_array ($res);
		if($hasil['username'] == $username && $hasil['password'] == $password){
			header("location:../page/home.php");
		}else{
			header("location:../index.php");
		}
	}



 ?>