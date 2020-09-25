<html>
    <head>
        <title>Pasien</title>
        <?php include 'subcss.php' ?>
    </head>
    <body>
    <?php include 'subheader.php' ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="#" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h1>Daftar Pasien Rawat Jalan</h1>                           
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Nama Pasien</span>
                              </div>
                              <input type="text" class="form-control" name="namaPasien">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Nomor Rekam Medis</span>
                              </div>
                              <input type="text" class="form-control" name="medRecordNumber">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Biaya Pendaftaran Pasien</span>
                              </div>
                              <input type="text" class="form-control" name="biayaDaftarPasien">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Biaya Pemeriksaan Pasien</span>
                              </div>
                              <input type="text" class="form-control" name="biayaPeriksaPasien">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Poli</span>
                              </div>
                              <select name="poli" class="custom-select">
                                <option value="Umum">Umum</option>
                                <option value="THT">THT</option>
                                <option value="Anak">Anak</option>
                                <option value="Gigi">Gigi</option>
                              </select>
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Tanggal Pemeriksaan</span>
                              </div>
                              <input type="date" class="form-control" name="dateCheck">
                            </div>
                            <div class="d-flex d-row">
                                <div class="p-2">
                                    <h6>Jenis Pembayaran:</h6>
                                </div>
                                <div class="p-2">
                                    <input type="radio" name="paymentMethod" value="Umum"> Umum
                                    <input type="radio" name="paymentMethod" value="BPJS"> BPJS
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" class="btn btn-info" value="Daftar">
                            <input type="reset" name="reset" class="btn btn-secondary" value="Clear Form">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Hasil</h5>               
                        </div>
                        <div class="card-body">
                        <?php
                            //Fungsi untuk menghitung total bayar
                            function totalBayar($biayaDaftarPasien, $biayaPeriksaPasien){
                                return $biayaDaftarPasien+$biayaPeriksaPasien;
                            }
                            $data ="rekampasien.json";
                            $pasien = array();
                            $dataJson = file_get_contents($data);
                            $pasien = json_decode($dataJson, true); 
                            if(isset($_POST['submit'])){
                                $dataBaru = array(
                                    'namaPasien' => $_POST['namaPasien'],
                                    'medRecordNumber' => $_POST['medRecordNumber'],
                                    'biayaDaftarPasien' => $_POST['biayaDaftarPasien'],
                                    'biayaPeriksaPasien' => $_POST['biayaPeriksaPasien'],
                                    'poli' => $_POST['poli'],
                                    'tanggalPemeriksaan' => $_POST['dateCheck'],
                                    'paymentMethod' => $_POST['paymentMethod']
                                );
                                $pasien[] = $dataBaru;
                                $dataJson = json_encode($pasien, JSON_PRETTY_PRINT);
                                file_put_contents($data, $dataJson);
                            }
                            ?>
                        <table class="table table-hover">
                            <tr>
                                <!-- Tabel Pasien -->
                                <th style="font-weight:bold;">Nama Pasien</th>
                                <th style="font-weight:bold;">Nomor Rekam Medis</th>
                                <th style="font-weight:bold;">Biaya Daftar Pasien</th>
                                <th style="font-weight:bold;">Biaya Pemeriksaan Pasien</th>
                                <th style="font-weight:bold;">Poli</th>
                                <th style="font-weight:bold;">Tanggal Pemeriksaan</th>
                                <th style="font-weight:bold;">Metode Pembayaran</th>
                                <th style="font-weight:bold;">Total Biaya</th>
                            </tr>
                                <?php
                                //	perulangan untuk menampilkan data pasien
                                for ($i=0; $i < count($pasien); $i++){
                                //	Memindahkan data dari array $pasien ke variabel baru.
                                    $namaPasien = $pasien[$i]['namaPasien'];
                                    $medRecordNumber = $pasien[$i]['medRecordNumber'];
                                    $biayaDaftarPasien = $pasien[$i]['biayaDaftarPasien'];
                                    $biayaPeriksaPasien = $pasien[$i]['biayaPeriksaPasien'];
                                    $poli = $pasien[$i]['poli'];
                                    $dateCheck = $pasien[$i]['tanggalPemeriksaan'];
                                    $paymentMethod = $pasien[$i]['paymentMethod']; 
                                    echo "<tr> 
                                        <td>".$namaPasien."</td>
                                        <td>".$medRecordNumber."</td>
                                        <td>".$biayaDaftarPasien."</td>
                                        <td>".$biayaPeriksaPasien."</td>
                                        <td>".$poli."</td>
                                        <td>".$dateCheck."</td>
                                        <td>".$paymentMethod."</td>
                                        <td>".totalBayar($biayaDaftarPasien, $biayaPeriksaPasien)."</td>
                                        </tr>";
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php include 'subjs.php' ?>
</html>