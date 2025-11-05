<?php

include 'connection.php';
//cek apa sudah disubmit
if(isset($_POST['register'])){
    //ambil data
    $username = $_POST['username'];
    $nama = $_POST['nama_lengkap']; //menangkap nama lengkap dari form
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //password terenkripsi

    $query = "INSERT INTO users(username, password, nama_lengkap) VALUES ('$username','$password','$nama')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('REGRISTRASI BERHASIL! SILAHKAN LOGIN!');
        window.location='login.php';</script>";    
    } else{
        echo "Gagal Mendaftar!";
    }
}




?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='conlog'>
            <h2>REGISTER</h2>
        <fieldset>
        <form method="post">
            <table>

            <!-- area input nama lengkap -->
                <tr>
                    <td>
                        <label for="nama_lengkap">Masukkan Nama </label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input type="text" name="nama_lengkap" placeholder ="Nama Lengkap" required> <br>
                    </td>
                </tr>
            <!-- area input usn -->    
                <tr>
                    <td>
                        <label for="username">Masukkan Username: </label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input type="text" name="username" placeholder ="Username" required> <br>
                    </td>
                </tr>
                
            <!-- area input pw -->
                <tr>
                    <td>
                        <label for="password">Masukkan Password: </label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input type="text" name="password" placeholder ="Password" required> <br>
                    </td>

            <!-- area button -->
                </tr>
                <tr colspan="2" style="text-align: right"></tr>
                <tr>
                   
            </table>

             <td colspan='2' style='text-align: center'>
                        <button type="submit" name="register">Daftar</button>
                    </td>
                </tr>

            <h4>Sudah punya akun? <a href="login.php">Login disini</a></h4>

        </form>
        </fieldset>
    </div>
</body>
</html>