<?php 
    // Koneksi Database
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "arcade_zone";

	$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

    // jika Tombol Dimpan Diklik
	if(isset($_POST['submit']))
	{
        // Deklarasi Variabel
        $skor = intval($_POST['score']);
        // Data Akan Disimpan Baru
		$simpan = mysqli_query($koneksi, "INSERT INTO chrome_dino (nickname, score)
                                    VALUES ('$_POST[nickname]',  
                                            '$skor')
                                    ");
        if($simpan) // Jika Simpan Data Sukses
        {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='chrome_dino.php';
            </script>";
        }
        else
        {
            echo "<script>
                    alert('Simpan Data Gagal!');
                    document.location='chrome_dino.php';
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Chrome Dino's</title>
        <link rel="icon" type="image/x-icon" href="../assets/arcade.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Custom CSS-->
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <!-- Kembali Ke Landing Page -->
        <a class="kembali" href="../index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg>
        </a>
        <!-- Kirim Nickname & Skor -->
        <a id="form-submit" class="kirim-skor" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z"/>
            </svg>
        </a>
        <!-- Judul Game, Skor & Pesan Mulai -->
        <div class="col-sm-12">
            <canvas id="canvas-complex"></canvas>
            <h1>Chrome Dino's</h1>
            <h2>Your Score</h2>
            <h3 class="score" data-score>0</h3>
            <div class="start-screen" data-start-screen>Press Any Key To Start</div>
        </div>
        <!-- Struktur Tampilan Game -->
        <div class="world" data-world>
            <img src="imgs/ground.png" class="ground" data-ground>
            <img src="imgs/ground.png" class="ground" data-ground>
            <img src="imgs/dino-stationary.png" class="dino" data-dino>
        </div>
        <!-- Modal Form Submit -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Submit Nickname & Score</h5>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="exampleInputNickname" class="form-label">Nickname</label>
                                <input type="text" name="nickname" class="form-control" id="nickname" aria-describedby="exampleInputNickname" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputScore" class="form-label">Score</label>
                                <input type="text" name="score" class="form-control" id="score" readonly required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <!-- Script Bootstrap -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- Script Game -->
        <script src="js/script.js" type="module"></script>
        <!-- Granim JS ~ Tampilan Background RGB -->
        <script src="../js/granim.min.js"></script>
        <script>
            var granimInstance = new Granim({
                element: '#canvas-complex',
                direction: 'top-bottom',
                isPausedWhenNotInView: true,
                states : {
                    "default-state": {
                        gradients: [
                            [
                                { color: '#833ab4', pos: .2 },
                                { color: '#fd1d1d', pos: .8 },
                                { color: '#38ef7d', pos: 1 }
                            ], [
                                { color: '#40e0d0', pos: 0 },
                                { color: '#ff8c00', pos: .2 },
                                { color: '#ff0080', pos: .75 }
                            ],
                        ]
                    }
                }
            });
        </script>
    </body>
</html>
