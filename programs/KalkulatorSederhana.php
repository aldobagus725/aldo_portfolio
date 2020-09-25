<html>
    <head>
        <title>Kalkulator Sederhana</title>
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
                                <h1>Kalkulator Sederhana</h1>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Bilangan 1</span>
                                    </div>
                                    <input type="text" class="form-control" name="angka1" style="width:50%;" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Bilangan 2</span>
                                    </div>
                                    <input type="text" class="form-control" name="angka2" style="width:50%;" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="submit" class="btn btn-primary" value="Hitung">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h2>Hasil Operasi</h2>
                        </div>
                        <div class="card-body">
                        <?php
                            /*
                                Pada bagian php ini, saya membuat php membaca jika ada request POST
                                pada form action diatas yang dikirim dari tombol "submit",
                                maka php akan menangkap variable "angka1" & "angka2".
                            */
                          if(isset($_POST['submit'])){
                             $angka1=$_POST['angka1'];
                             $angka2=$_POST['angka2'];
                            /*
                                Setelah itu, saya tampung variable angka dari HTML ke dalam variabel php $angka1 &angka2
                                Selanjutnya, saya membuat fungsi 4 operasi aritmatika, yaitu penjumlahan, pengurangan,
                                perkalian, dan pembagian.
                            */
                              function penjumlahan($a, $b){//pada fungsi ini, saya berikan parameter $a & $b agar dapat memasukkan angka yang diinputkan user
                                  $hasil = $a + $b;// variable $a & $b diterima, ditampung hasil operasi ke variable $hasil
                                  return $hasil;// lalu di kembalikan untuk di cetak nanti.
                              }
                              //selebihnya sama untuk 3 fungsi berikutnya
                              function pengurangan($a, $b){
                                  $hasil = $a - $b;
                                  return $hasil;
                              }
                              function perkalian($a, $b){
                                  $hasil = $a * $b;
                                  return $hasil;
                              }
                              /*pada pembagian, saya mencoba melakukan error handling karena jika angka pembagi adalah 0, maka hasilnya tidak terdefinisi*/
                              function pembagian($a, $b){
                                  try{
                                      $hasil = intdiv($a, $b);
                                      return $hasil;
                                  }
                                  catch(Error $error){
                                      echo $error->getMessage();
                                  }
                                  
                              }
                              echo "Bilangan 1 : $angka1";echo "<br>";
                              echo "Bilangan 2 : $angka2";echo "<br>";
                              echo "<br>";
                              /*
                                Hasil operasi bisa langsung didapatkan dengan memanggil nama fungsi, dan memberikan parameter yang diperlukan.
                                Parameter yang diberikan adalah dua angka yang sudah ditangkap tadi, yaitu $angka1 & $angka2.
                              */
                              echo "Hasil Penjumlahan adalah : ". penjumlahan($angka1,$angka2);echo "<br>";
                              echo "Hasil Pengurangan adalah : ". pengurangan($angka1,$angka2);echo "<br>";
                              echo "Hasil Perkalian adalah : ". perkalian($angka1,$angka2);echo "<br>";
                              echo "Hasil Pembagian adalah : ". pembagian($angka1,$angka2);echo "<br>";
                           }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
        <?php include 'subjs.php' ?>
</html>