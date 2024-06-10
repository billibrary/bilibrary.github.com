<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="externall - Copy.css">
   
	<title> Formulir Perpanjangan Buku </title>
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
	
			
<br>
<br>
	  <h2 align="center" style="font-family: cursive;">Tabel Bahan Buku</h2>
	  <table border="1">
		  <tr style="font-family: cursive;">
			  <td style="text-align:center"> <b> Judul </b> </td>
			  <td style="text-align:center"> <b> No. Akses </b> </td>
			  <td style="text-align:center"> <b> No. Panggil </b> </td>
			  <td style="text-align:center"> <b> Pengarang </b> </td>
			  <td style="text-align:center"> <b> Subjek </b> </td>
			  <td style="text-align:center"> <b> Nama Penerbit </b> </td>
			  <td style="text-align:center"> <b> Tahun Terbit </b> </td> 
		  </tr>
	  
		  <tr style="font-family: cursive;">
			  <td> BIBLIOMETRIKA </td>
			  <td> 189839737 </td>
			  <td> 029 Jon b </td>
			  <td> Jonner Hasugian </td>
			  <td> Library Science </td>
			  <td> USU Press </td>
			  <td> 2020 </td>
		  </tr>
		  </table>
<br>
<br>
		  <head style="font-family: cursive;">
			<h2 align="center" style="font-family: cursive;"> Pemesanan buku</h2>
		</form action="contatct.php" method="POST">
		<fieldset>
		<legend> </legend>
		<p style="font-family: cursive;">
			<label> Nama Pengguna : </label>
			<input type="text" name="name"/>
		</p>
		<p style="font-family: cursive;">
			<label> Tanggal Pemesanan : </label>
			<input type="date" name="tanggal"/>
		</p>
		<p style="font-family: cursive;">
			<label> Alamat : </legend>
			<input type="text" name="name"/>
		</p>
		<p style="font-family: cursive;">
			<label> Judul Buku : </label>
			<input type="text" name="name"/>
		</p>
		<p style="font-family: cursive;">
			<label> Pengarang : </label>
			<input type="text" name="name"/>
		</p>
		<p style="font-family: cursive;">
			<label> Jumlah Buku : </label>
			<input type="text" name="name"/>
		</p>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan">
				<input type="reset" value="Reset">
				<input type="button" value="Kembali">
			</td>
		</tr>
		</fieldset>
	</form>
	
	<br>
	<br>

<h2 align="center" style="font-family: cursive;">  Perpanjangan Masa Pinjam </h2>
	<p style="font-family: cursive;"> Pengajuan Perpanjangan Masa Pinjam Buku secara online hanya akan dilayani apabila dilakukan pada hari dan jam kerja (Senin s.d Jumat pukul 08.00-15.30), peminjaman belum melebihi tenggat waktu pengembalian, serta hanya dapat dilakukan satu kali di setiap peminjaman untuk buku yang sama. </p>
	
	 <form action="contact.php" method="POST">
        <fieldset>
        <p style="font-family: cursive;">
            <label style="font-family: cursive;"> Member ID :</label>
            <input type="text" name="name"/>
        </p>
		<p style="font-family: cursive;">
            <label> Kode Eksemplar :</label>
            <input type="text" name="name"/>
        </p>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan">
				<input type="reset" value="Reset">
				<input type="button" value="Kembali">
			</td>
		</tr>
		 </fieldset>
		</table>

	

</head>
<br>
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
