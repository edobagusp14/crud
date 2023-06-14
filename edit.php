<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for nasabah update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_nasabah'];
	
	$name= $_POST['nama'];
	$tanggal = $_POST['tanggal_lhr'];
	$tempat = $_POST['tempat_lahir'];
	$penghasilan = $_POST['penghasilan'];
	// update nasabah data
	$result = mysqli_query($conn, "UPDATE nasabah SET nama='$name',tanggal_lhr='$tanggal',tempat_lahir='$tempat',penghasilan='$penghasilan' WHERE id_nasabah=$id");
	
	// Redirect to homepage to display updated nasabah in list
	header("Location: index.php");
}
?>
<?php
// Display selected nasabah data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech nasabah data based on id
$result = mysqli_query($conn, "SELECT * FROM nasabah WHERE id_nasabah=$id");
 
while($nasabah_data = mysqli_fetch_array($result))
{
	$name = $nasabah_data['nama'];
	$tanggal = $nasabah_data['tanggal_lhr'];
	$tempat = $nasabah_data['tempat_lahir'];
	$penghasilan = $nasabah_data['penghasilan'];
}
?>
<html>
<head>	
	<title>Edit nasabah Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_nasabah" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="nama" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>tanggal lahir</td>
				<td><input type="text" name="tanggal_lhr" value=<?php echo $tanggal;?>></td>
			</tr>
			<tr> 
				<td>tempat lahir</td>
				<td><input type="text" name="tempat_lahir" value=<?php echo $tempat;?>></td>
			</tr>
			<tr> 
				<td>penghasilan</td>
				<td><input type="text" name="penghasilan" value=<?php echo $penghasilan;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_nasabah" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>