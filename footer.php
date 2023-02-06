<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Alegario Cure Hospital</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="#">IDOLOK</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/sweetalert.min.js"></script>
  <script src="../assets/js/registration.js"></script>
  <script src="../assets/js/patient-view.js"></script>

  <script>
    $(document).ready( function () {
    $('#patientTable').DataTable();
} );
  </script>


  <?php
    if(isset($_SESSION['status']) && $_SESSION['status'] !='' )
    {
      ?>
      <script>swal({
        title: "<?php echo $_SESSION['status'];?>",
        // text: "Patient registered successfully!",
        icon: "<?php echo $_SESSION['status_code']; ?>",
        button: "Done",
      });</script>
    <?php
      unset($_SESSION['status']);
    }
  ?>



</body>

</html>