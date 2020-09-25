<html>
    <head>
        <title>Data Faker</title>
<?php include 'subcss.php' ?>
    </head>
    <body>
<?php include 'subheader.php' ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="#" method="post">
                        <div class="card" style="width:100%">
                            <div class="card-header">
                                <h4>Data Faker</h4>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Jumlah Data Fake</span>
                                    </div>
                                    <input type="text" class="form-control" name="angka" placeholder="Jumlah Data fake yang akan dibuat">
                                </div>
                            </div>
                            <div class="card-footer">
                                <center>
                                    <input type="submit" name="submit" class="btn btn-info" value="Hitung">
                                    <input type="reset" name="reset" class="btn btn-secondary" value="Hapus">
                                    <a type="button" class="btn btn-dark" href="DataFaker.php">Mulai Ulang Halaman</a>
                                </center>
                            </div>
                        </div>
                    </form>
                    <?php
                        require_once ('vendor/autoload.php');
                        use Faker\Factory;
                        $angka=0;
                        function fakeData($angka){
                            for($a=0; $a<=$angka; $a++){
                                $faker=Factory::create('id_ID');
                                echo 
                                    "
                                    <tr>
                                    <td>$faker->name</td>
                                    <td>$faker->address</td>
                                    <td>$faker->email</td>
                                    <td>$faker->phoneNumber</td>
                                    <td>$faker->nik</td>
                                    </tr>
                                    ";
                            }
                        }
                        if(isset($_POST['submit'])){
                            $angka=$_POST['angka'];
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card" style="width:100%">
                        <div class="card-header">
                            <h3>Hasil Operasi</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-borderless">
                                <tr>
                                    <th>Nama</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>NIK</th>
                                </tr>
                                    <?php 
                                        echo fakeData($angka);
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