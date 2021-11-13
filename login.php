<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1>Form Login</h1>
    <form action="" method="post">
        <h1>Welcome Admin</h1>
        <label>Usernama : </label>
        <input type="text" name="user" placeholder="Masukkan Username">
        <label>Paswod : </label>
        <input type="Password" name="pass" placeholder="Masukkan Paswod">
        <input type="submit"name="submit" value="login">


    </form>
    <?php
        include 'config.php';
        session_start();
        error_reporting(E_ALL ^ E_NOTICE);

        $username = $_POST['user'];
        $password = $_POST['pass'];

        $submit = $_POST["submit"];

        if($submit){
            $sql = "SELECT * FROM `admin` WHERE username='$username' and password='$password'";
            $query = mysqli_query($conn, $sql);
            $ok = mysqli_num_rows($query);
            if($ok>0){
                $row = mysqli_fetch_assoc($query);
                
                echo "selamat anda berhasil login";
            }else{
                echo "gagal login";
            }
        }
    ?>
</body>
</html>