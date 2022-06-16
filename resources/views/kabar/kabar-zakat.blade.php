@extends('layouts/master')
@section('content')
<!--Hero Section-->
<header class="masthead">
    <div class="container-fluid hero-section" style="width: 100%;height: 350px;">
        <div class="heading">
            KABAR ZAKAT
            <hr id="hr-hero">
        </div>
    </div>
</header>
<!--Content-->
<section style="padding-top: 10%; padding-bottom:5%;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-lg-4 mb-4">
                <div class="card" style="border-radius: 15px;">
                    <img src="assets/img/baznas.jpeg" class="card-img-top" alt="" style="background-color: #FF9900; border-top-left-radius: 15px; border-top-right-radius: 15px; height: 250px;">
                    <div class="card-body" style="background-color: #E5E5E5; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; ">
                        <h5 class="card-title">Baznas Surakarta</h5>
                        <p class="card-text bg-transparent">
                            Baznas adalah Badan Amil Zakat Nasional yang dibentuk di kota Surakarta.</p>
                    </div>
                </div>
                <a href="#" class="btn mt-3 text-white" style="width: 50%; font-size:clamp(10px, 1vw, 18px); background-color:#2E3192">Selengkapnya</a>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4 mb-4">
                <div class="card" style="border-radius: 15px;">
                    <img src="assets/img/zakat.jpg" class="card-img-top" alt="" style="background-color: #FF9900; border-top-left-radius: 15px; border-top-right-radius: 15px; height: 250px;">
                    <div class="card-body" style="background-color: #E5E5E5; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; ">
                        <h5 class="card-title">Kegiatan Zakat</h5>
                        <p class="card-text bg-transparent">
                        Potret kegiatan Baznas Surakarta dalam hal zakat bersama masyarakat</p>
                    </div>
                </div>
                <a href="#" class="btn mt-3 text-white" style="width: 50%; font-size:clamp(10px, 1vw, 18px); background-color:#2E3192">Selengkapnya</a>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4 mb-4">
                <div class="card" style="border-radius: 15px;">
                    <img src="assets/img/infaq.jpg" class="card-img-top" alt="" style="background-color: #FF9900; border-top-left-radius: 15px; border-top-right-radius: 15px; height: 250px;">
                    <div class="card-body" style="background-color: #E5E5E5; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; ">
                        <h5 class="card-title">Bayar Infaq</h5>
                        <p class="card-text bg-transparent">
                        Pembayaran infaq yang dilakukan bersama Baznas Surakarta</p>
                    </div>
                </div>
                <a href="#" class="btn mt-3 text-white" style="width: 50%; font-size:clamp(10px, 1vw, 18px); background-color:#2E3192">Selengkapnya</a>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4 mb-4">
                <div class="card" style="border-radius: 15px;">
                    <img src="assets/img/baznas.jpeg" class="card-img-top" alt="" style="background-color: #FF9900; border-top-left-radius: 15px; border-top-right-radius: 15px; height: 250px;">
                    <div class="card-body" style="background-color: #E5E5E5; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; ">
                        <h5 class="card-title">Baznas Surakarta</h5>
                        <p class="card-text bg-transparent">
                            Baznas adalah Badan Amil Zakat Nasional yang dibentuk di kota Surakarta.</p>
                    </div>
                </div>
                <a href="#" class="btn mt-3 text-white" style="width: 50%; font-size:clamp(10px, 1vw, 18px); background-color:#2E3192">Selengkapnya</a>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4 mb-4">
                <div class="card" style="border-radius: 15px;">
                    <img src="assets/img/zakat.jpg" class="card-img-top" alt="" style="background-color: #FF9900; border-top-left-radius: 15px; border-top-right-radius: 15px; height: 250px;">
                    <div class="card-body" style="background-color: #E5E5E5; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; ">
                        <h5 class="card-title">Kegiatan Zakat</h5>
                        <p class="card-text bg-transparent">
                        Potret kegiatan Baznas Surakarta dalam hal zakat bersama masyarakat</p>
                    </div>
                </div>
                <a href="#" class="btn mt-3 text-white" style="width: 50%; font-size:clamp(10px, 1vw, 18px); background-color:#2E3192">Selengkapnya</a>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4 mb-4">
                <div class="card" style="border-radius: 15px;">
                    <img src="assets/img/infaq.jpg" class="card-img-top" alt="" style="background-color: #FF9900; border-top-left-radius: 15px; border-top-right-radius: 15px; height: 250px;">
                    <div class="card-body" style="background-color: #E5E5E5; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; ">
                        <h5 class="card-title">Bayar Infaq</h5>
                        <p class="card-text bg-transparent">
                        Pembayaran infaq yang dilakukan bersama Baznas Surakarta</p>
                    </div>
                </div>
                <a href="#" class="btn mt-3 text-white" style="width: 50%; font-size:clamp(10px, 1vw, 18px); background-color:#2E3192">Selengkapnya</a>
            </div>
        </div>
        <nav aria-label="..." style="margin-top: 10%;">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link text-white" href="#" tabindex="-1" aria-disabled="true" style="background-color: #01502D;">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item disabled" aria-current="page">
                    <a class="page-link" href="#" style="color:#01502D">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>