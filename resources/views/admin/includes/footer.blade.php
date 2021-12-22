 <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <!-- <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © nasadmin</span> -->
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © NAS (Department of School Education & Literacy) Admin</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/admin/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/admin/vendors/moment/moment.min.js')}}"></script>
    <script src="{{ asset('assets/admin/vendors/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('assets/admin/vendors/chartist/chartist.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/admin/vendors/js/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/admin/vendors/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/admin/vendors/js/dashboard.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{ asset('assets/admin/vendors/js/tinymce.min.js')}}"></script>

<script>tinymce.init({selector:'textarea'});</script>

<script src="{{ asset('assets/admin/vendors/js/jquery.dataTables.min.js')}}"></script>
    <!-- End custom js for this page -->
<script>
    $(document).ready( function () {
    $('.table').DataTable();
} );
</script>
  </body>
</html>