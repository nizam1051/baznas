@extends('layouts/master')
@section('content')
<!--Hero Section-->
<header class="masthead">
    <div class="container-fluid hero-section" style="width: 100%;height: 350px;">
        <div class="heading">
            HUBUNGI KAMI
            <hr id="hr-hero">
        </div>
    </div>
</header>
<!--Form-->
<section class="page-section p-0" id="about">
    <div class="container-fluid" style="padding-top: 6%;;">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ $error }}
            </div>
        </div>
        @endforeach
        @endif
        @if (session('status'))
        <div class="alert alert-info alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ session('status') }}
            </div>
        </div>
        @endif
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0 mb-4">Kirim Pesan Anda</h2>
                <hr class="divider">
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                {{-- <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{ url('hubungi-kami') }}"
                method="POST" enctype="multipart/form-data"> --}}
                <form action="{{ url('hubungi-kami') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label class="text-muted" for="name">Nama Lengkap</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Nama diperlukan.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" />
                        <label class="text-muted" for="email">Alamat Email</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Alamat email diperlukan</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-group mb-3">
                        <select class="form-select" name="kategori">
                            <option selected>Pilih Kategori</option>
                            <option value="Aduan">Aduan</option>
                            <option value="Saran">Saran</option>
                            <option value="Kritik">Kritik</option>
                        </select>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-select" id="message" type="text" name="message" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label class="text-muted" for="message">Pesan</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <center>
                        <button class="btn btn-success rounded-pill text-white px-5" id="submitButton" style="background-color: #01502D;" type="submit">Submit</button>
                    </center>
                </form>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-4 text-center mb-5 mb-lg-0">
                <a href="https://wa.me/6281393055550"><i class="bi-phone fs-2 mb-3 text-muted"></i></a>
                <div><a href="https://wa.me/6281393055550">0813-9305-5550</a></div>
            </div>
        </div>
    </div>
    <div class="container-fluid image-bottom p-0 mt-3">
        <img src="assets/img/backgroundbawah.png" style="width: 100%; height: auto;" alt="">
    </div>
</section>