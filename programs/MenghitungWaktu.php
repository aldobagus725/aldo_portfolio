<html>
    <head>
        <title>Waktu</title>
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
                                    <h4>Program Menghitung Waktu Sederhana</h4>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Angka</span>
                                        </div>
                                        <input type="text" class="form-control" name="sekon" placeholder="angka dalam detik">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <center>
                                        <input type="submit" name="submit" class="btn btn-info" value="Hitung">
                                        <input type="reset" name="reset" class="btn btn-secondary" value="Hapus">
                                        <a href="MenghitungLuasSegitiga.php"><button class="btn btn-dark">Mulai Ulang Halaman</button></a>
                                    </center>
                                </div>
                            </div>
                        </form>
                        <?php
                            $sekon = 0;
                            /*
                                fungsi timeConvert, operasi konversi dari bentuk detik, ke format jam:menit:detik, ie:
                                60 sekon = 0 hours, 1 minutes, 0 seconds.
                            */
                            function timeConvert($sekon){
                                $hours = round($sekon / 3600);
                                $minutes = ($sekon / 60) % 60;
                                $second = $sekon % 60;
                                $hasil = $hours. " hours " .$minutes. " minutes and " .$second. " seconds" ;
                                return $hasil;
                            }
                            if(isset($_POST['submit'])){
                                $sekon=$_POST['sekon'];
                            }
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-7">
                        <div class="card" style="width:100%">
                            <div class="card-header">
                                <h3>Hasil Operasi</h3>
                            </div>
                            <div class="card-body">
                                <p>
                                    <?php 
                                        echo timeConvert($sekon);
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