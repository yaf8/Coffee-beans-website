<?php

if (!isset($_COOKIE['email'])) {
    header('Location: profile.php');
    return;
} else {
    $loginEmail = $_COOKIE['email'];
}

if (isset($_GET['action']) && $_GET['action'] === 'signout') {
    // Unset email cookie
    setcookie('email', '', time() - 3600, '/');

    // Redirect to index page
    header('Location: ./');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="/images/logo.jpg" />
    <link href="styles/fontawesome6/pro/css/all.css" rel="stylesheet" />
    <script src="styles/mdb/js/mdb.min.js"></script>
    <link rel="stylesheet" href="styles/mdb/css/mdb.min.css" />
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css" />
    <script src="styles/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/styles.css" />
    <script src="js/script.js"></script>
    <script src="validForm.js"></script>
    <script src="js/lottie.min.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-card {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .profile-header {
            background-color: #007bff;
            padding: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 50px;
        }

        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-name {
            color: #fff;
            font-size: 2rem;
            margin-bottom: 0;
        }

        .profile-info {
            padding: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-info h3 {
            font-size: 1.5rem;
            margin-top: 0;
        }

        .profile-info p {
            font-size: 1.2rem;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <header class="header">
        <nav class="navbar navbar-expand-sm z-index-1">
            <div class="container-fluid">
                <a href="./" class="navbar-brand">
                    <img src="images/logo.jpg" alt="Logo" style="width: 60px; height: 60px; margin-top: 40%" class="rounded-circle float-start" />
                </a>
            </div>
            <div>
                <a href="profile.php?action=signout"><button class="btn btn-danger position-relative" style="margin-top: 20px; float: right;">
                        <i class="fa-regular fa-right-from-bracket"> <strong> Signout </strong></i>
                    </button></a>
            </div>
        </nav>
    </header>


    <div class="profile-card">

        <?php

        $servername = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "coffee_beans";

        // Create connection
        $conn = new mysqli($servername, $username, $pass, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM customer WHERE email='$loginEmail'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $row = $result->fetch_assoc();

            $first_name = $row['firstName'];
            $last_name = $row['lastName'];
            $email = $row['email'];
            $phone = $row['phone'];
            $gender = $row['gender'];
            $city = $row['city'];
            $subcity = $row['subcity'];
            $woreda = $row['woreda'];
            $house_no = $row['house_no'];
            $payment_method = $row['payment_method'];
        } else {
            header('Location: ./');
        }

        echo "
        
        <div class='profile-header'>
            <div class='profile-avatar'>
                <div id='profile-avator' alt='Avatar'></div>
            </div>
            <h1 class='profile-name'>$first_name  $last_name</h1>
        </div>
            
        <div class='profile-info'>
            <h3>Personal Information</h3>
            <p><strong>Email:</strong> $email </p>
            <p><strong>Phone:</strong> $phone </p>
            <p><strong>Gender:</strong> $gender</p>
            <h3>Address</h3>
            <p><strong>City:</strong> $city</p>
            <p><strong>Subcity:</strong> $subcity </p>
            <p><strong>Wereda:</strong> $woreda</p>
            <p><strong>House Number:</strong> $house_no </p>
            <h3>Payment Method</h3>
            <p><strong>Type:</strong> $payment_method</p>
        </div>

        <script>
        // Load the JSON animation file
        var animation = bodymovin.loadAnimation({
            container: document.getElementById('profile-avator'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: './images/profile/profile-avator-animation.json'
        });
    </script>
            
            
            
            ";
        return;
        $conn->close();
        ?>

       


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