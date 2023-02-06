
<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link " href="dashboard.php" style="color: #57d8cd;">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="patient-registration/register.php">
            <i class="fa-solid fa-hospital-user"></i>
            <span>Patient Registration</span>
          </a>
       </li><!-- End Patient Registration Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="doctor-appointment/appointment.php">
            <i class="fa-solid fa-user-doctor"></i>
            <span>Doctor Appointment</span>
          </a>
        </li><!-- End Doctor Appoinment Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-journal-text"></i><span>Manage Patient</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
              <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="../inpatient.php">
                    <i class="bi bi-circle"></i><span>Inpatient</span>
                  </a>
                </li>
                <li>
                  <a href="../outpatient.php">
                    <i class="bi bi-circle"></i><span>Outpatient</span>
                  </a>
                </li>
              </ul>
          </li><!-- End Manage Patient Nav -->

        <li class="nav-item">
         <a class="nav-link collapsed" href="medical-record-and-data-management/medical-record.php">
         <i class="fa-regular fa-folder-medical"></i>
            <span>Medical Record and Data Management</span>
          </a>
        </li><!-- End Medical Record Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="billing.php">
            <i class="fa-solid fa-file-invoice"></i>
            <span>Billing and Dicharge Management</span>
          </a>
        </li><!-- End Billing and Discharge Nav -->

    </ul>

  </aside><!-- End Sidebar-->
  