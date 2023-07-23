<?php
// Create database connection using config file

require 'config.php';
$result = query("SELECT * FROM nasabah");
// Fetch all nasabahs data from database
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="solusi teknologi 2023">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>latihan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/proto.ico">
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
        <!-- # Paste your Header Content from here -->
        <!-- # Header Five Layout -->
        <!-- # Copy the code from here ... -->
        <!-- Header Content -->
        <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
        <div class="page-heading">
            <h2 class="mb-0">CRUD</h2>
          </div>
      </div>
    </div>
   
    <div class="page-content-wrapper">
      <div class="container">
    
        <div class="card">
          <div class="card-body">
            <table class="table mb-0">
            <a class="btn m-1 btn-sm btn-primary" href="add.php">tambah data</a>
              <thead>
                <tr>
                <th scope="col">No</th> 
                <th scope="col">Nama</th> 
                <th scope="col">tanggal_lhr</th> 
                <th scope="col">tempat_lahir</th> 
                <th scope="col">penghasilan</th> 
                <th scope="col">Update</th>

                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>
                <?php foreach( $result as $row ) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td scope="row"><?= $row["nama"]; ?></td>
                    <td scope="row"><?= $row["tanggal_lhr"]; ?></td>
                    <td scope="row"><?= $row["tempat_lahir"]; ?></td>
                    <td scope="row"><?= $row["penghasilan"]; ?></td>
                    <td scope="row" class="aksi">
                        
                        <a class="btn m-1 btn-sm btn-danger" href="edit.php?id=<?= $row["id_nasabah"]; ?>">ubah</a> |
                        <a class="btn m-1 btn-sm btn-secondary" href="delete.php?id=<?= $row["id_nasabah"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                    </td>
                    
                </tr>
                <?php $i++;?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="pb-3"></div>
    </div>
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






