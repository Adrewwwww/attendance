<?php session_start();

// Check if the session username is not set
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: route/login.php");
    exit(); // Ensure that code execution stops after redirection
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand fs-5 fw-bold" href="login.php">Parallel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="navHome" class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <?php
                    // Check the user's role and display the facultyRoles section only if the role is 3
                    if ($_SESSION['role'] == 3) {
                        echo '
        <span id="facultyRoles">
            <li class="nav-item">
                <a class="nav-link" href="./route/registration.php">Registration</a>
            </li>
        </span>';
                    }
                    ?>
                    <li class="nav-item">
                        <a id="navAttendance" class="nav-link" href="./route/attendance.php">Attendance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="records.php">My Record</a>
                    </li>


                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['username'] ?>
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="./scripts/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container my-5">
        <section id="about" class="text-center">
            <h1>About Us</h1>
            <p>Welcome to our innovative attendance management system utilizing face recognition and RFID technology.</p>
        </section>

        <section id="features mt-5">
            <h1 class="text-center mb-4">Key Features</h1>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 feature">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Face Recognition</h5>
                            <p class="card-text">Effortless attendance tracking with facial recognition technology.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 feature">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">RFID Integration</h5>
                            <p class="card-text">Seamless integration of RFID for convenient access and attendance management.</p>
                        </div>
                    </div>
                </div>
                <!-- Add more features as needed -->
            </div>
        </section>

        <section id="contact" class="text-center mt-5">
            <h1>Contact Us</h1>
            <p>If you have any inquiries or need assistance, feel free to reach out to us:</p>
            <!-- Include a contact form or contact details here -->
        </section>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>