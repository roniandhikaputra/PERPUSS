<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="POST">
        nama siswa :
        <input type = "text" name="nama siswa" value="" class="form-control">
        tanggal lahir :
        <input type = "date" name="tanggal_lahir" value="" class="form-control">
        Gender :
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        kelas :
        <select name="id_kelas" class="form-control">
        <option></option>
        <?php 
            include "koneksi.php";
                $qry_kelas=mysqli_query($koneksi,"select * from kelas");
                    while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
            }
            ?>
         </select>
            Username :
            <input type = "text" name = "username" value = "" class = "form=control">
            Password :
            <input type = "password" name ="password" value ="" class = "form-control">
            <input type = "submit" name ="simpan" value ="Tambah Siswa" class = "btn btn-primary">
    </form>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </div>        
</body>
</html>