<?php
    //Koneksi Database
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "arcade_zone";

	$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Welcome To Arcade Zone!</title>
        <link rel="icon" type="image/x-icon" href="assets/arcade.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Arcade Zone</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Games</a></li>
                        <li class="nav-item"><a class="nav-link" href="#leaderboards">Leaderboard</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Arcade Zone</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Best site to play arcade games with great gaming experience!</h2>
                        <a class="btn btn-primary" href="#about">Get Started</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">HTML + CSS + JavaScript Game Technology</h2>
                        <p class="text-white-50">
                        Arcade zone is an online arcade game site that uses HTML, CSS and JavaScript technology as its game creation technology, and also has additional features such as JavaScript Library to maximize the gaming experience, so that users will have the best experience playing our arcade games!</p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/console.png" alt="..." />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead2.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Check your rank on the leaderboard!</h4>
                            <p class="text-black-50 mb-0">You can see your rank on the leaderboard by submitting the game score result after the game has ended</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/chrome_dino.png" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Chrome Dino's</h4>
                                    <p class="mb-0 text-white-50">An arcade game that aims to avoid obstacles such as cactus trees</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                    <a class="btn btn-primary" href="chrome_dino/chrome_dino.php" role="button">Play Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/flappy_bird.png" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Flappy Bird</h4>
                                    <p class="mb-0 text-white-50">An arcade game where the goal is to avoid obstacles such as pipes that birds will encounter when flying</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                    <a class="btn btn-primary" href="flappy_bird/flappy_bird.php" role="button">Play Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project three Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/typing_test_speed.png" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Typing Speed Test</h4>
                                    <p class="mb-0 text-white-50">An arcade game that aims to measure how many words per minute can be typed during a test</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                    <a class="btn btn-primary" href="typing_speed_test/typing_speed_test.php" role="button">Play Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project four Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/whack_a_coronavirus.png" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Whack a CoronaVirus!</h4>
                                    <p class="mb-0 text-white-50">An arcade game that aims to beat the corona virus that is trying to enter the body of a boy</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                    <a class="btn btn-primary" href="whack_a_coronavirus/whack_a_coronavirus.php" role="button">Play Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Leaderboards -->
        <section class="leaderboards-section bg-light" id="leaderboards">
            <div class="container mb-5">
                <h3>Leaderboard</h3>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-game1-tab" data-bs-toggle="pill" data-bs-target="#pills-game1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Chrome Dino's</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-game2-tab" data-bs-toggle="pill" data-bs-target="#pills-game2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Flappy Bird</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-game3-tab" data-bs-toggle="pill" data-bs-target="#pills-game3" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Typing Speed Test</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-game4-tab" data-bs-toggle="pill" data-bs-target="#pills-game4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Whack a CoronaVirus!</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-game1" role="tabpanel" aria-labelledby="pills-home-tab">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr>
                                <th scope="col">Rank</th>
                                <th scope="col">Nickname</th>
                                <th scope="col">Score</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                                $tampil = mysqli_query($koneksi, "SELECT * FROM chrome_dino ORDER BY score DESC LIMIT 10");
                                while($data = mysqli_fetch_array($tampil)) :
                            ?>
                            <tbody>
                                <tr>
                                <th scope="row"><?=$no++;?></th>
                                <td><?=$data['nickname']?></td>
                                <td><?=$data['score']?></td>
                                </tr>
                                <?php endwhile; //penutup perulangan while ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-game2" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr>
                                <th scope="col">Rank</th>
                                <th scope="col">Nickname</th>
                                <th scope="col">Score</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                                $tampil = mysqli_query($koneksi, "SELECT * FROM flappy_bird ORDER BY score DESC LIMIT 10");
                                while($data = mysqli_fetch_array($tampil)) :
                            ?>
                            <tbody>
                                <tr>
                                <th scope="row"><?=$no++;?></th>
                                <td><?=$data['nickname']?></td>
                                <td><?=$data['score']?></td>
                                </tr>
                                <?php endwhile; //penutup perulangan while ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-game3" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr>
                                <th scope="col">Rank</th>
                                <th scope="col">Nickname</th>
                                <th scope="col">WPM</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                                $tampil = mysqli_query($koneksi, "SELECT * FROM typing_speed_test ORDER BY wpm DESC LIMIT 10");
                                while($data = mysqli_fetch_array($tampil)) :
                            ?>
                            <tbody>
                                <tr>
                                <th scope="row"><?=$no++;?></th>
                                <td><?=$data['nickname']?></td>
                                <td><?=$data['wpm']?></td>
                                </tr>
                                <?php endwhile; //penutup perulangan while ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-game4" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr>
                                <th scope="col">Rank</th>
                                <th scope="col">Nickname</th>
                                <th scope="col">Score</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                                $tampil = mysqli_query($koneksi, "SELECT * FROM whack_a_coronavirus ORDER BY score DESC LIMIT 10");
                                while($data = mysqli_fetch_array($tampil)) :
                            ?>
                            <tbody>
                                <tr>
                                <th scope="row"><?=$no++;?></th>
                                <td><?=$data['nickname']?></td>
                                <td><?=$data['score']?></td>
                                </tr>
                                <?php endwhile; //penutup perulangan while ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Background-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Arcade Zone 2022</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
