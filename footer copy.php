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
  <!-- Added JS File -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>

  <script>
      $(document).on('submit', '#addPatient', function (e){
          e.preventDefault();

          var formData = new FormData(this);
          formData.append("save_patient", true);
          
          $.ajax({
              type: "POST",
              url: "../includes/registration.inc.php",
              data: formData,
              processData: false,
              contentType: false,
              success: function (response) {
                console.log(response);

                var res = jQuery.parseJSON(response);
                if(res.status == 422){
                  $('#errorMessage').removeClass('d-none');
                  $('#errorMessage').text(res.message);
                } else {
                  $('#errorMessage').addClass('d-none');
                  $('#addPatientModal').modal('hide');
                  $('#addPatient')[0].reset();
                }
              }
          });

      });

  </script>


  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/sweetalert.min.js"></script>
  <!-- <script>swal("Good job!", "Patient registered successfully!", "success");</script> -->

</body>

</html>