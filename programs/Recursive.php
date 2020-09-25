<html>
    <head>
        <title>Recursive</title>
        <?php include 'subcss.php' ?>
    </head>
    <body>
        <?php include 'subheader.php' ?>
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col">
                        <form action="#" method="post">
                            <div class="card" style="width:100%">
                                <div class="card-header">
                                    <h4>Recursive Function : Cetak Angka</h4>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Angka</span>
                                        </div>
                                        <input type="text" class="form-control" name="angka" placeholder="angka">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <center>
                                        <input type="submit" name="submit" class="btn btn-info" value="Hitung">
                                        <input type="reset" name="reset" class="btn btn-secondary" value="Hapus">
                                        <a href="Recursive.php"><button class="btn btn-dark">Mulai Ulang Halaman</button></a>
                                    </center>
                                </div>
                            </div>
                        </form>
                        <?php
                            $angka=0;
                            function angkaRekursif($number){    
                                if($number<=10){    
                                    echo "$number <br/>";    
                                    angkaRekursif($number+1);    
                                }
                            }
                            if(isset($_POST['submit'])){
                                $angka=$_POST['angka'];
                            }
                        ?>    
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <center><h3>Here is Recursive Function!</h3></center>
                            </div>
                            <div class="card-body">
                                <center><img src="/bpptik/assets/img/rekursif.JPG"></center>
                            </div>
                            <div class="card-footer">
                                <p class="card-text">
                                    Syntax ini bisa ditemukan pada "Recursive.php".
                                    Letak syntax ini persis dibawah penghitung dan diatas hasil operasi di dalam
                                    file.php. Nama fungsi ini adalah angkaRekurisf, sebuah recursive function
                                    yang fungsinya mencetak angka berurutan dari 0 - 10. 
                                    Bisa dilihat bahwa memanggil kembali dirinya sendiri, fungsi ini
                                    secara tidak langsung menciptakan perulangan, dengan kondisi $number
                                    lebih kecil sama dengan 10.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="card" style="width:100%">
                            <div class="card-header">
                                <h3>Hasil Operasi</h3>
                            </div>
                            <div class="card-body">
                                <p>
                                    <?php 
                                        echo angkaRekursif($angka);
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php include 'subjs.php' ?>
</html>