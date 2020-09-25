<html>
    <head>
        <title>PwdGen</title>
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
                                    <h4>Password Generator</h4>
                                    <h6>Please to fill or choose the details below:</h6>
                                </div>
                                <div class="card-body">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Nama Lengkap</span>
                                        </div>
                                        <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap anda">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Nomor Telepon</span>
                                        </div>
                                        <input type="text" class="form-control" name="phone" placeholder="Nomor Telepon anda">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Email</span>
                                        </div>
                                        <input type="email" class="form-control" name="email" placeholder="Email anda">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Panjang Karakter Password</span>
                                        </div>
                                        <input type="text" class="form-control" name="pwdLength" placeholder="i.e. 8, 10, 32">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Jumlah Kombinasi Password</span>
                                        </div>
                                        <input type="text" class="form-control" name="pwdObject" placeholder="i.e. 5">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Kekuatan Password</span> 
                                        </div>
                                        <div class="d-flex flex-row rounded">
                                            <div class="p-2 rounded">
                                              <select name="passStrength" class="custom-select">
                                                <option value="LOW">LOW</option>
                                                <option value="MEDIUM">MEDIUM</option>
                                                <option value="HIGH">HIGH (unavailable)</option>
                                              </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" name="remember" required> Saya Setuju untuk memberikan informasi pribadi di website ini tanpa paksaan..
                                          <div class="valid-feedback">Valid.</div>
                                          <div class="invalid-feedback">Check this checkbox to continue.</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <center>
                                        <input type="submit" name="submit" class="btn btn-info" value="Hitung">
                                        <input type="reset" name="reset" class="btn btn-secondary" value="Hapus">
                                    </center>
                                </div>
                            </div>
                        </form>
                        <?php
                            require_once ('vendor/autoload.php');
                            $fullname = "John Doe";
                            $phone = "08123642113";
                            $email ="johndoe@gmail.com";
                            $pwdLength = 10;
                            $pwdObject = 3;
                            $passStrength = "LOW";
                            
                        
                            function bioData($fullname, $phone, $email, $passStrength){
                                echo $fullname . "<br>";
                                echo $phone . "<br>";
                                echo $email . "<br>";
                                if (strcmp($passStrength,"HIGH")==0){
                                    echo $passStrength . "(High is currently unavailable at the momoent. Switching to medium...)<br>";
                                }
                                else{
                                    echo $passStrength . "<br>";
                                }   
                            }
                            
                            function pwdGen($phone, $email, $pwdLength, $pwdObject, $passStrength, $fullname){
                                $factory = new RandomLib\Factory;
                                $low = $factory->getLowStrengthGenerator();
                                $medium = $factory->getMediumStrengthGenerator();
                                $fullnamenowh = str_replace(' ', '', $fullname);
                                $char = $phone . $email . $fullnamenowh;
                                for($a=0; $a<=$pwdObject; $a++){
                                    if(strcmp($passStrength,"LOW") == 0){
                                        echo "<ul>";
                                        echo "<li>" . $low->generateString($pwdLength, $char) . "</li>";
                                        echo "</ul>";
                                    }
                                    else if (strcmp($passStrength,"MEDIUM") == 0){
                                        echo "<ul>";
                                        echo "<li>" . $medium->generateString($pwdLength, $char) . "</li>";
                                        echo "</ul>";
                                    }
                                    else if (strcmp($passStrength,"HIGH") == 0){
                                        echo "<ul>";
                                        echo "<li>" . $medium->generateString($pwdLength, $char) . "</li>";
                                        echo "</ul>";
                                    }
                                }
                            }
                            if(isset($_POST['submit'])){
                                $fullname=$_POST['fullname'];
                                $phone=$_POST['phone'];
                                $email=$_POST['email'];
                                $pwdLength=$_POST['pwdLength'];
                                $pwdObject=$_POST['pwdObject'];
                                $passStrength=$_POST['passStrength'];
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card" style="width:100%">
                            <div class="card-header">
                                <h3>Hasil Operasi</h3>
                            </div>
                            <div class="card-body">
                                <p>
                                    <?php 
                                    
                                        echo bioData($fullname, $phone, $email, $passStrength);
                                    ?>
                                    <br>
                                    Berikut password yang telah diproses (merupakan kombinasi email dan nomor telepon);
                                    <br>
                                    <?php echo pwdGen($phone, $email, $pwdLength, $pwdObject, $passStrength, $fullname);?> 
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