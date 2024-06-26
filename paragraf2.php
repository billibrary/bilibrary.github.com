<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="externall - Copy.css">
  <script type="text/javascript" src="jquery.js"></script>
  <script>
    $(document).ready(function() {
      $("#judul").click(function(){
          $("p").slideUp();
      })
      $("#judul").dblclick(function(){
          $("p").slideDown();
      })
      $("#judul2").click(function(){
          $("p1").slideUp();
      })
      $("#judul2").dblclick(function(){
          $("p1").slideDown();
      })
  });
  </script>

  
  <title>Paragraf</title>
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
<div class="wrapper2">
  <section id="home" style=" margin: auto;
  display: flex;
  margin-bottom: 50px;">
    <img src="./img/html.avif" alt="" style="width: 440px;
    height: 440px;
    border: 2px;">
    <div class="kolom">
      <h1 id="judul">HTML dan CSS: Pengertian dan Perbedaan</h1>
      <p class="Paragraf">HTML dan CSS merupakan dua hal yang saling terkait dalam pembuatan sebuah website. Meskipun keduanya sering digunakan bersamaan, namun banyak juga orang yang belum mengetahui perbedaan antara keduanya. Jika kamu penasaran perbedaan dari kedua hal tersebut, maka kamu sudah berada di artikel yang tepat!</p>
      <p>HTML atau Hyper Text Markup Language adalah bahasa markup yang digunakan dalam pembuatan halaman website. Sementara itu, CSS atau Cascading Style Sheets adalah bahasa style sheet yang digunakan untuk memberikan tampilan atau style pada halaman website tersebut. Singkatnya, HTML digunakan untuk membuat struktur dan konten dari halaman website serta memasukkan gambar dan video, sedangkan CSS digunakan untuk memberikan tampilan yang menarik dan komunikatif pada halaman tersebut.</p>
      <p>Perbedaan antara HTML dan CSS yang jelas adalah dengan fungsinya. HTML digunakan untuk membuat konten dan struktur dari halaman website. Sementara itu, CSS digunakan untuk memberikan tampilan pada halaman website tersebut, baik itu warna, ukuran font, hingga margin dan padding. Oleh karena itu, HTML dan CSS menjadi sangat penting dalam pembuatan website sehingga perbedaan keduanya sangat perlu untuk diketahui.</p>
      <h2 id="judul2">HTML tag : Apa itu HTML dan CSS?</h2>
    <p1> HTML dan CSS adalah dua bahasa pemrograman yang sangat penting dalam pembuatan website. Keduanya memiliki perbedaan dan fungsi yang berbeda, meskipun keduanya digunakan secara bersama-sama untuk menghasilkan halaman web yang lebih menarik dan interaktif. Untuk memahami perbedaan antara HTML dan CSS, kita perlu memahami apa itu HTML dan CSS terlebih dahulu.</p>
    <p1>HTML (Hypertext Markup Language) adalah bahasa markup standar yang digunakan untuk membuat dan merancang halaman web. HTML digunakan untuk mengatur struktur dan konten halaman web, seperti memformat bagian teks, gambar, video, tabel, audio, dan elemen lainnya.</p>
    <p1>CSS (Cascading Style Sheets), di sisi lain, digunakan untuk mengontrol tampilan dan tata letak halaman web. CSS digunakan untuk mengubah warna, ukuran, jenis huruf, jarak, dan tingkat transparansi elemen pada halaman web. Dengan CSS, Anda dapat membuat halaman web lebih menarik secara visual dan mudah dibaca bagi pengguna.

    </p>
  
  </div>

  </section>

</div>
<br>
<br>

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