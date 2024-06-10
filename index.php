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

  <script>
    $(document).ready(function(){
      $(".slider").bxSlider();
    });
  </script>
<style type="text/css">
*{margin: 0;padding: 0;}
.container{width: 900px;margin: auto;}
</style>

  <title>Perpustakaan Billi</title>
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

<div class="fContainer"></div> 
<div class="wrapper">
  <section id="home">
    <img src="./img/perpus.avif" alt="">
    <div class="kolom">
    <p class="deskripsi"> Selamat Datang di</p>
    <h2> Web Perpustakaan Billi</h2>
    <p class="deskripsi2"> Website ini dibuat untuk memenuhi tugas mata kuliah Pemerograman Web, Program Studi Perpustakaan dan Sains Informasi
      Fakultas Ilmu Budaya Sumatera Utara</p>
    <P>Nama: Billi Hosea Sembiring</P>
    <P>NIM: 210709043</P>
    <P>Dosen Pengampu: Himma Dewiyana, S.T., M.Hum.,</P>
    </div>
  </section>
</div>
 
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <tr>
            <th> Top Koleksi</th>
        </tr>
          <form class="d-flex" >
            <input
              class="form-control me-2 mt-4 shadow"type="search" placeholder="Pencarian Buku..." aria-label="Search" style="height: 30px; color: rgb(0, 0, 0);"/>
            <button class="btn1 bg-dark mt-4 shadow" type="submit" style="color: white;">
              Search
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="container  mt-5 margin-right mb-5">
    <div class="row">
    <div class="col-12 col-md-3 mb-3">
      <div class="card2 "  style="width: 18rem; border: 20px; margin: auto;">
        <img src="./img/1.jpg"  style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
        <div class="card-body">
          <h5 style="text-align: center;" >Filsafat Ilmu Sebuah Pengantar Populer</h5>
          <p class="pengarang text-center">Jujun S.Suriasumanti</p> 
          <p class="detaile"> Ilmu merupakan salah satu cabang pengetahuan yang berkembang pesat...</p>
            <a class="btn btn-primary" href="detail.html" role="button">Preview</a>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-3">
      <div class="card2 margin-top " style="width: 18rem;">
        <img src="./img/2.jpg"  style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
        <div class="card-body " >
          <h5 style="text-align: center;">Dasar-Dasar Ilmu perpustakaan dan Informasi</h5> 
           <p class="pengarang text-center">Jonner Hasugian</p>
           <p class="detaile">Buku ini membahas berbagai isu yang berkembang dalam institusi pengelola informasi ...</p>
            <a class="btn btn-primary" href="detail.html" role="button">Preview</a>
        </div>
      </div>
    </div>

  <div class="col-12 col-md-3">
    <div class="card2" style="width: 18rem;">
      <img src="./img/3.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Terampil Berbahasa Indonesia</h5>
        <p class="date text-center">Drs. Isma Tantawi,M.A.</p>
          <p class="detaile">Buku yang dapat meningkatkan kemampuan berbahasa indonesia dan terampil dalam menulis karya ilmiah... </p>
          <a class="btn btn-primary" href="detail.html" role="button">Preview</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3">
    <div class="card2" style="width: 18rem;">
      <img src="./img/4.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Perubahan Sosial</h5>
        <p class="date text-center">Jacobus Ranjabar, S.H.,M.Si.</p>
          <p class="detaile">Teori-teori perubahan sosial dan proses perubahan sosial... </p>
          <a class="btn btn-primary" href="detail.html" role="button">Preview</a>
      </div>
    </div>
  </div>

</div>
</div>



<section class="hero">
  &nbsp;
</section>

<footer >
  <div class="col-12 col-md-12 mt-5 " style="background: rgb(201, 140, 79)">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 mt-5">
                <h5>Perpustakaan Billi.</h5>
                <div class="socials">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
                <p>2024 copyright reserved &copy;</p>
            </div>
            <div class="col-12 col-md-3 mt-5">
                <h5>About</h5>
                <p>Blog</p>
                <p>Publish With Us</p>
            </div>
            <div class="col-12 col-md-3 mt-5">
               <h5>Help</h5>
               <p>Contact Us</p>
               <p>Helps</p>
               <p>Term and Conditions</p>
               <p>Privacy Policy</p>
           </div>
           <br>
           <div class="col-12 col-md-3 mt-5">
               <h5>Network</h5>
               <p>billilibrary@gmail.com</p>
           </div>
        </div>
    </div>
</div>
</div>
</footer>


</body>
</html>