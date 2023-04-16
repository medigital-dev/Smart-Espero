<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/select2/css/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/daterangepicker/daterangepicker.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/adminlte.min.css'); ?>">

    <style>
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark sticky-top">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <span class="brand-text font-weight-light"><i>sim</i>-<span class="font-weight-bold">Presensi</span></span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <form class="form-inline ml-auto">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Cari Peserta Didik" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-user-cog"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content pt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card shadow border-dark">
                                <div class="card-header font-weight-bold text-center">Input Absensi Peserta Didik</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Pilih Peserta Didik</label>
                                        <select class="custom-select select2">
                                            <option selected>Klik untuk memilih</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-row"> -->
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control float-right" id="reservation">
                                        </div>
                                    </div>
                                    <label>Jenis Absensi</label>
                                    <div class="form-group text-center">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Sakit</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline2">Izin</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="customRadioInline3" name="customRadioInline" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline3">Tugas Sekolah</label>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea class="form-control" rows="3" placeholder="Cantumkan alasan absensi"></textarea>
                                    </div>
                                    <label for="fileSurat">Surat Absensi</label>
                                    <div class="form-group custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="fileSurat">
                                        <label class="custom-file-label" for="fileSurat">Pilih foto</label>
                                    </div>
                                    <img src="#" alt="Preview" class="img-thumbnail mb-3 d-none" id="img-preview">
                                    <button type="button" class="btn btn-primary btn-block">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer text-center">
            &copy; 2023 Dibuat dan dikembangkan oleh <a href="https://muhsaidlg.my.id" target="_blank" class="text-decoration-none">Muhammad Said Latif Ghofari</a>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <script src="<?= base_url('plugins/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/moment/moment.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/select2/js/select2.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/daterangepicker/daterangepicker.js'); ?>"></script>

    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/js/adminlte.min.js'); ?>"></script>

    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
            $('#fileSurat').change(function() {
                var file = $(this)[0].files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    var dataURL = reader.result;
                    $('#img-preview').removeClass('d-none').attr('src', dataURL);
                };
                reader.readAsDataURL(file);
            });
            $('#reservation').daterangepicker();
            $('.select2').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
                closeOnSelect: !$(this).attr('multiple'),
            }).on('select2:open', function() {
                $('.select2-search__field').attr('placeholder', 'Cari Peserta Didik');
            });
        });
    </script>
</body>

</html>