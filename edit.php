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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Affan - PWA Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>edit Users</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/baguetteBox.min.css">
    <link rel="stylesheet" href="css/rangeslider.css">
    <link rel="stylesheet" href="css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="css/apexcharts.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="manifest.json">	
</head>
 
<body>
  <!-- Header Area -->
  <div class="header-area" id="headerArea">
      <div class="container">
        <!-- Header Content -->
        <div class="header-content position-relative d-flex align-items-center justify-content-between">
          <!-- Back Button -->
          <div class="back-button"><a href="index.php">
              <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
              </svg></a></div>
          <!-- Page Title -->
          <div class="page-heading">
            <h6 class="mb-0">Ubah data</h6>
          </div>
     
        </div>
      </div>
    </div>
      <!-- form Area -->
<div class="page-content-wrapper">
    <div class="page-content-wrapper py-3">
      <div class="container">
        <!-- Element Heading -->
        <div class="element-heading">
          <h6></h6>
        </div>
      </div>
		<div class="container">
        <div class="card">
          <div class="card-body">
            <form name="update_nasabah" action="edit.php" method="post">
              <div class="form-group">
                <label class="form-label" for="exampleInputText">Input Nama</label>
                <input class="form-control" id="exampleInputText"  name="nama" value=<?php echo $name;?>  type="text" placeholder="Input Nama">
              </div>
              <div class="form-group">
                <label class="form-label" for="inputDate">Tanggal Lahir</label>
                <input class="form-control"  name="tanggal_lhr"  value=<?php echo $tanggal;?> id="inputDate" type="date">
              </div>
              <div class="form-group">
                <label class="form-label" for="exampleInputText2">Tempat Lahir</label>
                <input class="form-control"  name="tempat_lahir" value=<?php echo $tempat;?> id="exampleInputText2" type="text" placeholder="tempat lahir">
              </div>
              <div class="form-group">
                <label class="form-label" for="exampleInputText38">Input Penghasilan</label>
                <input class="form-control"  name="penghasilan" value=<?php echo $penghasilan;?> id="exampleInputText38" type="text" placeholder="Input Penghasilan">
              </div>
			  <td><input type="hidden" name="id_nasabah" value=<?php echo $_GET['id'];?>></td>
              <button class="btn btn-primary w-100 d-flex align-items-center justify-content-center"  type="submit" name="update">Send
                <svg class="bi bi-arrow-right-short" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                </svg>
              </button>

            </form>
          </div>
		</div>
	</div>
	

	
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

    <!-- Footer Nav -->
    <div class="footer-nav-area" id="footerNav">
      
    </div>
    <!-- All JavaScript Files -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/slideToggle.min.js"></script>
    <script src="js/internet-status.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/rangeslider.min.js"></script>
    <script src="js/vanilla-dataTables.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/magic-grid.min.js"></script>
    <script src="js/dark-rtl.js"></script>
    <script src="js/active.js"></script>
    <!-- PWA -->
    <script src="js/pwa.js"></script>
</body>
</html>