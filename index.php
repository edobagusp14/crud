<?php
// Create database connection using config file

require 'config.php';
$result = query("SELECT * FROM nasabah");
// Fetch all nasabahs data from database
?>

<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New nasabah</a><br/><br/>
<br>
<br>

    <table width='80%' border=1>
 
    <tr>
        <th>No</th> 
        <th>Nama</th> 
        <th>tanggal_lhr</th> 
        <th>tempat_lahir</th> 
        <th>penghasilan</th> 
        <th>Update</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $result as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["tanggal_lhr"]; ?></td>
		<td><?= $row["tempat_lahir"]; ?></td>
		<td><?= $row["penghasilan"]; ?></td>
        <td class="aksi">
			<a href="edit.php?id=<?= $row["id_nasabah"]; ?>">ubah</a> |
			<a href="delete.php?id=<?= $row["id_nasabah"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		
	</tr>
	<?php $i++;?>
	<?php endforeach; ?>

    </table>

 </table>
</body>
</html>