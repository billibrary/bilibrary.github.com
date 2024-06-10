<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="externall - Copy.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
  <title>form button</title>
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
  

  <center> <h1 style="font: bolder;" <b><head><tittle>Form Pendaftaran
	</tittle></head></b> </h1> </center>
	<form action="" method="post">
    <table>
        <tr>
            <td width="140">Nama</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password"></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><input type="number"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jk"> Laki-laki
                <input type="radio" name="jk"> Perempuan
            </td>
        <tr>
            <td>Stambuk</td>
            <td><select>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan">
                <input type="reset" value="Reset">
                <input type="button" value="Kembali">
            </td>
        </tr>

    </table>
</form>

<br>
<br>

<table class="table table-bordered">
  <thead>
  
  <tr>
      <th colspan="4"> Tabel Anggota Perpustakaan</th>
  </tr>
  <tr>
      <th> Id Anggota</th>
      <th> Nama</th>
      <th> Alamat</th>
      <th> No.Telp</th>
  </tr>
  <tr>
      <td>1212</td>
      <td>Ronaldo</td>
      <td>Riyadh</td>
      <td>08377262</td>
  </tr>
  <tr>
      <td> 1452</td>
      <td> Messi</td>
      <td> Miami</td>
      <td> 0987376312</td>
  </tr>
  <tr>
      <td> 1442</td>
      <td> Vini</td>
      <td> Madrid</td>
      <td> 09873526312</td>
  </tr>
  <tr>
      <td> 1431</td>
      <td> Antony</td>
      <td> Manchester</td>
      <td> 0652683</td>
  </tr>
  <tr>
      <td> 8902</td>
      <td> Jackson</td>
      <td> London</td>
      <td> 098625312</td>
  </tr>
  <tr>
      <td> 1432</td>
      <td> Maguire</td>
      <td> Manchester</td>
      <td> 035376312</td>
  </tr>
  <tr>
      <td> 3281</td>
      <td> Bellingham</td>
      <td> Madrid</td>
      <td> 03926312</td>
  </tr>
  <tr>
      <td> 8909</td>
      <td> Witan</td>
      <td> Jakarta</td>
      <td> 0882631221</td>
  </tr>
  <tr>
      <td> 2352</td>
      <td> Onana</td>
      <td> Manchester</td>
      <td> 8083626235</td>
  </tr>
  <tr>
      <td> 1234</td>
      <td> Mbappe</td>
      <td> Paris </td>
      <td> 0854376312</td>
  </tr>
</thead>


</table>



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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  document.addEventListener('DOMContentLoaded',() =>{
var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
if(disclaimer){
   disclaimer.remove();
}
});
</script>

</body>
</html>