
<?php

include 'connection.php';

?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <div class='conlog'>
            <h2>LOGIN</h2>
        <fieldset>
                <form method="post">
                    <table>
                    <!-- area input usn-->
                        <tr>
                            <td>
                                <label for="username">Masukkan Username </label>
                            </td>
                            <td>
                                <label>:</label>
                            </td>
                            <td>
                                <input type="text" name="username" placeholder ="Username" required> <br>
                            </td>
                        </tr>
                    
                    <!-- area input pw-->
                        <tr>
                            <td>
                                <label for="password">Masukkan Password </label>
                            </td>
                            <td>
                                <label>:</label>
                            </td>
                            <td>
                                <input type="text" name="password" placeholder ="Password" required> <br>
                            </td>
                        </tr>

                    
                    <!-- area input button-->
                    
                    </table>

                    <td>
                                <button type="submit" name="login">Login</button>
                            </td>
                        </tr>
                    <h4>Belum punya akun? <a href="register.php">Create Account</a></h4>
                </form>
    </fieldset>
    </div>
</body>
</html>