<script src="{{ asset ("backend/plugins/jquery/jquery.min.js") }}"></script>
<script src="{{ asset ("backend/plugins/jquery-ui/jquery-ui.min.js") }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset ("backend/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset ("backend/plugins/chart.js/Chart.min.js") }}"></script>
<script src="{{ asset ("backend/plugins/sparklines/sparkline.js") }}"></script>
<script src="{{ asset ("backend/plugins/jqvmap/jquery.vmap.min.js") }}"></script>
<script src="{{ asset ("backend/plugins/jqvmap/maps/jquery.vmap.usa.js") }}"></script>
<script src="{{ asset ("backend/plugins/jquery-knob/jquery.knob.min.js") }}"></script>
<script src="{{ asset ("backend/plugins/moment/moment.min.js") }}"></script>
<script src="{{ asset ("backend/plugins/daterangepicker/daterangepicker.js") }}"></script>
<script src="{{ asset ("backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}"></script>
<script src="{{ asset ("backend/plugins/summernote/summernote-bs4.min.js") }}"></script>
<script src="{{ asset ("backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"></script>
<script src="{{ asset ("backend/dist/js/adminlte.js") }}"></script>
<script src="{{ asset ("backend/dist/js/demo.js") }}"></script>
<script src="{{ asset ("backend/dist/js/pages/dashboard.js") }}"></script>
<!-- jQuery -->
<script src="{{asset ("backend/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset ("backend/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset ("backend/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset ("backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset ("backend/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset ("backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{asset ("backend/plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset ("backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
<script src="{{asset ("backend/plugins/jszip/jszip.min.js")}}"></script>
<script src="{{asset ("backend/plugins/pdfmake/pdfmake.min.js")}}"></script>
<script src="{{asset ("backend/plugins/pdfmake/vfs_fonts.js")}}"></script>
<script src="{{asset ("backend/plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
<script src="{{asset ("backend/plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
<script src="{{asset ("backend/plugins/datatables-buttons/js/buttons.colVis.min.js")}}"></script>

<!-- Select2 -->
<script src="{{asset ("backend/plugins/select2/js/select2.full.min.js")}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset ("backend/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js")}}"></script>
<!-- InputMask -->
<script src="{{asset ("backend/plugins/moment/moment.min.js")}}"></script>
<script src="{{asset ("backend/plugins/inputmask/jquery.inputmask.min.js")}}"></script>
<!-- date-range-picker -->
<script src="{{asset ("backend/plugins/daterangepicker/daterangepicker.js")}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset ("backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js")}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset ("backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<!-- BS-Stepper -->
<script src="{{asset ("backend/plugins/bs-stepper/js/bs-stepper.min.js")}}"></script>
<!-- dropzonejs -->
<script src="{{asset ("backend/plugins/dropzone/min/dropzone.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ("backend/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset ("backend/dist/js/demo.js")}}"></script>
<!-- Demo Js -->
{{-- <script src="{{ asset ("backend/js/demo.js") }}"></script> --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
{{-- toaster --}}
{{-- <script src="cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
{{-- <script src="{{asset ("backend/plugins/jquery/jquery.min.js")}}"></script> --}}
<script src="{{asset ("backend/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset ("backend/plugins/sweetalert2/sweetalert2.min.js")}}"></script>
<script src="{{asset ("backend/plugins/toastr/toastr.min.js")}}"></script>
{{-- <script src="{{asset ("backend/dist/js/adminlte.min.js?v=3.2.0")}}"></script> --}}

<script>
    $(function () {
        $("#datatable1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#datatable1_wrapper .col-md-6:eq(0)');
        $('#datatable2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
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
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })
  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

{{-- modal --}}
{{-- <script>
    jQuery(document).ready(function($) {
  // auto timer
setTimeout(function() {
    $('#lab-slide-bottom-popup').modal('show');
  }, 5000); // optional - automatically opens in xxxx milliseconds

$(document).ready(function() {
    $('.lab-slide-up').find('a').attr('data-toggle', 'modal');
    $('.lab-slide-up').find('a').attr('data-target', '#lab-slide-bottom-popup');
});

});
</script> --}}

{{-- sweet alert hapus--}}
<script>
    $('.hapusKategori').click(function(){
    var kategori_id = $(this).attr('data-id_kategori');
    var kategoriname = $(this).attr('data-nama_kategori');
        Swal.fire({
            title: "Apa kamu yakin?",
            text: "kamu akan menghapus Kategori "+kategoriname+" ",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        })
        .then((result) => {
        if (result.isConfirmed) {
            window.location = "/hapuskategori/"+kategori_id+""
            Swal.fire(
            'Deleted!',
            'Kategori '+kategoriname+' berhasil di hapus',
            'success'
            )
        }
        });
    });
</script>

<script>
    $('.hapusproduk').click(function(){
    var produk_id = $(this).attr('data-id_produk');
    var produkname = $(this).attr('data-nama_produk');
        Swal.fire({
            title: "Apa kamu yakin?",
            text: "kamu akan menghapus produk "+produkname+" ",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        })
        .then((result) => {
        if (result.isConfirmed) {
            window.location = "/hapusproduk/"+produk_id+""
            Swal.fire(
            'Deleted!',
            'produk '+produkname+' berhasil di hapus',
            'success'
            )
        }
        });
    });
</script>
{{--tutup sweet alert hapus--}}

{{-- sweet alert tambah--}}
<script>
    $(function() {
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    $('.tambah').click(function(){
        Toast.fire({
        icon: 'success',
        title: 'Data berhasil di tambah'
        })
    });
    });
</script>
{{--tutup sweet alert tambah--}}

{{-- sweet alert edit--}}
<script>
    $(function() {
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    $('.edit').click(function(){
        Toast.fire({
        icon: 'success',
        title: 'Data berhasil di edit'
        })
    });
    });
</script>
{{--tutup sweet alert edit--}}

{{-- post gambar --}}
<script>
    function previewImage(){
        const gambar = document.querySelector('#gambar');
        const imgPreview = document.querySelector('img-preview');

        const oFReader = new fileReader();

        oFReader.readAsDataURL(gambar.file[0]);
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
