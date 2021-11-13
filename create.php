<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
</head>
<body>
    <h1>Menambah barang</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama">
            </li>
            <li>
                <label for="keterangan">Keterangan :</label>
                <input type="text" name="keterangan">
            </li>
            <li>
                <button type="submit" name="submit">Tambahkan</button>
            </li>
        </ul>
    </form>
        <?php 
            include 'config.php';
            if(isset($_POST["submit"])){
                $nama = ($_POST["nama"]);
                $keterangan = ($_POST["keterangan"]);

                $query = "INSERT INTO barang VALUES ('', '$nama', '$keterangan')";

                mysqli_query($conn, $query);
                
                if(mysqli_affected_rows($conn) > 0 ){
                    echo "data berhasil ditambahkan";
                }else{
                    echo "data gagal dimasukkan";
                }
                
            }
        ?>
</body>
</html>