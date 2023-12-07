<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-light ">
                <span class="navbar-brand mb-0 h1 text-dark ">Pancasila</span>
                <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link disabled text-dark" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled text-dark" href="tentang.php">TENTANG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled text-dark" href="berita.php">BERITA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled text-dark" href="galeri.php">TOKOH</a>
            </li>
                 <li class="nav-item">
                <a class="nav-link disabled text-dark" href="kontak.php">KONTAK</a>
            </li>
                </ul>
            </nav>
<div class="container">
    <h1>Daftar Tamu</h1>

    <form action ="" method="POST" name ="penjualan">
        
  <div class="form-group">
    <label for="nm">Nama </label>
    <input type="text" class="form-control" id="nm" name="nm" Required>
  </div>
  <div class="form-group">
    <label for="kelas">kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas" Required>
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" Required>
  </div>
  <!-- <div class="form-group">
    <label for="diskon">Diskon</label>
    <input type="text" class="form-control" id="diskon" name="diskon" Required>
  </div>
  <div class="form-group">
    <label for="jml_barang">Jumlah Barang</label>
    <input type="number" class="form-control" id="jml_barang" name="jml_barang" Required>
  </div> -->
  <button type="submit" name="submit" class="btn btn-primary">Sumbit</button>
  
</form>

<hr>
    <?php
    if(isset($_POST['submit'])){
      $nama =$_POST['nm'];
      $kelas =$_POST['kelas'];
      $jurusan =$_POST['jurusan'];

    
    
    ?>
     <div class="container">

            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Kelas</th>
                        <th scope='col'>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $kelas ?></td>
                        <td><?php echo $jurusan ?></td>
                        
                    </tr>

                </tbody>
            </table>

    </div>
    <?php } ?>
    </div>
</body>
</html>