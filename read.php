<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    <table>
        <tr>
            <td>Id</td>
            <td>Nama</td>
            <td>Keterangan</td>
        </tr>
    </table>
    <?php 
        include 'config.php';
        $query = mysqli_query($conn,"SELECT * FROM barang");
        $i = 1;
        foreach($query as $row) :
    ?>

    <tr>
        <td><?= $row["id"]?></td>
        <td><?= $row["nama"]?></td>
        <td><?= $row["keterangan"]?></td>
        <td>
            <a href="update.php?id=<?= $row['id']?>">Edit</a>
        </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach;?>
</body>
</html>