<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <center>
    <h2>CRUD Data Kelompok Tugas Akhir</h2>
    </center>

    <table border>
        <tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Kota</th>
            <th>Aksi</th>
		</tr>
        <tr>
            <?php include "autolist.php" ?>
        </tr>
    </table>
    <center>
    <a href="addfront.html">
        <h4>TAMBAH DATA</h4>
    </a>
    </center>
</body>
</html>