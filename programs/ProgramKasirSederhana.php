<html>
    <head>
        <title>Kasir</title>
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
                                    <h3>Program Kasir Sederhana</h3>
                                    <h5>(Up to 3 items only)</h5>
                                    <h6>15% discount if price is higher than Rp 75,000</h6>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Nama Item 1</span>
                                        </div>
                                        <input type="text" class="form-control" name="namaItem1" placeholder="i.e. pensil 2b">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Harga Rp</span>
                                        </div>
                                        <input type="text" class="form-control" name="hargaItem1" placeholder="i.e 20000">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Nama Item 2</span>
                                        </div>
                                        <input type="text" class="form-control" name="namaItem2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Harga Rp</span>
                                        </div>
                                        <input type="text" class="form-control" name="hargaItem2">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Nama Item 3</span>
                                        </div>
                                        <input type="text" class="form-control" name="namaItem3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Harga Rp</span>
                                        </div>
                                        <input type="text" class="form-control" name="hargaItem3">
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
                            $item1 = 0;
                            $item2 = $item1;
                            $item3 = $item2;
                            $namaItem1 = "N/A";
                            $namaItem2 = $namaItem1;
                            $namaItem3 = $namaItem2;
                        /*
                            fungsi hitungHarga, operasi menghitung total harga dari item yang diinputkan
                        */
                            function hitungHarga($item1, $item2, $item3){
                                $hasil = $item1 + $item2 + $item3;
                                if ($hasil >= 75000){
                                    $hasil += ($hasil * 0.15);
                                    return $hasil;
                                }
                                else{
                                    return $hasil;
                                }
                            }
                            if(isset($_POST['submit'])){
                                $item1=$_POST['hargaItem1'];
                                $item2=$_POST['hargaItem2'];
                                $item3=$_POST['hargaItem3'];
                                $namaItem1=$_POST['namaItem1'];
                                $namaItem2=$_POST['namaItem2'];
                                $namaItem3=$_POST['namaItem3'];
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card" style="width:100%">
                            <div class="card-header">
                                <h3>Hasil Hitung</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <tr>
                                        <th></th>
                                        <th>Nama Item</th>
                                        <th>Harga</th>
                                    </tr>
                                    <tr>
                                        <td>Item 1</td>
                                        <td><?php echo $namaItem1;?></td>
                                        <td><?php echo $item1;?></td>
                                    </tr>
                                    <tr>
                                        <td>Item 2</td>
                                        <td><?php echo $namaItem2;?></td>
                                        <td><?php echo $item2;?></td>
                                    </tr>
                                    <tr>
                                        <td>Item 3</td>
                                        <td><?php echo $namaItem3;?></td>
                                        <td><?php echo $item3;?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Total Harga</td>
                                        <td>Rp<?php echo hitungHarga($item1, $item2, $item3);?></td>
                                    </tr>
                                    <?php
                                        if (($item1+$item2+$item3)>=75000){
                                            echo"<tr>";
                                            echo"<td colspan=3><center><h2>YEAY! DISKON 15%</h2></center></td>";
                                        }
                                    ?>
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