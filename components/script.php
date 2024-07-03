<!-- JAVASCRIPT -->
<script src="<?= get_assets() ?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= get_assets() ?>libs/metismenujs/metismenujs.min.js"></script>
<script src="<?= get_assets() ?>libs/simplebar/simplebar.min.js"></script>
<script src="<?= get_assets() ?>libs/feather-icons/feather.min.js"></script>


<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<!-- flatpicker for calendar -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<!-- DateRange Picker Library -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!-- loader container script -->
<script>
    $(document).ready(function() {
        const loaderContainer = document.querySelector('.loader-container');

        window.showLoader = function() {
            loaderContainer.style.display = 'flex'; // Show the loader container
        }

        window.hideLoader = function() {
            loaderContainer.style.display = 'none'; // Hide the loader container
        }
    });
</script>