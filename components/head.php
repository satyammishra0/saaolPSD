<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />

<!-- App favicon -->
<link rel="shortcut icon" href="<?= get_assets() ?>images/favicon-2.ico">
<!-- Bootstrap Css -->
<link href="<?= get_assets() ?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="<?= get_assets() ?>css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="<?= get_assets() ?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<!--Datatable -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css">

<!-- flatpicker for calendar-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Date Range Picker CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<style>
    table.dataTable thead th,
    table.dataTable thead td {
        padding: 10px 12px;
    }


    .loader-container {
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(0 0 0 / 70%);
        display: none;
        justify-content: center;
        align-items: center;
    }

    .loader {
        width: 40px;
        height: 40px;
        --c: no-repeat linear-gradient(#3980c0 0 0);
        background: var(--c), var(--c), var(--c), var(--c);
        background-size: 21px 21px;
        animation: l5 1.5s infinite cubic-bezier(0.3, 1, 0, 1);
    }

    @keyframes l5 {
        0% {
            background-position: 0 0, 100% 0, 100% 100%, 0 100%
        }

        33% {
            background-position: 0 0, 100% 0, 100% 100%, 0 100%;
            width: 60px;
            height: 60px
        }

        66% {
            background-position: 100% 0, 100% 100%, 0 100%, 0 0;
            width: 60px;
            height: 60px
        }

        100% {
            background-position: 100% 0, 100% 100%, 0 100%, 0 0
        }
    }
</style>