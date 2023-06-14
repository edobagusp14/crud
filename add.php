<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
  <form action="add.php" method="post" name="form1">
  <center>
  <table border="1">
        <tr>
            DATA NASABAH
        </tr>

        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" name="nama" id="name" required /></td>
        </tr>

        <tr>
            <td>TANGGAL LAHIR</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lhr"></td>
		</tr>

        <tr>
            <td>TEMPAT LAHIR</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>

        <tr>
            <td>PENGHASILAN</td>
            <td>:</td>
            <td><input type="text" name="penghasilan"></td>
        </tr>

        <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
	</form>
<br><br>
	
	<?php
 
	// Check If form submitted, insert form data into nasabah table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['nama'];
		$tanggal = $_POST['tanggal_lhr'];
		$tempat = $_POST['tempat_lahir'];
		$penghasilan = $_POST['penghasilan'];
		
		// include database connection file
		require 'config.php';
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO nasabah(nama,tanggal_lhr,tempat_lahir,penghasilan) VALUES('$name','$tanggal','$tempat','$penghasilan')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>