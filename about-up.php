<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="/images/logo.jpg">
    <link href="styles/fontawesome6/pro/css/all.css" rel="stylesheet" />
    <script src="styles/mdb/js/mdb.min.js"></script>
    <link rel="stylesheet" href="styles/mdb/css/mdb.min.css">
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css" />
    <script src="styles/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/script.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <script src="js/lottie.min.js"></script>
    <style>
        .dropdown-item:hover {
            color: black;
            background-color: #333;
        }

        .nav-item:hover {
            color: whitesmoke;
        }

        .dorpdown-a {
            padding: 0px;
        }

        a .dropdown-item .dropdown-item {
            padding: 5px;
        }

        body {
            background: linear-gradient(to bottom, #e8d2be, #6F4E37);
            background-repeat: no-repeat;
        }

        .card {
            width: 300px;
            height: 400px;
            background: linear-gradient(to bottom,
                    #fffbf0,
                    #fff8a8);
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 10px;
        }

        .card-img {
            object-fit: cover;
            width: 300px;
            height: 300px;
        }
    </style>
</head>

<body>

    <header class="header">
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <a href="./" class="navbar-brand">
                    <img src="images/logo.jpg" alt="Logo" style="width: 60px; height: 60px; margin-top: 40%;" class="rounded-circle float-start" />
                </a>
                <div style="display: flex; flex-direction: row; width: 100%; margin: auto; float: right">
                    <input type="search" name="searchInput" placeholder="Search" id="search_input" class="form-control" style="width: 100%;" onclick="openSearchPage()">
                    <button class="btn btn-primary" type="submit" style="margin-top: 20px; float: left;">
                        <i class="fa-solid fa-search"></i>
                    </button>
                    </input>
                    <script>
                        function openSearchPage() {
                            var inputValue = document.getElementById("search_input").value;
                            window.location.href = "search.php?search=" + encodeURIComponent(inputValue);
                        }
                    </script>
                </div>
                <a href="signin.php">
                    <button class="btn btn-dark position-relative" style=" margin-left: 10px; margin-right: 10px;  margin-top: 20px; float: right;">
                        <i class="fa-user fa-solid"></i>
                        <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle invisible">
                            <span class="visually-hidden"></span>
                        </span>
                    </button>
                </a>
                <div>
                    <button class="btn btn-dark position-relative" style="margin-top: 20px; float: right;">
                        <i class="fa-shopping-cart fa-solid mr-auto"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-danger" id="badge"></span>
                    </button>
                </div>
    </header>
    <nav class="bg-opacity-50">
        <ul class="nav nav-tabs flex-row">
            <li class="nav-item"><a href="./" class="">Home</a></li>
            <li class="navig nav-item" data-bs-toggle="dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">
                        Roasted</a>
                    <ul type=" none" class="dropdown-menu btn-group-sm">

                        <a href="category/roasted-light.php" class="dropdown-a" style="padding : 0px; color: white;">
                            <li class="dropdown-item"> Light </li>
                        </a>

                        <a href="category/roasted-medium.php" class="dropdown-a" style="padding : 0px; color: white;">
                            <li class="dropdown-item"> Medium </li>
                        </a>

                        <a href="category/roasted-dark.php" class="dropdown-a" style="padding : 0px; color: white;">
                            <li class="dropdown-item"> Dark </li>
                        </a>
                    </ul>
                </div>
            </li>
            <li class="nav-item" data-bs-toggle="dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">
                        Unroasted</a>
                    <ul type=" none" class="dropdown-menu btn-group-sm">
                        <a href="./category/unroasted-arabica.php" class="dropdown-a" style="padding : 0px; color: white;">
                            <li class="dropdown-item"> Arabica </li>
                        </a>
                        <a href="./category/unroasted-robusta.php" class="dropdown-a" style="padding : 0px; color: white;">
                            <li class="dropdown-item"> Rebusta </li>
                        </a>
                    </ul>
                </div>
            </li>
            <li class="nav-item"><a href="./category/all-coffee.php">All coffee</a></li>
            <li class="nav-item"><a href="./contact-up.php">Contact us</a></li>
            <li class="nav-item"><a href="#">About us</a></li>
        </ul>
    </nav>


    <div class=" justify-content-center container-fluid mt-5" style="width: 90%">
        <div class="card-grid card-group">


            <div class="row">
                <div class="col-lg-4">
                    <div class="card hover-zoom d-flex align-items-center justify-content-center">

                        <div id="animation-container" class="card-img card-img-top rounded-circle"></div>

                        <script>
                            // Load the JSON animation file
                            var animation = bodymovin.loadAnimation({
                                container: document.getElementById('animation-container'),
                                renderer: 'svg',
                                loop: true,
                                autoplay: true,
                                path: './images/profile/profile-avator-animation.json'
                            });
                        </script>

                        <div class="card-body text-center">
                            <h5 class="card-title"> <b>Yafet Abebe</b></h5>
                            <p class="card-text">ID: UU78211R</p>
                            <p class="card-text">Email: yafetema15@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card hover-zoom d-flex align-items-center justify-content-center">

                        <div id="animation-container-2" class="card-img card-img-top rounded-circle"></div>

                        <script>
                            // Load the JSON animation file
                            var animation = bodymovin.loadAnimation({
                                container: document.getElementById('animation-container-2'),
                                renderer: 'svg',
                                loop: true,
                                autoplay: true,
                                path: './images/profile/profile-avator-animation-2.json'
                            });
                        </script>

                        <div class="card-body text-center">
                            <h5 class="card-title">Metasebia Henok</h5>
                            <p class="card-text">ID: UU78420R</p>
                            <p class="card-text">Email: Metasebiahenok@yahoo.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card hover-zoom d-flex align-items-center justify-content-center">

                        <div id="animation-container-3" class="card-img card-img-top rounded-circle"></div>

                        <script>
                            // Load the JSON animation file
                            var animation = bodymovin.loadAnimation({
                                container: document.getElementById('animation-container-3'),
                                renderer: 'svg',
                                loop: true,
                                autoplay: true,
                                path: './images/profile/profile-avator-animation-2.json'
                            });
                        </script>

                        <div class="card-body text-center">
                            <h5 class="card-title">Mubarek Jemal</h5>
                            <p class="card-text">ID: UU78215R</p>
                            <p class="card-text">Email: mubarekjemalcsn12@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card hover-zoom d-flex align-items-center justify-content-center">

                        <div id="animation-container-4" class="card-img card-img-top rounded-circle"></div>

                        <script>
                            // Load the JSON animation file
                            var animation = bodymovin.loadAnimation({
                                container: document.getElementById('animation-container-4'),
                                renderer: 'svg',
                                loop: true,
                                autoplay: true,
                                path: './images/profile/profile-avator-animation-2.json'
                            });
                        </script>

                        <div class="card-body text-center">
                            <h5 class="card-title">Anwar Jibril</h5>
                            <p class="card-text">ID: UU81502R</p>
                            <p class="card-text">Email: AnwarJibril@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card hover-zoom d-flex align-items-center justify-content-center">

                        <div id="animation-container-5" class="card-img card-img-top rounded-circle"></div>

                        <script>
                            // Load the JSON animation file
                            var animation = bodymovin.loadAnimation({
                                container: document.getElementById('animation-container-5'),
                                renderer: 'svg',
                                loop: true,
                                autoplay: true,
                                path: './images/profile/profile-avator-animation-2.json'
                            });
                        </script>

                        <div class="card-body text-center">
                            <h5 class="card-title">Bisrat Derbe</h5>
                            <p class="card-text">ID: UU82401R</p>
                            <p class="card-text">Email: BisratDerbe@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Footer -->
    <footer class="text-center text-lg-start text-light">
        <div class="d-flex flex-column flex-lg-row justify-content-between">
            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Unity coffee beans
                            </h6>
                            <p>
                                We are a wholesale roaster & unroasted coffee service based in Addis Ababa, Ethiopia.
                                We value our relationship with growers across the globe.
                            </p>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> Addis Ababa, Gerji Unity university</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                info@example.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 251 9293 442 95</p>
                            <p><i class="fas fa-phone me-3"></i> + 251 7033 442 96</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Section: Social media -->
            <section class="p-4 mt-auto">
                <div class="d-flex justify-content-center justify-content-lg-end">
                    <a href="" target="_blank" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="www.linkedin.com/in/yaf8" target="_blank" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/yaf8" target="_blank" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </section>
            <!-- Section: Social media -->
        </div>

        <!-- Footer -->
        <div class="d-flex justify-content-between border-top align-items-center" style="background-color: rgba(0, 0, 0, 0.05);">
            <div style="margin-left: 30px;">&copy; All rights reserved.</div>
            <div> 2023 Unit coffee</div>
            <div style="margin-right: 30px;"><a href="#" class="text-light" style="color: darkslategrey;">Terms and Conditions</a></div>
        </div>
        <!-- Footer -->
    </footer>
    <!-- Footer -->



</body>

</html>