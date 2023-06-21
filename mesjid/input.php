<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Bantuan Shodaqoh</title>
</head>
<body>
    
    <div class="container">

<div class="row">
    <div class="col-md-4 offset-md-4">

        <div class="card mt-5">
            <div class="card-title text-center">
                <h1>Beri Bantuan Shodaqoh</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="number" name="donaturid" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="paket">Paket</label>
                        <select name="paket" class="form-control" >
                        <option value="Pilih">Pilih salah satu!</option>
                        <option value="Paket 1">Paket 1</option>
                        <option value="Paket 2">Paket 2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control" >
                        <option value="Pilih">Pilih salah satu!</option>
                        <option value="Uang">Uang</option>
                        <option value="Barang">Barang</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nominal">Nominal/Barang</label>
                        <input type="text" name="nominal" class="form-control" >
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                </form>

                <?php   
                if(isset($_POST['submit'])){
                include "koneksi.php";

                $matematika=$_POST['nama'];
                $pipas=$_POST['donaturid'];
                $sejarah =$_POST['paket'];
                $produktif=$_POST['kategori'];
                $bahasaindonesia=$_POST['nominal'];


                if($_POST["nama"] == null){
                    echo "Isi Dulu Datanya !";
                    die;
                }
                $sql="INSERT INTO `donatur`(`nama`,`donaturid`, `paket`, `kategori`, `nominal`) VALUES ('$_POST[nama]','$_POST[donaturid]','$_POST[paket]','$_POST[kategori]','$_POST[nominal]')";
                $apakah=mysqli_query($conn,$sql);
                    echo "<br>";
                    if($apakah){
                        echo "<script>alert('Berhasil mengirim!');window.location = 'index.php';</script>";
                    }  
                }
                ?>

            </div>
        </div>
    </div>

</div>

</div>
</body>
</html>