<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="300; url=index.php">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Alegario Cure Hospital</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/alegario_logo.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins&family=Quicksand&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/fonta-6/css/all.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet"> <!-- Di ata need -->
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet"> <!-- Di ata need -->
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet"> <!-- Di ata need -->
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- over ride css -->
    <!-- <link rel="stylesheet" href="../assets/css/over_ride.css"> -->
    
    <!-- Core One CSS -->
    <link rel="stylesheet" href="../assets/css/core-one.css">

  </head>

  <body>
      <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="dashboard.php" class="logo d-flex align-items-center">
          <img src="../assets/img/alegario_logo.png" alt="Alegario Cure Hospital Logo" class="img-responsive">
          <span class="d-none d-lg-block"><b style="color: #03989e">Alegario Cure</b> <b style="color: #66CC33">Hospital</b></span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

          <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6>Kevin Anderson</h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-gear"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                  <i class="bi bi-question-circle"></i>
                  <span>Need Help?</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>

            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

        </ul>
      </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
        

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
            <a class="nav-link " href="../dashboard.php" style="color: #57d8cd;">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="../patient-registration/register.php">
              <i class="fa-solid fa-hospital-user"></i>
              <span>Patient Registration</span>
            </a>
        </li><!-- End Patient Registration Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="../doctor-appointment/appointment.php">
              <i class="fa-solid fa-user-doctor"></i>
              <span>Doctor Appointment</span>
            </a>
          </li><!-- End Doctor Appoinment Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
              <i class="fa-solid fa-bed"></i><span>Manage Patient</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
              <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="../inpatient-management/inpatient.php">
                    <i class="bi bi-circle"></i><span>Inpatient</span>
                  </a>
                </li>
                <li>
                  <a href="../outpatient-management/outpatient.php">
                    <i class="bi bi-circle"></i><span>Outpatient</span>
                  </a>
                </li>
              </ul>
          </li><!-- End Manage Patient Nav -->

          <li class="nav-item">
          <a class="nav-link collapsed" href="../medical-record-and-data-management/patient-record.php">
              <i class="fa-solid fa-book-medical"></i>
              <span>Medical Record and Data Management</span>
            </a>
          </li><!-- End Medical Record Nav -->

          <li class="nav-item">
          <a class="nav-link collapsed" href="../billing-and-discharge/billing.php">
              <i class="fa-solid fa-file-invoice"></i>
              <span>Billing and Dicharge Management</span>
            </a>
          </li><!-- End Billing and Discharge Nav -->

      </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Medical Record</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Medical Record</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->

    </main>


    <?php
          include_once '../footer.php'
    ?>

  </body>

</html>