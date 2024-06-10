<!DOCTYPE html>
<html lang="en">
<head>
   
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="externall - Copy.css">
  <script src="https://kit.fontawesome.com/f9355065a6.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bxslider@4.2.17/dist/jquery.bxslider.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bxslider@4.2.17/dist/jquery.bxslider.min.js"></script>
    <style>
        .hari {
            margin-bottom: 10px;
            font-family:monospace;
        }
        p {
            font-size: 30px;
        }
    </style>

</head>
<body>
<div class="menu_bar">
    <h1 class="logo">Perpustakaan <span>Billi.</span></h1>

    <ul>
    <li><a href="index.php">Beranda</a></li>
    <li><a href="#">Profil <i class="fas fa-caret-down"></i></a>
        <div class="dropdown4">
          <ul>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
    <li><a href="#">Layanan <i class="fas fa-caret-down"></i> </a>
        <div class="dropdown4">
          <ul>
            <li><a href="data.php">Data Anggota</a></li>
            <li><a href="data.php">Perhitungan</a></li>
            <li><a href="no1.php">Belajar PHP</a></li>
            <li><a href="Form.php">Daftar Anggota</a></li>
            <li><a href="perpanjang.php">Perpanjang Koleksi</i></a></li>
          </ul>
        </div>
      </li>
    <li><a href="koleksi.php">Koleksi</a></li>
    <li><a href="paragraf2.php">Paragraf</a></li>
    <li><a href="login.php">Login</a></li>
    </ul>
  </div>
<p>Modul 7 No. 1</p>
<br>
    <?php
    for ($i = 1; $i <= 1000; $i++) {
        echo "<div class='hari'>Ini adalah hari ke-$i belajar PHP</div>";
    }
    ?>
</body>
</html>