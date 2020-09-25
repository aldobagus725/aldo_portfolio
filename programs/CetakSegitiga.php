<html>
    <head>
        <title>Ganjil Genap</title>
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
                                <h4>Cetak Segitiga</h4>
                            </div>
                            <div class="card-body text-center">
                                <h6>Berikut codingnya:</h6>
                                    <img src="/bpptik/assets/img/ganjilgenap.JPG">
                                <br><br>
                                <h6>Angka:</h6>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Angka Pembentuk Segitiga</span>
                                    </div>
                                    <input type="text" class="form-control" name="angka" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <center>
                                    <input type="submit" name="submit" class="btn btn-info" value="Panggil Fungsi">
                                </center>
                            </div>
                        </div>
                    </form>
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
                        <div class="card-body text-center">
                                <?php
                                if(isset($_POST['submit'])){
                                    for($i=0;$i<=$_POST['angka'];$i++){
                                        for($j=1;$j<=$i;$j++){
                                            echo "*";
                                        }
                                        echo "<br>";
                                    }
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