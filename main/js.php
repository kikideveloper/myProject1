<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- jQuery Knob -->
<script src="bower_components/jquery-knob/js/jquery.knob.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/Chart.js/Chart.js"></script>
<!-- FLOT CHARTS -->
<script src="bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="bower_components/Flot/jquery.flot.categories.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>

<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- PACE -->
<script src="bower_components/PACE/pace.min.js"></script>

<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- JQUERY -->
<script src="build/js/googleapis/jquery.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script type="text/javascript">
$(function () {
    $('#itm').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
  });
</script>
<script type="text/javascript">
$(function () {
  //Initialize Select2 Elements
  $('.select2').select2();
  //Datemask dd/mm/yyyy
  $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });
  //Datemask2 mm/dd/yyyy
  $('#datemask2').inputmask('yyyy/mm/dd', { 'placeholder': 'yyyy/mm/dd' });
  //Money Euro
  $('[data-mask]').inputmask();
  //Date range picker
  $('#reservation').daterangepicker();
  //Date range picker with time picker
  $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });
  //Date range as a button
  $('#daterange-btn').daterangepicker({
    ranges   : {
      'Today'       : [moment(), moment()],
      'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month'  : [moment().startOf('month'), moment().endOf('month')],
      'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate  : moment()
  },
  function (start, end) {
    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  });
  //Date picker
  $('#datepicker, #datepicker2, #kadaluarsa').datepicker({
    autoclose: true
  });
  //iCheck for checkbox and radio inputs
  $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass   : 'iradio_minimal-blue'
  });
  //Red color scheme for iCheck
  $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass   : 'iradio_minimal-red'
  });
  //Flat red color scheme for iCheck
  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass   : 'iradio_flat-green'
  });
  //Colorpicker
  $('.my-colorpicker1').colorpicker();
  //color picker with addon
  $('.my-colorpicker2').colorpicker();
  //Timepicker
  $('.timepicker').timepicker({
    showInputs: false
  });
});
</script>
<script type="text/javascript">
// Image Preview Upload
function PreviewImage() {
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
  oFReader.onload = function (oFREvent)
   {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
  };
}
// Add Item Purchase
function addItm($frm) {
  $.ajax({
    url: 'lib/cart.php?action=add',
    type: 'post',
    data: $($frm).serialize(),
    success:function(data) {
      $(".data-item").load("lib/v_cart.php");
      // alert(data);
    }
  });
} 

function delItm($id) {
  alert("Yakin ingin menghapus data?");
  $.ajax({
    url: 'lib/cart.php?action=unset',
    type: 'post',
    data: "id_item="+$id,
  })
  .done(function(data) {
    console.log("success",
      $(".data-item").load('lib/v_cart.php'),
      window.location.href = "index.php?page=crud/pembelian/index"
      );
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  }); 
}
<?php
  if($_GET['page'] == 'crud/pembelian/index'){
    ?>
    $(".data-item").load('lib/v_cart.php');
  <?php
  }
?>

function saveDetails($ses) {
  $.ajax({
    url: 'lib/cart.php?action=saveDetails',
    type: 'POST',
    data: $($ses).serialize(),
  })
  .done(function() {
    console.log("success",
      $(".data-item").load('lib/v_cart.php'),
      window.location.href="index.php?page=crud/pembelian/index"
      );
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
}
</script>
<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').slider();
  });
  function notifikasi() {
  if (!Notification) {
    alert('Browsermu tidak mendukung Web Notification.');
    return;
  }
  if (Notification.permission !== "granted")
    Notification.requestPermission();
  else {
    var notifikasi = new Notification('Judul Notifikasi', {
      icon: 'img/13249930_1725572604349544_1125473422_a.jpg',
      body: "Belajar di Jago Coding, Sangat Menyenangkan !"
    });
    notifikasi.onclick = function () {
      window.open("index.php?page=crud/item/index");
    };
    setTimeout(function(){
      notifikasi.close();
    }, 5000);
  }
};
</script>
