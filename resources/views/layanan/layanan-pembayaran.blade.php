@extends('layouts/master')
@section('content')
<style>
    @media (max-width: 1200px) {
        .btn-group-vertical {
            width: 100%;
        }
    }

    @media (min-width: 1210px) {
        .btn-group-vertical {
            width: 50%;
        }
    }
</style>
<section class="page-section" id="about" style="background-color: #fff;">
    <div class="container">
        <center>
            <div class="btn-group-vertical" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio1"><img style="width: 10%; float:left;" src="assets/img/portfolio/logo/logolayanan1.png" />Layanan Perbankan<i class="fas fa-angle-right" style="float: right;"></i></label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2"><img style="width: 10%; float:left;" src="assets/img/portfolio/logo/iconlayanan2.png" />Layanan Langsung<i class="fas fa-angle-right" style="float: right;"></i></label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio3"><img style="width: 10%; float:left;" src="assets/img/portfolio/logo/iconlayanan3.png" />Layanan Digital<i class="fas fa-angle-right" style="float: right;"></i></label>
            </div>
        </center>
    </div>
</section>