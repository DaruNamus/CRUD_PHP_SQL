<?php
		include "connection.php";
		$data = mysqli_query($connection, "select * from crud");
		while ($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['ID']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Kota']; ?></td>
				<td>
                    <?php include "deletedata.php"?>
					<?php include "editdata.php"?>
					<a href="?edit_data=<?php echo $d['ID']; ?>">Edit</a>
                    <a href="?delete_data=<?php echo $d['ID']; ?>">Hapus</a>
                </td>
			</tr>
		<?php } ?>
