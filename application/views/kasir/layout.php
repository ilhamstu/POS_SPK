<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/select2/dist/css/select2.min.css')?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/vendors/swal2/sweetalert2.min.css')?>">

    <!-- Font Awesome -->
    <link href="<?= base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella
                                Alela!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url('assets/build/images/img.jpg')?>" alt="..."
                                class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?= $this->session->userdata('nama')?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?= base_url('POS')?>"><i class="fa fa-desktop"></i> POS </span></a>
                                </li>
                                <li><a href="<?= base_url('data-barang')?>"><i class="fa fa-edit"></i> Data Barang
                                        </span></a></li>
                                <li><a href="<?= base_url('catatan-transaksi')?>"><i class=" fa fa-edit"></i> Catatan
                                        Transaksi </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('logout')?>">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url('assets/build/images/img.jpg')?>"
                                        alt=""><?= $this->session->userdata('nama')?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url('logout')?>"><i
                                            class="fa fa-sign-out pull-right"></i>
                                        Log Out</a>
                                </div>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="fd" data-fd="<?= ($this->session->flashdata('notif')); ?>"
                    data-nama="<?= $this->session->userdata('nama')?>"
                    data-lvl="<?= $this->session->userdata('level')?>"></div>
                <?= $contents;?>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/vendors/select2/dist/js/select2.min.js')?>"></script>
    <script src="<?= base_url('assets\vendors\swal2\sweetalert2.all.min.js')?>"></script>

    <!-- Bootstrap -->
    <script src="<?= base_url('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>

    <!-- FastClick -->
    <script src="<?= base_url('assets/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('assets/vendors/nprogress/nprogress.js')?>"></script>
    <!-- Chart.js -->
    <script src="<?= base_url('assets/vendors/Chart.js/dist/Chart.min.js')?>"></script>
    <!-- jQuery Sparklines -->
    <script src="<?= base_url('assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')?>"></script>
    <!-- Flot -->
    <script src="<?= base_url('assets/vendors/Flot/jquery.flot.js')?>"></script>
    <script src="<?= base_url('assets/vendors/Flot/jquery.flot.pie.js')?>"></script>
    <script src="<?= base_url('assets/vendors/Flot/jquery.flot.time.js')?>"></script>
    <script src="<?= base_url('assets/vendors/Flot/jquery.flot.stack.js')?>"></script>
    <script src="<?= base_url('assets/vendors/Flot/jquery.flot.resize.js')?>"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js')?>"></script>
    <script src="<?= base_url('assets/vendors/flot-spline/js/jquery.flot.spline.min.js')?>"></script>
    <script src="<?= base_url('assets/vendors/flot.curvedlines/curvedLines.js')?>"></script>
    <!-- DateJS -->
    <script src="<?= base_url('assets/vendors/DateJS/build/date.js')?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('assets/vendors/moment/min/moment.min.js')?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/build/js/custom.min.js')?>"></script>
    <script src="<?= base_url('assets/scriptku.js')?>"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#carbar').select2({
            allowClear: true,
        });
    });

    $(document).ready(function() {
        $(".add-more").click(function() {
            var html = $(".copy").html();
            $(".after-add-more").after(html);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click", ".remove", function() {
            $(this).parents(".control-group").remove();
        });
    });

    // memformat angka ribuan
    function formatAngka(angka) {
        if (typeof(angka) != 'string') angka = angka.toString();
        var reg = new RegExp('([0-9]+)([0-9]{3})');
        while (reg.test(angka)) angka = angka.replace(reg, '$1.$2');
        return angka;
    }

    // nilai total ditulis langsung, bisa dari hasil perhitungan lain
    var total = document.getElementById('subtotal').value,
        bayar = 0,
        kembali = 0;

    // masukkan angka total dari variabel
    $('#subtotal').val(formatAngka(total));

    // tambah event keypress untuk input bayar
    $('#totbay').on('keypress', function(e) {
        var c = e.keyCode || e.charCode;
        switch (c) {
            case 8:
            case 9:
            case 27:
            case 13:
                return;
            case 65:
                if (e.ctrlKey === true) return;
        }
        if (c < 48 || c > 57) e.preventDefault();
    }).on('keyup', function() {
        var inp = $(this).val().replace(/\./g, '');

        // set nilai ke variabel bayar
        bayar = new Number(inp);
        $(this).val(formatAngka(inp));

        // set kembalian, validasi
        kembali = bayar - total;
        $('#kembalian').val(formatAngka(kembali));
    });

    // function sum() {
    // 	var txtFirstNumberValue = document.getElementById('totbay').val(formatAngaka());
    // 	var txtSecondNumberValue = document.getElementById('subtotal').value;
    // 	var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
    // 	if (!isNaN(result)) {
    // 		document.getElementById('kembalian').value = result;
    // 	}
    // }
    </script>

</body>

</html>