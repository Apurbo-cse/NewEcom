<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->

<!-- jQuery Mapael -->
<script src="{{ asset('backend/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('backend/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/dist/js/pages/dashboard2.js') }}"></script>

<script src="{{ asset('assets/helper.js') }}"></script>

<script src="{{ asset('backend/Events.js') }}"></script>

<!-- Summernote -->
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
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
    function Show(title, link, style = '') {
        // alert();
        $('#modal').modal();
        $('#modal-title').html(title);
        $('#modal-body').html('<h1 class="text-center"><strong>Please Wait...</strong></h1>');
        $('#modal-dialog').attr('style', style);
        $.ajax({
                url: link,
                type: 'GET',
                data: {},
            })
            .done(function(response) {
                $('#modal-body').html(response);
            });
    }

    function sweet(message) {
        Swal.fire({
            icon: 'error',
            title: message,
            footer: ''
        });
    }

    function ErrorMessage(key, value) {
        if (key == 'name') {
            $('#name_error').html(value);
        }
        if (key == 'category_id') {
            $('#category_error').html(value);
        }
        if (key == 'sub_category_id') {
            $('#sub_category_error').html(value);
        }
        if (key == 'first_name') {
            $('#first_name_error').html(value);
        }
        if (key == 'last_name') {
            $('#last_name_error').html(value);
        }
        if (key == 'email') {
            $('#email_error').html(value);
        }
        if (key == 'phone') {
            $('#phone_error').html(value);
        }
        if (key == 'image') {
            $('#image_error').html(value);
        }
        if (key == 'cover') {
            $('#cover_error').html(value);
        }
        if (key == 'dob') {
            $('#dob_error').html(value);
        }
        if (key == 'terms_and_condition') {
            $('#terms_error').html(value);
        }
        if (key == 'star_id') {
            $('#star_error').html(value);
        }
        if (key == 'reminder_date') {
            $('#reminder_error').html(value);
        }
        if (key == 'acquired_instruction') {
            $('#acquired_instruction_error').html(value);
        }
        if (key == 'jury_or_judge') {
            $('#jury_or_judge_error').html(value);
        }
        if (key == 'jury_or_judge_mark') {
            $('#jury_or_judge_mark_error').html(value);
        }
        if (key == 'mark_live_or_offline') {
            $('#mark_live_or_offline_error').html(value);
        }
        if (key == 'appeal') {
            $('#appeal_error').html(value);
        }
        if (key == 'wildcard') {
            $('#wildcard_error').html(value);
        }
        if (key == 'video_feed') {
            $('#video_feed_error').html(value);
        }
        if (key == 'round_num') {
            $('#round_num_error').html(value);
        }
        if (key == 'event_preiod') {
            $('#event_preiod_error').html(value);
        }
        if (key == 'registration_preiod') {
            $('#registration_preiod_error').html(value);
        }
        if (key == 'instruction_prepare_period') {
            $('#instruction_prepare_period_error').html(value);
        }
    }

    function ErrorMessageClear() {
        $('#name_error').html('');
        $('#sub_category_error').html('');
        $('#first_name_error').html('');
        $('#last_name_error').html('');
        $('#email_error').html('');
        $('#phone_error').html('');
        $('#image_error').html('');
        $('#cover_error').html('');
        $('#dob_error').html('');
        $('#terms_error').html('');
        $('#category_error').html('');
        $('#star_error').html('');
        $('#reminder_error').html('');
        $('#acquired_instruction_error').html('');
        $('#jury_or_judge_error').html('');
        $('#appeal_error').html('');
        $('#jury_or_judge_mark_error').html('');
        $('#mark_live_or_offline_error').html('');
        $('#wild_card_error').html('');
        $('#video_feed_error').html('');
        $('#round_num_error').html('');
        $('#event_preiod_error').html('');
        $('#registration_preiod_error').html('');
        $('#instruction_prepare_period_error').html('');
    }
</script>
