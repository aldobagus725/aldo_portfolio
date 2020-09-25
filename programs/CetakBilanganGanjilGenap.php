<html>
    <head>
        <title>Ganjil Genap</title>
        <?php include 'subcss.php' ?>
    </head>
    <?php
    function cetakAngkaGanjilGenap1(){
        for($i=0;$i<=25;$i++){
            echo(($i%2)==0?"$i adalah Bilangan Genap <br>":"$i adalah Bilangan Ganjil <br>");
        }
    }
    function cetakAngkaGanjilGenap2(){
        for($i=26;$i<=50;$i++){
            echo(($i%2)==0?"$i adalah Bilangan Genap <br>":"$i adalah Bilangan Ganjil <br>");
        }
    }
    function cetakAngkaGanjilGenap3(){
        for($i=51;$i<=75;$i++){
            echo(($i%2)==0?"$i adalah Bilangan Genap <br>":"$i adalah Bilangan Ganjil <br>");
        }
    }
    function cetakAngkaGanjilGenap4(){
        for($i=76;$i<=100;$i++){
            echo(($i%2)==0?"$i adalah Bilangan Genap <br>":"$i adalah Bilangan Ganjil <br>");
        }
    }
    function analisisAngkaGanjilGenap($angka){
        echo(($angka%2)==0?"$angka adalah Bilangan Genap":"$angka adalah Bilangan Ganjil");
        }
    ?>
    <body>
        <?php include 'subheader.php' ?>
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col">
                        <form action="#" method="post">
                            <div class="card" style="width:100%">
                                <div class="card-header">
                                    <h4>Bilangan Ganjil Genap</h4>
                                </div>
                                <div class="card-body text-center">
                                    <h6>Berikut codingnya:</h6>
                                        <img src="/bpptik/assets/img/ganjilgenap.JPG">
                                    <br><br>
                                    <h6>Penentu Genap &amp; Ganjil:</h6>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Angka</span>
                                        </div>
                                        <input type="text" class="form-control" name="angka" style="width:50%;" required>
                                    </div>
                                    <?php
                                    if(isset($_POST['submit'])){
                                        echo "<div class=\"alert alert-primary\" role=\"alert\">";
                                        analisisAngkaGanjilGenap($_POST['angka']);
                                        echo "</div>";
                                        }
                                    ?>
                                </div>
                                <div class="card-footer">
                                    <center>
                                        <input type="submit" name="submit" class="btn btn-info" value="Panggil Fungsi & Analisis">
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>                
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card" style="width:100%">
                            <div class="card-header">
                                <h3>Hasil Operasi</h3><h5>Analisis angka 1 - 100</h5>
                            </div>
                            <div class="card-body text-center">
                                <center>
                                    <table class="table table-hover table-borderless">
                                        <tr>
                                            <td>
                                                <?php
                                                if(isset($_POST['submit'])){cetakAngkaGanjilGenap1();}
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($_POST['submit'])){cetakAngkaGanjilGenap2();}
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($_POST['submit'])){cetakAngkaGanjilGenap3();}
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if(isset($_POST['submit'])){cetakAngkaGanjilGenap4();}
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php include 'subjs.php' ?>
</html>