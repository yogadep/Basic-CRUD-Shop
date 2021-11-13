        <?php
            include 'config.php';
            $id = $_GET['id'];
            $query_room = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'");
            $row = mysqli_fetch_assoc($query_room);


            if(isset($_POST['submit'])){
                
                $nama = $_POST["nama"];
                $keterangan = $_POST["keterangan"];

                $sql = "UPDATE barang SET nama='$nama', keterangan='$keterangan' WHERE id='$id'";
                
                $row = mysqli_query($conn, $sql);
                
                if(mysqli_affected_rows($conn) > 0){
                    echo "
              <script>
                alert('data berhasil diubah');
              </script>  
            ";
                }else{
                    echo "
              <script>
                alert('gagagal berhasil diubah');
              </script>  
            ";
                }

            }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit barang</title>
</head>
<body>
    <h1>Mengedit barang</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" value="<?= $row['nama']?>">
                </li>
                <li>
                    <label for="keterangan">Keterangan :</label>
                    <input type="text" name="keterangan" value="<?= $row['keterangan']?>">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah</button>  
                </li>
            </ul>
        </form>
        
</body>
</html>