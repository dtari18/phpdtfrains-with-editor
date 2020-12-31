<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="PHP Framework Installer for Free Hosting. You can easy use it!">
  	<meta name="keywords" content="PHP Framework Installer for Free Hosting">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Dwi Ayu Lestari (@dtari18)">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>PHP Framework Installer</title>
     <style type="text/css">
      .footerteks1{
        color:white;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a href="index.php" class="navbar-brand">PFI</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="howto.php">How to?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editor.php">Teks Editor</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
  <br/>
  <div class="jumbotron">
  <h1 class="display-5" align="center">SOLUSI UNTUK PHP FRAMEWORK KHUSUS HOSTING GRATIS</h1>
  <p class="lead" align="center">Selamat datang di website Upload Helper dan Installer Framework Web</p>
  <p class="lead" align="center">Website Bantuan dalam Upload Project File atau PHP Framework Installer khusus Hosting Gratis</p>
  <hr class="my-4">
  <p>Silahkan menggunakan aplikasi web ini sebagai solusi dalam melakukan upload file atau project dengan batasan yang telah
  ditentukan oleh pihak hosting melalui php.ini. Situs ini juga bisa memasang web berbasis framework seperti CodeIgniter atau
   Laravel.</p>
  <a class="btn btn-primary btn-lg" href="https://github.com/dtari18/phpdtfrains" target="_blank" role="button"><i class="fas fa-users"></i>&nbsp;Github</a>
</div>
</div>
<hr/>
<center><h3>Pilihan Fitur : </h3>
<h3>Versi PHP untuk Saat ini : <?php echo phpversion(); ?></h3></center><br/>

<div class="container">
  <?php
  if(isset($_GET['tipe'])){
    $tipe     = $_GET['tipe'];
    $hasil    = $_GET['hasil'];
    $isitipe  = array('','Upload Project Website Anda ','Pembuatan Project Website Baru Anda ');
    $isihasil = array('','berhasil.','gagal.');
    $linkhasil = array('',' Silahkan melihat project di File Manager yang terdapat Control Panel di hosting masing-masing','Silahkan melihat project di File Manager yang terdapat Control Panel di hosting masing-masing');
    $isialert = array('','alert alert-success','alert alert-danger');
    ?>
      <div class="<?php echo $isialert[$hasil]; ?>" role="alert">
      <p align="center"><?php echo $isitipe[$tipe] . $isihasil[$hasil]; ?></p>
      
      </div>
    <?php
  }
  ?>  
  <div class="card-deck">
  <div class="card" >
  <form action="proses.php" method="post" enctype="multipart/form-data">
    <div class="card-body">
      <h5 class="card-title">Upload Project&nbsp;</h5>
      <p class="card-text">Gunakan fitur ini untuk mengupload project web yang kamu miliki baik itu native
       atau framework.</p>
       <p class="card-text">Perhatian!<br>Jika project website ada komponen atau library yang integrasi dengan Composer, pasangkan Composer terlebih dahulu bagi yang belum ada Composer di hosting atau VPS agar project website bisa berjalan dengan baik.</p>
      <div class="form-group">
      <label for="exampleInputEmail1">File Project :</label>
      <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile" name="fileproject" accept=".zip,.rar" required>
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
  </div>
        <input type="hidden" name="proses" value="1" />
      <button class="btn btn-primary" type="submit"><i class="fas fa-upload"></i>&nbsp;Upload</button>
    </div>
    <div class="card-footer">
      <small class="text-muted">Fitur ini digunakan untuk upload project yang ada.</small>
    </div>
  </div>
  </form>
  
  <div class="card">
  <form action="proses.php" method="post" enctype="multipart/form-data">
     <div class="card-body">
      <h5 class="card-title">Install PHP Framework&nbsp;</h5>
      <p class="card-text">Gunakan fitur ini untuk memasang project baru dengan menggunakan
      web berbasis framework.</p>
      <p class="card-text">Perhatian!<br>Ada beberapa PHP Framwork yang mengharuskan integrasi dengan Composer, pasangkan Composer terlebih dahulu bagi yang belum ada Composer di hosting atau VPS agar project website bisa berjalan dengan baik.</p>
      <div class="form-group">
      <label for="exampleInputEmail1">Framework Web : </label>
      <select name="framework" class="form-control" required>
        <option value="">--Silahkan Pilih--</option>
        <option value="1">Codeigniter 3</option>
        <option value="2">Codeigniter 4 (PHP 7 Recommended)</option>
        <option value="3">Laravel (PHP 7 Recommended)</option>
        <option value="4">CakePHP</option>
        <option value="5">Zend</option>
        <option value="6">Drupal 9</option>
        <option value="7">Joomla 3</option>
        <option value="8">Slim 4 (PHP 7 Recommended)</option>
        <option value="9">Slim 3</option>
        <option value="10">Yii</option>
      </select>
        </div>
        <input type="hidden" name="proses" value="2" />
      <button class="btn btn-info"><i class="fas fa-download" type="submit"></i>&nbsp;Pasang</button>
        </div>
        <div class="card-footer">
      <small class="text-muted">Fitur ini digunakan untuk memasang project web baru.</small>
        </div>
        </div>
        </form>
        </div>
    </div>
<br/><br/><br/><br/><br/>

</div>
<footer id="sticky-footer" class="py-4 bg-info text-white-50">
    <div class="container text-center">
      <small class="footerteks1">Copyright 2020 &copy; PHP Framework Installer Versi 0.1, Developed By Dwi Ayu Lestari</small>
    </div>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <script type="text/javascript">
      $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
      </script>
  </body>
</html>