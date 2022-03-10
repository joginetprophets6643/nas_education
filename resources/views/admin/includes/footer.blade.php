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
    <!-- <script src="{{ asset('assets/admin/vendors/chartist/chartist.min.js')}}"></script> -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/admin/vendors/js/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/admin/vendors/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- <script src="{{ asset('assets/admin/vendors/js/dashboard.js')}}"></script> -->
    <!-- JavaScript Bundle with Popper -->
    
<script src="{{ asset('assets/admin/vendors/js/bootstrap.bundle.min.js')}}"></script>
<!-- <script src="{{ asset('assets/admin/vendors/js/tinymce.min.js')}}"></script>

<script>tinymce.init({selector:'textarea'});</script> -->

<script src="{{ asset('assets/admin/vendors/ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replaceClass= 'textarea-ckeditor' ;
</script>

<!-- <script src="{{asset('assets/front/js/jquery-3.6.0.min.js')}}"></script> -->

<script>
let view=jQuery.parseJSON($('#view').val()?$('#view').val():'[]');
let edit=jQuery.parseJSON($('#edit').val()?$('#edit').val():'[]');
let add=jQuery.parseJSON($('#add').val()?$('#add').val():'[]');
let delet=jQuery.parseJSON($('#delete').val()?$('#delete').val():'[]');
let modules=['User','Media','Team','Content','Program','Master','Statistic','Data','Banner','Client-Logo','Registration','Setting'];
// add=modules.filter(e=>!add.includes(e));
// edit=modules.filter(e=>!edit.includes(e));
// delet=modules.filter(e=>!delet.includes(e));
view.forEach((item)=>{
  $('#'+item).css('display',"list-item");
});
add.forEach((item)=>{
  // $('.'+item+'_add').attr("disabled",true);
  $('.'+item+'_add').css('display',"inline-block");
  if(item=='Media'){
  $('.'+item+'_action').css('display',"table-cell");
  }
})
edit.forEach((item)=>{
  // $('.'+item+'_add').attr("disabled",true);
  $('.'+item+'_edit').css('display',"inline-block");
  $('.'+item+'_action').css('display',"table-cell");
})
delet.forEach((item)=>{
  // $('.'+item+'_add').attr("disabled",true);
  $('.'+item+'_delete').css('display',"inline-block");
  $('.'+item+'_action').css('display',"table-cell");
})
$('.extra').css('display',"inline-block");
</script>
    <!-- End custom js for this page -->
    <script src="{{ asset('assets/admin/vendors/js/jquery.dataTables.min.js')}}"></script>

<script>
    $(document).ready( function () {
    $('.table').DataTable();
} );
</script>
<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <script src="{{asset('assets/front/js/all.js')}}" data-auto-replace-svg="nest"></script>
  </body>
</html>