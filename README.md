# testArkademi2019
# Soal No 1,3 dan 5 Pada pengerjaan soal no 1, 3 dan 5 digunakan bahasa pemrograman python3 sedangkan pada soal no 2 digunakan bahasa pemrograman PHP
**Soal No.6 :**
Pada soal nomer 6 dibuat aplikasi sederhana untuk CRUD menggunakan php, dengan software yang diutuhkan untuk dapat menjalankan aplikasi pada localhost adalah XAMPP.
1. Langkah pertama yang saya kerjakan adalah membuat database menggunakan Aplikasi SQLyog.
2. Selanjutnya buat file koneksi_db.php, file ini digunakan agar aplikasi web kita dapat mengakses lokal server dimana database tadi tersimpan.
```
<?php 

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "db_employee";

  $mysqli = mysqli_connect($host, $user, $pass, $db); 

?>
```
jangan lupa untuk melakukan konfigurasi untuk nama host, user, pass dan database name sesuai dengan konfigurasi pada PC anda.

3. Setelah berhasil melakukan koneksi database, selanjutnya dibuat file index.php, dimana halaman ini sebagai halaman utama yang akan menampilkan seluruh data yang ada pada tabel.
````
<?php
// Create database connection using config file
include_once("koneksi_db.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM employee ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New Employee</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Salary</th> <th>Work</th> <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['salary']."</td>";
        echo "<td>".$user_data['work']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
````
4. Buat halaman edit.php, add.php, dan delete.php untuk melakukan handler pada fungsi create, update and delete (**CRUD**).
5. Berikut ScreenShoot hasil demo Simple CRUD yang berhasil saya buat.
![Screenshot Home Page](https://github.com/AryasutaWicaksana/testArkademi2019/blob/master/homepage.png)
![Screenshot Home Page](https://github.com/AryasutaWicaksana/testArkademi2019/blob/master/add.png)
![Screenshot Home Page](https://github.com/AryasutaWicaksana/testArkademi2019/blob/master/edit.png)
