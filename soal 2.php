<?php
	$username="";
	$pass = "";
	$usernameErr = "";
	$passErr = "";
	$username_valid = true;
	$password_valid = true;
	$password_valid_msg ="";
	$username_valid_msg = "";
	
	// Cek form sudah di klik submit/belum
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$pass = trim($_POST['pass']);
		
		
		if(empty($username)){
			$usernameErr = "Username masih kosong.<br>";
		}
		if(empty($pass)){
			$passErr = "Password masih kosong.<br>";
		}
		
		// Kode cek username hanya boleh huruf a-z dan berjumlah max 9 karakter
		if(!preg_match("/^[a-z][5-9]*$/",$username)){
			$username_valid = false;
			$username_valid_msg = "username tidak boleh mengandung karakter spesial dan huruf kapital, max 9 karakter.<br>";
		}

	
		// Cek semua input sudah diisi apa belum
		if( !empty($username) and !empty($pass) and $username_valid ){
			// Disini tempat menulis kode (semua syarat sudah input terpenuhi).
			// Misalnya menulis kode query ke database
			echo "Selamat semua input sudah diisi dengan benar.<br>";
		}
		
	}
?>
<h3>From Register</h3>
 
<form action="validasi-huruf.php" method="post">
	Username : <input type="text" name="username" value="<?php echo $username; ?>"><br>
		<?php echo $usernameErr.$username_valid_msg; ?>
	Password : <input type="password" name="pass" value="<?php echo $pass; ?>"><br>
		<?php echo $passErr ?>
	<input type="submit" name="submit" value="Register">
</form>

