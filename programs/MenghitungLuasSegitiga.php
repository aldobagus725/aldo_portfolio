<html>
    <head>
        <title>Segitiga</title>
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
                                    <h4>Program Menghitung Luas Segitiga Sederhana</h4>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Alas Segitiga</span>
                                        </div>
                                        <input type="text" class="form-control" name="alas">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Tinggi Segitiga</span>
                                        </div>
                                        <input type="text" class="form-control" name="tinggi">
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
                            $alas = 0;
                            $tinggi = 0;
                            function luasSegitiga($alas,$tinggi){
                                $hasil = ($alas * $tinggi) / 2;
                                return $hasil;
                            }
                            if(isset($_POST['submit'])){
                                $alas=$_POST['alas'];
                                $tinggi=$_POST['tinggi'];
                            }
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="card" style="width:100%">
                            <div class="card-header">
                                <h3>Hasil Operasi</h3>
                            </div>
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td>Alas</td>
                                        <td>: <?php echo $alas;?> cm </td>
                                    </tr>
                                    <tr>
                                        <td>Tinggi</td>
                                        <td>: <?php echo $tinggi;?> cm </td>
                                    </tr>
                                    <tr>
                                        <td>Luas Segitiga</td>
                                        <td>: <?php echo luasSegitiga($alas,$tinggi);?> cm2</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php include 'subjs.php' ?>
</html>