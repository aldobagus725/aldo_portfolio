<html>
    <head>
        <title>File Op</title>
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
                            <h1>Buka Data</h1>                           
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Nama Pengguna</span>
                              </div>
                              <input type="text" class="form-control" name="username">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Nama File</span>
                              </div>
                              <input type="text" class="form-control" name="filename">
                            </div>
                            <table>
                                <tr>
                                    <td valign="top"><span class="input-group-text">Text</span></td>
                                    <td></td>
                                    <td><textarea name="text" cols="137" rows="10" required></textarea></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="submit" class="btn btn-primary" value="Simpan Data">
                            <input type="reset" name="reset" class="btn btn-secondary" value="Clear Form">
                        </div>
                    </div>
                    </form>
                    <form action="#" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h1>Tulis Data</h1>                           
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Nama File</span>
                              </div>
                              <input type="text" class="form-control" name="fileName" placeholder="i.e. mamang.txt">
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="open" class="btn btn-info" value="Buka Data">
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
                            if(isset($_POST['submit'])){
                                $nama     = trim($_POST['username']);
                                $namafile = trim($_POST['filename']);
                                $namaFile = "$namafile.txt";
                                $isi      = trim($_POST['text']);  
                                $file = fopen($namaFile,"w");  
                                fwrite($file, $isi);
                                fclose($file);  
                                echo "<h2>Hasil Penyimpanan Data</h2>";  
                                echo "<hr>";  
                                echo "Hasil : <a href='$namaFile'> $namaFile </a>";  
                                }
                            if(isset($_POST['open'])){
                                $fileName = trim($_POST['fileName']);
                                $file = fopen($fileName,"r") or die("Unable to open file!");
                                echo fread($file,filesize($fileName));
                                fclose($file);
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