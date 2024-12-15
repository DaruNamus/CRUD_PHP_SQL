<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h2><center>Edit Database</center></h2>
    <center>
    <form method="post" action="editback.php">
        <?php include "editdata.php" ?>
        <input type="number" name="ID" placeholder="ID" required>
        <input type="text" name="Nama" placeholder="Nama" required>
        <input type="text" name="Kota" placeholder="Kota" required>
        <button type="submit" name="edit_data">Tambah Data</button>
    </form>
    </center>
</body>
</html>
