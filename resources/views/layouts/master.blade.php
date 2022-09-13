<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Baznas Surakarta</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/public/assets/img/portfolio/logo/logo3.png" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <!--Pihak Ke 3-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    {{-- Style --}}
    <link href="{{ asset('css/basnaz.css') }}" rel="stylesheet">
    <!--Chart-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" id="mainNav" style="color: white; border-bottom: #01502D; border-style: solid;">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 50%;" src="{{ asset('assets/img/portfolio/logo/logo3.png') }}" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav my-2 col-lg-12">
                    <li class="nav-item"><a class="nav-link text-dark" href="/">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarOrganisasi" data-bs-toggle="dropdown" aria-expanded="false">Tentang Kami</a>
                        <ul class="dropdown-menu bounce" aria-labelledby="navbarOrganisasi" id="subOrganisasi">
                            <li><a class="dropdown-item" href="/legalitas">Legalitas</a></li>
                            <li><a class="dropdown-item" href="/visi-misi">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="/organisasi">Latar Belakang</a></li>
                            <li><a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="/sejarah-organisasi">Sejarah</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">Program</a>
                        <ul class="dropdown-menu bounce" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('program-kemanusiaan') }}">Kemanusiaan</a></li>
                            <li><a class="dropdown-item" href="{{ url('program-pendidikan') }}">Pendidikan</a></li>
                            <li><a class="dropdown-item" href="{{ url('program-kesehatan') }}">Kesehatan</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ url('program-advokasi-dakwah') }}">Advokasi & Dakwah</a></li>
                            <li><a class="dropdown-item" href="{{ url('program-ekonomi-produktif') }}">Ekonomi Produktif</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarLayanan" data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                        <ul class="dropdown-menu bounce" aria-labelledby="navbarLayanan">
                            <li><a class="dropdown-item" href="/rekening">Rekening Zakat</a></li>
                            <li><a class="dropdown-item" href="/layanan-pembayaran">Layanan Pembayaran</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarKabar" data-bs-toggle="dropdown" aria-expanded="false">Kabar</a>
                        <ul class="dropdown-menu bounce" aria-labelledby="navbarKabar">
                            <li><a class="dropdown-item" href="{{ url('kabar-zakat') }}">Kabar Zakat</a></li>
                            <li><a class="dropdown-item" href="{{ url('artikel') }}">Artikel</a></li>
                            <li><a class="dropdown-item" href="{{ url('inspirasi') }}">Inspirasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/hubungi-kami">Hubungi</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/zakat"><button class=" btn btn-primary" style="border-radius: 10px; width:9em">
                                <i class="fas fa-wallet"></i> Bayar Zakat</button>
                        </a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-dark" id="navbarKabar" data-bs-toggle="dropdown" aria-expanded="false">Pilih Bahasa</a>
                        <ul class="dropdown-menu bounce" aria-labelledby="navbarKabar">
                            <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/img/ina.png') }}" class="border-0 border-circle" style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;" alt="">ID</a></li>
                            <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/img/arab.png') }}" class="border-0 border-circle" style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;" alt="">Arab</a></li>
                            <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/img/en.png') }}" class="border-0 border-circle" style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;" alt="">EN</a></li>
                            <li><a class="dropdown-item" href="#"><img src="{{ asset('assets/img/chin.png') }}" class="border-0 border-circle" style="max-width: 20px; max-height: 20px; margin-right: 4%; margin-bottom: 2%;" alt="">CHI</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!--Content-->
</body>
<!-- Footer-->
<footer class="footer-clean main-footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-sm-6 col-md-5 item mt-2" style="padding-right: 5%;">
                <ul>
                    <li class="mt-3">
                        <p class="heading-left">Alamat Kantor :</p>
                        <p class="content-left">
                            Jl. Dr. Moewardi, Kel. Penumping, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141
                        </p>
                    </li>
                    <li class="mt-3">
                        <p class="heading-left">Telepon :</p>
                        <p class="content-left">
                            <a href="https://wa.me/681393055550" target="_blank">
                                <ion-icon name="logo-whatsapp"></ion-icon>&nbsp 081393055550
                            </a>
                        </p>
                    </li>
                    <li class="mt-3">
                        <p class="heading-left">Email :</p>
                        <p class="content-left">
                            <a href="mailto:baznaskota.surakarta@baznas.go.id" target="_blank">
                                <ion-icon name="mail-outline"></ion-icon>&nbsp baznaskota.surakarta@baznas.go.id
                            </a>
                        </p>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-3 col-sm-3 col-lg-3 col-md-3">
                        <img src="{{asset('assets/img/portfolio/logo/logo3.png')}}" class="imagefooter" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-lg-3 col-md-3">
                        <img src="{{asset('assets/img/uns.png')}}" class="imagefooter" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-lg-3 col-md-3">
                        <img src="{{asset('assets/img/logo-sv.png')}}" class="imagefooter" alt="">
                    </div>
                    <div class="col-3 col-sm-3 col-lg-3 col-md-3">
                        <img src="{{asset('assets/img/solo2.png')}}" class="imagefooter" alt="">
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 item-menu mt-2">
                <ul>
                    <li class="mt-2">
                        <div class="form-check form-check-inline">
                            <input style="background-color: white;" checked class="form-check-input bg-secondary border-0" type="checkbox" id="inlineCheckbox1" value="option1" />
                            <label class="form-check-label" for="inlineCheckbox1">Kebijakan Privasi</label>
                        </div>
                    </li>
                    <li class="mt-2">
                        <div class="form-check form-check-inline">
                            <input style="background-color: white;" checked class="form-check-input bg-secondary border-0" type="checkbox" id="inlineCheckbox1" value="option1" />
                            <label class="form-check-label" for="inlineCheckbox1">Syarat & Ketentuan</label>
                        </div>
                    </li>
                    <li class="mt-2">
                        <div class="form-check form-check-inline">
                            <input style="background-color: white;" checked class="form-check-input bg-secondary border-0" type="checkbox" id="inlineCheckbox1" value="option1" />
                            <label class="form-check-label" for="inlineCheckbox1">FAQ</label>
                        </div>
                    </li>
                </ul>
                <p class="heading-center">IKUTI KAMI DI :</p>
                <ul>
                    <li class="mt-2">
                        <p class="content-left">
                            <a href="https://www.facebook.com/baznaskotasurakarta" target="_blank">
                                <ion-icon name="logo-facebook"></ion-icon>&nbsp baznaskotasurakarta
                            </a>
                        </p>
                    </li>
                    <li class="mt-2">
                        <p class="content-left">
                            <a href="https://www.instagram.com/baznaskota.surakarta/" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>&nbsp baznaskota.surakarta
                            </a>
                        </p>
                    </li>
                    <li class="mt-2">
                        <p class="content-left">
                            <a href="https://twitter.com/BaznaskotaS" target="_blank">
                                <ion-icon name="logo-twitter"></ion-icon>&nbsp @BaznaskotaS
                            </a>
                        </p>
                    </li>
                    <li class="mt-2">
                        <p class="content-left">
                            <a href="https://www.youtube.com/channel/UChgLCY6zG-hdIWVupT9apVg" target="_blank">
                                <ion-icon name="logo-youtube"></ion-icon>&nbsp BAZNAS Kota Surakarta
                            </a>
                        </p>
                    </li>
                    <li class="mt-2">

                    </li>
                </ul>
            </div>
            <div class="col-md-4 mt-2 pb-2">
                <!-- <iframe width="516" height="389" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=-7.562494,110.806940&hl=id&z=14&amp;output=embed">
                </iframe> -->
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="516" height="389" id="gmap_canvas" src="https://maps.google.com/maps?q=-7.562494,110.806940&hl=id&z=16&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://maps.google.com/maps?q=-7.562494,110.806940&hl=id&z=16&amp;output=embed"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: center;
                                height: 400px;
                                width: auto;
                            }
                        </style><a href="https://www.embedgooglemap.net">Lokasi Kantor Baznas Surakarta</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 400px;
                                width: auto;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="end-copyright container-fluid">
        <center>
            <p class="copyright text-white">
                Copyright © 2022 Baznas Surakarta. All Rights Reserved
            </p>
        </center>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/zakat.js') }}"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script>
    var alert = '';

    function resetErrors() {
        $('#showErrors').empty();
        alert = '';
    }

    // Zakat Fitrah
    $(document).ready(function() {
        $(document).on('click', '#hitungFitrah', function() {
            var price = $('#priceFitrah').val().replace(/[^0-9]/g, '');
            var weight = 2.5;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/index-fitrah') }}",
                method: 'POST',
                data: {
                    price: price,
                    weight: weight,
                },
                success: function(response) {
                    resetErrors()
                    if (response.errors) {
                        for (let i = 0; i < response.errors.length; i++) {
                            alert +=
                                '<div class="alert alert-warning fade show mt-3" role="alert">' +
                                response.errors[i] + '</div>'
                        }
                        $('#showErrors').html(alert);
                        // alert(response.errors);
                    } else {
                        $('#resultFitrah').val(response);
                    }
                }
            })
        });
    });

    // Zakat Maal
    $(document).ready(function() {
        $(document).on('click', '#hitungMaal', function() {
            var gajiPokok = $('#gajiPokok').val().replace(/[^0-9]/g, '');
            var tunjangan = $('#tunjangan').val().replace(/[^0-9]/g, '');
            var hutang = $('#hutang').val().replace(/[^0-9]/g, '');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/index-maal') }}",
                method: 'POST',
                data: {
                    gajiPokok: gajiPokok,
                    tunjangan: tunjangan,
                    hutang: hutang,
                },
                success: function(response) {
                    resetErrors()
                    if (response.errors) {
                        for (let i = 0; i < response.errors.length; i++) {
                            alert +=
                                '<div class="alert alert-warning fade show mt-3" role="alert">' +
                                response.errors[i] + '</div>'
                        }
                        $('#showErrors').html(alert);
                        // alert(response.errors);
                    } else {
                        $('#resultFitrah').val(response);
                    }
                }
            })
        });
    });

    // Zakat Fidyah
    $(document).ready(function() {
        $(document).on('click', '#hitungFidyah', function() {
            var day = $('#day').val()
            var soul = $('#soul').val()
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/index-fidyah') }}",
                method: 'POST',
                data: {
                    hari: day,
                    jiwa: soul,
                },
                success: function(response) {
                    resetErrors()
                    if (response.errors) {
                        for (let i = 0; i < response.errors.length; i++) {
                            alert +=
                                '<div class="alert alert-warning fade show mt-3" role="alert">' +
                                response.errors[i] + '</div>'
                        }
                        $('#showErrors').html(alert);
                    } else {
                        $('#resultFitrah').val(response);
                    }
                }
            })
        });
    });

    // Qurban
    $(document).ready(function() {
        $(document).on('click', '#hitungQurban', function() {
            var qurban = $('#qurban').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/index-qurban') }}",
                method: 'POST',
                data: {
                    jenisQurban: qurban,
                },
                success: function(response) {
                    resetErrors()
                    if (response.errors) {
                        for (let i = 0; i < response.errors.length; i++) {
                            alert +=
                                '<div class="alert alert-warning fade show mt-3" role="alert">' +
                                response.errors[i] + '</div>'
                        }
                        $('#showErrors').html(alert);
                    } else {
                        $('#resultFitrah').val(response);
                    }
                }
            })
        });
    });
    // Infaq
    $(document).ready(function() {
        $(document).on('click', '#hitungInfaq', function() {
            var gaji = $('#gaji').val().replace(/[^0-9]/g, '');
            var tunjangan = $('#tunjangan').val().replace(/[^0-9]/g, '');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/index-infaq') }}",
                method: 'POST',
                data: {
                    gaji: gaji,
                    tunjangan: tunjangan,
                },
                success: function(response) {
                    resetErrors()
                    if (response.errors) {
                        for (let i = 0; i < response.errors.length; i++) {
                            alert +=
                                '<div class="alert alert-warning fade show mt-3" role="alert">' +
                                response.errors[i] + '</div>'
                        }
                        $('#showErrors').html(alert);
                    } else {
                        $('#resultFitrah').val(response);
                    }
                }
            })
        });
    });
    // Penghasilan
    $(document).ready(function() {
        $(document).on('click', '#hitungPenghasilan', function() {
            var gaji = $('#gaji').val().replace(/[^0-9]/g, '');
            var tunjangan = $('#tunjangan').val().replace(/[^0-9]/g, '');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/index-penghasilan') }}",
                method: 'POST',
                data: {
                    gaji: gaji,
                    tunjangan: tunjangan,
                },
                success: function(response) {
                    resetErrors()
                    if (response.errors) {
                        for (let i = 0; i < response.errors.length; i++) {
                            alert +=
                                '<div class="alert alert-warning fade show mt-3" role="alert">' +
                                response.errors[i] + '</div>'
                        }
                        $('#showErrors').html(alert);
                    } else {
                        if (response['status'] == true) {
                            $('#resultFitrah').val(response);
                        } else {
                            $('#resultFitrah').val(0);
                            $('#resultPesan').attr('style', 'display:true');
                            $('#resultPesan').html("Anda belum wajib zakat karena belum memenuhi Nishab sebesar Rp. " + response['nishab']);
                        }
                    }
                }
            })
        });
    });
</script>
@if (!empty($fitrah) && !empty($infaq) && !empty($sedekah) && !empty($fidyah))
<script>
    // var xValues = ["Zakat Fitrah", "Infaq", "Sedekah", "Fidyah"];
    // var yValues = [{!!$fitrah!!}, {!!$infaq!!}, {!!$sedekah!!}, {!!$fidyah!!}];
    // var barColors = ["#01502D", "#FF9900", "#C4C4C4", "#2E3192", "#2E3192"];
    var xValues = [ "Infaq", "Sedekah"];
    var yValues = [ {!!$infaq!!}, {!!$sedekah!!}];
    var barColors = [ "#FF9900", "#C4C4C4", "#2E3192"];
    new Chart("myChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
                label: xValues,
                backgroundColor: barColors,
                data: yValues
            }],
        },
        options: {
            maintainAspectRatio: 2,
            responsive: true,
            title: {
                fontSize: 18,
                display: true,
                text: "Laporan Data"
            },
            tooltips: {
                callbacks: {
                    label: function(t, d) {
                        var xLabel = d.labels[t.index];
                        var yLabel = d.datasets[t.datasetIndex].data[t.index] >= 1000 ? 'Rp. ' + d.datasets[t.datasetIndex].data[t.index].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") : 'Rp. ' + d.datasets[t.datasetIndex].data[t.index];
                        return xLabel + ': ' + yLabel;
                    },
                },
            },
        }
    })
</script>
<script type="text/javascript">
    // Fitrah
    $(document).on('keyup', '#priceFitrah', function() {
        console.log("Masuk sini")
        rupiah = $('#priceFitrah').val();
        $('#priceFitrah').val(formatRupiah(rupiah, '.', '.'));
    });
    // Maal
    $(document).on('keyup', '#gajiPokok', function() {
        rupiah = $('#gajiPokok').val();
        $('#gajiPokok').val(formatRupiah(rupiah, '.', '.'));
    });
    $(document).on('keyup', '#tunjangan', function() {
        rupiah = $('#tunjangan').val();
        $('#tunjangan').val(formatRupiah(rupiah, '.', '.'));
    });
    $(document).on('keyup', '#hutang', function() {
        rupiah = $('#hutang').val();
        $('#hutang').val(formatRupiah(rupiah, '.', '.'));
    });
    // Infaq
    $(document).on('keyup', '#gaji', function() {
        rupiah = $('#gaji').val();
        $('#gaji').val(formatRupiah(rupiah, '.', '.'));
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
    }
</script>
@endif

</html>