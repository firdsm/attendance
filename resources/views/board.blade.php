<!DOCTYPE html>
<html>
<!-- Mirrored from anydaynow.squareturtle.com/1.1.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Apr 2018 03:54:44 GMT -->
<head>
    <meta charset="UTF-8"/>
    <title>Attendance Today!!</title>
    <meta name="description" content="Bootstrap coming-soon template"/>
    <meta name="keywords" content="wrap bootstrap"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <!-- Scripts -->
    <!--[if lt IE 9]>
    <script src="scripts/html5.js"></script>
    <![endif]-->

    <!-- Styles -->
    <link href="/landpage/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/landpage/css/theme.css" rel="stylesheet" type="text/css"/>
    <link href="/landpage/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/landpage/css/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'/>

    <script type="text/javascript">
        var isOperaMini = (navigator.userAgent.indexOf('Opera Mini') > -1);
        if (isOperaMini) {
            document.write('<link href="css/theme-opera-mini.css" rel="stylesheet" type="text/css" />');
        }
    </script>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="top-padding">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-11 responsive-text-center">
                        <img class="hero-image" src="/landpage/img/hero-image.png" alt="Hero Image"/>
                    </div>
                </div>
            </div>
            <div class="col-md-2 hero-phone visible-xs-block visible-sm-block">
                <div class="row">
                    <div class="col-md-12 hero-title">
                        <h2>Guess what? We're,</h2>
                        <img src="/landpage/img/coming-soon.png" alt="Coming soon!"/>
                    </div>
                </div>
            </div>
            <div class="col-md-2 arrow down hidden-md hidden-lg">
                <div class="row">
                    <div class="col-md-12">
                        <img src="/landpage/img/arrow-down2.png" alt="Arrow down"/>
                    </div>
                </div>
            </div>
            <div class="col-md-2 arrow top hidden-xs hidden-sm">
                <div class="row arrow-top-padding">&nbsp;</div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="/landpage/img/arrow-top-right.png" alt="Top right arrow"/>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-offset-1 col-sm-10 box-border signup">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Kehadiran hari ini!</h2>
                        <p>Masukkan Nomor Register anda, sistem akan otomatis mencatat kehadiran anda hari ini.</p>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="control-group">
                                <label class="control-label" for="absenreg">Enter your Register Number here:</label>
                                <div class="controls">
                                    <div class="input-group">
                                        <input id="absenreg" class="form-control input-lg" type="text"
                                               placeholder="Your Register Number" name="signup">
                                        <span class="input-group-btn">
												<a id="absen" class="btn btn-lg magenta">Absen</a>
											</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row hidden-xs hidden-sm">&nbsp;</div>
        <div class="row hero-row hidden-xs hidden-sm">
            <div class="col-md-12 hero-title">
                <img src="/landpage/img/attendance-today.png" alt="Coming soon!"/>
            </div>
        </div>
        <div class="row hidden-xs hidden-sm">&nbsp;</div>
        <div class="row hidden-xs hidden-sm">&nbsp;</div>
        <div class="row visible-xs-block visible-sm-block arrow down">
            <div class="col-md-12">
                <img src="/landpage/img/arrow-down3.png" alt="Arrow down"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-offset-1 col-sm-10 box-border social">
                <div class="row">
                    <h2>Something Else?</h2>
                </div>
                <div class="row">&nbsp;</div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <a href="#" title="Absen kerja remote" class="social-icon remote"><i>&nbsp;</i></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <a href="#" title="Login ke Attendance Manage" class="social-icon login"><i>&nbsp;</i></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <a href="#" title="Hubungkan ke Github" class="social-icon github"><i>&nbsp;</i></a>
                    </div>
                </div>
                <div class="row">&nbsp;</div>
            </div>
            <div class="col-sm-12 arrow down visible-xs-block visible-sm-block">
                <div class="col-md-12">
                    <img src="/landpage/img/arrow-down4.png" alt="Arrow down"/>
                </div>
            </div>
            <div class="col-md-5 arrow hidden-xs hidden-sm">
                <div class="row">
                    <div class="col-md-5 arrow-left">
                        <img src="/landpage/img/arrow-bottom-left.png" alt="Left bottom arrow"/>
                    </div>
                    <div class="col-md-2">&nbsp;</div>
                    <div class="col-md-5 arrow-right">
                        <img src="/landpage/img/arrow-bottom-right.png" alt="Right bottom arrow"/>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-offset-1 col-sm-10 box-border company-info">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Saya izin hari ini!</h2>
                        <p>Silahkan masukkan nomor Register anda dan keterangan anda tidak masuk kerja. Apabila anda
                            sakit keterangan opsional.</p>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="control-group">
                                <label class="control-label" for="ijinreg">Enter your register number here:</label>
                                <div class="controls">
                                    <div class="input-group">
                                        <input id="ijinreg" class="form-control input-lg" type="text"
                                               placeholder="Your Register Number" name="ijinreg">
                                        <textarea id="ijindesc" class="form-control input-lg"
                                                  placeholder="Your Note"></textarea>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <a id="permit" class="btn btn-lg btn-warning">Izin</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a id="sick" class="btn btn-lg btn-danger">Sakit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script type="text/javascript" src="/landpage/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/landpage/js/sweetalert2.all.js"></script>
<script>
    $(document).ready(function () {
        console.log('ready');
        $('#absen').click(function () {
            console.log('Clicked');
            var absenreg = $('#absenreg').val();
            if (absenreg == "") {
                swal('ERROR', 'Register Number dibutuhkan', 'error');
                return false;
            } else {
                $.ajax({
                    url: '/employeeauth',
                    method: 'GET',
                    data: {
                        reg: $('#absenreg').val()
                    }
                }).done(function (data) {
                    console.log(data);
                    if (data == 1){
                        $.ajax({
                            url: '/attend',
                            method: 'POST',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: {
                                reg: $('#absenreg').val()
                            }
                        }).done(function (data) {
                            if (data == 'error'){
                                swal('ERROR', 'Maaf, terjadi kesalahan saat insert data', 'error');
                            } else if (data == 'masuk') {
                                swal('ABSENSI BERHASIL', 'Terima Kasih anda masuk kerja hari ini', 'success');
                            } else if (data == 'pulang') {
                                swal('PULAANG!!!', 'Terima Kasih telah bekerja hari ini', 'success');
                            } else if (data == 'ijin') {
                                swal('ERROR', 'Pengajuan ijin telah dilakukan sebelumnya', 'warning');
                            } else if (data == 'sakit') {
                                swal('ERROR', 'Pengajuan sakit telah dilakukan sebelumnya', 'warning');
                            } else if (data == 'remote') {
                                swal('ERROR', 'Absen remote telah dilakukan sebelumnya', 'warning');
                            } else {
                                swal('ERROR', data, 'info');
                            }
                        });
                    } else {
                        swal('ERROR', 'Nomor Register yang anda inputkan salah', 'error');
                    }
                });
            }
        });
        $('#permit').click(function () {
            console.log('Ijin');
            var ijinreg = $('#ijinreg').val();
            var ijindesc = $('#ijindesc').val();
            if (ijinreg == "" || ijindesc == "") {
                swal('ERROR', 'Field nomor register dan deskripsi harus diisi', 'error');
                return false;
            } else {
                $.ajax({
                    url: '/employeeauth',
                    method: 'GET',
                    data: {
                        reg: $('#ijinreg').val()
                    }
                }).done(function (data) {
                    console.log(data);
                    if (data == 1){
                        $.ajax({
                            url: '/permit',
                            method: 'POST',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: {
                                reg: $('#ijinreg').val(),
                                desc: $('#ijindesc').val()
                            }
                        }).done(function (data) {
                            if (data == 'sukses'){
                                swal('IJIN BERHASIL', 'Anda ijin untuk hari ini', 'success');
                            } else if (data == 'masuk') {
                                swal('ERROR', 'Anda telah absen kehadiran sebelumnya', 'warning');
                            } else if (data == 'ijin') {
                                swal('ERROR', 'Pengajuan ijin telah dilakukan sebelumnya', 'warning');
                            } else if (data == 'sakit') {
                                swal('ERROR', 'Pengajuan sakit telah dilakukan sebelumnya', 'warning');
                            } else if (data == 'remote') {
                                swal('ERROR', 'Absen remote telah dilakukan sebelumnya', 'warning');
                            } else {
                                swal('ERROR', data, 'info');
                            }
                        });
                    } else {
                        swal('ERROR', 'Nomor Register yang anda inputkan salah', 'error');
                    }
                });
            }
        });
        $('#sick').click(function () {
            console.log('Sakit');
            var sakitreg = $('#ijinreg').val();
            if (sakitreg == "") {
                swal('ERROR', 'Field nomor register harus diisi', 'error');
                return false;
            } else {
                swal('SAKIT', 'Ijin Sakit berhasil dilakukan', 'success');
            }
        });
    });
</script>

<!-- Mirrored from anydaynow.squareturtle.com/1.1.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Apr 2018 03:55:15 GMT -->
</html>