<script src="<?= asset('admin/assets/vendor/libs/jquery/jquery.js') ?>"></script>
<script src="<?= asset('admin/assets/vendor/libs/popper/popper.js') ?>"></script>
<script src="<?= asset('admin/assets/vendor/js/bootstrap.js') ?>"></script>
<script src="<?= asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
<script src="<?= asset('admin/assets/vendor/libs/hammer/hammer.js') ?>"></script>
<script src="<?= asset('admin/assets/vendor/libs/i18n/i18n.js') ?>"></script>
<script src="<?= asset('admin/assets/vendor/libs/typeahead-js/typeahead.js') ?>"></script>
<script src="<?= asset('admin/assets/vendor/js/menu.js') ?>"></script>
<script src="<?= asset('admin/assets/vendor/libs/apex-charts/apexcharts.js') ?>"></script>
<script src="<?= asset('admin/assets/js/main.js') ?>"></script>
<script src="<?= asset('admin/assets/js/dashboards-analytics.js') ?>"></script>
<!-- Datatable -->
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>

<script>
    $(document).ready(function() {
        var table = $('#table').DataTable( {
            lengthChange: true,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
        } );

        table.buttons().container()
            .appendTo( '#table_wrapper .col-md-6:eq(0)' );
    } )
</script>